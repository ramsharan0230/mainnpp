<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Str;

class HistoryController extends Controller
{
    public function index(){
        $history = History::first();
        return view('backend.history.index', compact('history'));
    }

    public function create()
    {
        return view('backend.history.create');
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
            'thumbnail'=>'image|nullable|mimes:png,jpg,jpeg,svg,gif',
            'status'=>'required|in:active,inactive',
            'description'=>'string|nullable',
        ]);

        $data = $request->except(['thumbnail', 'status']);
        $data['slug'] = Str::slug($request->title, '-');

        if($request->hasFile('thumbnail')){
            if($file=$request->file('thumbnail')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/history/', $imageName);
                $data['thumbnail']=$imageName;
                $data['thumbnail_path']='storage/backend/assets/images/history/'.$imageName;
            }
        }

        $status = History::create($data);

        if($status){
            session()->put('success','History created');
            return redirect()->route('history.index');
        }
        else{
            session()->put('error','Something went wrong');
            return back();
        }
    }
}
