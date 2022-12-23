@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Create a new Comic</h1>
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Add the comic title here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://..." aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Add the comic thumb here</small>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Comic Price</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Superman 1..." aria-describedby="seriesHelper">
            <small id="seriesHelper" class="text-muted">Add the comic series here</small>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Comic Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="1 agosto 1990..." aria-describedby="sale_dateHelper">
            <small id="sale_dateHelper" class="text-muted">Add the comic sale date here</small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Comic Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="adventure..." aria-describedby="typeHelper">
            <small id="typeHelper" class="text-muted">Add the comic type</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection