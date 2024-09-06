@extends('layout')
@section('content')

<div class="card shadow-lg rounded-lg" >
  <div class="card-header text-center" style="font-size: 24px; font-weight: bold; letter-spacing: 2px;">
    Update Application Details
  </div>
  <div class="card-body p-4">
      
      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" />

        <div class="form-group">
          <label for="name" style="font-weight: bold;">Name</label>
          <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control" style="border-radius: 10px; padding: 10px; font-size: 16px;">
        </div>

        <div class="form-group">
          <label for="course_id" style="font-weight: bold;">Course ID</label>
          <input type="text" name="course_id" id="course_id" value="{{$batches->course_id}}" class="form-control" style="border-radius: 10px; padding: 10px; font-size: 16px;">
        </div>

        <div class="form-group">
          <label for="mobile" style="font-weight: bold;">Start Date</label>
          <input type="date" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control" style="border-radius: 10px; padding: 10px; font-size: 16px;">
        </div>

        <div class="text-center">
          <input type="submit" value="Update" class="btn btn-lg btn-light" style="border-radius: 20px; padding: 10px 30px; font-size: 18px; background-color: #f9f9f9; color: #2575fc; border: 2px solid #2575fc;">
        </div>
      </form>
   
  </div>
</div>

@stop
