<?php

namespace App\Http\Controllers;

use App\Models\Sectiontitle;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::orderBy('id','DESC')->get();
        $section_title=Sectiontitle::first();
        return view('backend.testimonial.index',compact('testimonials','section_title'));
    }


    public function testimonialStatus(Request $request){
        if($request->mode=='true'){
            DB::table('testimonials')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('testimonials')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'string|required',
            'profile'=>'nullable|image|mimes:png,jpg,gif,jpeg,svg',
//            'rating'=>'numeric|required',
            'review'=>'string|nullable',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        if($request->hasFile('profile')){
            if($file=$request->file('profile')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/testimonial/', $imageName);
                $data['profile']='storage/backend/assets/images/testimonial/'.$imageName;
            }
        }
        $status=Testimonial::create($data);
        if($status){
            return redirect()->route('testimonial.index')->with('success','Successfully created testimonial');
        }
        else{
            return back()->with('error','Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::find($id);
        if($testimonial){
            return view('backend.testimonial.edit',compact('testimonial'));
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial=Testimonial::find($id);
        if($testimonial){
            $this->validate($request,[
                'name'=>'string|required',
                'profile'=>'nullable|image|mimes:png,jpg,gif,jpeg,svg',
//                'rating'=>'numeric|required',
                'review'=>'string|nullable',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data=$request->all();

            if($request->hasFile('profile')){
                if($file=$request->file('profile')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/testimonial/', $imageName);
                    $data['profile']='storage/backend/assets/images/testimonial/'.$imageName;
                }
            }

            $status=$testimonial->fill($data)->save();
            if($status){
                return redirect()->route('testimonial.index')->with('success','Successfully updated testimonial');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);
        if($testimonial){
            $status=$testimonial->delete();
            if($status){
                return redirect()->route('testimonial.index')->with('success','Testimonial successfully deleted');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }
}
