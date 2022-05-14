@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow" style=" background-color: #659DBD">
              <div class=" panel-body-inputin">
              <p style="color: black;text-align: center;font-family: Arial;">Product Insert</p>
                 <form method="POST" class="form-horizontal" action="{{url('/updateCatagory')}}" enctype="multipart/form-data">
                       {{csrf_field()}} 
                  <div class="form-group" style="margin-left: 200px;margin-left: 100px; padding-top: 30px; padding-bottom: 30px;">

                  </div>

                  @foreach($catagories as $catagories)
                    <div class="form-group">
                    <label class="col-md-2 control-label">catagory Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" value="{{$catagories->c_name}}" class="form-control1" placeholder="Enter product name" name="c_name">
                      </div>
                      <br>
                   </div>
                    </div>


                         <div class="form-group">
                    <label class="col-md-2 control-label">catagory Image</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="file" class="form-control" value="{{$catagories->c_image}}" id="exampleInputEmail1" placeholder="" name="image">
                      </div>
                      <br>
                   </div>
                    </div>

                    @endforeach



 <div class="col text-center">
   <button type="submit" class="btn btn-primary btn-lg">add new Product</button>                 
</div>
                    </div>
                  
                </form>
              </div>
            </div>
@endsection





                           