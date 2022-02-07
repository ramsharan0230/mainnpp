<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Donate;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    //Mail setting
    public function smtpSetting(){
        return view('backend.setting.smtp_setting');
    }

    public function env_key_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }
        return back()->with('success','Setting updated successfully');
    }

    public function donateFund(){
        $donate=Donate::orderBy('id','DESC')->get();
        return view('backend.donate.index',compact('donate'));
    }

    public function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"'.trim($val).'"';
            if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
                file_put_contents($path, str_replace(
                    $type.'="'.env($type).'"', $type.'='.$val, file_get_contents($path)
                ));
            }
            else{
                file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
            }
        }
    }
    

    public function settings(){
        $setting=Setting::first();
        return view('backend.setting.index',compact('setting'));
    }

    public function settingsUpdate(Request $request,$id)
    {
        $setting = Setting::findOrFail($id);
        $this->validate($request, [
            'title' => 'string|required',
            'logo' => 'image|nullable',
            'favicon' => 'nullable',
            'email' => 'email|required',
            'phone' => 'required',
            'copyright' => 'string|nullable',
        ]);

        $data = $request->all();

        $data['logo']=$setting->logo;
        $data['favicon']=$setting->favicon;


        //logo

        if($request->hasFile('logo')){
            if($file=$request->file('logo')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/settings/', $imageName);
                $data['logo']='storage/backend/assets/images/settings/'.$imageName;
            }
        }
        //favicon
        if($request->hasFile('favicon')){
            if($file=$request->file('favicon')){
                $imageName=time().'-'.$file->getClientOriginalName();
                $file->storeAs('public/frontend/images/settings/',$imageName);
                $data['favicon']='storage/backend/assets/images/settings/'.$imageName;
            }
        }


        $status=$setting->update($data);




        if ($status) {
            return back()->with('success','General settings successfully updated');
        } else {
            return back()->with('error','Something went wrong');
        }
    }
}
