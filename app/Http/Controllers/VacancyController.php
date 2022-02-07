<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Vacancy;
use App\Models\VacancyApplication;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function applicants(){
        $applicants=VacancyApplication::orderBy('id','DESC')->get();
        return view('backend.vacancy.applicants',compact('applicants'));
    }

    public function applicantsDelete(Request $request,$id){
        $applicants=VacancyApplication::find($id);
        if($applicants){
            $status=$applicants->delete();
            if($status){
                return redirect()->back()->with('success','Successfully deleted');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    public function resumes(){
        $resumes=Resume::orderBy('id','DESC')->get();
        return view('backend.vacancy.resumes',compact('resumes'));
    }

    public function resumeDelete(Request $request,$id){
        $resume=Resume::find($id);
        if($resume){
            $status=$resume->delete();
            if($status){
                return redirect()->back()->with('success','Successfully deleted');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }


    public function index()
    {
        $vacancy=Vacancy::orderBy('id','DESC')->get();
        return view('backend.vacancy.index',compact('vacancy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vacancy.create');

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
            'experience'=>'string|nullable',
            'department'=>'string|required',
            'opening'=>'numeric|nullable',
            'apply_before'=>'date|after_or_equal:date',
            'basic_req'=>'string|nullable',
            'job_des'=>'string|nullable',

        ]);
        $data=$request->all();


        $status=Vacancy::create($data);
        if($status){
            return redirect()->route('vacancy.index')->with('success','Successfully created');
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
        $vacancy=Vacancy::find($id);
        if($vacancy){
            return view('backend.vacancy.edit',compact('vacancy'));
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
        $vacancy=Vacancy::find($id);
        if($vacancy){
            $this->validate($request,[
                'title'=>'string|required',
                'experience'=>'string|nullable',
                'department'=>'string|required',
                'opening'=>'numeric|nullable',
                'apply_before'=>'date|after:yesterday',
                'basic_req'=>'string|nullable',
                'job_des'=>'string|nullable',
            ]);
            $data=$request->all();


            $status=$vacancy->fill($data)->save();
            if($status){
                return redirect()->route('vacancy.index')->with('success','Successfully updated');
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
        $vacancy=Vacancy::find($id);
        if($vacancy){
            $status=$vacancy->delete();
            if($status){
                return redirect()->route('vacancy.index')->with('success','Successfully deleted');
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
