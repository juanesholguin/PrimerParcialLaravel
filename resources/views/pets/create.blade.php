@extends('layouts.base')

@section('title', 'Create new Pet')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Create a new Pet</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('pets.index') }}" class="btn btn-danger">Go List</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="POST" action="{{ route('pets.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                       value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="species" class="form-label">Species</label>
                <input type="text" class="form-control" id="species" name="species" placeholder="Enter species"
                       value="{{ old('species') }}">
            </div>
            <div class="mb-3">
                <label for="breed" class="form-label">Breed</label>
                <input type="text" class="form-control" id="breed" name="breed" placeholder="Enter breed"
                       value="{{ old('breed') }}">
            </div>
            <div class="mb-3">
                <label for="owner_name" class="form-label">Owner Name</label>
                <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Enter owner name"
                       value="{{ old('owner_name') }}">
            </div>
            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth Date</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date"
                       value="{{ old('birth_date') }}">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender">
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="unknown" {{ old('gender') == 'unknown' ? 'selected' : '' }}>Unknown</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sterilized">Sterilized:</label>
                <select class="form-control" id="sterilized" name="sterilized">
                    <option value="1" {{ old('sterilized') == '1' ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('sterilized') == '0' ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"
                          rows="3">{{ old('description') }}</textarea>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
