{{ csrf_field() }}
<div class="col-md-4">
<div class="form-group">
  {!! Form::label('code', 'Code ') !!}
  <div class="form-controls">
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
  </div>
  @if ($errors->has('code'))
    <span class="text-warning">
      <strong>{{ $errors->first('code') }}</strong>
    </span>
  @endif
</div>

<div class="form-group">
  {!! Form::label('discount', 'discount') !!}
  <div class="form-controls">
    {!! Form::text('discount', null, ['class' => 'form-control']) !!}
  </div>
  @if ($errors->has('discount'))
    <span class="text-warning">
      <strong>{{ $errors->first('discount') }}</strong>
    </span>
  @endif
</div>

{!! Form::submit('ok', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('admins/promotions/index') }}" class="label label-primary" style="padding: 10px">Back</a>
</div>