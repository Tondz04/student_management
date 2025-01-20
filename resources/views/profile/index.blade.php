
@extends('profile.layout')
@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Student Management</h2>
        <div class="card-body">
            @session('success')
                <div class="alert alert-success" role="alert">{{session('success') }}</div>
                
            @endsession

           
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">Add Student</a>
            </div>
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Contact</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>    
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->contact }}</td>
                            <td><img src="{{ asset('storage/images/'.$student->image) }}" alt="image"></td>
                            <td>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure? ')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No students found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $students->links('pagination::bootstrap-5') }}

        </div>
    </div>
@endsection
