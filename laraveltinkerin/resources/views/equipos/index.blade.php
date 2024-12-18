<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Fútbol</title>
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
        <h1 class="text-4xl font-bold text-white mb-4">Equipos de Fútbol</h1>
        <a href="{{ route('equipos.create') }}" class="btn-primary px-6 py-2 rounded-full inline-block mb-4">Añadir Nuevo Equipo</a>
        <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
            <thead class="table-header">
            <tr>
                <th class="table-cell">ID</th>
                <th class="table-cell">Nombre</th>
                <th class="table-cell">Año de Creación</th>
                <th class="table-cell">División</th>
                <th class="table-cell text-center">Acciones</th>
            </tr>
            </thead>
            <tbody class="text-gray-700">
            @forelse ($equipos as $equipo)
                <tr class="table-row border-b border-gray-300">
                    <td class="table-cell">{{ $equipo->id }}</td>
                    <td class="table-cell">{{ $equipo->name }}</td>
                    <td class="table-cell">{{ $equipo->year_of_creation }}</td>
                    <td class="table-cell">{{ $equipo->division }}</td>
                    <td class="table-cell text-center">
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="text-blue-500 hover:text-blue-700 mr-4">Editar</a>
                        <a href="{{ route('equipos.show', $equipo->id) }}" class="text-green-500 hover:text-green-700 mr-4">Ver</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="table-cell text-center text-gray-500">No hay equipos disponibles.</td>
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
