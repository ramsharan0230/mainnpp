<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address=Address::orderBy('id','DESC')->get();
        return view('backend.address.index',compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.address.create');
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
            'location'=>'string|required',
            'name'=>'string|required',
            'email'=>'string|nullable',
            'municipality'=>'string|nullable',
            'phone'=>'string|nullable',
            'district'=>'string|nullable',
            'ward_no'=>'numeric|nullable',
        ]);
        $data=$request->all();

        $status=Address::create($data);
        if($status){
            return redirect()->route('address.index')->with('success','Successfully created');
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
        $address=Address::find($id);
        if($address){
            return view('backend.address.edit',compact('address'));
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
        $address=Address::find($id);
        if($address){
            $this->validate($request,[
                'location'=>'string|required',
                'name'=>'string|required',
                'email'=>'string|nullable',
                'municipality'=>'string|nullable',
                'phone'=>'string|nullable',
                'district'=>'string|nullable',
                'ward_no'=>'numeric|nullable',
            ]);
            $data=$request->all();



            $status=$address->fill($data)->save();
            if($status){
                return redirect()->route('address.index')->with('success','Successfully updated');
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
        $address=Address::find($id);
        if($address){
            $status=$address->delete();
            if($status){
                return redirect()->route('address.index')->with('success','Address successfully deleted');
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
