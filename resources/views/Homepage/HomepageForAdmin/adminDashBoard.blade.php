@extends("AdminPages.Dashboard")

@section("notification")

	<div class="col_3">
        	<a href="{{url("/ShowUserOrderDetails")}}">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar icon-rounded"></i>
                    <div class="stats">
                    <H3>{{$pending_message}}</H3>
                      <h5><strong>{{$users_total_order}}</strong></h5>
                      <span>{{$newOrderMessage}}</span>
                    </div>
                </div>
        	</div>
        </a>
        <a href="{{url("/pendinguser")}}">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>User Request</strong></h5>
                      <h3><strong>{{$user_request}}</strong></h3>
                      
                    </div>
                </div>
        	</div>
        </a>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$countwhole}}</strong></h5>
                      <span>
                          Total Wholeseller
                      </span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$countDealer}}</strong></h5>
                      <span>Total Dealer</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>{{$countshopper}}</strong></h5>
                      <span>Total Shopper</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>

@endsection