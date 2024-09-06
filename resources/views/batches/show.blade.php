@extends('layout')
@section('content')

<div class="card shadow-lg rounded-lg">
    <div class="card-header text-center">
        <h2>Batch Details</h2>
    </div>
    <div class="card-body p-5">
        <h4>Batch Name: {{ $batch->name }}</h4>
        <h5>Course: {{ $batch->course->name }}</h5> <!-- Accessing course relationship -->
        <p>Start Date: {{ $batch->start_date }}</p>

        <a href="{{ url('/batches') }}" class="btn btn-secondary">Back to Batches</a>
    </div>
</div>

@endsection
