<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=NewsEvent::orderBy('id','DESC')->get();
        return view('backend.news_event.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news_event.create');
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
            'news'=>'required',
            'title'=>'string|required',
            'venue'=>'string|nullable',
            'start_date'=>'date|required',
            'banner'=>'image|required|mimes:png,jpg,jpeg,svg',
        ]);
        $data=$request->all();
        if($request->hasFile('banner')){
            if($file=$request->file('banner')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/news/', $imageName);
                $data['banner']='storage/backend/assets/images/news/'.$imageName;
            }
        }
        $data['slug'] = Str::slug($request->title, '-');

        $status=NewsEvent::create($data);
        if($status){
            return redirect()->route('news.index')->with('success','Successfully created');
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
        $news = NewsEvent::find($id);
        if($news){
            return view('backend.news_event.edit',compact('news'));
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
        $news=NewsEvent::find($id);
        if($news){
            $this->validate($request,[
                'news'=>'required',
                'title'=>'string|required',
                'venue'=>'string|nullable',
                'start_date'=>'date|required',
                'banner'=>'image|nullable|mimes:png,jpg,jpeg,svg',
            ]);
            $data=$request->all();

            if($request->hasFile('banner')){
                if($file=$request->file('banner')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/news/', $imageName);
                    $data['banner']='storage/backend/assets/images/news/'.$imageName;
                }
            }

            $status=$news->fill($data)->save();
            if($status){
                return redirect()->route('news.index')->with('success','Successfully updated news');
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
        $news=NewsEvent::find($id);
        if($news){
            $status=$news->delete();
            if($status){
                return redirect()->route('news.index')->with('success','News successfully deleted');
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
