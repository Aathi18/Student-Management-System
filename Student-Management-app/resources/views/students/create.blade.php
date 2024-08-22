@extends('layout')
@section('content')

<div class="card">
    <div class="card-header" >Student Page</div>
    <div class="card-body">
        <form action="{{url('students')}}" method="post">
            {!! csrf_field() !!}
            <label for="#">Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label for="#">Address</label><br>
            <input type="text" name="address" id="address" class="form-control"><br>
            <label for="#">Mobile</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" value="save"  class="btn btn-success"><br>

        </form>
    </div>
</div>

@stop