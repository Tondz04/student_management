@extends('profile.layout')

@section('content')
    <div class="card mt-5" style="background-color: rgba(255, 255, 255, 0.32); backdrop-filter: blur(8px); ">
        <h2 class="card-header text-white">Edit Profile</h2>
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ route('students.index') }}" class="btn btn-primary mt-2">Back</a>
            </div>
            <form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="bg-white fw-bold p-4 mt-3" style="border-radius: 10px;">
                    <div class="form-group mt-4">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" id="name" placeholder="Enter name" value="{{ $student->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="age">Age</label>
                        <input type="number" class="form-control @error('age') is-invalid @enderror"
                               name="age" id="age" placeholder="Enter age" value="{{ $student->age }}">
                        @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="grade">Grade</label>
                        <input type="text" class="form-control @error('grade') is-invalid @enderror"
                               name="grade" id="grade" placeholder="Enter grade" value="{{ $student->grade }}">
                        @error('grade')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control @error('contact') is-invalid @enderror"
                               name="contact" id="contact" placeholder="Enter contact" value="{{ $student->contact }}">
                        @error('contact')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="image">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                               name="image" id="image">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success mt-3">Update</button>
                </div>
            </form>
        </div>
    </div>

    
    <style>
        
        .form-control {
            background-color: #f0f0f0; 
            color: #333; 
        }

        
        .form-control::placeholder {
            background-color: rgba(0, 0, 0, 0.1); 
            color: #555; 
        }

    </style>
@endsection
