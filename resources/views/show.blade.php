@extends('layouts.app')

@section('title', $task->title)
@section('content')
<h2>Description: {{$task -> description}}</h2>
@if ($task -> long_description)
    <h3>Long Description: {{$task -> long_description}}</h3>
@endif

<p>Created at {{$task -> created_at}}</p>
<p>Updated at {{$task -> updated_at}}</p>

<div>
    <form action="{{route('tasks.destroy', ['task' => $task->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete task</button>
    </form>
</div>

@endsection