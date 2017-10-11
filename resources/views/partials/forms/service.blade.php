<div class="form-group">
	{!! Form::label('service_name','Name of Service') !!} 
	<div class="form-controls {{ $errors->has('service_name') ? 'has-error' : '' }}">
		{!! Form::text('service_name',null,['class'=>'form-control']) !!}
	@if ( $errors->has('service_name') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('service_name') }}</strong>
	    </span>
  	@endif	
	</div>

	{!! Form::label('service_price','Price of Service') !!} 
	<div class="form-controls {{ $errors->has('service_price') ? 'has-error' : '' }}">
		{!! Form::text('service_price',null,['class'=>'form-control']) !!}
	@if ( $errors->has('service_price') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('service_price') }}</strong>
	    </span>
  	@endif	
	</div>

	{!! Form::label('description','Description') !!} 
	<div class="form-controls">
		{!! Form::textarea('description',null,['class'=>'form-control']) !!}
	</div>

</div>
{!! Form::submit('Save Service',['class'=>'btn btn-primary pull-left']) !!}