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
   
    .btn-success {
        background-color: #28a745;
        border-color: #218838;
        color: #fff;
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    .btn-info {
        background-color: #17a2b8;
        border-color: #117a8b;
        color: #fff;
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }
    .btn-info:hover {
        background-color: #117a8b;
        border-color: #0d5a73;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #0069d9;
        color: #fff;
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }
    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0056b3;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #bd2130;
        color: #fff;
        transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
    }
    .btn-danger:hover {
        background-color: #bd2130;
        border-color: #a71d2a;
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
    .table-responsive {
        margin-top: 15px;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
    }
    .table th, .table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }
    .table th {
        background-color: #007bff;
        color: white;
        font-family: 'Georgia', serif;
    }
</style>

<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Payment Application</h2>
    
        <a href="{{url('/payments/create')}}" class="btn btn-light btn-sm" title="Add New Payment">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Enrollment No</th>
                        <th scope="col">Paid Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enrollment->enroll_no }}</td>
                            <td>{{ $item->paid_date }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>
                                <a href="{{url('/payments/'.$item->id)}}" title="View Payment">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{url('/payments/'.$item->id.'/edit')}}" title="Edit Payment">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <form method="POST" action="{{url('/payments'. '/' .$item->id)}}" accept-charset="UTF-8" style="display:inline;">
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm('Confirm delete?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                                <a href="{{url('/report/report1/'.$item->id)}}" title="Print Payment">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fa fa-print" aria-hidden="true"></i> Print
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
