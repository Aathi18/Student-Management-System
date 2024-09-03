@extends('layout')
@section('content')

<style>
    body {
        background-color: #f7f9fc;
        font-family: 'Arial', sans-serif;
    }
    .card {
        border-radius: 12px;
        margin-top: 20px;
        background-color: #ffffff;
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .card-text {
        font-size: 1rem;
        color: #333;
        margin-bottom: 8px;
    }
    hr {
        border: 0;
        height: 1px;
        background: #ccc;
        margin-top: 20px;
    }
</style>

<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h2>Enrollment Details</h2></div>
    <div class="card-body">
        <h5 class="card-title text-primary" style="font-family: 'Lora', serif;">Enroll No: {{$enrollments->enroll_no}}</h5>
        <p class="card-text" style="font-family: 'Lora', serif;">
                <strong>Batch:</strong> <span>{{$enrollments->batch_id}}</span></p>
        <p class="card-text"  style="font-family: 'Lora', serif;">
                <strong>Student:</strong> <span>{{$enrollments->student_id}}</span></p>
        <p class="card-text"  style="font-family: 'Lora', serif;">
                <strong>Join Date:</strong> <span>{{$enrollments->join_date}}</span></p>
        <p class="card-text"  style="font-family: 'Lora', serif;">
                <strong>Fee: </strong><span>{{$enrollments->fee}}</span></p>
    </div>
    <hr />
</div>

@endsection
