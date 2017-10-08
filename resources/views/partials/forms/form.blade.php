<div class="form-group">
	{!! Form::label('room_name','Name of Room') !!} 
	<div class="form-controls">
		{!! Form::text('room_name',null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('room_price','Price of Room') !!} 
	<div class="form-controls">
		{!! Form::text('room_price',null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('room_status','Status of Room') !!} 
	<div class="form-controls">
		{!! Form::radio('room_status', '1',['class'=>'form-control']) !!} Available
		{!! Form::radio('room_status', '0',['class'=>'form-control']) !!} Not Available
	</div>

	{!! Form::label('description','Description') !!} 
	<div class="form-controls">
		{!! Form::textarea('description',null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('amount_people','People amount in Room') !!} 
	<div class="form-controls">
		{!! Form::text('amount_people',null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('room_type_id','Room type') !!} 
	<div class="form-controls">
		{!! Form::select('room_type_id',$roomTypes,null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('service_hotel_id','Service of Hotel') !!} 
	<div class="form-controls">
		{!! Form::select('service_hotel_id',$serviceHotels,null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('image_id','Image pack of Room') !!} 
	<div class="form-controls">
		{!! Form::select('image_id',$images,null,['class'=>'form-control']) !!}
	</div>


</div>
{!! Form::submit('Save Room',['class'=>'btn btn-primary pull-left']) !!}