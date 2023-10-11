@extends('layout')

<h1 class='text-center'>Done tasks</h1>

<a href="{{ url('clear-done-list') }}"><button onClick="return confirm('are you sure you want delete all done tasks')"
        class='btn btn-outline-danger'>Clear all done tasks</button> </a>

<a href="{{ url('/') }}"><button class='btn btn-outline-primary'>Back</button> </a>

@foreach ($tasks as $task)
    <hr class='w-75'>

    <h4 class='text-center'>title: {{ $task->title }}</h4>
    <p class='lead p-2  text-center'>Desc: {{ $task->description }}</p>
    <p class="text-center lead p-2">Estimated hours:{{ $task->estimated_hours }}</p>
    <p class='lead p-2 text-center'>Status: {{ $task->status }}</p>
    <hr class='w-75'>
@endforeach
