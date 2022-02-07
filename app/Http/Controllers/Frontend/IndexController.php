<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Banner;
use App\Models\BCategory;
use App\Models\BioWell;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\BrainTape;
use App\Models\Brand;
use App\Models\BTag;
use App\Models\BusinessModel;
use App\Models\Category;
use App\Models\Display;
use App\Models\Donate;
use App\Models\FAQ;
use App\Models\Gallery;
use App\Models\Media;
use App\Models\History;
use App\Models\HomeTech;
use App\Models\HomeTechCat;
use App\Models\Industry;
use App\Models\MentalIllness;
use App\Models\OurAffilation;
use App\Models\NewsEvent;
use App\Models\Order;
use App\Models\Product;
use App\Models\Resume;
use App\Models\OurConcern;
use App\Models\OurGoal;
use App\Models\Rules;
use App\Models\Sectiontitle;
use App\Models\Staff;
use App\Models\SuccessStory;
use App\Models\Technology;
use App\Models\Testimonial;
use App\Models\Vacancy;
use App\Models\VacancyApplication;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Sagautam5\LocalStateNepal\Entities\District;
use Sagautam5\LocalStateNepal\Entities\Municipality;
use Sagautam5\LocalStateNepal\Entities\Province;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

class IndexController extends Controller
{
    public function home(){
        $blogs=Blog::orderBy('id','DESC')->limit(5)->get();
        $concern=OurConcern::get();
         $affilation=OurAffilation::get();
        $goals=OurGoal::get();
        $news=NewsEvent::where('news',1)->get();
        $events=NewsEvent::where('news',0)->get();
        $rules=Rules::get();
        $testimonials=Testimonial::orderBy('id','DESC')->get();
        $banners=Banner::where(['status'=>'active','type'=>'home'])->orderBy('id','DESC')->get();
        return view('frontend.index',compact([
               'banners','blogs','testimonials','goals','concern','affilation','news','rules','events'
            ]));
    }

    public function ourTeam(){
        $teams=Staff::where('status','active')->orderBy('full_name','ASC')->get();
        return view('frontend.pages.aboutus.management_team',compact('teams'));
    }




    //careers
    public function career(){
        $vacancies=Vacancy::latest()->get();
        return view('frontend.pages.career',compact('vacancies'));
    }


    //history
    public function history(){
        return view('frontend.pages.aboutus.history');
    }
    //office
    public function office(){
        return view('frontend.pages.office');
    }


    //pressrelease
    public function pressRelease(){
        $pressrelease=OurGoal::orderBy('id','DESC')->get();
        return view('frontend.pages.press_release',compact('pressrelease'));
    }

    public function press_release($slug){
        $press=OurGoal::where('slug',$slug)->first();
        if(!$press)
        {
            abort(404);
        }
        return view('frontend.pages.press', compact('press'));
    }

    public function newsDetail($slug){
        $news=NewsEvent::where('slug', $slug)->first();
        return view('frontend.pages.newsdetail',compact('news'));
    }

    //vacancy application
    public function vacancyApplication(Request $request){
        $this->validate($request,[
            'name'=>'string|required',
            'dob'=>'date|nullable',
            'address'=>'string|required',
            'education'=>'string|required',
            'is_completed'=>'in:completed,running',
            'gender'=>'in:male,female',
            'institution'=>'string|nullable',
            'email'=>'required|email',
            'message'=>'nullable|min:10|max:1000|string',
        ]);
        $data=$request->all();
        $status=VacancyApplication::create($data);

        if($status){
            \toastr()->success('Successfully applied');
            return back();
        }
        else{
            \toastr()->error('Something went wrong');
            return back();
        }
    }

    //upload resume
    public function uploadResume(Request $request){
        $this->validate($request,[
            'name'=>'string|required',
            'dob'=>'date|nullable',
            'address'=>'string|required',
            'education'=>'string|required',
            'is_completed'=>'in:completed,running',
            'gender'=>'in:male,female',
            'institution'=>'string|nullable',
            'email'=>'required|email',
            'attachment'=>"required|mimes:pdf,docx,jpg,jpeg,png|max:30000",
            'message'=>'nullable|min:10|max:1000|string',
        ]);
        $data=$request->all();

        if($request->hasFile('attachment')){
            if($file=$request->file('attachment')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/cv/', $imageName);
                $data['attachment']='storage/backend/assets/images/cv/'.$imageName;
            }
        }

        $status=Resume::create($data);

        if($status){
            \toastr()->success('Successfully uploaded!');
            return back();
        }
        else{
            \toastr()->error('Something went wrong');
            return back();
        }
    }


    //donate us
    public function donateUs(){
        return view('frontend.pages.donate');
    }

