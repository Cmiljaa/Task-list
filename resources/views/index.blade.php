<h1>
    Hello i am a blade template!
</h1>

<div>
    @forelse ($tasks as $task)
        <a href="{{route('tasks.show', ['id => $task -> id'])}}">
            <p>{{$task -> title}}</p>
        </a>
    @empty
        <p>There are no tasks</p>
    @endforelse
</div>