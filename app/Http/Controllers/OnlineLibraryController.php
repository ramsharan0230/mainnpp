<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineLibrary;
use Illuminate\Support\Str;

class OnlineLibraryController extends Controller
{
    public function index(){
        $libraries = OnlineLibrary::orderBy('id', 'DESC')->get();
        return view('backend.online-library.index',compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.online-library.create');

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
            'subtitle'=>'string|sometimes|max:199',
            'pulished_at'=>'sometimes|date|nullable',
            'thumbnail'=>'image|required|mimes:png,jpg,jpeg,svg',
            'file'=>'sometimes|mimes:pdf',
            'status'=>'required|in:active,inactive',
        ]);

        $data=$request->except(['_token']);

        if($request->hasFile('thumbnail')){
            if($file=$request->file('thumbnail')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/library/', $imageName);
                $data['thumbnail']='storage/backend/assets/images/library/'.$imageName;
            }
        }

        if($request->hasFile('file')){
            if($pdfFile=$request->file('file')){
                $imageName = time() ."-". str_replace(' ', '-', $pdfFile->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/library/', $imageName);
                $data['file']='storage/backend/assets/images/library/'.$imageName;
            }
        }

        $data['slug'] = Str::slug($request->title, '-');
        $status=OnlineLibrary::create($data);

        if($status)
            return redirect()->route('online-libraries.index')->with('success','Successfully created');
        else
            return back()->with('error','Something went wrong!');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $library = OnlineLibrary::find($id);

        if($library){
            return view('backend.online-library.edit',compact('library'));
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
        $library=OnlineLibrary::find($id);
        if($library){
            $this->validate($request,[
                'title'=>'string|required',
                'subtitle'=>'string|sometimes|max:199',
                'pulished_at'=>'sometimes|date|nullable',
                'thumbnail'=>'image|sometimes|mimes:png,jpg,jpeg,svg',
                'file'=>'sometimes|mimes:pdf',
                'status'=>'required|in:active,inactive',
            ]);

            $data=$request->all();

            if($request->hasFile('thumbnail')){
                if($file=$request->file('thumbnail')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/library/', $imageName);
                    $data['thumbnail']='storage/backend/assets/images/library/'.$imageName;
                }
            }

            if($request->hasFile('file')){
                if($pdfFile=$request->file('file')){
                    $imageName = time() ."-". str_replace(' ', '-', $pdfFile->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/library/', $imageName);
                    $data['file']='storage/backend/assets/images/library/'.$imageName;
                }
            }

            $status = $library->fill($data)->save();

            if($status)
                return redirect()->route('online-libraries.index')->with('success','Successfully updated news');
            
            else
                return back()->with('error','Something went wrong!');
            
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
        $library = OnlineLibrary::find($id);
        if($library){
            $status=$library->delete();
            if($status){
                return redirect()->route('online-libraries.index')->with('success','Library successfully deleted');
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
