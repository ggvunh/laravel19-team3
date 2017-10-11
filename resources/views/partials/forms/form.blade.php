<div class="form-group">
	{!! Form::label('room_name','Name of Room') !!} 
	<div class="form-controls {{ $errors->has('room_name') ? 'has-error' : '' }}">
		{!! Form::text('room_name',null,['class'=>'form-control']) !!}
	@if ( $errors->has('room_name') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('room_name') }}</strong>
	    </span>
  	@endif
	</div>

	{!! Form::label('room_price','Price of Room') !!} 
	<div class="form-controls {{ $errors->has('room_price') ? 'has-error' : '' }}">
		{!! Form::text('room_price',null,['class'=>'form-control']) !!}
	@if ( $errors->has('room_price') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('room_price') }}</strong>
	    </span>
  	@endif	
	</div>

	{!! Form::label('room_status','Status of Room') !!} 
	<div class="form-controls">
		{!! Form::radio('room_status', '1',['class'=>'form-control']) !!} Available <br>
		{!! Form::radio('room_status', '0',['class'=>'form-control']) !!} Not Available
	</div>

	{!! Form::label('description','Description') !!} 
	<div class="form-controls">
		{!! Form::textarea('description',null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('amount_people','People amount in Room') !!} 
	<div class="form-controls {{ $errors->has('amount_people') ? 'has-error' : '' }}">
		{!! Form::text('amount_people',null,['class'=>'form-control']) !!}
		@if ( $errors->has('amount_people') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('amount_people') }}</strong>
	    </span>
  	@endif
	</div>

	{!! Form::label('room_type_id','Room type') !!} 
	<div class="form-controls">
		{!! Form::select('room_type_id',$roomTypes,null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('images','Upload Image') !!}
	<div class="form-controls {{ $errors->has('room_price') ? 'has-error' : '' }}">
		{!! Form::file('images',['class'=>'form-control', 'id' => 'imageUpload']) !!}
	@if ( $errors->has('images') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('images') }}</strong>
	    </span>
  	@endif
	</div>

</div>
{!! Form::submit('Save Room',['class'=>'btn btn-primary pull-left']) !!}