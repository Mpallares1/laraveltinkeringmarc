<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipo de Fútbol</title>
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
<body class="bg-gray-100 min-h-screen flex flex-col">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<div class="container mx-auto px-4 py-8 flex-grow">
    <div class="glass-effect shadow-md rounded-lg p-8">
        <h1 class="text-4xl font-bold text-[#8B4513] mb-6">Editar Equipo</h1>
        <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="name" id="name" value="{{ $equipo->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</label>
                <input type="text" name="city" id="city" value="{{ $equipo->city }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="year_of_creation" class="block text-gray-700 text-sm font-bold mb-2">Año de Creación:</label>
                <input type="number" name="year_of_creation" id="year_of_creation" value="{{ $equipo->year_of_creation }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="division" class="block text-gray-700 text-sm font-bold mb-2">División:</label>
                <input type="text" name="division" id="division" value="{{ $equipo->division }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $equipo->description }}</textarea>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Actualizar Equipo
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>
