<div class="form-group">
	{!! Form::label('service_name','Name of Service') !!} 
	<div class="form-controls">
		{!! Form::text('service_name',null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('service_price','Price of Service') !!} 
	<div class="form-controls">
		{!! Form::number('service_price',null,['class'=>'form-control']) !!}
	</div>

	{!! Form::label('description','Description') !!} 
	<div class="form-controls">
		{!! Form::textarea('description',null,['class'=>'form-control']) !!}
	</div>

</div>
{!! Form::submit('Save Service',['class'=>'btn btn-primary pull-left']) !!}