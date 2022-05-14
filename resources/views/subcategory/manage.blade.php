	@extends("AdminPages.Dashboard")
	@section("form")

	@section('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

	@endsection
	
	<div class="table-responsive bs-example widget-shadow" style=" background-color: #659DBD">
						<h4 style="padding: 20px;text-align: center; color: black; font-family:Franklin Gothic Medium">Product Information  </h4>

						<p style="text-align: left; padding:6px; background-color: gray; margin-left: 1100px;"><a href="{{URL('/productinformationpdf/download')}}">PDF download</a></p><br>


						<!-- <p style="text-align: left; padding:6px; background-color: gray; margin-left: 1100px;"><a href="{{URL('//download')}}">PDF download</a></p><br>
 -->						<table class="table table-bordered" id="datatable" style="background-color: powderblue; ">
						 <thead> 
						 <tr>
						 <th class="col-sm-1" style="text-align: center;">ID</th> 
						 <th class="col-sm-1" style="text-align: center;">Subcatagory Name</th>

					   <th class="col-sm-1" style="text-align: center;">Catagory Name</th>
				
						 <th class="col-sm-1" style="text-align: center;">Action</th>  
						   </tr> 
						</thead> 
						   <tbody> 
						   @foreach($subcatagory as $subcatagory)
						   <tr> 
						   
						    <td  style="text-align: center;">{{$subcatagory->sub_id}}</p></td> 
						     <td style="text-align: center;">{{$subcatagory->cat_name}}</td>
						     <td style="text-align: center">{{$subcatagory->c_name}}</td>


						      
						    <td style="text-align: center;">

                          <a href="{{URL('subcatagory/edit/'.$subcatagory->sub_id)}}" class="btn btn-success">
                            <span  class="glyphicon glyphicon-edit">Edit</span>  
                            <a href="{{URL('subcatagory/delete/'.$subcatagory->sub_id)}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash">Del</span>

                            
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