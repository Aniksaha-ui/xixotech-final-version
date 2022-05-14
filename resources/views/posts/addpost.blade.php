@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow" style=" background-color: #659DBD">
              <div class=" panel-body-inputin">
              <p style="color: black;text-align: center;font-family: Arial;">New Post</p>
                 <form method="POST" class="form-horizontal" enctype="multipart/form-data">
                       {{csrf_field()}} 
                  <div class="form-group" style="margin-left: 200px;margin-left: 100px; padding-top: 30px; padding-bottom: 30px;">

                  </div>

                  
                    <div class="form-group">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                       

            <textarea class="form-control" id="summernote"  name="title"> 

             </textarea>
                      </div>
                      <br>
                   </div>
                    </div>





                         <div class="form-group">
                    <label class="col-md-2 control-label">Post Image</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="product price" name="image">
                      </div>
                      <br>
                   </div>
                    </div>





 <div class="col text-center">
   <button type="submit" class="btn btn-primary btn-lg">add new Combo</button>                 
</div>
                    </div>
                  
                </form>
              </div>
            </div>



@endsection





                           