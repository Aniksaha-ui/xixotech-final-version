<?php

namespace App\Http\Controllers\Auth;

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

    
    protected function authenticated($requset,$user){

            if($user->role=="admin"){
                return redirect("/dashboard");
            }
            else if($user->role=="manager"){
                return redirect("/discountformanager");
            }

            else{
                
                return redirect("/catagoryshow");
            }

       // if($user->isRole('admin')){
       //  return redirect("/managecatagory");
       // }
       // else{
       //  return redirect("/");
     
       // }
        
    }


   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
