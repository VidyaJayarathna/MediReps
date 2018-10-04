@extends('layout.app')

@section('content')
<h1> Testing </h1>
<form class="form-inline my-2 my-lg-0 " action="/Testing/search"  role="search">
  <div >
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="sratchItem">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" align="right">Search</button>
  </div>
</form>

<div class="container">
  <div style="margin-top:2vh;">
			@if(isset($details))
		  <table class="table table-striped">
				<thead>
					<tr>
						<th>Code</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $testing)
					<tr>
						<td>{{$testing->testingCode}}</td>
						<td>{{$testing->testingDes}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
  </div>
</div>
{!! Form::open(['url' => 'Testing/submit']) !!}
<div>
  <div style="margin-left:5vh">
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
