<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // $this->validateLogin($request);

        // if ($this->attemptLogin($request)) {
        //     return $this->sendLoginResponse($request);
        // }

        // $this->incrementLoginAttempts($request);

        // return $this->sendFailedLoginResponse($request);

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        # Field type check
        $fieldType = filter_var($request->name, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        if (Auth::validate([ $fieldType  =>  $input['email'],'password'=> $input['password']])) {
            if (Auth::attempt([ $fieldType => $input['email'],'password'=> $input['password']])) {
                $this->clearLoginAttempts($request);
                if (Auth::user()->role_id == '1') {
                    return redirect()->route('operator.dashboard');
                }
                return redirect()->route('admin.dashboard');
            }
        }

        $this->incrementLoginAttempts($request);
        return redirect()->back()->withInput($request->only($fieldType))->withErrors([
                'err' => 'Matching credential not found'
        ]);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
