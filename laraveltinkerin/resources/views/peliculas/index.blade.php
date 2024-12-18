<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
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

        .table-header {
            background-color: rgba(139, 69, 19, 0.2);
            color: #333;
            text-transform: uppercase;
            font-size: 0.875rem;
        }

        .table-row {
            transition: background-color 0.3s ease;
        }

        .table-row:hover {
            background-color: rgba(139, 69, 19, 0.1);
        }

        .table-cell {
            padding: 1rem;
            border-bottom: 1px solid rgba(139, 69, 19, 0.2);
            text-align: left;
        }

        .table-actions {
            text-align: center;
        }

        .table-actions a,
        .table-actions button {
            margin-right: 1rem;
            text-decoration: none;
        }

    </style>
</head>
<body class="bg-[#121212] min-h-screen flex flex-col">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<div class="container mx-auto px-4 py-8 flex-grow">
    <div class="glass-effect shadow-md rounded-lg p-8">
        <h1 class="text-4xl font-bold text-white mb-4">Films</h1>
        <a href="{{ route('peliculas.create') }}" class="btn-primary px-6 py-2 rounded-full inline-block mb-4">Añadir Nueva Pelicula</a>
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead>
            <tr class="table-header">
                <th class="table-cell">ID</th>
                <th class="table-cell">Title</th>
                <th class="table-cell">Genre</th>
                <th class="table-cell">Sales</th>
                <th class="table-cell table-actions">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-700">
            @forelse ($films as $film)
                <tr class="table-row">
                    <td class="table-cell">{{ $film->id }}</td>
                    <td class="table-cell">{{ $film->Title }}</td>
                    <td class="table-cell">{{ $film->Genre }}</td>
                    <td class="table-cell">{{ $film->Sales }}</td>
                    <td class="table-cell table-actions">
                        <a href="{{ route('peliculas.edit', $film->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                        <a href="{{ route('peliculas.show', $film->id) }}" class="text-green-500 hover:text-green-700">View</a>
                        <form action="{{ route('peliculas.destroy', $film->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="table-cell text-center text-gray-500">No films available.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>
