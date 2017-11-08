{{ csrf_field() }}
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
  @if ($errors->has('promotion'))
    <span class="text-warning">
      <strong>{{ $errors->first('discount') }}</strong>
    </span>
  @endif
</div>

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}