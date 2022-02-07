<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function photo(){
        $photo=Gallery::where('gallery_type','photo')->orderBy('id')->get();
        return view('backend.gallery.photo',compact('photo'));
    }
    
     public function video(){
        $video=Gallery::where('gallery_type','video')->orderBy('id')->get();
        return view('backend.gallery.video',compact('video'));
    }
    
    public function index()
    {
        $photo=Gallery::orderBy('id')->get();
        return view('backend.gallery.index',compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');

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
            'photo_title'=>'string|nullable',
            'video_url'=>'string|nullable',
            'gallery_type'=>'in:photo,video|required',
        ]);
        $data=$request->all();


        $status=Gallery::create($data);
        if($status){
            return redirect()->route('gallery.index')->with('success','Successfully created gallery');
        }
        else{
            return back()->with('error','Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryController  $galleryController
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryController $galleryController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryController  $galleryController
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Gallery::find($id);
        if($gallery){
            return view('backend.gallery.edit',compact('gallery'));
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
        $gallery=Gallery::find($id);
        if($gallery){
            $this->validate($request,[
                'photo_title'=>'string|nullable',
                'video_url'=>'string|nullable',
                'gallery_type'=>'in:photo,video|required',
            ]);
            $data=$request->all();


            $status=$gallery->fill($data)->save();
            if($status){
                return redirect()->route('gallery.index')->with('success','Successfully updated');
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
        $gallery=Gallery::find($id);
        if($gallery){
            $status=$gallery->delete();
            if($status){
                return redirect()->route('gallery.index')->with('success','Gallery successfully deleted');
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
