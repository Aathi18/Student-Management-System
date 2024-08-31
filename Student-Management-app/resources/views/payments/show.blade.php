@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Payment Page</div>
    <div class="card-body">

    <div class="card-body">
            <h5 class="card-title">Entrollment No: {{$payments->enrollment->enroll_no}}</h5>
            <p class="cart-text">Paid Date: {{$payments->paid_date}}</p>
            <p class="cart-text">Amount: {{$payments->amount}}</p>
     
    </div>
 </hr>
</div>
</div>
@endsection