@extends('layout.app')

@section('content')
<h1> Test Type </h1>

<script>
$( document ).ready(function() {
});
</script>

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
<button class="nav-link" onclick="document.getElementById('id02').style.display='block'" >New Testing</button>

<div id="id02" class="modal">
<!-- <form class="modal-content animate" action="Patient/Login"> -->

    <div class="container" style="background-color:#fdffb9; ">
        <div  style="margin-top:15vh;">
      {!! Form::open(['url' => 'Testing/submit']) !!}
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h3 style="text-align: left; color: #00b525">Add new Testing</h3>
      </div>

      <div class="container">

      <div style="margin-left:15vh; margin-right:15vh">
        <div style="margin-left:5vh; " >
          <div class="form-group row" >
            <label class="col-md-4"> Testing Code </label>
            <input type="text" name='testingCode' class='form-control col-md-6'>
          </div>
          <div class="form-group row">
            <label class="col-md-4"> Cost </label>
            <input type="text" name='testingCode' class='form-control col-md-6'>
          </div>
          <div class="form-group row">
            <label class="col-md-4"> Sample Documrnt </label>
            <input type="file" name="Doc1" class="col-md-6">
          </div>
          <div class="form-group row">
            <label class="col-md-4">Description</label>
            <input type="text" name="description" class="form-control col-md-6">
          </div>
        </div>
      </div>
      </div>

      {{Form::submit('Save', ['class'=> 'btn btn-primary container'])}}
      <button type="button"  class=" btnlog cancelbtn ">Cancel</button>
      {!! Form::close() !!}
    </div>

    </div>
</div>




@endsection