    public function donateSubmit(Request $request){
        $this->validate($request,[
            'gift_type'=>'string|required',
            'gift_amount'=>'numeric|nullable',
            'additional_amount'=>'numeric|nullable',
            'first_name'=>'string|required',
            'last_name'=>'string|required',
            'email'=>'email|required',
            'phone'=>'min:8',
            'message'=>'string|nullable',
            'donate_type'=>'in:honour,memory|nullable',
            'tribute_person'=>'string|nullable',
            'tribute_message'=>'string|nullable',
        ]);
        $data=$request->all();
        $status=Donate::create($data);
        if($status){
            \toastr()->success('Successfully donated!');
            return back();
        }
        else{
            \toastr()->error('Something went wrong');
            return back();
        }
    }

    public function successStory(Request $request){
        $success=SuccessStory::get();
        $more_success=SuccessStory::take(8)->skip(4);
        return view('frontend.pages.aboutus.success-story',compact('success','more_success'));
    }

    public function successStoryDetail($id){
        $success=SuccessStory::find($id);
        if($success){
            return view('frontend.pages.aboutus.success-story-detail',compact('success'));
        }
        abort(404);
    }


    //gallery
    public function photoGallery(){
        $photo=Gallery::where('gallery_type','photo')->orderBy('id','DESC')->get();
        return view('frontend.pages.gallery.photo',compact('photo'));
    }

    public function videoGallery(){
        $video=Gallery::where('gallery_type','video')->orderBy('id','DESC')->get();
        return view('frontend.pages.gallery.video',compact('video'));
    }

    public function photoDetail($slug){
        $gallery = Gallery::where('slug',$slug)->first();
        $media = Media::where(['gallery_id'=>$gallery->id, 'publish'=>1])->get();
        
        return view('frontend.pages.gallery.photo_detail',compact('media'));
    }

    //Admission
    public function admission(){
        return view('frontend.pages.admission');
    }

   public function newsEvent(){
        $news=NewsEvent::orderBy('id','DESC')->get();
        $pressreleases = OurGoal::orderBy('id','DESC')->get();
        return view('frontend.pages.news_event',compact('news','pressreleases'));
   }

   public function curriculum(){
        return view('frontend.pages.curriculum');
   }


    //faq

    public function faq(){
        $faq=FAQ::get();
        return view('frontend.pages.faq',compact('faq'));
    }


    //  contact page
    public function contactUs(){
        $address=Address::latest()->get();
        return view('frontend.pages.contact',compact('address'));
    }

    //  about page
    public function aboutUs(){
        $about=Sectiontitle::first();
        return view('frontend.pages.aboutus.about',compact('about'));
    }

    public function messagePrinciple(){
        $data=Sectiontitle::first();
        return view('frontend.pages.aboutus.message_principle',compact('data'));
    }

    public function messageChairman(){
        $data=Sectiontitle::first();
        return view('frontend.pages.aboutus.message_chairman',compact('data'));
    }

    //why samata
    public function whySamata(){
        return view('frontend.pages.aboutus.why_samata');
    }

    // testimonial page

    public function testimonial(){
        $section_title=Sectiontitle::first();
        $banner=Banner::where(['status'=>'active','type'=>'testimonial'])->orderBy('id','DESC')->first();
        $testimonials=Testimonial::where('status','active')->orderBy('id','DESC')->get();
        return view('frontend.pages.testimonial',compact('testimonials','banner','section_title'));
    }

    public function getLocation(Request $request){
        $address=Address::where('location',$request->location)->get();
        $address_render=view('frontend.layouts._address',compact('address'))->render();
        if($address){
            $response['address_render']=$address_render;
            $response['data']=$address;
            $response['status']=true;
            return $response;
        }
        else{
            return response()->json(['data'=>null,'status'=>false]);
        }
    }


    //blogs
    public function blogs(){
        $banner=Banner::where(['status'=>'active','type'=>'blog'])->orderBy('id','DESC')->first();
        $blogs=Blog::where('status','active')->orderBy('id','DESC')->paginate(9);
        return view('frontend.pages.blog.list',compact('blogs','banner'));
    }

    public function blogsDetail(Request $request,$slug){
        $banner=Banner::where(['status'=>'active','type'=>'blog'])->orderBy('id','DESC')->first();

        $blog=Blog::where(['status'=>'active','slug'=>$slug])->first();

        $related_blog_id=BlogCategory::where('bcategory_id',$blog->blog_categories[0]['id'])->pluck('blog_id');

        $related_blogs=Blog::where(['status'=>'active'])->find($related_blog_id);

        $blog_categories=BCategory::where('status','active')->orderBy('title','ASC')->get();
        $blog_tags=BTag::where('status','active')->orderBy('title','ASC')->get();
        $recent_blogs=Blog::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        if($blog){
            return view('frontend.pages.blog.single',compact('blog','related_blogs','blog_categories','blog_tags','recent_blogs','banner'));
        }
        abort(404);
    }

