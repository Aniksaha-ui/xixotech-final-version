@extends('UserPages.UserDashboard')

@section('form')

<form action="{{route('updatecart')}}"" method="post">
@csrf
<div class="table-responsive bs-example widget-shadow" style=" background-color: #659DBD">
      <h3 style="text-align: center;margin-right: 45%px;margin-left:45%px;background-color: red;padding-top: 20px;padding-bottom: 20px;">Order List</h3>
   
        
        <br>
       <table class="table table-bordered" id="datatable" style="background-color: white; ">
          <thead>
            <tr>
           
            <th style="font-size: .8em;">Product</th>
              <th style="font-size: .8em;">quantity</th>
              <th style="font-size: .8em;">price</th>
              <th style="font-size: .8em;">Order Status</th>
              <th style="font-size: .8em;">Subtotal</th>
              <th colspan="1" style="text-align: center; font-size: .8em" >Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($view as $view)
                  <tr class="rem1">
                        <input type="hidden" name="id[{{$view->id}}]" value="{{$view->id}}">
                        <td><p><img style="width: 90px; height: 60px; border-radius: 60%" src="{{url($view->p_image)}}" alt=" " /></p><p align="center">{{$view->p_name}}</p></td>

                            <td class="invert">
                                                      
                                  
                                   <div class="product-quantity"><input class="form-control" type="number" id="quantity{{$view->id}}" min="1" name="quantity[{{$view->id}}]" value="{{$view->quantity}}" ></div>
                              
                            </td>

                        <td class="invert" style="font-family: sans-serif;" id="amount{{$view->id}}">{{$view->s_price}}</td>
                         <td hidden class="invert" style="font-family: sans-serif;" id="discountinpercentage{{$view->id}}" >{{$view->cart_discount_in_percentage}}</td>
                         
                        <td hidden class="invert" style=" font-family: sans-serif;" id="discountintk{{$view->id}}">{{$view->cart_discount_in_tk}}</td>

                         <td class="invert" style="font-family: sans-serif;">{{$view->active}}</td>

                        <td class="invert" style=" font-family: sans-serif;" id="subtotal{{$view->id}}">{{($view->s_price*$view->quantity)-$view->cart_discount_in_tk-((($view->s_price*$view->quantity)*$view->cart_discount_in_percentage)/100)
                        }}</td>
                       
                        <td class="invert-closeb">
                                  <a href="{{url('/delete/cart/')}}/{{$view->id}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash" style="font-size: .7em; color: white;"> Delete</span>
                          
                                <a href="{{url('/confirm/product-order/')}}/{{$view->id}}" class="btn btn-success" style="margin-left: 10px;">
                            <span class="glyphicon glyphicon-trash" style="font-size: .7em; color: white;">Confirm</span>
                        </td>

                    </tr>
          @endforeach

                    <tr>

                      <td></td>
                        <td></td>
                        <td></td>
                        <td class="invert-closeb" style="padding-top: 15px;padding-bottom: 10px; font-family: sans-serif;">Subtotal</td>
                        <td class="invert" style="padding-top: 15px;padding-bottom: 15px;">{{$total}}</td>
                        <td colspan="3">  <button class="buttonfor" style="padding-top: 10px;padding-bottom: 10px; font-family: sans-serif; background-color: blue;"  type="submit"><span aria-hidden="true"></span>Update cart</button></td>

                    </tr>

    
 </form>
 
 <form action="{{url('/request')}}" method="post">
          @csrf
        
            <tr class="rem1">
              <td class="invert" style="text-align: center;">Prefered Curior</td>
              <td class="invert" colspan="3" style="text-align: center;">
                <select style="padding: 10px;" name = "Curior">
                     <option value="{{$currier}}" style="background-color: blue; color: white;">{{$currier}}</option> 
                  <option value="Patho" style="background-color: blue; color: white;">Patho</option> 
                  <option value="Sundorban" style="background-color: blue; color: white;">Sundorban</option>
                </select>
              </td>
           

            </tr>
         
        

    </tbody></table>

      </div>
  
 


      <div class="checkout-left" style="text-align: center;"> 
     
        <div class="checkout-right-basket"style="background-color: yellow; text-align: center;">
          <h4 style="text-align: center;">Order Vouchar</h4>
          <ul>

          <p>Delivered method<i>-</i> <span>${{$currier}}</span></p>
           <p> Delivery Charge<i>-</i> <span>${{$delivary_charge}}</span></p>
             <p>Total <i>-</i> <span>${{$total}}</span></p>
         <!--     <li>discount_total<i>-</i> <span>${{$dis_total}}</span></li> -->
             
          </ul>
        </div>

          <div class="checkout-right-basket" style="background-color: blue; text-align: center;">
            
            <input type="submit" name="submit" value="Confirm Order" style="font-family: Arial Black; font-weight: 29px; background-color: blue; color: white; width: 100%; padding: 10px;">

          </div>
    
                  
          </div>
          </form>
      
        <div class="clearfix"> </div>
        
      </div>

    </div>


@section('footer_js')
<script>
    jQuery(document).ready(function(){
        @foreach($v as $cart)
        jQuery('#quantity{{$cart->id}}').change(function(){
            var quantity{{$cart->id}}=jQuery('#quantity{{$cart->id}}').val();
            var amount{{$cart->id}}=jQuery('#amount{{$cart->id}}').html();
            var discountintk{{$view->id}} = jQuery('#discountintk{{$cart->id}}').html();
            var discountinpercentage{{$view->id}} = jQuery('#discountinpercentage{{$cart->id}}').html();
            var discountinpercentage{{$view->id}} = (((quantity{{$cart->id}}*amount{{$cart->id}})*discountinpercentage{{$view->id}})/100)
          jQuery('#subtotal{{$cart->id}}').html((quantity{{$cart->id}}*amount{{$cart->id}})-discountinpercentage{{$view->id}} - discountintk{{$view->id}} );  
            // jQuery('#subtotal{{$cart->id}}').html(quantity{{$cart->id}}*amount{{$cart->id}});
        })
        @endforeach
        jQuery('.couponbtn').click(function(){
          var coupon_code=  jQuery('#coupon').val();
          window.location.href="{{url('/viewcart')}}/"+coupon_code;
        })
   
    })
</script>
@endsection



@endsection