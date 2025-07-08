@extends('admin.master')

@section('content')
<div class="movie-form-page">
    <div class="form-card">
        <h2 class="form-title"> Add New Movie</h2>

        <form action="{{ route('admin.movie.create') }}" method="POST" autocomplete="off">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="name" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label>Duration (hours)</label>
                    <input type="text" name="duration" required>
                </div>

                <div class="form-group">
                    <label>Release Date</label>
                    <input type="date" name="release_date" required>
                </div>

                <div class="form-group">
                    <label>Rating</label>
                    <input type="number" step="0.01" name="rating" required>
                </div>

                <div class="form-group">
                    <label>Genre</label>
                    <select name="genre_id" required>
                        <option value="">Select Genre</option>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Language</label>
                    <input type="text" name="language" required>
                </div>

                <div class="form-group">
                    <label>Cast (comma-separated)</label>
                    <textarea name="cast" rows="2" required></textarea>
                </div>
            </div>

            <div class="form-footer">
                <button type="submit">Add Movie</button>
            </div>
        </form>
    </div>
</div>

<style>
.movie-form-page {
    width: 100%;
    min-height: auto;
    background: linear-gradient(to right, #eef2f7, #f9f9fb);
    padding: 20px 40px 10px 40px; /* reduce bottom padding */
    box-sizing: border-box;
}

.form-card {
    background: white;
    border-radius: 14px;
    padding: 30px 30px 20px 30px; /* reduce bottom padding */
    width: 100%;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
}


.form-title {
    font-size: 28px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 30px;
    text-align: center;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px 40px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    margin-bottom: 8px;
    font-weight: 600;
    color: #374151;
    font-size: 15px;
}

.form-group input,
.form-group textarea,
.form-group select {
    padding: 12px 16px;
    font-size: 15px;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    background: #f9fafb;
    transition: all 0.25s ease;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
    background: white;
    outline: none;
}

.form-footer {
    text-align: center;
    margin-top: 40px;
}

.form-footer button {
    background-color: #4f46e5;
    color: white;
    padding: 12px 32px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-footer button:hover {
    background-color: #3730a3;
}

/* Responsive for smaller screens */
@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection
