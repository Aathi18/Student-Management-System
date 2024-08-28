@extends('layout')
@section('content')

<div class="card">
    <div class="card-header" >Batches</div>
    <div class="card-body">
        <form action="{{url('batches')}}" method="post">
            {!! csrf_field() !!}
            <label for="#">Batch Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label for="#">Course Name</label><br>
            <input type="text" name="course_id" id="course_id" class="form-control"><br>
            <label for="#">Start Date</label><br>
            <input type="text" name="start_date" id="start_date" class="form-control"><br>
            <input type="submit" value="save"  class="btn btn-success"><br>

        </form>
    </div>
</div>

@stop