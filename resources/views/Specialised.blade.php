@extends('layout.app')

@section('content')
<h1> Specialised Area </h1>


<form class="form-inline my-2 my-lg-0 " action="/Specialised/search"  role="search">
    <div >
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="sratchItem">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" align="right">Search</button>
    </div>
</form>

<div class="container">
    <div style="margin-top: 2vh;">
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
                        <td>{{$testing->SpeCode}}</td>
                        <td>{{$testing->SpeDescription}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @elseif(isset($message))
            <p>{{$message}}</p>
        @endif
    </div>
</div>


<button class="nav-link" onclick="document.getElementById('id02').style.display='block'" >New Area</button>

<div id="id02" class="modal">
    <!-- <form class="modal-content animate" action="Patient/Login"> -->

    <div class="container" style="background-color:#fdffb9; ">
        <div  style="margin-top:15vh;">


{!! Form::open(['url' => 'Diagnosis/submit']) !!}
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h3 style="text-align: left; color: #00b525">Add new Area</h3>
            </div>
            <div class="container">
<div style="margin-left:15vh; margin-right:15vh">
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-4"> Specialised Code </label>
      <input type="text" name='diagnosisCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Specialised Area </label>
      <input type="text" name='diagnosisName' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-4">Description</label>
      <input type="text" name="description" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Sample Document </label>
      <input type="file" name="Doc1" class="col-md-6">
    </div>
  </div>
</div>
            </div>
{{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
        </div>

    </div>
</div>
@endsection
