@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="heading d-flex justify-content-between">
        <h2>Comics</h2>
        <div>
            <a href="{{route('comics.create')}}" class="btn btn-primary">Add Comic</a>
        </div>
    </div>
    <div class="row">
        <div class="col col-table">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumb</th>
                        <th>Price</th>
                        <th>Series</th>
                        <th>Sale_date</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{route('comics.show', $comic->id)}}">View</a>
                            <a href="{{route('comics.edit', $comic->id)}}">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <p>There are no comics</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection