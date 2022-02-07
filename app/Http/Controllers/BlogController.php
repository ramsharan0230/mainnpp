<?php

namespace App\Http\Controllers;

use App\Models\BCategory;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\BTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::orderBy('id','DESC')->get();
        return view('backend.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function blogStatus(Request $request){
        if($request->mode=='true'){
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }
    public function create()
    {
        $categories=BCategory::where('status','active')->orderBy('title','ASC')->get();
        $tags=BTag::where('status','active')->orderBy('title','ASC')->get();
        return view('backend.blogs.create',compact('categories','tags'));
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
            'slug'=>'string|required|unique:blogs,slug',
            'image'=>'image|nullable|mimes:png,jpg,jpeg,svg,gif',
            'status'=>'required|in:active,inactive',
            'content'=>'string|nullable',
            'quote'=>'string|nullable',
            'meta_title'=>'string|nullable',
            'posted_by'=>'nullable|string',
            'meta_descriptions'=>'string|nullable',
            'meta_keywords'=>'string|nullable',
        ]);
        $data=$request->all();

        $blog=new Blog();

        $blog['title']=$data['title'];
        $blog['slug']=$data['slug'];
        $blog['title']=$data['title'];
        $blog['status']=$data['status'];
        $blog['content']=$data['content'];
        $blog['quote']=$data['quote'];
        $blog['posted_by']=$data['posted_by'];
        $blog['meta_title']=$data['meta_title'];
        $blog['meta_descriptions']=$data['meta_descriptions'];
        $blog['meta_keywords']=$data['meta_keywords'];

        if($request->hasFile('image')){
            if($file=$request->file('image')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/blog/', $imageName);
                $blog['image']=$imageName;
                $blog['image_path']='storage/backend/assets/images/blog/'.$imageName;
            }
        }

        $status=$blog->save();

        // multi cat store
        $bcategory=BCategory::find($request->blog_cat);

        $blog->blog_categories()->attach($bcategory);

        $btag=BTag::find($request->blog_tag);

        $blog->blog_tags()->attach($btag);

        if($status){
            session()->put('success','Successfully created Blog');
            return redirect()->route('blog.index');
        }
        else{
            session()->put('error','Something went wrong');
            return back();
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
        $blog=Blog::find($id);
        $categories=BCategory::where('status','active')->orderBy('title','ASC')->get();
        $tags=BTag::where('status','active')->orderBy('title','ASC')->get();

        $category_ids=BlogCategory::where('blog_id',$id)->pluck('bcategory_id');
        $tag_ids=BlogTag::where('blog_id',$id)->pluck('tag_id');
        if($blog){
            return view('backend.blogs.edit',compact('blog','categories','category_ids','tag_ids','tags'));
        }
        else{
            session()->put('error','Data not found');
            return back();
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
        $blog=Blog::find($id);
        if($blog){
            $this->validate($request,[
                'title'=>'string|required',
                'slug'=>'string|required',
                'image'=>'image|nullable|mimes:png,jpg,jpeg,svg,gif',
                'content'=>'string|nullable',
                'quote'=>'string|nullable',
                'meta_title'=>'string|nullable',
                'posted_by'=>'nullable|string',
                'meta_descriptions'=>'string|nullable',
                'meta_keywords'=>'string|nullable',
            ]);
            $data=$request->all();

            $blog_data['title']=$data['title'];
            $blog_data['slug']=$data['slug'];
            $blog_data['title']=$data['title'];
            $blog_data['content']=$data['content'];
            $blog_data['quote']=$data['quote'];
            $blog_data['meta_title']=$data['meta_title'];
            $blog_data['posted_by']=$data['posted_by'];
            $blog_data['meta_descriptions']=$data['meta_descriptions'];
            $blog_data['meta_keywords']=$data['meta_keywords'];

            if($request->hasFile('image')){
                if($file=$request->file('image')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/blog/', $imageName);
                    $blog_data['image']=$imageName;
                    $blog_data['image_path']='storage/backend/assets/images/blog/'.$imageName;
                }
            }

            $status=$blog->fill($blog_data)->save();

            // multi cat store
            $bcategory=BCategory::find($request->blog_cat);

            $blog->blog_categories()->sync($bcategory);

            $btag=BTag::find($request->blog_tag);

            $blog->blog_tags()->sync($btag);
            if($status){
                return redirect()->route('blog.index')->with('success',' Successfully updated blog');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('info','Data not found');
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
        $blog=Blog::find($id);
        if($blog){
            $status=$blog->delete();
            if($status){
                session()->put('success','Successfully deleted Blog');
                return redirect()->route('blog.index');
            }
            else{
                session()->put('error','Something went wrong!');

                return back();
            }
        }
        else{
            session()->put('info','Data not found');
            return back();
        }
    }
}
