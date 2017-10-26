@if(isset($menu) && is_array($menu))
@foreach ($menu as $rm)
			<li>
				
				<a href="{!!url('/lotus/type/'.$rm->id)!!}">{!!$rm->type_of_bed!!}
				</a>
			</li>
@endforeach	
@endif