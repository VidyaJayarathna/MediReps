@extends('layout.app')
@section('content')
{!! Form::open(['url' => 'upload/store']) !!}

<input type="hidden" name="size" value="1000000">
  <div>
    <input type="file" name="image">
  </div>
  <textarea
       id="text"
       cols="40"
       rows="4"
       name="image_text"
       placeholder="Say something about this image..."></textarea>

  <button type="submit" name="button"> upload image </button>
{!! Form::close() !!}

@endsection
