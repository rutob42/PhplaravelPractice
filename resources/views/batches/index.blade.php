@extends('layout')
@section('content')

<div class="card shadow-lg rounded-lg">
    <div class="card-header text-center">
        <h2>All Batches</h2>
    </div>
    <div class="card-body p-5">
        <a href="{{ url('/batches/create') }}" class="btn btn-success mb-4">Add New Batch</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Batch Name</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $batch)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $batch->name }}</td>
                            <td>{{ $batch->course->name }}</td> <!-- Accessing course relationship -->
                            <td>{{ $batch->start_date }}</td>
                            <td>
                                <a href="{{ url('/batches/' . $batch->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ url('/batches/' . $batch->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ url('/batches/' . $batch->id) }}" method="post" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
