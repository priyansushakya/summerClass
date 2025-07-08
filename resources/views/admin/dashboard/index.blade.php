@extends('admin.master')

@section('content')
<div class="container">
    <div class="main-content">
        <div class="topbar">
            <h1>Welcome, Admin</h1>
            <div class="admin-profile">
                <button
                    class="theme-toggle"
                    id="themeToggle"
                    title="Toggle Theme"
                >
                    🌙
                </button>
                <img
                    src="https://i.pravatar.cc/40?img=12"
                    alt="Admin"
                />
                <span>Admin</span>
            </div>
        </div>

        <div class="main-body">
            <div class="dashboard-cards">
                <div class="card">
                    <h3>Total Users</h3>
                    <p>{{$statistics['totaluser']}}</p>
                </div>
                <div class="card">
                    <h3>Movies Uploaded</h3>
                    <p>{{$statistics['totalmovies']}}</p>
                </div>
                <div class="card">
                    <h3>Genre</h3>
                    <p>{{$statistics['totalgenre']}}</p>
                </div>
                <div class="card">
                    <h3>Total Views</h3>
                    <p>{{$statistics['totalmoviewatched']}}</p>
                </div>
            </div>

            <div class="dashboard-cards" style="margin-top: 20px">
                <div class="card">
                    <div class="card-header">Recent Movies</div>
                        <div class="card-body">
                            <ul>
                                @foreach ($movies as $movie)
                                <li>{{ $movie->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <script>
    const toggleBtn = document.getElementById("themeToggle");
    const body = document.body;

    toggleBtn.addEventListener("click", () => {
      body.classList.toggle("dark");
      toggleBtn.textContent = body.classList.contains("dark") ? "🌞" : "🌙";
    });
  </script>

@endsection