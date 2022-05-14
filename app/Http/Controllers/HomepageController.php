<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomepageController extends Controller
{
    public function index(){


          $catagory=DB::table('catagories')
                    ->select('*')
                    ->get();


             $posts=DB::table('posts')->latest('id')->get();
                    

    	    $discounted_product = DB::table('dicounts')
                              ->join("products","dicounts.product_id","products.id")
                              ->where('dicounts.discounted_quantity','>',0)
                              ->select('*')
                              ->get();


            $newProduct=DB::table('products')->latest('id')->take(10)->get();


                 $mostsellingproduct = DB::table('products')
                ->join('orders','products.id','=','orders.order_pid')
                ->select(DB::raw("SUM(order_quantity) as popularproduct"),'products.p_name','products.m_name','products.p_image')
               	->groupby('products.p_name','products.m_name','products.p_image')
               	->orderby('popularproduct','desc')
               	->take(60)
               ->get();
               
               
            //   dd($mostsellingproduct);

                    


            			        

                              // dd($discounted_product);

    	return view("MainHomePage.homepage",compact('discounted_product','newProduct','mostsellingproduct','catagory','posts'));
    }
    
    
    
    public function showsubcatagory($id){

      $subcatagory=DB::table('subcategories')->where('cat_id',$id)->get();

            



            $mostsellingproduct = DB::table('products')
                ->join('orders','products.id','=','orders.order_pid')
                ->select(DB::raw("SUM(order_quantity) as popularproduct"),'products.p_name','products.m_name','products.p_image')
                ->groupby('products.p_name','products.m_name','products.p_image')
                ->orderby('popularproduct','desc')
                ->take(60)
               ->get();


               return view("MainHomePage.subcatagorywiseproduct",compact('subcatagory','mostsellingproduct'));


    }



    public function catagorywiseproduct($id){
      $product=DB::table('products')
              ->where('product_sub_cat',$id)
              ->where('p_quan','>',0)
              ->get();

      $catagory_info=DB::table('catagories')
                    ->select('*')
                    ->get();

   

     $mostsellingproduct = DB::table('products')
    ->join('orders','products.id','=','orders.order_pid')
    ->select(DB::raw("SUM(order_quantity) as popularproduct"),'products.p_name','products.m_name','products.p_image')
    ->groupby('products.p_name','products.m_name','products.p_image')
    ->orderby('popularproduct','desc')
    ->take(20)
   ->get();


            return view("MainHomePage.catagorywiseproduct",compact('product','catagory_info','discounted_product','mostsellingproduct'));

    }



    public function posts(){

  $mostsellingproduct = DB::table('products')
          ->join('orders','products.id','=','orders.order_pid')
          ->select(DB::raw("SUM(order_quantity) as popularproduct"),'products.p_name','products.m_name','products.p_image')
          ->groupby('products.p_name','products.m_name','products.p_image')
          ->orderby('popularproduct','desc')
          ->take(20)
         ->get();



         $posts=DB::table('combos')
                ->select('*')
                ->take(20)
                ->get();



          $discounted_product = DB::table('dicounts')
                              ->join("products","dicounts.product_id","products.id")
                              ->where('dicounts.discounted_quantity','>',0)
                              ->select('*')
                              ->get();


              

             return view("MainHomePage.posts",compact('mostsellingproduct','posts','discounted_product'));     
    }



    


}
