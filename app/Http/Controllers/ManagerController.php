<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id=Auth::id();
       $userUnderme=DB::table('users')
                    ->select('*')
                    ->where('created_by',$id)
                    ->get();




        return view("Manager.allusersunderme",compact('userUnderme')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function commision(){
        $id=Auth::id();

        $commisionformanager=DB::table('givencommisions')
               ->where('user_id',$id)
               ->get();

            return view("Manager.commision",compact('commisionformanager'));
    } 



        public function userinformationshow(){
                    $id=Auth::id();

             


                 $user=DB::table("users")
                       ->join("userdetails","users.id","userdetails.u_id")
                       ->select("*")
                       ->where("users.id",$id)
                       ->get();

                      

                return view("Manager.manageprofile",compact('user'));


    }


            public function profilechange($id){

                $id=$id;
                session(['id' => $id]);
                 $user=DB::table("users")
                       ->join("userdetails","users.id","userdetails.u_id")
                       ->select("*")
                       ->where("users.id",$id)
                       ->get();


                return view("Manager.profileedit",compact('user'));


            }


    public function profileedit(Request $request){

                $id = $request->session()->get('id');
                DB::table("users")
                ->where("id",$id)
                ->update([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>Hash::make($request->password),
                ]);

                DB::table("userdetails")
                ->where("u_id",$id)
                ->update([
                        'phone'=>$request->phone,
                        'address'=>$request->address,
                        'city'=>$request->city,
                ]);


                return redirect("/ManagerDetails"); 
    }
    
    
        public function manageproductformanager(){
        $products=DB::table('products')
                  ->join('catagories','products.c_id','catagories.id')
                  ->join('subcategories','products.product_sub_cat','subcategories.sub_id')
                  ->where('p_quan','>',0)
                  ->select("*")
                  ->get();

                
                  

                  return view("Manager.productmanageformanager",compact('products'));
    }



            public function useraddbyapi(){
                return view('api.adduser');
            }


}
