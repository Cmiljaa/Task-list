@extends('layouts.app')
@section('title', isset($task) ? 'Edit task' : 'Create task')
@section('styles')
<style>
    .error-message{
        color: red;
        size: 8px;
    }
</style>
@endsection
@section('content')
    <form action="{{isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store')}}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$task->title ?? old('title')}}">
            @error('title')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="title">Description</label>
            <textarea name="description" id="description" rows="5">{{$task->description ?? old('description')}}</textarea>
            @error('description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="title">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">{{$task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">
                @if(isset($task))
                    Update task
                @else
                    Add task
                @endif
            </button>
        </div>
    </form>
@endsection