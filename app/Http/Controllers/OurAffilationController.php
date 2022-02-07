<?php

namespace App\Http\Controllers;

use App\Models\OurAffilation;
use Illuminate\Http\Request;

class OurAffilationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affilation=OurAffilation::orderBy('id','DESC')->get();
        return view('backend.home.our_affilation.index',compact('affilation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home.our_affilation.create');

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
            'icon'=>'required|image|mimes:png,jpg,gif,jpeg,svg',
        ]);
        $data=$request->all();

        if($request->hasFile('icon')){
            if($file=$request->file('icon')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/home/', $imageName);

                $data['icon']='storage/backend/assets/images/home/'.$imageName;
            }
        }
        $status=OurAffilation::create($data);
        if($status){
            return redirect()->route('our_affilation.index')->with('success','Successfully created');
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
        $affilation=OurAffilation::find($id);
        if($affilation){
            return view('backend.home.our_affilation.edit',compact('affilation'));
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
        $affilation=OurAffilation::find($id);
        if($affilation){
            $this->validate($request,[
                'icon'=>'nullable|image|mimes:png,jpg,gif,jpeg,svg',
            ]);
            $data=$request->all();

            if($request->hasFile('icon')){
                if($file=$request->file('icon')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/home/', $imageName);
                    $data['icon']='storage/backend/assets/images/home/'.$imageName;
                }
            }

            $status=$affilation->fill($data)->save();
            if($status){
                return redirect()->route('our_affilation.index')->with('success','Successfully updated');
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
        $affialtion=OurAffilation::find($id);
        if($affialtion){
            $status=$affialtion->delete();
            if($status){
                return redirect()->route('our_affilation.index')->with('success','Successfully deleted');
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
