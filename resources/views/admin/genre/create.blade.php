@extends('admin.master')

@section('content')
<div class="genre-form-wrapper">
    <div class="form-card">
        <h2 class="form-title"> Add New Genre</h2>

        <form action="{{ route('admin.genre.create') }}" method="POST" autocomplete="off">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label>Genre Name</label>
                    <input type="text" name="name" placeholder="e.g. Action, Comedy" required>
                </div>

                <div class="form-group full-width">
                    <label>Description</label>
                    <textarea name="description" rows="4" placeholder="Short description of this genre..." required></textarea>
                </div>
            </div>

            <div class="form-footer">
                <button type="submit">Add Genre</button>
            </div>
        </form>
    </div>
</div>

<style>
/* Make sure full page height is available */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

/* Wrapper that fills the screen and centers content */
.genre-form-wrapper {
    width: 100%;
    padding: 40px 20px;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    box-sizing: border-box;
}


/* Form styling */
.form-card {
    background: white;
    border-radius: 12px;
    padding: 40px;
    max-width: 700px;
    width: 100%;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
}

.form-title {
    font-size: 26px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 30px;
    text-align: center;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group.full-width {
    grid-column: span 2;
}

.form-group label {
    margin-bottom: 6px;
    font-weight: 600;
    color: #374151;
}

.form-group input,
.form-group textarea {
    padding: 12px 16px;
    font-size: 15px;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    background: #f9fafb;
    transition: all 0.25s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #4f46e5;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
    background: white;
    outline: none;
}

.form-footer {
    text-align: center;
    margin-top: 30px;
}

.form-footer button {
    background-color: #4f46e5;
    color: white;
    padding: 10px 30px;
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
