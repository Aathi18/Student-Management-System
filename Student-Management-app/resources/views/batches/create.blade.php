@extends('layout')
@section('content')

<style>
    body {
        background-color: #f0f2f5;
        font-family: 'Arial', sans-serif;
    }
    .card {
        border-radius: 12px;
        margin-top: 20px;
        background-color: #ffffff;
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
        transform: scale(1.02);
    }
    .card-header {
        background-color: #007bff;
        color: white;
        border-bottom: 2px solid #0056b3;
        text-align: center;
        font-size: 1.5rem;
        font-family: 'Georgia', serif;
    }
    .card-body {
        padding: 20px;
    }
    label {
        font-weight: bold;
        color: #333;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>

<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <form action="{{url('batches')}}" method="post">
            {!! csrf_field() !!}
            <label for="name">Batch Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            
            <label for="course_id">Course Name</label><br>
            <select name="course_id" id="course_id" class="form-control">
                @foreach($courses as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select><br>

            <label for="start_date">Start Date</label><br>
            <input type="text" name="start_date" id="start_date" class="form-control"><br>
            
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>

@stop
