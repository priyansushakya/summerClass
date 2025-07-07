@extends('admin.master')

@section('content')
<div class="movies-wrapper">
    <div class="title-box">
        <h2 class="section-title">Manage Movies</h2>
    </div>

    <div class="table-responsive">
        <table class="styled-table-movie">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Poster</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release</th>
                    <th>Duration</th>
                    <th>Views</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="https://image.tmdb.org/t/p/w92/qmDpIHrmpJINaRKAfWQfftjCdyi.jpg" alt="Inception"></td>
                    <td>Inception</td>
                    <td>Sci-Fi</td>
                    <td>2010</td>
                    <td>148 min</td>
                    <td>1024</td>
                    <td><a href="#">Edit</a> <button>Delete</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="https://image.tmdb.org/t/p/w92/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg" alt="Interstellar"></td>
                    <td>Interstellar</td>
                    <td>Sci-Fi</td>
                    <td>2014</td>
                    <td>169 min</td>
                    <td>980</td>
                    <td><a href="#">Edit</a> <button>Delete</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="https://image.tmdb.org/t/p/w92/eEslKSwcqmiNS6va24Pbxf2UKmJ.jpg" alt="Godfather"></td>
                    <td>The Godfather</td>
                    <td>Drama</td>
                    <td>1972</td>
                    <td>175 min</td>
                    <td>1200</td>
                    <td><a href="#">Edit</a> <button>Delete</button></td>
                </tr>
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
