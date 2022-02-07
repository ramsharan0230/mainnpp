<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function contactList(){

        $contacts=ContactMessage::orderBy('id','DESC')->get();

        return view('backend.contact.index',compact('contacts'));
    }

    public function contactView(Request $request,$id){
        $contact=ContactMessage::findOrFail($id);
        $status= $contact->update([
            'seen'=>'yes'
        ]);
        return view('backend.contact.view',compact('contact'));

    }

    public function contactDelete(Request $request,$id){
        $contact=ContactMessage::findOrFail($id);
        $status=$contact->delete();
        if($status){
            return back()->with('success','Contact message deleted!');
        }
        else{
            return back()->with('error','Something went wrong, Please try again!');
        }
    }
    public function contactMessage(Request $request){
        $this->validate($request,[
            'name'=>'string|required',
            'email'=>'email|required',
            'phone'=>'required',
            'message'=>'required|string|max:200',
        ]);

        $data=$request->all();
        $status=ContactMessage::create($data);
        if($status){
            Mail::to('prajwal.iar@gmail.com')->send(new ContactMail($data));
            return back()->with('success','Your message send successfully!');
        }
        else{
            return back()->with('error','Something went wrong, Please try again!');
        }
    }
}
