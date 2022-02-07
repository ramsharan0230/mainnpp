<?php

namespace App\Http\Controllers;

use App\Models\BCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=BCategory::orderBy('id','DESC')->get();
        return view('backend.blogs.category.index',compact('categories'));
    }

    public function blogCategoryStatus(Request $request){
        if($request->mode=='true'){
            DB::table('b_categories')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('b_categories')->where('id',$request->id)->update(['status'=>'inactive']);
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
        return view('backend.blogs.category.create');
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
        $status=BCategory::create($data);
        if($status){
            return redirect()->route('blog-category.index')->with('success','Successfully created blog category');
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
        $category=BCategory::find($id);
        if($category){
            return view('backend.blogs.category.edit',compact('category'));
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
        $category=BCategory::find($id);
        if($category){
            $this->validate($request,[
                'title'=>'string|required',
                'slug'=>'string|required',
            ]);
            $data=$request->all();

            $status=$category->fill($data)->save();
            if($status){
                return redirect()->route('blog-category.index')->with('success','Successfully updated blog category');
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
        $category=BCategory::find($id);
        if($category){
            $status=$category->delete();
            if($status){
                return redirect()->route('blog-category.index')->with('error','Successfully deleted blog category');
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
