<?php

namespace App\Http\Controllers;

use App\Models\Sectiontitle;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs=Staff::orderBy('id','DESC')->get();
        return view('backend.staff.index',compact('staffs'));
    }

    public function staffStatus(Request $request){
        if($request->mode=='true'){
            DB::table('staff')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('staff')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $section_title=Sectiontitle::first();
        return view('backend.staff.create',compact('section_title'));

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
            'full_name'=>'string|required',
            'profile'=>'nullable|image|mimes:png,jpg,gif,jpeg,svg',
            'facebook_url'=>'url|nullable',
            'linkedin_url'=>'url|nullable',
            'instagram_url'=>'url|nullable',
            'github_url'=>'url|nullable',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        if($request->hasFile('profile')){
            if($file=$request->file('profile')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/staff/', $imageName);
                $data['profile']=$imageName;
                $data['profile_path']='storage/backend/assets/images/staff/'.$imageName;
            }
        }
        $status=Staff::create($data);
        if($status){
            return redirect()->route('staff.index')->with('success','Successfully created staff');
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
        $staff=Staff::find($id);
        $section_title=Sectiontitle::first();

        if($staff){
            return view('backend.staff.edit',compact('staff','section_title'));
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
        $staff=Staff::find($id);
        if($staff){
            $this->validate($request,[
                'full_name'=>'string|required',
                'profile'=>'nullable|image|mimes:png,jpg,gif,jpeg,svg',
                'facebook_url'=>'url|nullable',
                'linkedin_url'=>'url|nullable',
                'instagram_url'=>'url|nullable',
                'github_url'=>'url|nullable',
                'status'=>'nullablle|in:active,inactive',
            ]);
            $data=$request->all();

            if($request->hasFile('profile')){
                if($file=$request->file('profile')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/staff/', $imageName);
                    $data['profile']=$imageName;
                    $data['profile_path']='storage/backend/assets/images/staff/'.$imageName;
                }
            }

            $status=$staff->fill($data)->save();
            if($status){
                return redirect()->route('staff.index')->with('success','Successfully updated staff');
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
        $staff=Staff::find($id);
        if($staff){
            $status=$staff->delete();
            if($status){
                return redirect()->route('staff.index')->with('success','Staff successfully deleted');
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
