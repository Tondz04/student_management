@extends('profile.layout')
@section('content')
    <div class="card mt-5"  style="background-color: rgba(255, 255, 255, 0.32); backdrop-filter: blur(8px);">
        <h2 class="card-header text-white"><td>{{ $student->name }}</td></h2>
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('students.index') }}" class="btn btn-primary mt-2">Back</a>
            </div>
            <table class="table  table-striped mt-4" style="border-radius: 10px; overflow: hidden;">
                <tbody>
                    <tr>
                        <td><strong>Image</strong></td>
                    
                        <td colspan="2"><img src="{{ asset('image/' .$student->image) }}" alt="image" width="100" class="img-fluid" style="border-radius: 8px;"></td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Age:</strong></td>
                        <td>{{ $student->age }}</td>
                    </tr>
                    <tr>
                        <td><strong>Grade:</strong></td>
                        <td>{{ $student->grade }}</td>
                    </tr>
                    <tr>
                        <td><strong>Contact:</strong></td>
                        <td>{{ $student->contact }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection