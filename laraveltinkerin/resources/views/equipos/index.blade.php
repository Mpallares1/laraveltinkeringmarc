<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Fútbol</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Equipos de Fútbol</h1>
    <a href="{{ route('equipos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Añadir Nuevo Equipo</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Nombre</th>
            <th class="py-3 px-6 text-left">Año de Creación</th>
            <th class="py-3 px-6 text-left">División</th>
            <th class="py-3 px-6 text-center">Acciones</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        @forelse ($equipos as $equipo)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6">{{ $equipo->id }}</td>
                <td class="py-3 px-6">{{ $equipo->name }}</td>
                <td class="py-3 px-6">{{ $equipo->year_of_creation }}</td>
                <td class="py-3 px-6">{{ $equipo->division }}</td>
                <td class="py-3 px-6 text-center">
                    <a href="{{ route('equipos.edit', $equipo->id) }}" class="text-blue-500 hover:text-blue-700 mr-4">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="py-3 px-6 text-center">No hay equipos disponibles.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
