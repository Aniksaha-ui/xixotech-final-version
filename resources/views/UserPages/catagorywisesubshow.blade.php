@extends("UserPages.UserDashboard")

@section("notification")

  <div class="col_3">
         @foreach($subcatagory as $subcatagory)
          <div class="col-md-3 widget widget1">
     <a href="{{URL('showcatagoryresult/'.$subcatagory->sub_id)}}">
            <div class="r3_counter_box" style="background-color:#FEFEFE;">
                    
                    <div class="stats">
                      <h5 style="text-align: center;" ><strong>{{$subcatagory->cat_name}}</strong></h5>
                      
                    </div>
                </div>
          </div>
        </a>

        
        @endforeach
          
    </div>

@endsection