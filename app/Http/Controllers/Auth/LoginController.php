<?php

namespace Walker\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Walker\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        foreach (config('auth.logins') as $loginField){
            if($auth_result=$this->guard()->attempt(
                $this->credentials($request,$loginField), $request->has('remember')
            )){
                return $auth_result;
            }
        }
        return false;
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request, $loginField)
    {
        $rawCredentials = $request->only($this->username(), 'password');
        return [$loginField => $rawCredentials[$this->username()], 'password' => $rawCredentials['password']];
    }

}
