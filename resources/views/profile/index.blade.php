@extends('profile.layout')

@section('content')
    <div class="card mt-5" style="background-color: rgba(255, 255, 255, 0.32); backdrop-filter: blur(8px);">
    <h2 class="card-header text-white">List of Students</h2>
        <div class="card-body text-gray-900 dark:text-gray-100">
            @if (session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
            @if (session('danger'))
                <div class="alert alert-danger" role="alert" style="color: red;">{{ session('danger') }}</div>
            @endif
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('students.create') }}" class="btn btn-primary mt-2"> <i class="fa-solid fa-plus"></i> Add Student </a>
            </div>

            <table class="table table-striped mt-4" style="border-radius: 10px;  overflow: hidden;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Grade</th>
                        <th>Contact</th>
                        <th>Image</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->grade }}</td>
                            <td>{{ $student->contact }}</td>
                            <td><img src="{{ asset('image/'.$student->image) }}" alt="image" width="100" style="border-radius: 8px;"></td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-success btn-sm me-1"><i class="fa-regular fa-user"></i> Show</a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm me-1">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>    Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No students found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
