@extends('layout')
<h1 class="text-center">All tasks</h1>

<a href="{{ url('add-task') }}"><button class="mr-2 btn btn-outline-success">Add task</button></a>
<a href="{{ url('done-list') }}"><button class="btn btn-outline-info">check done tasks</button></a>

@foreach ($tasks as $task)
    <hr class="w-75">
    <h2 class="text-center">Title: {{ $task->title }}</h2>
    <p class="text-center lead p-2">Desc: {{ $task->description }}</p>
    <p class="text-center lead p-2">Estimated hours:{{ $task->estimated_hours }}</p>
    <p class="text-center lead p-2">Status: {{ $task->status }}</p>
    <p class="text-center">created at: {{ $task->created_at }}</p>
    <div class=" d-flex justify-content-center">
        {{-- @if ($task->status == 'not done') --}}
        <form method="post" action="{{ url('done', $task->id) }}">
            @csrf
            <button type="submit" class="mr-2 btn btn-outline-info" name="submit">Done</button>
        </form>
        {{-- <a href="{{url('done',$task->id)}}"><button class="mr-2 btn btn-outline-info">Done</button></a> --}}
        <a href="{{ url('edit-task', $task->id) }}"><button class="mr-2 btn btn-outline-warning">Edit</button></a>
        <a href="{{ url('delete', $task->id) }}"><button
                onClick="return confirm('are you sure you want delete this task')"
                class="btn btn-outline-danger">Delete</button></a>
        {{-- @else
            <a href="{{ url('delete', $task->id) }}"><button
                    onClick="return confirm('are you sure you want delete this task')"
                    class="btn btn-outline-danger">Delete</button></a>
        @endif --}}

    </div>
@endforeach
