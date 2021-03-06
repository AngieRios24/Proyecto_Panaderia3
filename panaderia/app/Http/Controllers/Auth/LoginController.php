<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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


    public function authenticated($request , $user){
       if($user->role=='cliente'){
           return redirect()->route('productos') ;
        }else if($user->role=='vendor'){
            return redirect()->route('vendedor') ;
        }else if($user->role=='dueno'){
            return redirect()->route('dueno');

        }else {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
