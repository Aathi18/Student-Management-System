@extends('layout')
@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h3 class="mb-0">Student Details</h3>
    </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title text-primary font-weight-bold" style="font-family: 'Lora', serif;">
                <i class="fa fa-user"></i> Name: <span class="text-dark">{{$students->name}}</span>
            </h5>
            <p class="card-text" style="font-family: 'Lora', serif;">
                <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>{{$students->address}}</span>
            </p>
            <p class="card-text" style="font-family: 'Lora', serif;">
                <i class="fa fa-phone"></i> <strong>Mobile:</strong> <span >{{$students->mobile}}</span>
            </p>
        </div>
    </div>
    <hr />
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
@endsection
