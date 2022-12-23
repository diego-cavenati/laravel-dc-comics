@extends('layouts.app')

@section('content')

<div class="container mb-5">

    <form action="{{route('comics.update', $comic->id)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby="titleHelper" value="{{$comic->title}}">
            <small id="titleHelper" class="text-muted">Add the comic title here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4" value="{{$comic->description}}"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
            <small id="thumbHelper" class="text-muted">Add the comic thumb here</small>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Comic Price</label>
            <input type="text" name="series" id="series" class="form-control" aria-describedby="seriesHelper" value="{{$comic->series}}">
            <small id="seriesHelper" class="text-muted">Add the comic series here</small>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Comic Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHelper" value="{{$comic->sale_date}}">
            <small id="sale_dateHelper" class="text-muted">Add the comic sale date here</small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Comic Type</label>
            <input type="text" name="type" id="type" class="form-control" aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted">Add the comic type</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection