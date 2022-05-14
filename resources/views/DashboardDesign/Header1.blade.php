		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
			<div class="profile_details_left"><!--notifications of menu start -->
			
			        	<ul class="nofitications-dropdown">

						<li class="dropdown head-dpdn">
						<a href="{{url("/catagoryshow")}}" class="dropdown-toggle" ><i class="fa fa-product-hunt"></i></a>
							
						</li>
						
						
						
						<li class="dropdown head-dpdn">
						<a href="{{url("/viewcart")}}" class="dropdown-toggle" ><i class="fa fa-shopping-bag">
						    
						    
						    	<?php 
									
									$cart=DB::table('carts')->select(DB::raw("Count(p_id) as user"))->where('user_id',Auth::id())->pluck('user')->first();
									
										echo "<span class=badge blue1>$cart</span>";

							 ?>
						</i></a>
							
						</li>
						
					</ul>
			
			        
				
	
						
				
					
					
					



					<!--<div class="clearfix"> </div>-->
				</div>
				<!--notification menu end -->
				<!--<div class="clearfix"> </div>-->
			</div>
			<div class="header-right">
				
				
	
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="{{asset('shop/images/')}}2.jpg" alt=""> </span> 
									<div class="user-name">
										<p style="text-align: center; margin-bottom: 2px;"><?php

										 use App\User;
										 use Illuminate\Support\Facades\Auth;
										 
										 $id=Auth::id();
										
										 $user_name=User::where('id',$id)->first();
										 	echo "<p style=text-align:center;>$user_name->name</p>";
										 	echo "<p style=font-size:13px;>WELCOME TO XIXOTECH</p>";
										 ?>
										 	

										 </p>
										
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
							
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
							 <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <li style="margin-right: 1px;"><i class="fa fa-sign-out" >&nbsp Logout</i> </li>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>