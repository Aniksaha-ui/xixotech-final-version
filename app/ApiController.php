<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB;
use Validator;

class ApiController extends Controller
{
    public function user(){

    	$user=DB::table('users')->select('*')->get();

    	return response()->json(['user'=>$user],200);
    }


    public function getById($id){

    	$usercart=DB::table('users')
    	->join('carts','users.id','carts.user_id')
    	->where('users.id',$id)
    	->select('*')
    	->get();


    	if(is_null($usercart)){

    		return response()->json('No data found',404);
    	}


    	return response()->json(['usercart'=>$usercart]);	
    		
    	

    	
    }


    public function saveuser(Request $request){

    	$rules =[
    		'name' => 'required|min:3',
    	];

    	$validator = Validator::make($request->all(),$rules);

    	if($validator->fails()){
    		return response()->json($validator->errors(),400);
    	}

    	$user =User::create($request->all());
    	return response()->json($user,201);
        return back();
    }


    public function userUpadate(Request $request,$id){
    	$user_id=User::find($id);

    	if(is_null($user_id)){
    		return response()->json('Record not found',404);
    	}

    	$user_id->update($request->all());
    	return response()->json($user_id,200);

    }


    public function userDelete(Request $request,User $user){

    	$user->delete();
    	return response()->json(null,200);
    }

    




}
