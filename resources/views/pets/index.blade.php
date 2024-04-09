@extends('layouts.base')
@section('title', 'Pets list')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Pets</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <a href="{{ route('pets.create') }}" class="btn btn-primary">Create new Pet</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($pets as $pet)
                <div class="card mx-2 mb-3" style="width: 18rem;">
                    <img src="https://t3.ftcdn.net/jpg/05/76/94/70/360_F_576947051_DFT5rJEsF8yturr1DOlB3rxhtxswGSmP.jpg"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $pet->name }}</h5>
                        <p class="card-text"><strong>Species:</strong> {{ $pet->species }}</p>
                        <p class="card-text"><strong>Breed:</strong> {{ $pet->breed }}</p>
                        <p class="card-text"><strong>Owner Name:</strong> {{ $pet->owner_name }}</p>
                        <p class="card-text"><strong>Birth Date:</strong> {{ $pet->birth_date }}</p>
                        <p class="card-text"><strong>Gender:</strong> {{ $pet->gender }}</p>
                        <p class="card-text"><strong>Sterilized:</strong> {{ ($pet->sterilized == 1) ? 'Yes': 'No' }}
                        </p>
                        <p class="card-text"><strong>Description:</strong> {{ $pet->description }}</p>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm" href="{{route('pets.edit', $pet)}}">Update</a>
                            <a class="btn btn-warning btn-sm" href="{{route('pets.show', $pet)}}">Show</a>
                            <form method="post" action="{{ route('pets.destroy', $pet) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this pet?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
