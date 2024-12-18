<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Films</h1>
    <a href="{{ route('peliculas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Film</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Title</th>
            <th class="py-3 px-6 text-left">Genre</th>
            <th class="py-3 px-6 text-left">Sales</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
@forelse ($films as $film)
    <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-6">{{ $film->id }}</td>
        <td class="py-3 px-6">{{ $film->Title }}</td>
        <td class="py-3 px-6">{{ $film->Genre }}</td>
        <td class="py-3 px-6">{{ $film->Sales }}</td>
        <td class="py-3 px-6 text-center">
            <a href="{{ route('peliculas.edit', $film->id) }}" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
            <form action="{{ route('peliculas.update', $film->id) }}" method="POST">
            <form action="{{ route('peliculas.destroy', $film->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" class="py-3 px-6 text-center">No films available.</td>
    </tr>
    @endforelse
    </tbody>
    </table>
    </div>
    </body>
    </html>
