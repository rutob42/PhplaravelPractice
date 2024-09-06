@extends('layout')
@section('content')

<div class="card shadow-lg rounded-lg border-0">
    <div class="card-header bg-primary text-white text-center">
        <h2 class="mb-0">🎓 Students Page</h2>
    </div>
    <div class="card-body bg-light p-5">
        <form action="{{ url('courses') }}" method="post" class="needs-validation" novalidate>
            {!! csrf_field() !!}
            
            <div class="form-group">
                <label for="Name" class="font-weight-bold">Name</label>
                <input type="text" name="Name" id="Name" class="form-control form-control-lg rounded-pill" placeholder="Enter student's name">
                <div class="invalid-feedback">
                    Please provide a name.
                </div>
            </div>
            
            <div class="form-group">
                <label for="Syllabus" class="font-weight-bold">Syllabus</label>
                <input type="text" name="Syllabus" id="Syllabus" class="form-control" placeholder="Enter Syllabus">
                <div class="invalid-feedback">
                    Please provide an Syllabus
                </div>
            </div>
            
            <div class="form-group">
                <label for="Duration" class="font-weight-bold">Duration</label>
                <input type="text" name="Duration" id="Duration" class="form-control form-control-lg rounded-pill" placeholder="Enter Duration" required>
                <div class="invalid-feedback">
                    Please provide a Duration
                </div>
            </div>
            
            <div class="text-center">
                <input type="submit" value="Save" class="btn btn-success btn-lg rounded-pill px-5">
            </div>
        </form>
    </div>
</div>

@stop
