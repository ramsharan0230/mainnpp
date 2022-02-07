<?php

namespace App\Http\Controllers;

use App\Models\OurConcern;
use Illuminate\Http\Request;

class OurConcernController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concerns=OurConcern::orderBy('id','DESC')->get();
        return view('backend.home.our_concern.index',compact('concerns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home.our_concern.create');
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
            'title'=>'string|required',
            'icon'=>'required|image|mimes:png,jpg,gif,jpeg,svg',
        ]);
        $data=$request->all();

        if($request->hasFile('icon')){
            if($file=$request->file('icon')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);

                $data['icon']='storage/backend/assets/images/home/'.$imageName;
            }
        }
        $status=OurConcern::create($data);
        if($status){
            return redirect()->route('our_concern.index')->with('success','Successfully created');
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
        $concern=OurConcern::find($id);
        if($concern){
            return view('backend.home.our_concern.edit',compact('concern'));
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
        $our_concern=OurConcern::find($id);
        if($our_concern){
            $this->validate($request,[
                'title'=>'string|required',
                'icon'=>'nullable|image|mimes:png,jpg,gif,jpeg,svg',
            ]);
            $data=$request->all();

            if($request->hasFile('icon')){
                if($file=$request->file('icon')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/home/', $imageName);
                    $data['icon']='storage/backend/assets/images/home/'.$imageName;
                }
            }

            $status=$our_concern->fill($data)->save();
            if($status){
                return redirect()->route('our_concern.index')->with('success','Successfully updated');
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
        $concern=OurConcern::find($id);
        if($concern){
            $status=$concern->delete();
            if($status){
                return redirect()->route('our_concern.index')->with('success','Successfully deleted');
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
