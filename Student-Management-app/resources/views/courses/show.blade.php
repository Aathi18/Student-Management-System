@extends('layout')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h2 class="mb-0">Course Details</h2>
    </div>
    <div class="card-body">
        <h5 class="card-title text-primary" style="font-family: 'Lora', serif;"">
            Name:<span class="text-dark"> {{$courses->name}}</span>
            </h5>
        <p class="card-text" style="font-family: 'Lora', serif;"><strong>Syllabus:</strong><span > {{$courses->syllabus}}</span>
        </p>
        <p class="card-text"style="font-family: 'Lora', serif;"><strong>Duration:</strong> <span > {{$courses->duration()}}</span>
        </p>
    </div>
<hr />
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
    .card-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: #0056b3;
    }
    .card-text {
        font-size: 1rem;
        color: #333;
    }
    hr {
        border: 0;
        height: 1px;
        background: #ccc;
        margin-top: 20px;
    }
</style>
