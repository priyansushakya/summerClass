<div class="sidebar">
    <h2>Movie Sansar</h2>
    <a href="{{route('admin')}}" class="@if(request()->is('/')) active @endif">Dashboard</a>
    <a href="{{route('admin.movie.index')}}" class="@if(request()->is('admin/movie')) active @endif">Manage Movies</a>
    <a href="{{route('admin.genre.index')}}" class="@if(request()->is('admin/genre')) active @endif">Manage Genre</a>
    <a href="#">Settings</a>
    <a href="#">Logout</a>
</div>