@extends('layouts.app')
@section('title', 'The list of tasks')

@section('content')
    <div>
        <p><a href="{{route('tasks.create')}}" class="link">Add task!</a></p>
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