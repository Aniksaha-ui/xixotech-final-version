<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;



class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       if($request->user() && $request->user()->role=="shopper"||$request->user()->role=="Dealer"||$request->user()->role=="whole"){
                
                return $next($request);
            }


        elseif ($request->user() && $request->user()->role=="manager") {
                

                return redirect('/undermanager');
            }
            
            
            elseif($request->user() && $request->user()->role=="admin"){
                    return redirect('/dashboard');
                
                
            }
            
            
            
             elseif ($request->user() && $request->user()->role=="user") {
                

                return redirect('/default');
            }

            
            
    
    
    }




}
