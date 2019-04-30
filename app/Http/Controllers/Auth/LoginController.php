<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $pwd = $request->input('password');
        $name = $request->input('name');
        return $this->authenticate($pwd);
    }

    /**
     * 修改登录需要验证的字段值
     */
    public function username()
    {
        return 'name';
    }

    /**
     *  登录界面
     * */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * 自定义登录验证的字段
     * prams password
     */
    public function authenticate($password)
    {
        if (Auth::attempt(['email' => '', 'password' => $password])) {
            // 认证通过...
            return redirect()->to();
        }else{
            Session::put('error_msg', '用户名或者密码错误');
            return back();
        }
    }

}
