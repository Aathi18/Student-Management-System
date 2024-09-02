@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">
        <form action="{{url('batches')}}" method="post">
            {!! csrf_field() !!}
            
            <div class="form-group">
                <label for="name">Batch Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="course_id">Course Name</label>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="text" name="start_date" id="start_date" class="form-control">
            </div>
            
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>

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
    .form-group {
        margin-bottom: 15px;
    }
    label {
        font-weight: bold;
    }
    .form-control {
        border-radius: 6px;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ced4da;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>


@stop

