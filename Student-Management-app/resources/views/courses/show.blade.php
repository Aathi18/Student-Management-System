@extends('layout')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h2 class="mb-0">Course Details</h2>
    </div>
    <div class="card-body">
        <h5 class="card-title text-primary">Name: {{$courses->name}}</h5>
        <p class="card-text"><strong>Syllabus:</strong> {{$courses->syllabus}}</p>
        <p class="card-text"><strong>Duration:</strong> {{$courses->duration()}}</p>
    </div>
</div>
@endsection
<style>
    body {
        background-color: #f0f2f5;
        font-family: 'Arial', sans-serif;
    }
    .card {
        border-radius: 12px;
        margin-top: 20px;
        background-color: #ffffff;
    }
    .card-header {
        background-color: #17a2b8; /* Teal color */
        border-bottom: 2px solid #117a8b; /* Darker teal color */
        color: #ffffff;
        text-align: center;
        font-size: 1.5rem;
    }
    .card-body {
        padding: 20px;
    }
    .card-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: #007bff; /* Blue color */
    }
    .card-text {
        font-size: 1rem;
        color: #555555; /* Dark grey color */
    }
    .card-text strong {
        color: #333333; /* Slightly darker grey for labels */
    }
</style>
