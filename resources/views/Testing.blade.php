@extends('layout.app')

@section('content')
<h1> Testing </h1>
{!! Form::open(['url' => 'Testing/submit']) !!}
<div>
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-3"> Testing Code </label>
      <input type="text" name='testingCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-3">Description</label>
      <input type="text" name="description" class="form-control col-md-6">
    </div>
  </div>
</div>

{{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
