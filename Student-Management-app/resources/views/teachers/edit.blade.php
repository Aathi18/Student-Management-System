@extends('layout')
@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-info text-white text-center">
        <h3 class="mb-0">Edit Teacher</h3>
    </div>
    <div class="card-body">
        <form action="{{ url('teachers/' . $teachers->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $teachers->id }}">  
            <div class="form-group">
                <label for="name" class="font-weight-bold" style="font-family: 'Roboto', sans-serif;">Name</label><br>
                <input type="text" name="name" id="name" value="{{ $teachers->name }}" class="form-control" style="font-family: 'Roboto', sans-serif;"><br>
            </div>
            <div class="form-group">
                <label for="address" class="font-weight-bold" style="font-family: 'Lora', serif;">Address</label><br>
                <input type="text" name="address" id="address" value="{{ $teachers->address }}" class="form-control" style="font-family: 'Lora', serif;"><br>
            </div>
            <div class="form-group">
                <label for="mobile" class="font-weight-bold" style="font-family: 'Open Sans', sans-serif;">Mobile</label><br>
                <input type="text" name="mobile" id="mobile" value="{{ $teachers->mobile }}" class="form-control" style="font-family: 'Open Sans', sans-serif;"><br>
            </div>
            <input type="submit" value="Update" class="btn btn-success btn-block"><br>
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
    .form-group {
        margin-bottom: 15px;
    }
    .btn-block {
        width: 100%;
    }
</style>
@endsection
