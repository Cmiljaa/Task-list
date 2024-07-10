@extends('layouts.app')
@section('title', 'Hello i am a blade template!')

@section('content')
    <div>
        <a href="{{route('tasks.create')}}">Add task</a>
    </div>
    @forelse ($tasks as $task)
    <a href="{{ route('tasks.show', ['task' => $task->id]) }}">
        @if ($task->completed)
            <p><s>{{ $task->title }}</s></p>
        @else
            <p>{{ $task->title }}</p>
        @endif
    </a>
    @empty
        <p>There are no tasks</p>
    @endforelse

    @if ($tasks->count())
        <nav>
            {{$tasks->links()}}
        </nav>
    @endif
@endsection