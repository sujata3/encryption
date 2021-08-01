@extends('Layouts.app')

@section('content')

<h2>Encrypt</h2>

<form method="post" id="encrypt" action="{{route('value.hash')}}">
    @csrf
    <br>
    <select name="algorithms" id="encrypt">
        <option value="">Select an algorithm</option>
        <option value="md5">md5</option>
        <option value="sha1">sha1</option>
        <option value="bcrypt">bcrypt</option>
        <option value="base64_encode">base64</option>
    </select>
    <br>
    <br>
    <label for="str-value">String Value:</label><br>
    <input type="text"  name="value" placeholder=" ">
    <div style="color:red">@error('value'){{$message}} @enderror </div>
    <br>
    <button form="encrypt" type="hash" >hash!</button>

    @if(Session::has('data'))
        <div class="alert alert-success">
            {{Session::get('data')}}
        </div>
    @endif
</form>
    <hr>
<h2>Validation</h2>
<form method="post" id="decrypt" action="{{route('value.validate')}}">
    @csrf

    <br>
    <select name="algorithms" id="decrypt">
        <option value="">Select an algorithm</option>
        <option value="md5">md5</option>
        <option value="sha1">sha1</option>
        <option value="bcrypt">bcrypt</option>
        <option value="base64_encode">base64</option>
    </select>
    <br>
    <br>
    <label for="hash-Value">Hash Value:</label><br>
    <input type="text"  name="encryptValue" placeholder=" ">
    <div style="color:red">@error('encryptValue'){{$message}} @enderror </div>
    <br>
    <label for="string-Value">String Value:</label><br>
    <input type="text"  name="strValue" placeholder=" ">
    <div style="color:red">@error('strValue'){{$message}} @enderror </div>
    <br>
    <button form="decrypt" type="submit" >test</button>
</form>


@if(Session::has('matched'))
    <div class="alert alert-success">
        {{Session::get('matched')}}
    </div>
@endif

@if(Session::has('do not matched'))
    <div class="alert alert-danger">
        {{Session::get('do not matched')}}
    </div>
@endif

@endsection
