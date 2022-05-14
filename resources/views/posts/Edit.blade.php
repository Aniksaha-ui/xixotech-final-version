@extends("AdminPages.Dashboard")
@section("form")

<div class="form-three widget-shadow" style=" background-color: #659DBD">
              <div class=" panel-body-inputin">
              <p style="color: black;text-align: center;font-family: Arial;">Product Insert</p>
                 <form method="POST" class="form-horizontal" action="{{url('/updatepost')}}" enctype="multipart/form-data">
                       {{csrf_field()}} 
                  <div class="form-group" style="margin-left: 200px;margin-left: 100px; padding-top: 30px; padding-bottom: 30px;">

                  </div>

                  @foreach($posts as $posts)
                    <div class="form-group">
                    <label class="col-md-2 control-label">Post Title</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                          <textarea class="form-control" id="summernote"  name="title"> 
                        {{ $posts->title }}
                      </textarea>
                      </div>
                      <br>
                   </div>
                    </div>




                         <div class="form-group">
                    <label class="col-md-2 control-label">Image</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-circle-o"></i>
                        </span>
                        <input type="file" class="form-control" value="{{$posts->image}}" id="exampleInputEmail1" placeholder="" name="image">
                      </div>
                      <br>
                   </div>
                    </div>

                    @endforeach



 <div class="col text-center">
   <button type="submit" class="btn btn-primary btn-lg">Update post</button>                 
</div>
                    </div>
                  
                </form>
              </div>
            </div>
@endsection





                           