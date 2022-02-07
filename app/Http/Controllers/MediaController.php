<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Gallery;

class MediaController extends Controller
{
    protected $media;
    protected $gallery;

    public function __construct(Media $media, Gallery $gallery){
        $this->media = $media;
        $this->gallery = $gallery;
    }

    public function index()
    {
        // if(!$slug)
        //     abort(404);

        // $gallery = $this->gallery->where('slug', $slug)->first();
        // if(!$gallery)
        //     abort(404);

        // $data = $this->media->where('gallery_id', $gallery->id)->get();

        $data = $this->gallery->orderBy('created_at', 'desc')->get();
        dd($data);

        return view('backend.media.index', compact('data'));

    }

    public function showGallery($slug){
        if(!$slug)
            abort(404);

        $gallery = $this->gallery->where('slug', $slug)->first();
        if(!$gallery)
            abort(404);

        $data = $this->media->where('gallery_id', $gallery->id)->get();
        return view('backend.media.gallery', compact('data', 'gallery'));

    }

    public function create($slug)
    {
        if(!$slug)
            abort(404);

        $gallery = $this->gallery->where('slug', $slug)->first();
        if(!$gallery)
            abort(404);

        return view('backend.media.uploadImage', compact('gallery'));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'gallery_id'=>'required|integer',
            'photos' => 'required|array',
            'photos.*' => 'required|mimes:jpeg,jpg,png|max:5120'
        ]);
        // dd($request->all());

        $data['gallery_id'] = (int) $request->get('gallery_id');
        
        if($request->hasFile('photos')){
            foreach($request->file('photos') as $photo)
            {
                $imageName = time() ."-". str_replace(' ', '-', $photo->getClientOriginalName());
                $photo->storeAs('public/backend/assets/images/gallery/', $imageName);
                $data['title']='storage/backend/assets/images/gallery/'.$imageName;
                $data = $this->media->create(
                    ['gallery_id'=>$data['gallery_id'], 'title'=>$data['title']]
                );
            }

        }
        $gallery = $this->gallery->where('id', $request->gallery_id)->first();
        return \Redirect::route('media.show', $gallery->slug)->with('message', 'Media added successfully!!!');

    }


    public function destroy(Request $request)
    {
        try {
            $media = $request->get('media_id');
            $slug = $request->get('slug');
        } 
        catch (\Exception $ex) {
            return response()->json([
                "status" => "422",
                "errors" => $ex->getMessage()
            ], 422);
        }

           
        $media=Media::find($media);
        if($media){
            $status=$media->delete();
            if($status){
                return redirect()->route('media.show', $slug)->with('success','Media deleted successfully');
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
