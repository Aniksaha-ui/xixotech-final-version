@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow" style=" background-color: #659DBD">
              <div class=" panel-body-inputin">
              <p style="color: black;text-align: center;font-family: Arial;">Product Insert</p>
                 <form method="POST" class="form-horizontal" enctype="multipart/form-data">
                       {{csrf_field()}} 
                  <div class="form-group" style="margin-left: 200px;margin-left: 100px; padding-top: 30px; padding-bottom: 30px;">

                  </div>
                    <div class="form-group">
                    <label class="col-md-2 control-label">product Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter product name" name="p_name">
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
                          <select name="country" class="form-control" style="width:640px;">
                    <option value="">--- Select Category ---</option>
                    @foreach ($countries as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                    </select>
                      </div>
                      <br>
                   </div>
                    </div>

                    <div class="form-group">
                       <label class="col-md-2 control-label">Subcategory Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                <select name="state" class="form-control"style="width:640px;">
                <option>--Subcategory--</option>
                </select>
                  </div>
                      <br>
                   </div>
            </div>




                        <div class="form-group">
                    <label class="col-md-2 control-label">Model Name</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter model name" name="m_name">
                      </div>
                      <br>
                   </div>
                    </div>


                           <div class="form-group">
                    <label class="col-md-2 control-label">Price</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter Price" name="p_price">
                      </div>
                      <br>
                   </div>
                    </div>




                        <div class="form-group">
                    <label class="col-md-2 control-label">Price for Shoppers</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter Shopper's Price" name="s_price">
                      </div>
                      <br>
                   </div>
                    </div>



                        <div class="form-group">
                    <label class="col-md-2 control-label">Price for Wholesaler</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter Wholesaler's Price" name="w_price">
                      </div>
                      <br>
                   </div>
                    </div>


                    <div class="form-group">
                    <label class="col-md-2 control-label">Price for Dealer</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter Dealer's Price" name="d_price">
                      </div>
                      <br>
                   </div>
                    </div>


                        <div class="form-group">
                    <label class="col-md-2 control-label">Quantity</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="text" style="color: black;" class="form-control1" placeholder="Enter Quantity" name="p_quan">
                      </div>
                      <br>
                   </div>
                    </div>


                         <div class="form-group">
                    <label class="col-md-2 control-label">Product Image</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="product price" name="p_image">
                      </div>
                      <br>
                   </div>
                    </div>





 <div class="col text-center">
   <button type="submit" class="btn btn-primary btn-lg">add new Product</button>                 
</div>
                    </div>
                  
                </form>
              </div>
            </div>
@endsection





                           