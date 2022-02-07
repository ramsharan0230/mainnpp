<?php

namespace App\Http\Controllers;

use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $success=SuccessStory::orderBy('id','DESC')->get();
        return view('backend.success-story.index',compact('success'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.success-story.create');
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
            'profile'=>'required|image|mimes:png,jpg,gif,jpeg,svg',
        ]);
        $data=$request->all();

        if($request->hasFile('profile')){
            if($file=$request->file('profile')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);

                $data['profile']='storage/backend/assets/images/home/'.$imageName;
            }
        }
        $status=SuccessStory::create($data);
        if($status){
            return redirect()->route('success-story.index')->with('success','Successfully created');
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
        $success=SuccessStory::find($id);
        if($success){
            return view('backend.success-story.edit',compact('success'));
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
        $success=SuccessStory::find($id);
        if($success){
            $this->validate($request,[
                'name'=>'string|required',
                'profile'=>'image|mimes:png,jpg,gif,jpeg,svg',
                ]);
            $data=$request->all();

            if($request->hasFile('profile')){
                if($file=$request->file('profile')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/home/', $imageName);
                    $data['profile']='storage/backend/assets/images/home/'.$imageName;
                }
            }

            $status=$success->fill($data)->save();
            if($status){
                return redirect()->route('success-story.index')->with('success','Successfully updated');
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
        $success=SuccessStory::find($id);
        if($success){
            $status=$success->delete();
            if($status){
                return redirect()->route('success-story.index')->with('success','Successfully deleted');
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
