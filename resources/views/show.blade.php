@extends('layouts.app')

@section('title', $task->title)
@section('content')
<h2>Description: {{$task -> description}}</h2>
@if ($task -> long_description)
    <h3>Long Description: {{$task -> long_description}}</h3>
@endif

<p>Created at {{$task -> created_at}}</p>
<p>Updated at {{$task -> updated_at}}</p>

@endsection