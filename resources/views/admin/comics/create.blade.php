@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Create a new Comic</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelper" value="{{old('title')}}" required>
            <small id="titleHelper" class="text-muted">Add the comic title here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4" value="{{old('description')}}"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://..." aria-describedby="thumbHelper" value="{{old('thumb')}}">
            <small id="thumbHelper" class="text-muted">Add the comic thumb here</small>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Comic Price</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Superman 1..." aria-describedby="seriesHelper" value="{{old('series')}}">
            <small id="seriesHelper" class="text-muted">Add the comic series here</small>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Comic Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="1 agosto 1990..." aria-describedby="sale_dateHelper" value="{{old('sale_date')}}">
            <small id="sale_dateHelper" class="text-muted">Add the comic sale date here</small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Comic Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="adventure..." aria-describedby="typeHelper" value="{{old('type')}}">
            <small id="typeHelper" class="text-muted">Add the comic type</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection