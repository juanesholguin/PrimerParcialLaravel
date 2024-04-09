@extends('layouts.base')

@section('title', 'Edit Pet')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Edit pet</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('pets.index') }}" class="btn btn-danger">Go List</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="POST" action="{{ route('pets.update', $pet) }}">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-md-6 mt-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $pet->name) }}"
                           required>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="species" class="form-label">Species</label>
                    <input type="text" class="form-control" id="species" name="species"
                           value="{{ old('species', $pet->species) }}" required>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="breed" class="form-label">Breed</label>
                    <input type="text" class="form-control" id="breed" name="breed"
                           value="{{ old('breed', $pet->breed) }}" required>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="owner_name" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="owner_name" name="owner_name"
                           value="{{ old('owner_name', $pet->owner_name) }}" required>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="birth_date" class="form-label">Birth Date</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date"
                           value="{{ old('birth_date', $pet->birth_date) }}" required>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" name="gender">
                        <option value="male" {{ old('gender', $pet->gender) == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender', $pet->gender) == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="unknown" {{ old('gender', $pet->gender) == 'unknown' ? 'selected' : '' }}>Unknown</option>
                    </select>
                </div>
                <div class="col-md-6 mt-2">
                    <label for="sterilized" class="form-label">Sterilized</label>
                    <input type="text" class="form-control" id="sterilized" name="sterilized"
                           value="{{ old('sterilized', $pet->sterilized) }}" required>
                </div>
                <div class="col-md-12 mt-2">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"
                              required>{{ old('description', $pet->description) }}</textarea>
                </div>
            </div>
            @if($errors->any())
                <div class="col-12 mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>


        </form>
    </div>
@endsection
