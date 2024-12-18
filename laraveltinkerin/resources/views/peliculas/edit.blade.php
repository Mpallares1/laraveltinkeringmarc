<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Film</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap');

        :root {
            --color-primary: #8B4513;
            --color-secondary: #D2691E;
            --color-accent: #CD853F;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            color: #E0E0E0;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        .glass-effect {
            background: rgba(139, 69, 19, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(139, 69, 19, 0.2);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--color-secondary), var(--color-primary));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.4);
        }

        .form-input {
            background: rgba(255, 255, 255, 0.1);
            color: #E0E0E0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 10px 12px;
            width: 100%;
            margin-bottom: 15px;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--color-primary);
            box-shadow: 0 0 5px var(--color-primary);
        }

    </style>
</head>
<body class="bg-[#121212] min-h-screen flex flex-col">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<div class="container mx-auto px-4 py-8 flex-grow">
    <div class="glass-effect shadow-md rounded-lg p-8 max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-white mb-6">Edit Film</h1>
        <form action="{{ route('peliculas.update', $film->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm text-gray-300 mb-2">Title:</label>
                <input type="text" name="title" id="title" value="{{ $film->Title }}" class="form-input" required>
            </div>
            <div>
                <label for="Description" class="block text-sm text-gray-300 mb-2">Description:</label>
                <input type="text" name="Description" id="Description" value="{{ $film->Description }}" class="form-input" required>
            </div>
            <div>
                <label for="Duration" class="block text-sm text-gray-300 mb-2">Duration:</label>
                <input type="text" name="Duration" id="Duration" value="{{ $film->Duration }}" class="form-input" required>
            </div>
            <div>
                <label for="genre" class="block text-sm text-gray-300 mb-2">Genre:</label>
                <input type="text" name="genre" id="genre" value="{{ $film->Genre }}" class="form-input" required>
            </div>
            <div>
                <label for="sales" class="block text-sm text-gray-300 mb-2">Sales:</label>
                <input type="number" name="sales" id="sales" value="{{ $film->Sales }}" class="form-input" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn-primary px-6 py-2 rounded-full">Update Film</button>
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>
