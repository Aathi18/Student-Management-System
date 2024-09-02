@extends('layout')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h2 class="mb-0">Course Page</h2>
    </div>
    <div class="card-body">
        <form action="{{url('courses')}}" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="syllabus" class="form-label">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" class="form-control">
            </div>
            <div class="form-group">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" id="duration" class="form-control">
            </div>
            <input type="submit" value="Save" class="btn btn-success btn-block">
        </form>
    </div>
</div>

<style>
    body {
        background-color: #f7f9fc;
        font-family: 'Arial', sans-serif;
    }
    .card {
        border-radius: 15px;
        margin-top: 30px;
        background-color: #ffffff;
    }
    .card-header {
        background-color: #007bff;
        border-bottom: 2px solid #0056b3;
        text-align: center;
        font-size: 1.25rem;
        font-family: 'Georgia', serif;
    }
    .card-body {
        padding: 20px;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-label {
        font-size: 1rem;
        color: #333;
    }
    .form-control {
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
        padding: 0.5rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #218838;
        color: #fff;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>
@endsection
