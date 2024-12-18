<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Equipo</title>
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
            background-color: #f5f5f5;
            color: #333;
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
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<div class="container mx-auto px-4 py-8 flex-grow">
    <div class="glass-effect shadow-md rounded-lg p-8">
        <h1 class="text-4xl font-bold text-[#8B4513] mb-6">Detalles del Equipo</h1>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <p class="text-gray-700">{{ $equipo->name }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</label>
            <p class="text-gray-700">{{ $equipo->city }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Año de Creación:</label>
            <p class="text-gray-700">{{ $equipo->year_of_creation }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">División:</label>
            <p class="text-gray-700">{{ $equipo->division }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
            <p class="text-gray-700">{{ $equipo->description }}</p>
        </div>
        <a href="{{ route('equipos.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-all duration-300 ease-in-out">Volver</a>
    </div>
</div>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>
