<?php

namespace App\Http\Controllers;

use App\Models\BTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=BTag::orderBy('id','DESC')->get();
        return view('backend.blogs.tag.index',compact('tags'));
    }

    public function blogTagStatus(Request $request){
        if($request->mode=='true'){
            DB::table('b_tags')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('b_tags')->where('id',$request->id)->update(['status'=>'inactive']);
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
        return view('backend.blogs.tag.create');
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
            'slug'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $status=BTag::create($data);
        if($status){
            return redirect()->route('blog-tag.index')->with('success','Successfully created blog tag');
        }
        else{

            return back()->with('error','Something went wrong');
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
        $tag=BTag::find($id);
        if($tag){
            return view('backend.blogs.tag.edit',compact('tag'));
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
        $tag=BTag::find($id);
        if($tag){
            $this->validate($request,[
                'title'=>'string|required',
                'slug'=>'string|required',
            ]);
            $data=$request->all();

            $status=$tag->fill($data)->save();
            if($status){
                return redirect()->route('blog-tag.index')->with('success','Successfully updated blog tag');
            }
            else{
                return back()->with('error','Something went wrong');
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
        $tag=BTag::find($id);
        if($tag){
            $status=$tag->delete();
            if($status){
                return redirect()->route('blog-tag.index')->with('success','Successfully deleted blog tag');
            }
            else{
                return back()->with('error','Something went wrong');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }
}