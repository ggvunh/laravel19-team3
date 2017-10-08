
 <section class="section-room bg-white">
	<div class="container">
		<div class="room-wrap-1">
			<div class="row">
				<!-- ITEM -->
				<div class="col-md-6">
				    <div class="room_item-1">				    
				        <h2><a href="">{!!$room->room_types->type_of_bed!!}</a></h2>				    
				        <div class="img">
				            <a href="{!!url('/hotels/'.$room->id)!!}">
				            	<img src="{!!url('images/upload/rooms/'.$room->images->url)!!}" alt="">
				            </a>
				        </div>				    
				        <div class="desc">
				            <p>{!!$room->description!!}</p>
				            <ul>
				                <li>
				                	Amount: {!!$room->amount_people!!} Person
				                </li>

				                <li>
				                	Status {!!$room->room_status == 1 ? 'Aailable' : 'Not Aailable'!!}	Room                
				                </li>
				            </ul>
				        </div>				    
				        <div class="bot">
				            <span class="price">Starting <span class="amout">{!!number_format($room->room_price)!!}VND</span> /days</span>
				        </div>
				    
				    </div>
				</div>
				<!-- END / ITEM -->
			</div>
		</div>
	</div>
