@extends('Layouts.app')

@section('content')

<h2>Encrypt</h2>

<form method="post" action="{{route('post.add')}}">
    @csrf
    <label for="value">Value:</label><br>
    <input type="text"  name="value" placeholder=" " required><br>
    <span style="color:red">@error('value'){{$message}} @enderror </span>
    <input type="submit" value="Submit">
</form>
    @if($data != null)
       <div>{{$data}}}</div>
    @endif

@endsection
