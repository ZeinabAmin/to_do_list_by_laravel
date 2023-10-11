@extends('layout')

<form action="{{ url('edit-task', $task->id) }}" method="POST">
    @csrf

    <div class="d-flex justify-content-center">
        <input type="text" value="{{ $task->title }}" name="title" class="mt-4 w-50 form-control" placeholder="title">
    </div>

    <div class="d-flex justify-content-center">
        <input type="number" value="{{ $task->estimated_hours }}" name="estimated_hours" class="mt-4 w-50 form-control"
            placeholder="estimatedhours">
    </div>

    <div class="d-flex justify-content-center">
        <textarea name="description" class="mt-4 w-50 form-control " placeholder="description">
    {{ $task->description }}
</textarea>
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="mt-3 btn btn-outline-success">edit task</button>
    </div>

</form>
