<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules=Rules::orderBy('id','DESC')->get();
        return view('backend.rule.index',compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.rule.create');

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
                $file->storeAs('public/backend/assets/images/rule/', $imageName);
                $data['cover_image']='storage/backend/assets/images/rule/'.$imageName;
            }
        }
        $slug=Str::slug($request->title);

        $count=Rules::where('slug',$slug)->count();
        if($count>0){
            $slug +=time();
        }

        $data['slug']=$slug;


        $status=Rules::create($data);
        if($status){
            return redirect()->route('rule.index')->with('success','Successfully created rule');
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
        $rule=Rules::find($id);
        if($rule){
            return view('backend.rule.edit',compact('rule'));
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
        $rule=Rules::find($id);
        if($rule){
            $this->validate($request,[
                'title'=>'string|required',
                'subtitle'=>'string|nullable',
                'content'=>'string|nullable',
            ]);
            $data=$request->all();



            $status=$rule->fill($data)->save();
            if($status){
                return redirect()->route('rule.index')->with('success','Successfully updated rule');
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
        $rule=Rules::find($id);
        if($rule){
            $status=$rule->delete();
            if($status){
                return redirect()->route('rule.index')->with('success','Rule successfully deleted');
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
