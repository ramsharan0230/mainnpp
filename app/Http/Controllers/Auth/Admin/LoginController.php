<?php

namespace App\Http\Controllers\Auth\Admin;
/**
 * Admin Login Controller
 *
 * @author  Prajwal Rai <prajwal.iar@gmail.com>
 *
 */
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:6',
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password,'status'=>'active'])){
            return redirect()->intended(route('admin'));
        }
        return back()->withInput($request->only('email','remember'));
    }

    public function logout(Request $request)
    {
        $admin=$this->guard()->user();
        if(!empty($admin)){
            $this->guard()->logout();
        }
        return redirect()->route('admin.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function credentials(Request $request)
    {
        return ['email'=>$request->input('email'),'password'=>$request->input('password'),'status'=>'active'];
    }
}
