@extends('layouts.app')
@section('title', 'Create task')
@section('content')
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="title">Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
        <div>
            <label for="title">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection