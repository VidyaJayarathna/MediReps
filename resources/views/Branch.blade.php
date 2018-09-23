@extends('layout.app')

@section('content')
<h1> Branch Registation</h1>
{!! Form::open(['url' => 'Branch/submit']) !!}
<div>
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-3"> Branch Code </label>
      <input type="text" name='branchCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-3">Branch Name</label>
      <input type="text" name="branchName" class="form-control col-md-6">
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
