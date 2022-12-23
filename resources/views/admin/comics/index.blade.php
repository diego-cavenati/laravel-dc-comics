@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-table">
            <table>
                <thead>
                    <tr>
                        <th>title</th>
                        <th>description</th>
                        <th>thumb</th>
                        <th>price</th>
                        <th>series</th>
                        <th>sale_date</th>
                        <th>type</th>
                        <th>actions</th>
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
                            <a href="#">View</a>
                            <a href="#">Edit</a>
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