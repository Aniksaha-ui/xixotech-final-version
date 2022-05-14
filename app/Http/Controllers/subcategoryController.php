<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use App\subcategory;
use DB;

class subcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        $catagory = DB::table('catagories')
                    ->select('*')
                    ->get();
        return view('sub.addsubcategory',compact("catagory"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        subcategory::Insert([
            "cat_name"=>$request->sub_cat_name,
            "cat_id" => $request->c_id
        ]);

        return back();
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
    
    
     public function manage(){

        $subcatagory=DB::table('subcategories')
                    ->join('catagories','subcategories.cat_id','catagories.id')
                    ->select('*')
                    ->get();

        return view("sub.manage",compact('subcatagory'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function edit($id)
    {
                   session(['id' => $id]);
        $subcatagory=DB::table('subcategories')
                     ->select('*')
                     ->where('sub_id',$id)
                     ->get();

        $present_subcatagory=DB::table('subcategories')
                            ->join('catagories','subcategories.cat_id','catagories.id')
                            ->select('id','c_name')
                            ->where('sub_id',$id)
                            ->pluck('c_name','id');

          

        $countries=DB::table('catagories')->pluck("c_name","id");

        return view("sub.Edit",compact('subcatagory','present_subcatagory','countries'));
           
    }


    public function edit1(Request $request){

            $id = $request->session()->get('id');


               DB::table("subcategories")
                    ->where('sub_id',$id)
                    ->update([
                    'cat_name'=>$request->cat_name,
                    'cat_id'=>$request->cat_id,
                ]);

        return redirect("/managesubcatagory");


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
    
    
        public function delete($id){
                  
                    DB::table("subcategories")
                    ->where('sub_id',$id)
                    ->delete();

                    return back();

    }
}
