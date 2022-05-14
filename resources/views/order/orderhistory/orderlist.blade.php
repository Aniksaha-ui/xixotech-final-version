	@extends("UserPages.UserDashboard")
	@section("form")

	@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

	@endsection
	
	<div class="table-responsive bs-example widget-shadow" style="background-color: #659DBD">
						<h4 style="padding: 20px;text-align: center; color: black; font-family:Franklin Gothic Medium">Order History</h4>
						<table class="table table-bordered" id="datatable" style="background-color: powderblue;">
						 <thead> 
						 <tr> 
						 <th style="text-align: center;">Invoice number</th>
						 <th style="text-align: center;">Date</th>
						 <th style="text-align: center;">Amount</th>
						   
						 <th style="text-align: center;">Action</th>  
						   </tr> 
						</thead> 
						   <tbody> 
						   @foreach($orderlist as $orderlist)
						   <tr> 
						   <th scope="row" style="text-align: center;">{{$orderlist->sale_id}}</th> 
						    <td style="text-align: center;">{{$orderlist->order_date}}</td>
						    <td style="text-align: center;">{{$orderlist->orderamount}}</td>

						  <td style="text-align: center;">
                          <a href="{{URL('orderhistory/'.$orderlist->sale_id)}}" class="btn btn-success">
                            <span style="width: 50px; height: 10px; border-radius: 60%; color: black; font-size: 12px;" class="glyphicon glyphicon-edit">Details</span>  
                            
                          </td>

						
						   
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