<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryImage;
use Illuminate\Support\Str;

class HistoryGalleryController extends Controller
{
    public function index(){
        $images = HistoryImage::orderBy('created_at', 'desc')->get();
        return view('backend.history.history-image',  compact('images'));
    }

    public function create(){
        return view('backend.history.history-image-create');
    }


    public function store(Request $request){
        $this->validate($request,[
            'title'=>'sometimes|max:199',
            'thumbnail'=>'image|mimes:png,jpg,jpeg,svg,gif',
            'status'=>'required|in:active,inactive',
        ]);

        $data=$request->except(['thumbnail']);
        $himage = new HistoryImage();

        $data['title']=$data['title'];
        $data['slug']= Str::slug($request->title, '-');

        if($request->hasFile('thumbnail')){
            if($file=$request->file('thumbnail')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/gallery/', $imageName);
                $data['thumbnail']=$imageName;
                $data['thumbnail_path']='storage/backend/assets/images/gallery/'.$imageName;
            }
        }

        $status=$himage->create($data);

        if($status){
            session()->put('success','Successfully Image Uploaded');
            return redirect()->route('history-image.index');
        }
        else{
            session()->put('error','Something went wrong');
            return back();
        }
    }

    public function edit($id){
        $image = HistoryImage::find($id);
        return view('backend.history.history-image-edit', compact('image'));
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
        $history_image = HistoryImage::find($id);
        if($history_image){
            $this->validate($request,[
                'title'=>'string|sometimes',
                'thumbnail'=>'image|nullable|mimes:png,jpg,jpeg,svg',
                'status'=>'required|in:active,inactive'
            ]);

            $data=$request->except(['thumbnail']);

            if($request->hasFile('thumbnail')){
                if($file=$request->file('thumbnail')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/gallery/', $imageName);
                    $data['thumbnail']='storage/backend/assets/images/gallery/'.$imageName;
                }
            }

            $status = $history_image->fill($data)->save();

            if($status){
                return redirect()->route('history-image.index')->with('success','Successfully updated History Image');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }


    public function destroy($id)
    {
        $media=HistoryImage::find($id);

        if($media){
            $status=$media->delete();
            if($status){
                return redirect()->route('history-image.index')->with('success','History Image deleted successfully');
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
