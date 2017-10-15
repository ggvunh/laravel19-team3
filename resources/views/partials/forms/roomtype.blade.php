<div class="form-group">
	{!! Form::label('type_of_bed','Name of Room Type') !!} 
	<div class="form-controls {{ $errors->has('type_of_bed') ? 'has-error' : '' }}">
		{!! Form::text('type_of_bed',null,['class'=>'form-control']) !!}
	@if ( $errors->has('type_of_bed') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('type_of_bed') }}</strong>
	    </span>
  	@endif	
	</div>

	{!! Form::label('description','Description') !!} 
	<div class="form-controls {{ $errors->has('description') ? 'has-error' : '' }}">
		{!! Form::textarea('description',null,['class'=>'form-control']) !!}
	@if ( $errors->has('description') )
	    <span class="text-warning">
	        <strong> {{ $errors->first('description') }}</strong>
	    </span>
  	@endif		
	</div>

</div>
{!! Form::submit('Save',['class'=>'btn btn-primary pull-left']) !!}