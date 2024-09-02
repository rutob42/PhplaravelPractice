@extends('layout')
@section('content')

<div class="card shadow-lg rounded-lg border-0">
    <div class="card-header bg-primary text-white text-center">
        <h2 class="mb-0">🎓 Student Details</h2>
    </div>
    <div class="card-body bg-light p-5">
        <div class="card-body">
            <h5 class="card-title font-weight-bold">📛 Name: <span class="text-primary">{{ $teachers->name }}</span></h5>
            <p class="card-text"><strong>🏠 Address:</strong> <span class="text-muted">{{ $teachers->address }}</span></p>
            <p class="card-text"><strong>📞 Mobile:</strong> <span class="text-muted">{{ $teachers->mobile }}</span></p>
        </div>
    </div>
</div>

@stop
