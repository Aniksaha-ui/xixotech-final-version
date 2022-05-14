@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow" style=" background-color: #659DBD">
              <div class=" panel-body-inputin">
              <h4 style="color: black;text-align: center;font-family: Arial;">Subcatagory Update</h4>
                 <form method="POST" class="form-horizontal" action="{{url('/updatesubcatagory')}}" enctype="multipart/form-data">
                       {{csrf_field()}} 
                  <div class="form-group" style="margin-left: 200px;margin-left: 100px; padding-top: 30px; padding-bottom: 30px;">

                  </div>

                  @foreach($subcatagory as $subcatagory)
                    <div class="form-group">
                    <label class="col-md-2 control-label">Subcategory Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" value="{{$subcatagory->cat_name}}" class="form-control1" placeholder="Enter subcatagory name" name="cat_name">
                      </div>
                      <br>
                   </div>
                    </div>


             
                    <div class="form-group">
                    <label class="col-md-2 control-label">Catagory Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                          <select name="cat_id" class="form-control" style="width:640px;">


                    @foreach ($present_subcatagory as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach

                        @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                 

                  
                    </select>
                      </div>
                      <br>
                   </div>
                    </div>

                    @endforeach



 <div class="col text-center">
   <button type="submit" class="btn btn-primary btn-lg">Update Subcategory</button>                 
</div>
                    </div>
                  
                </form>
              </div>
            </div>
@endsection





                           