<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\posts;
use Illuminate\support\Str;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.addpost');
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
        
               if($request->hasFile('image')){
        $get_image = $request->file('image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(500,300)->save('image/product/'.$image);
        }

          else{
            $image = "default.png";
        }

                        posts::insert([
                'title'=>$request->title,
                'image'=>'image/product/'.$image,        
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                    
                $posts = DB::table('posts')
                        ->select('*')
                        ->where('id',$id)
                        ->get();
                session(['id' => $id]);
                return view('posts.Edit',['posts'=>$posts]);

    }



    public function edit1(Request $request)
    {
        $id = $request->session()->get('id');

                   if($request->hasFile('image')){
        $get_image = $request->file('image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(500,300)->save('image/product/'.$image);

            posts::findOrFail($id)->update([
            'title'=>$request->title,
            'image'=>'image/product/'.$image,
             ]);

            }


            else {
                 $image= DB::table('posts')->where('id', $id)->select('image')->pluck('image')->first();

             posts::findOrFail($id)->update([
            'title'=>$request->title,
            'image'=>$image,
             ]);
                
            }
   
return redirect("/manageposts")->with('alert', 'Data Update successfully');

    }



    public function manage(){

        $posts=DB::table('posts')->select('*')->get();

        return view('posts.manageposts',compact('posts'));

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
              posts::findOrFail($id)->delete();
            return back();
    }
}
