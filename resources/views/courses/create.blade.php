@extends('layout')
@section('content')

<div class="card shadow-lg rounded-lg border-0">
    <div class="card-header bg-primary text-white text-center">
        <h2 class="mb-0"> Courses Page</h2>
    </div>
    <div class="card-body bg-light p-5">
        <form action="{{ url('courses') }}" method="post" class="needs-validation" novalidate>
            {!! csrf_field() !!}
            
            <div class="form-group">
                <label for="name" class="font-weight-bold">Course Name</label>
                <input type="text" name="name" id="name" class="form-control form-control-lg rounded-pill" placeholder="Enter courses's name" required>
                <div class="invalid-feedback">
                    Please provide a name.
                </div>
            </div>
            
            <div class="form-group">
                <label for="address" class="font-weight-bold">Syllabus</label>
                <input type="text" name="address" id="address" class="form-control form-control-lg rounded-pill" placeholder="Enter address" required>
                <div class="invalid-feedback">
                    Please provide an address.
                </div>
            </div>
            
            <div class="form-group">
                <label for="mobile" class="font-weight-bold">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control form-control-lg rounded-pill" placeholder="Enter mobile number" required>
                <div class="invalid-feedback">
                    Please provide a mobile number.
                </div>
            </div>
            
            <div class="text-center">
                <input type="submit" value="Save" class="btn btn-success btn-lg rounded-pill px-5">
            </div>
        </form>
    </div>
</div>

@stop
