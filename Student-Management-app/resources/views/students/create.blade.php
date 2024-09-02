@extends('layout')
@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Student Page</h4>
    </div>
    <div class="card-body">
        <form action="{{url('students')}}" method="post">
            {!! csrf_field() !!}
            
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter student's name">
            </div>
            
            <div class="form-group mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter address">
            </div>
            
            <div class="form-group mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile number">
            </div>
            
            <div class="d-grid">
                <input type="submit" value="Save" class="btn btn-success btn-block">
            </div>
        </form>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
    }
    .card {
        border-radius: 10px;
        margin-top: 20px;
    }
    .form-control {
        border-radius: 5px;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    }
    .btn-block {
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-block:hover {
        background-color: #218838;
    }
</style>

@stop
