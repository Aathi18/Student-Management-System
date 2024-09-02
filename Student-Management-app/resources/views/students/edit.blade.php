@extends('layout')
@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h4 class="mb-0">Edit Student Details</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('students/' . $students->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $students->id }}">
            
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control" placeholder="Enter student's name">
            </div>

            <div class="form-group mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" value="{{ $students->address }}" class="form-control" placeholder="Enter address">
            </div>

            <div class="form-group mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control" placeholder="Enter mobile number">
            </div>

            <div class="d-grid">
                <input type="submit" value="Update" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>
</div>

<style>
    body {
        background-color: #e9ecef;
    }
    .card {
        border-radius: 10px;
        margin-top: 20px;
    }
    .card-header {
     
        background-color: #007bff;
        border-bottom: 2px solid #0056b3;
        text-align: center;
        font-size: 1.25rem;
        font-family: 'Georgia', serif;
    }
    
    .form-control {
        border-radius: 5px;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        transition: all 0.2s ease-in-out;
    }
    .form-control:focus {
        border-color: #17a2b8;
        box-shadow: 0px 0px 10px rgba(23, 162, 184, 0.25);
    }
    .btn-block {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .btn-block:hover {
        background-color: #0056b3;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
    }
</style>

@stop
