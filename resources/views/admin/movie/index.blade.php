@extends('admin.master')

@section('content')
<div class="movies-wrapper">
    <div class="title-box">
        <h2 class="section-title">Manage Movies</h2>
    </div>

    <div style="text-align: right; margin: 10px 0;">
        <a href="{{ route('admin.movie.create') }}" class="add-link">Add +</a>
    </div>

    <div class="table-responsive">
        <table class="styled-table-movie">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Genre</th>
                    <th>Release</th>
                    <th>Duration</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><a href="{{ asset($movie->image) }}" target="_blank"><img src="{{ asset($movie->image) }}"></a></td>
                    <td>{{$movie->name}}</td>
                    <td>{{$movie->description}}</td>
                    <td>{{$movie->genre->name}}</td>
                    <td>{{$movie->release_date}}</td>
                    <td>{{$movie->duration}}</td>
                    <td>{{$movie->rating}}</td>
                    <td>
                        <a href="{{ route('admin.movie.edit',$movie->id) }}"><i class="fa fa-edit" style="font-size: 20px;"></i></a>
                        &nbsp;
                        <form action="{{ route('admin.movie.delete', $movie->id) }}" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Delete">
                            <i class="fa fa-trash" style="font-size: 20px;"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
.movies-wrapper {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}

.title-box {
    background-color: #f9fafb;
    padding: 20px;
    border-left: 6px solid #4f46e5;
    border-right: 6px solid #4f46e5;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.03);
}

.section-title {
    font-size: 22px;
    font-weight: 700;
    color: #111827;
    margin: 0;
}

.add-link {
    background-color: #4f46e5;
    color: #ffffff;
    padding: 8px 14px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.add-link:hover {
    background-color: #3730a3;
}


/* Responsive container for table */
.table-responsive {
    width: 100%;
    overflow-x: auto;
}

/* Table styles */
.styled-table-movie {
    width: 100%;
    min-width: 800px;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
    margin-top: 10px;
}

.styled-table-movie thead {
    background-color: #4f46e5;
    color: #ffffff;
}

.styled-table-movie th,
.styled-table-movie td {
    padding: 12px 14px;
    text-align: left;
    white-space: nowrap;
}

.styled-table-movie tbody tr:nth-child(even) {
    background-color: #f9fafb;
}

.styled-table-movie img {
    border-radius: 4px;
    width: 45px;
    height: auto;
}

/* Action buttons */
.styled-table-movie a {
    color: #2563eb;
    text-decoration: none;
    font-weight: 500;
    margin-right: 8px;
}

.styled-table-movie button {
    background-color: transparent;
    border: none;
    color: #dc2626;
    cursor: pointer;
    font-weight: 500;
}

/* Responsive adjustments for smaller screens */
@media (max-width: 768px) {
    .section-title {
        font-size: 20px;
        text-align: center;
    }

    .styled-table-movie th,
    .styled-table-movie td {
        padding: 10px;
        font-size: 14px;
    }

    .styled-table-movie img {
        width: 35px;
    }
}
</style>
@endsection
