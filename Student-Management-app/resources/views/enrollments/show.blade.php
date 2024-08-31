@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Enrollement Page</div>
    <div class="card-body">

    <div class="card-body">
            <h5 class="card-title">Enroll No: {{$enrollments->enroll_no}}</h5>
            <p class="cart-text">Batch: {{$enrollments->batch_id}}</p>
            <p class="cart-text">Student: {{$enrollments->student_id}}</p>
            <p class="cart-text">Join Date: {{$enrollments->join_date}}</p>
            <p class="cart-text">Fee: {{$enrollments->fee}}</p>
            
     
    </div>
 </hr>
</div>
</div>
@endsection