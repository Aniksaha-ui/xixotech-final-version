@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow" style="background-color: #659DBD">
              <div class=" panel-body-inputin">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}} 
                 <div class="form-group">
                    <label class="col-md-2 control-label">Subcategory</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter catagory name" name="sub_cat_name">
                      </div>
                      <br>
                   </div>
                    </div>


              <div class="form-group">
                    <label class="col-md-2 control-label">Select Category</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <select name="c_id" class="form-control" style="width:640px">
                    <option value="">--- Select Category ---</option>
                    @foreach ($catagory as $catagory)
                    <option value="{{ $catagory->id }}">{{ $catagory->c_name }}</option>
                    @endforeach
                </select>
                      </div>
                      <br>
                   </div>
                    </div>


                  



                    </div>

                  <div class="col text-center">
                  <button type="submit" class="btn btn-primary">Add New Subcatagory</button>
                </div>
                </form>
              </div>
            </div>
@endsection