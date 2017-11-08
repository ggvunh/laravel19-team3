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
  @if ($errors->has('discount'))
    <span class="text-warning">
      <strong>{{ $errors->first('discount') }}</strong>
    </span>
  @endif
</div>

{!! Form::submit('ok', ['class' => 'btn btn-primary']) !!}