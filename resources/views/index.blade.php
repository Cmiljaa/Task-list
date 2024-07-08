@extends('layouts.app')
@section('title', 'Hello i am a blade template!')

@section('content')
<div>
    @forelse ($tasks as $task)
    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
        <p>{{ $task->title }}</p>
        
    </a>
    @empty
        <p>There are no tasks</p>
    @endforelse
</div>
@endsection