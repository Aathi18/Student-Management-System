@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teacher Page</div>
    <div class="card-body">

    <div class="card-body">
            <h5 class="card-title">Name: {{$teachers->name}}</h5>
            <p class="cart-text">Address: {{$teachers->address}}</p>
            <p class="cart-text">Mobile: {{$teachers->mobile}}</p>
     
    </div>
 </hr>
</div>
</div>
@endsection