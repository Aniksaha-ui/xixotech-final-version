<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use Illuminate\support\Str;
use Image;
use DB;

class catagoryController extends Controller
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
         return view('catagory.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               if($request->hasFile('image')){
        $get_image = $request->file('image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(500,300)->save('image/product/'.$image);
    }

     else{
            $image = "default.png";
        }


       

                catagory::insert([
                'c_name'=>$request->c_name,
                'c_image'=>'image/product/'.$image,        
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
             $catagory=catagory::all();
          return view('catagory.Manage',compact('catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $catagories = DB::table('catagories')
                ->select('*')
                ->where('id',$id)
                ->get();
                session(['id' => $id]);
                return view('catagory.Edit',['catagories'=>$catagories]);
    }


     public function edit1(Request $request)
    {
        $id = $request->session()->get('id');

                   if($request->hasFile('image')){
        $get_image = $request->file('image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(500,300)->save('image/product/'.$image);

            catagory::findOrFail($id)->update([
            'c_name'=>$request->c_name,
            'c_image'=>'image/product/'.$image,
             ]);

            }


            else {
                 $image= DB::table('catagories')->where('id', $id)->select('c_image')->pluck('c_image')->first();

             catagory::findOrFail($id)->update([
            'c_name'=>$request->c_name,
            'c_image'=>$image,
             ]);
                
            }
   
return redirect("/managecatagory")->with('alert', 'Data Update successfully');

    }


    public function delete($id){
          catagory::findOrFail($id)->delete();
         return back();
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
}
