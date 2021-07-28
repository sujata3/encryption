@extends('Layouts.app')

@section('content')

<h2>Form</h2>

<form method="post" action="{{route('post.add')}}">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" placeholder="Add title"><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description" placeholder="Add description"><br><br>
    <input type="submit" value="Submit">
</form>

@endsection
