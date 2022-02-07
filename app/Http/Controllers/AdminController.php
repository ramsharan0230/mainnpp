<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\BioWell;
use App\Models\BrainTape;
use App\Models\BusinessOperation;
use App\Models\BusinessTechnology;
use App\Models\Order;
use App\Models\Sectiontitle;
use App\Models\Staff;
use App\Models\Address;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $address=Address::orderBy('id','DESC')->get();
        $staffs=Staff::where('status','active')->orderBy('id','DESC')->get();
        return view('backend.index',compact('staffs','address'));
    }
    
    public function admission(){
        $admission=Sectiontitle::first();
        return view('backend.admission.edit',compact('admission'));
    }
    
     public function admissionUpdate(Request $request){
        $admission=Sectiontitle::first();
        $status=$admission->update($request->all());
         if($status){
             
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
        
    }

    // welcome
    public function welcome(){
        $welcome=Sectiontitle::first();
        return view('backend.home.welcome',compact('welcome'));
    }

    public function welcomeUpdate(Request $request){
        $this->validate($request,[
            'welcome_title'=>'string|required',
            'welcome_content'=>'string|nullable',
            'welcome_image'=>'image|nullable|mimes:png,jpg,jpeg,svg',
        ]);
        $data=$request->all();
        $section=Sectiontitle::first();

        $data['welcome_image']=get_section_value('welcome_image');

        if($request->hasFile('welcome_image')){
            if($file=$request->file('welcome_image')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);
                $data['welcome_image']='storage/backend/assets/images/home/'.$imageName;
            }
        }

        $status=$section->update([
            'welcome_title'=>$request->welcome_title,
            'welcome_content'=>$request->welcome_content,
            'welcome_image'=>$data['welcome_image'],
        ]);

        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }

    //Principle Message
    public function principleMessage(){
        $data=Sectiontitle::first();
        return view('backend.home.principle_message',compact('data'));
    }

    public function principleMessageUpdate(Request $request){
        $this->validate($request,[
            'principle_title'=>'string|required',
            'principle_content'=>'string|nullable',
            'principle_image'=>'image|nullable|mimes:png,jpg,jpeg,svg',
        ]);
        $data=$request->all();
        $section=Sectiontitle::first();

        $data['principle_image']=get_section_value('principle_image');

        if($request->hasFile('principle_image')){
            if($file=$request->file('principle_image')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);
                $data['principle_image']='storage/backend/assets/images/home/'.$imageName;
            }
        }

        $status=$section->update([
            'principle_title'=>$request->principle_title,
            'principle_content'=>$request->principle_content,
            'principle_image'=>$data['principle_image'],
        ]);



        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }

    //Chairman Message
    public function chairmanMessage(){
        $data=Sectiontitle::first();
        return view('backend.home.chairman_message',compact('data'));
    }

    public function chairmanMessageUpdate(Request $request){
        $this->validate($request,[
            'chairman_title'=>'string|required',
            'chairman_content'=>'string|nullable',
            'chairman_image'=>'image|nullable|mimes:png,jpg,jpeg,svg',
        ]);
        $data=$request->all();
        $section=Sectiontitle::first();

        $data['chairman_image']=get_section_value('chairman_image');

        if($request->hasFile('chairman_image')){
            if($file=$request->file('chairman_image')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);
                $data['chairman_image']='storage/backend/assets/images/home/'.$imageName;
            }
        }

        $status=$section->update([
            'chairman_title'=>$request->chairman_title,
            'chairman_content'=>$request->chairman_content,
            'chairman_image'=>$data['chairman_image'],
        ]);
        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }


    public function about(){
         $about=Sectiontitle::first();
        return view('backend.about.aboutus',compact('about'));
    }

    public function aboutUpdate(Request $request){
        $about=Sectiontitle::first();

       

        $status=$about->update([
            'about_us_content'=>$request->about_us_content,
        
        ]);

        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }

    public function whySamata(){
        $data=Sectiontitle::first();
        return view('backend.about.why-samata',compact('data'));
    }

    public function whySamataUpdate (Request $request){
        $samata=Sectiontitle::first();

        $status=$samata->update([
            'why_samata_school'=>$request->why_samata_school,
           
        ]);

        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }


    public function missionVision(){
        $about=AboutUs::first();
        return view('backend.aboutus.mission_vision',compact('about'));
    }

    public function missionVisionUpdate(Request $request){
        $about=AboutUs::first();

        $data['icon_path1']=$about->icon_path1;
        $data['icon_path2']=$about->icon_path2;
        $data['icon_path3']=$about->icon_path3;
        $data['our_mission_image_path']=$about->our_mission_image_path;

        if($request->hasFile('our_mission_image_path')){
            if($file=$request->file('our_mission_image_path')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);
                $data['our_mission_image_path']='storage/backend/assets/images/home/'.$imageName;
            }
        }


        if($request->hasFile('icon_path1')){
            if($file=$request->file('icon_path1')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);
                $data['icon_path1']='storage/backend/assets/images/home/'.$imageName;
            }
        }

        if($request->hasFile('icon_path2')){
            if($file=$request->file('icon_path2')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);
                $data['icon_path2']='storage/backend/assets/images/home/'.$imageName;
            }
        }


        if($request->hasFile('icon_path3')){
            if($file=$request->file('icon_path3')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);
                $data['icon_path3']='storage/backend/assets/images/home/'.$imageName;
            }
        }


        $status=$about->update([
            'icon_path1'=>$data['icon_path1'],
            'icon_path2'=>$data['icon_path2'],
            'icon_path3'=>$data['icon_path3'],
            'content1'=>$request->content1,
            'content2'=>$request->content2,
            'content3'=>$request->content3,
            'our_mission_image_path'=>$data['our_mission_image_path'],

        ]);

        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }


    public function staffContentUpdate(Request $request){
        $section_title=Sectiontitle::first();

        $status=$section_title->update([
            'staff_title'=>$request->staff_title,
            'staff_subtitle'=>$request->staff_subtitle,
        ]);

        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }


    public function testimonialSectionUpdate(Request $request){
        $section_title=Sectiontitle::first();

        $status=$section_title->update([
            'testimonial_title'=>$request->testimonial_title,
            'testimonial_subtitle'=>$request->testimonial_subtitle,
        ]);

        if($status){
            return back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong');
        }

    }
}
