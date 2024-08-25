@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Course Page</div>
    <div class="card-body">

    <div class="card-body">
            <h5 class="card-title">Name: {{$courses->name}}</h5>
            <p class="cart-text">Syllabus: {{$courses->syllabus}}</p>
            <p class="cart-text">Duration: {{$courses->duration}}</p>
     
    </div>
 </hr>
</div>
</div>
@endsection