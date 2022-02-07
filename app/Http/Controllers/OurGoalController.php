<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\OurGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OurGoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals=OurGoal::orderBy('id','DESC')->get();
        return view('backend.home.our_goal.index',compact('goals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home.our_goal.create');

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
            'content'=>'string|nullable',
            'subtitle'=>'string|nullable',
        ]);
        $data=$request->all();

        if($request->hasFile('cover_image')){
            if($file=$request->file('cover_image')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/banner/', $imageName);
                $data['cover_image']='storage/backend/assets/images/banner/'.$imageName;
            }
        }
        $slug=Str::slug($request->title);

        $count=OurGoal::where('slug',$slug)->count();
        if($count>0){
            $slug +=time();
        }

        $data['slug']=$slug;


        $status=OurGoal::create($data);
        if($status){
            return redirect()->route('goal.index')->with('success','Successfully created goal');
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
        $goal=OurGoal::find($id);
        if($goal){
            return view('backend.home.our_goal.edit',compact('goal'));
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
        $goal=OurGoal::find($id);
        if($goal){
            $this->validate($request,[
                'title'=>'string|required',
                'subtitle'=>'string|nullable',
                'content'=>'string|nullable',
            ]);
            $data=$request->all();



            $status=$goal->fill($data)->save();
            if($status){
                return redirect()->route('goal.index')->with('success','Successfully updated goal');
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
        $goal=OurGoal::find($id);
        if($goal){
            $status=$goal->delete();
            if($status){
                return redirect()->route('goal.index')->with('success','Goal successfully deleted');
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
