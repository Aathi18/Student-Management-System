@extends('layout')
@section('content')

<style>
    body {
        background-color: #f7f9fc;
        font-family: 'Arial', sans-serif;
    }
    .card {
        border-radius: 15px;
        margin-top: 30px;
        background-color: #ffffff;
    }
    .card-header {
        background-color: #007bff;
        border-bottom: 2px solid #0056b3;
        font-family: 'Roboto', sans-serif;
        font-size: 1.5rem;
    }
    .card-body {
        padding: 20px;
    }
    .table {
        margin-bottom: 0;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
    .thead-dark {
        background-color: #343a40;
        color: #ffffff;
    }
    .btn-light {
        background-color: #f8f9fa;
        color: #007bff;
        border: 1px solid #007bff;
    }
    .btn-light:hover {
        background-color: #e2e6ea;
        color: #0056b3;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #218838;
        color: #fff;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    .btn-info {
        background-color: #17a2b8;
        border-color: #117a8b;
        color: #fff;
    }
    .btn-info:hover {
        background-color: #117a8b;
        border-color: #0e6d77;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #0069d9;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0056b3;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #c82333;
        color: #fff;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>

<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Batch Application</h2>
        <a href="{{ url('/batches/create') }}" class="btn btn-light btn-sm" title="Add New Batch">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
       
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->course->name }}</td>
                        <td>{{ $item->start_date }}</td>
                        <td>
                            <a href="{{ url('/batches/' . $item->id) }}" title="View Batch" class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true"></i> View
                            </a>
                            <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit Batch" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/batches/' . $item->id) }}" accept-charset="UTF-8" style="display:inline;">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch" onclick="return confirm('Confirm delete?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f7f9fc;
        font-family: 'Arial', sans-serif;
    }
    .card {
        border-radius: 15px;
        margin-top: 30px;
        background-color: #ffffff;
    }
    .card-header {
        background-color: #007bff;
        border-bottom: 2px solid #0056b3;
        font-family: 'Roboto', sans-serif;
        font-size: 1.5rem;
    }
    .card-body {
        padding: 20px;
    }
    .table {
        margin-bottom: 0;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
    .thead-dark {
        background-color: #343a40;
        color: #ffffff;
    }
    .table th {
        background-color: #007bff;
        color: white;
        font-family: 'Georgia', serif;
    }
    .btn-light {
        background-color: #f8f9fa;
        color: #007bff;
        border: 1px solid #007bff;
    }
    .btn-light:hover {
        background-color: #e2e6ea;
        color: #0056b3;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #218838;
        color: #fff;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    .btn-info {
        background-color: #17a2b8;
        border-color: #117a8b;
        color: #fff;
    }
    .btn-info:hover {
        background-color: #117a8b;
        border-color: #0e6d77;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #0069d9;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0056b3;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #c82333;
        color: #fff;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>
@endsection
