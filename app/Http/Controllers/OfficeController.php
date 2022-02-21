<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;
use App\Models\Province;

class OfficeController extends Controller
{
    protected $office;
    public function __construct(Office $office){
        $this->office = $office;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = $this->office->orderBy('created_at', 'DESC')->get();

        return view('backend.office.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::where('publish', 1)->get();
        return view('backend.office.create', compact('provinces'));
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
            'province_id'=>'numeric|required',
            'name'=>'string|max: 199|required',
            'email'=>'string|email|nullable',
            'municipality'=>'string|nullable',
            'phone'=>'string|nullable',
            'district'=>'string|nullable',
            'ward'=>'numeric|nullable',
            'address'=>'string|max: 500|nullable',
            'telephone'=> 'string|sometimes',
            'president'=> 'string|sometimes',
            'fax' => 'string|sometimes'
        ]);
        $data=$request->all();

        $status=$this->office->create($data);
        if($status){
            return redirect()->route('offices.index')->with('success','Office created Successfully');
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
        $office = $this->office->find($id);
        $provinces = Province::where('publish', 1)->get();

        if($office){
            return view('backend.office.edit', compact('office', 'provinces'));
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
        $office = $this->office->find($id);

        if($office){
            $this->validate($request,[
                'province_id'=>'numeric|required',
                'name'=>'string|max: 199|required',
                'email'=>'string|email|nullable',
                'municipality'=>'string|nullable',
                'phone'=>'string|nullable',
                'district'=>'string|nullable',
                'ward'=>'numeric|nullable',
                'address'=>'string|max: 500|nullable',
                'telephone'=> 'string|sometimes',
                'president'=> 'string|sometimes',
                'fax' => 'string|sometimes',
                'ward' => 'numeric|nullable'
            ]);
            $data = $request->all();

            $status = $office->fill($data)->save();
            if($status){
                return redirect()->route('offices.index')->with('success','Office updated Successfully');
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
        $office = $this->office->find($id);

        if($office){
            $status= $office->delete();
            if($status){
                return redirect()->route('offices.index')->with('success','Office successfully deleted');
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
