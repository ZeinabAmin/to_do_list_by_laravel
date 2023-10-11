@extends('layout')


<h4 class="text-center">Add new task</h4>
@foreach ($errors->all() as $error)
    <p class="text-center text-danger">{{ $error }}</p>
@endforeach


<form action="{{ url('add-task') }}" method="POST">
    @csrf
    <div class="d-flex justify-content-center">
        <input type="text" name="title" class="mt-4 w-50 form-control" placeholder="title">
    </div>

    <div class="d-flex justify-content-center">
        <textarea name="description" class="mt-4 w-50 form-control " placeholder="description"></textarea>
    </div>

    <div class="d-flex justify-content-center">
        <input type="number" name="estimated_hours" class="mt-4 w-50 form-control" placeholder="estimatedhours">
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="mt-3 btn btn-outline-success">Add task</button>
    </div>

</form>
