@extends('layouts.app')

@section('title', $task->title)
@section('content')
<div class="mb-4">
    <a href="{{ route('tasks.index') }}" class="link">← Go back to the task list!</a>
  </div>
<p class="desc">Description: {{$task -> description}}</p>
@if ($task -> long_description)
    <p class="desc">Long Description: {{$task -> long_description}}</p>
@endif

<p>Created at {{$task -> created_at->diffForHumans()}}</p>
<p>Updated at {{$task -> updated_at->diffForHumans()}}</p>
<p>{{$task -> completed ? "Completed" : "Not completed"}}</p>

<div>
    <a href="{{route('tasks.edit', ['task' => $task])}}" class="link">Edit task</a>
</div>

<div>
    <form action="{{route('tasks.destroy', ['task' => $task])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete task</button>
    </form>
</div>

<div>
    <form action="{{route('tasks.toggle-complete', ['task' => $task])}}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-primary">Mark as {{$task->completed ? "not completed" : "completed"}}</button>
    </form>
</div>

@endsection