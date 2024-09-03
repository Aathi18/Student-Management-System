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
        color: #007bff;
        margin-bottom: 10px;
    }
    .card-text {
        font-size: 1rem;
        color: #555555;
        margin-bottom: 10px;
    }
    hr {
        border-top: 1px solid #dddddd;
    }
</style>

<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h2 class="mb-0"> Payment Page</h2></div>
    <div class="card-body">
            <h5 class="card-title text-primary" style="font-family: 'Lora', serif;">Enrollment No: 
                <span>{{$payments->enrollment->enroll_no}}</span></h5>
            <p class="card-text" style="font-family: 'Lora', serif;">
                <strong>Paid Date:</strong> <span>{{$payments->paid_date}}</span></p>
            <p class="card-text" style="font-family: 'Lora', serif;">
                <strong>Amount:</strong> <span>{{$payments->amount}}</span></p>
        </div>
        <hr>
    </div>
</div>

@endsection
