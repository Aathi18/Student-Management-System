@extends('layout')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Teacher Application</h2>
        <a href="{{ url('/teachers/create') }}" class="btn btn-light btn-sm" title="Add New Teacher">
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
                        <th scope="col">Address</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            <a href="{{ url('/teachers/' . $item->id) }}" title="View Teacher" class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true"></i> View
                            </a>
                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit Teacher" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/teachers/' . $item->id) }}" accept-charset="UTF-8" style="display:inline;">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm('Confirm delete?')">
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
        display: flex;
        justify-content: space-between;
        align-items: center;
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
    .table-hover tbody tr:hover {
        background-color: #f1f3f5;
    }
    .thead-dark th {
        background-color: #343a40;
        color: #ffffff;
        text-align: center;
    }
    .table td, .table th {
        vertical-align: middle;
        text-align: center;
    }
    .btn-info {
        background-color: #17a2b8;
        border-color: #117a8b;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #0056b3;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #b52a3b;
    }
</style>
@endsection
