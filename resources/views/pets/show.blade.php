@extends('layouts.base')

@section('title', 'Show pet')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Show: {{ $pet->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('pets.index') }}" class="btn btn-danger">Go List</a>
            </div>
        </div>
        <div class="row shadow m-3 p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="name_pet" class="form-label">Pet Name:</label>
                        <span class="form-control" id="name_pet">{{ $pet->name }}</span>
                    </div>
                    <div class="mb-2">
                        <label for="species" class="form-label">Species:</label>
                        <span class="form-control" id="species">{{ $pet->species }}</span>
                    </div>
                    <div class="mb-2">
                        <label for="breed" class="form-label">Breed:</label>
                        <span class="form-control" id="breed">{{ $pet->breed }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <label for="owner_name" class="form-label">Owner Name:</label>
                        <span class="form-control" id="owner_name">{{ $pet->owner_name }}</span>
                    </div>
                    <div class="mb-2">
                        <label for="birth_date" class="form-label">Birth Date:</label>
                        <span class="form-control" id="birth_date">{{ $pet->birth_date }}</span>
                    </div>
                    <div class="mb-2">
                        <label for="gender" class="form-label">Gender:</label>
                        <span class="form-control" id="gender">{{ $pet->gender }}</span>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="sterilized" class="form-label">Sterilized:</label>
                    <span class="form-control" id="sterilized">{{ $pet->sterilized ? 'Yes' : 'No' }}</span>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="description" class="form-label">Description:</label>
                    <p class="form-control" id="description">{{ $pet->description }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
