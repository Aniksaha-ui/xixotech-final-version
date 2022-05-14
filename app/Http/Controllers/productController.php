<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catagory;
use App\product;
use Illuminate\support\Str;
use Image;
use DB;
use App\subcategory;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $countries=DB::table('catagories')->pluck("c_name","id");
        // $subcategories = subcategory::all();
           
           return view('product.add',compact('countries'));
    }

  public function getsub($id){
         $states=DB::table("subcategories")->where('cat_id',$id)->pluck("cat_name","sub_id");
             return json_encode($states);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           if($request->hasFile('p_image')){
        $get_image = $request->file('p_image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(500,300)->save('image/product/'.$image);
    }

     else{
            $image = "default.png";
        }

        product::insert([
            'p_name'=>$request->p_name,
            'c_id'=>$request->country,
            'm_name'=>$request->m_name,
            'p_price'=>$request->p_price,
            's_price'=>$request->s_price,
            'w_price'=>$request->w_price,
            'd_price'=>$request->d_price,
            'p_quan'=>$request->p_quan,
            'p_image'=>'image/product/'.$image,
            'product_sub_cat' =>$request->state
             ]);
        return back();
    }
    public function user(){

         $product=DB::table('catagories')
            ->join('products', 'catagories.id', '=', 'products.c_id')
            ->where('products.p_quan','>',0)
            ->select('products.*','catagories.c_name')
            ->get();
            
            return view('product.manageuser',compact('product'));

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
         $product=DB::table('subcategories')
            ->join('products', 'subcategories.sub_id', '=', 'products.product_sub_cat')
            ->select('products.*','subcategories.cat_name')
            ->get();
            
            
            
            return view('product.manage',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product = DB::table('products')
                ->join("catagories","products.c_id","catagories.id")
                ->select('*')
                ->where('products.id',$id)
                ->get();


                session(['id' => $id]);

             $products_cat_id= DB::table('products')->where('id', $id)->select('c_id')->pluck('c_id')->first();

             $product_sub_cat=DB::table('subcategories')
                              ->join('products','subcategories.sub_id','products.product_sub_cat')
                              ->where('products.id',$id)
                              ->pluck('cat_name','sub_id');



                              // dd($product_sub_cat);

             $countries=DB::table('catagories')->pluck("c_name","id");
        

                  $catagory=DB::table('catagories')
                            ->where("id","<>",$products_cat_id)
                            ->select('*')
                            ->get();   

                            // dd($countries);



                return view('product.Edit',compact('product','catagory','countries','product_sub_cat'));

    }


    public function edit1(Request $request){

            $id = $request->session()->get('id');

                if($request->hasFile('image')){
        $get_image = $request->file('image');
        $image = time().Str::random(10).'.'.$get_image->getClientOriginalExtension();
        Image::make($get_image)->resize(500,300)->save('image/product/'.$image);

                product::findOrFail($id)->update([
                    'p_name'=>$request->p_name,
                    'c_id'=>$request->country1,
                    'm_name'=>$request->m_name,
                    'p_price'=>$request->p_price,
                    's_price'=>$request->s_price,
                    'w_price'=>$request->w_price,
                    'd_price'=>$request->d_price,
                    'p_quan'=>$request->p_quan,
                    'p_image'=>'image/product/'.$image,
                    "product_sub_cat" => $request->state1
            
             ]);
    }

     else{
          
                 
                  $image= DB::table('products')->where('id', $id)->select('p_image')->pluck('p_image')->first();

                    product::findOrFail($id)->update([
                    'p_name'=>$request->p_name,
                    'c_id'=>$request->country1,
                    'm_name'=>$request->m_name,
                    'p_price'=>$request->p_price,
                    's_price'=>$request->s_price,
                    'w_price'=>$request->w_price,
                    'd_price'=>$request->d_price,
                    'p_quan'=>$request->p_quan,
                    'p_image'=>$image,
                   "product_sub_cat" => $request->state1
             ]);
        }
                 


return redirect("/managecatagory")->with('alert', 'Data Update successfully');

    }


        public function delete($id){
             product::findOrFail($id)->delete();
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
         
    }
}
