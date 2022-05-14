  @extends("Manager.ManagerDashboard")
  @section("form")

  @section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

  @endsection
  
  <div class="table-responsive bs-example widget-shadow" style="padding-right:7px;padding-left:7px; padding-bottom: 100px; padding-top: 30px; background-color: #659DBD">
            <h4 style="padding: 20px;text-align: center; color: black; font-family:Franklin Gothic Medium">Product Information</h4>
            <table class="table table-bordered" id="datatable" style="background-color: powderblue; ">
             <thead> 
             <tr> 
            
             <th style="text-align: center;">Product Name</th>
             <th style="text-align: center;">Catagory</th>
             <th style="text-align: center;">Subcatagory</th>
             <th style="text-align: center;">Shopper Price</th>
             <th style="text-align: center;">Dealer Price</th>
             <th style="text-align: center;">Wholeseller Price</th>
             
               
               </tr> 
            </thead> 
               <tbody> 
               @foreach($products as $products)
               <tr> 
              <td  style="text-align: center;"><p hidden>{{$products->id}}</p><p><img style="width: 90px; height: 60px; border-radius: 60%" src="{{$products->p_image}}"><p>product name:{{$products->p_name}}</p></td>  
                <td style="text-align: center;">{{$products->c_name}}</td>
                <td style="text-align: center;">{{$products->cat_name}}</td>
                <td style="text-align: center;">{{$products->s_price}}</td>
                <td style="text-align: center;">{{$products->d_price}}</td>
                <td style="text-align: center;">{{$products->w_price}}</td>  
               </tr> 
                 @endforeach
               </tbody> 
            </table> 
          </div>



@endsection

@section('javascripts')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
@endsection