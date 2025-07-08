@extends('admin.master')

@section('content')
<div class="genre-wrapper">
    <div class="title-box">
        <h2 class="section-title">Manage Genres</h2>
    </div>

    <div style="text-align: right; margin: 10px 0;">
        <a href="{{ route('admin.genre.create') }}" class="add-link">Add +</a>
    </div>

    <div class="table-responsive">
        <table class="styled-table-genre">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Genre Name</th>
                    <th>Description</th>
                    <th>Total Movies</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genres as $genre)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$genre->name}}</td>
                    <td>{{$genre->description}}</td>
                    <td></td>
                    <td>
                        <a href="#"><i class="fa fa-edit" style="font-size: 20px;"></i></a>
                        &nbsp;
                        <form action="" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this movie?')">
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
.genre-wrapper {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}

.title-box {
    background-color: #f9fafb;
    padding: 20px;
    border-left: 6px solid  #059669;
    border-right: 6px solid #059669;   
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
    background-color: #10b981;
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
.styled-table-genre {
    width: 100%;
    min-width: 700px;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
    margin-top: 10px;
}

.styled-table-genre thead {
    background-color: #10b981;
    color: #ffffff;
}

.styled-table-genre th,
.styled-table-genre td {
    padding: 12px 14px;
    text-align: left;
    white-space: nowrap;
}

.styled-table-genre tbody tr:nth-child(even) {
    background-color: #f3f4f6;
}

/* Action buttons */
.styled-table-genre a {
    color: #059669;
    text-decoration: none;
    font-weight: 500;
    margin-right: 8px;
}

.styled-table-genre button {
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

    .styled-table-genre th,
    .styled-table-genre td {
        padding: 10px;
        font-size: 14px;
    }
}
</style>
@endsection
