@extends('layout')
@section('content')

<div class="card shadow-lg rounded-lg border-0">
    <div class="card-header bg-primary text-white text-center">
        <h2 class="mb-0">🎓 Batches Page</h2>
    </div>
    <div class="card-body bg-light p-5">
        <form action="{{ url('batches') }}" method="post" class="needs-validation" novalidate>
            {!! csrf_field() !!}
            
            <div class="form-group">
                <label for="name" class="font-weight-bold">Batch Name</label>
                <input type="text" name="name" id="name" class="form-control form-control-lg rounded-pill" placeholder="Enter batches's name" required>
                <div class="invalid-feedback">
                    Please provide a name.
                </div>
            </div>
            
            <div class="form-group">
                <label for="course_id" class="font-weight-bold">Course ID</label>
                <input type="text" name="course_id" id="course_id" class="form-control form-control-lg rounded-pill" placeholder="Enter Course" required>
                <div class="invalid-feedback">
                    Please provide an course.
                </div>
            </div>
            
            <div class="form-group">
                <label for="start_date" class="font-weight-bold">Start Date</label>
                <input type="Date" name="start_date" id="start_date" class="form-control form-control-lg rounded-pill" placeholder="Enter mobile number" required>
                <div class="invalid-feedback">
                    
                </div>
            </div>
            
            <div class="text-center">
                <input type="submit" value="Save" class="btn btn-success btn-lg rounded-pill px-5">
            </div>
        </form>
    </div>
</div>

@stop