    //blogByCategory
    public function blogCategory($cat_id){
        $categories=BCategory::where('status','active')->limit(6)->orderBy('id','DESC')->get();
        $banner=Banner::where(['status'=>'active','type'=>'blog'])->orderBy('id','DESC')->first();

        $related_blog_id=BlogCategory::where('bcategory_id',$cat_id)->pluck('blog_id');
        $blogs=Blog::where('status','active')->whereIn('id',$related_blog_id)->orderBy('id','DESC')->paginate(9);
        return view('frontend.pages.blog.list',compact('categories','blogs','banner'))->with('cat_id',$cat_id);
    }

    public function blogTag($id,$cat_id=null){
        $categories=BCategory::where('status','active')->limit(6)->orderBy('id','DESC')->get();
        $banner=Banner::where(['status'=>'active','type'=>'blog'])->orderBy('id','DESC')->first();

        $related_tag_id=BlogTag::where('tag_id',$id)->pluck('blog_id');
        $blogs=Blog::where('status','active')->whereIn('id',$related_tag_id)->orderBy('id','DESC')->paginate(9);
        return view('frontend.pages.blog.list',compact('categories','blogs','banner'))->with('cat_id',$cat_id);
    }

    //search blog
    public function blogSearch(Request $request,$cat_id=null){
        $banner=Banner::where(['status'=>'active','type'=>'blog'])->orderBy('id','DESC')->first();

        $categories=BCategory::where('status','active')->limit(6)->orderBy('id','DESC')->get();

        $blogs=Blog::where('status','active')->where('title','LIKE','%'.$request->input('search').'%')->paginate(9);
        if(count($blogs)>0){
            return view('frontend.pages.blog.list',compact('categories','blogs','banner'))->with('cat_id',$cat_id);
        }
        else{
            return back()->with('error','No blog found. Try to search again!');
        }
    }

    public function managementTeam(){
        $sectiontitle=Sectiontitle::first();
        $teams=Staff::where('status','active')->get();
        return view('frontend.pages.aboutus.management_team',compact('teams','sectiontitle'));
    }

    public function joinMembership()
    {
        return view('frontend.pages.member.create');
    }

    public function district()
    {
        $lang = 'np';
        $provinceId = isset($_REQUEST['province_id']) ? $_REQUEST['province_id']:null;
        try{
            $district = new District($lang);
            $districts = $district->getDistrictsByProvince($provinceId);

            $data = array();
            foreach ($districts as $item){
                $data[$item->id] = $item->name;
            }

            if($data){
                http_response_code(200);
                echo json_encode($data);
            }else{
                http_response_code(500);
                echo json_encode(array("message" => "Unable to get districts"));
            }

        }catch (LoadingException $e){
            http_response_code(500);
            echo json_encode(array("message" => $e->getMessage()));
        }

    }

    public function municipality()
    {
        try{
            $lang = 'np';
            $districtId = isset($_REQUEST['district_id']) ? $_REQUEST['district_id']:null;

            $municipality = new Municipality($lang);
            $municipalities = $municipality->getMunicipalitiesByDistrict($districtId);

            $data = array();
            foreach ($municipalities as $item){
                $data[$item->id] = $item->name;
            }


            if($data){
                http_response_code(200);
                echo json_encode($data);
            }else{
                http_response_code(500);
                echo json_encode(array("message" => "Unable to get municipalities"));
            }

        }catch (LoadingException $e){
            http_response_code(500);
            echo json_encode(array("message" => $e->getMessage()));
        }
    }


    public function province()
    {
        $lang = 'np';

        try{
            $province = new Province($lang);
            $provinces = $province->allProvinces();

            $data = array();

            foreach ($provinces as $item){
                $data[$item->id] = $item->name;
            }

            if($data){
                http_response_code(200);
                echo json_encode($data);
            }else{
                http_response_code(500);
                echo json_encode(array("message" => "Unable to get provinces"));
            }

        }catch (LoadingException $e){
            http_response_code(500);
            echo json_encode(array("message" => $e->getMessage()));
        }

    }

    public function ward()
    {
        try{
            $lang = 'np';
            $municipalityId = isset($_REQUEST['municipality_id']) ? $_REQUEST['municipality_id']:null;

            $municipality = new Municipality($lang);
            $wards = $municipality->wards($municipalityId);

            if($wards){
                http_response_code(200);
                echo json_encode($wards);
            }else{
                http_response_code(500);
                echo json_encode(array("message" => "Unable to get municipalities"));
            }

        }catch (LoadingException $e){
            http_response_code(500);
            echo json_encode(array("message" => $e->getMessage()));
        }
    }

    public function Ruleslist()
    {
        $pressrelease = Rules::orderBy('id','DESC')->get();
        return view('frontend.pages.press_release',compact('pressrelease'));
     }

    public function ruleDetail($slug)
    {
        $press = Rules::where('slug',$slug)->first();
        if($press)
            abort(404);
                   
        return view('frontend.pages.press',compact('press'));

    }

}
