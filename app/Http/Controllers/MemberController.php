<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{


    public function storeMember(Request $request)
    {
        $errors = $this->validate($request, [
            "name" => "required|string|max:199",
            "phone" => 'required|string|max:199',
            "email" => "sometimes|string|unique:members",
            "gender" => "required|string",
            "disabled" => "required|integer|min:0|max:1",
            "birth_year" => "required|integer",
            "birth_month" => "required|integer",
            "birth_date" => "required|integer",
            "identity_card" => "required|string",
            "id_number" => "required|string|max:50",
            "form_reason" => "required|string|max:199",
            "current_country" => "required|string",

            "tem_address" => "required|min:0|max:1",
            "temp_province" => "sometimes",
            "temp_district" => "sometimes",
            "temp_municipality" => "sometimes",
            "temp_tole" => "sometimes",
            "temp_ward" => "sometimes",

            "perm_province" => "required|integer",
            "perm_district" => "required|integer",
            "perm_municipality" => "required|integer",
            "perm_tole" => "required|string|max:199",
            "perm_ward" => "required|integer",

            "occupation" => "required|string|max:199",
            "specialist" => "required|string|max:199",
            "party_level" => "required|string|max:199",
            "time_duration" => "required|string|max:199",
        ]);

        $data = $request->except(['temp_province', 'temp_district', 'temp_municipality', 'temp_tole', 'temp_ward']);

        $request->tem_address =="0"?$data['temp_province']='':$data['temp_province']=$request->temp_province;
        $request->tem_address =="0"?$data['temp_district']='':$data['temp_district']=$request->temp_district;
        $request->tem_address =="0"?$data['temp_municipality']='':$data['temp_municipality']=$request->temp_municipality;
        $request->tem_address =="0"?$data['temp_tole']='':$data['temp_tole']=$request->temp_tole;
        $request->tem_address =="0"?$data['temp_ward']='':$data['temp_ward']=$request->temp_ward;

        $save =  Member::create($data);
        return redirect()->back()->with('success', 'Member created successfully!');
    }

     public function memberList()
     {
         $members = Member::all();
        //  dd($members);
         return view('backend.member.index',compact('members'));
     }
}
