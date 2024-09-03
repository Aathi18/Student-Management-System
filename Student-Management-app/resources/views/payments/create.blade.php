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
    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 10px;
        font-size: 1rem;
        margin-bottom: 15px;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    label {
        font-weight: bold;
        margin-bottom: 5px;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #218838;
        color: #fff;
        font-size: 1rem;
        padding: 10px 20px;
        border-radius: 8px;
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>

<div class="card">
    <div class="card-header">Payments</div>
    <div class="card-body">
        <form action="{{url('payments')}}" method="post">
            {!! csrf_field() !!}
            <label for="enrollment_id">Enrollment No</label><br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($enrollments as $id => $enroll_no )
                    <option value="{{ $id }}">{{ $enroll_no }} </option>
                @endforeach
            </select>

            <label for="paid_date">Paid Date</label><br>
            <input type="text" name="paid_date" id="paid_date" class="form-control"><br>

            <label for="amount">Amount</label><br>
            <input type="text" name="amount" id="amount" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>

@endsection
