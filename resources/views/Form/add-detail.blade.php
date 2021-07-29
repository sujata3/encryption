@extends('Layouts.app')

@section('content')

<h2>Encrypt</h2>

<form method="post" action="{{route('post.add')}}">
    @csrf
    <label for="value">Value:</label><br>
    <input type="text"  name="value" placeholder=" ">
    <div style="color:red">@error('value'){{$message}} @enderror </div>
    <button type="submit" >Submit</button>
</form>
    @if(isset($data))
       <div>{{$data}}}</div>
    @endif

@endsection
