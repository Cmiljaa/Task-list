@forelse ($tasks as $task)
@if($task -> id == $id)
    <p>To je task {{$task -> title}}</p>
@endif
    
@empty
    <p>NEMA NISTA</p>
@endforelse