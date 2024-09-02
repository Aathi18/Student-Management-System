@extends('layout')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h2 class="mb-0">Edit Course</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('courses/' . $courses->id) }}" method="post">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $courses->id }}">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $courses->name }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="syllabus">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" value="{{ $courses->syllabus }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" name="duration" id="duration" value="{{ $courses->duration }}" class="form-control">
            </div>
            
            <input type="submit" value="Update" class="btn btn-primary btn-block">
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
    }
    .card:hover {
        transform: scale(1.02);
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
    .card-body {
        padding: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .btn-block {
        width: 100%;
    }
</style>
@endsection