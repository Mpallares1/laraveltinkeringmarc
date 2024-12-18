<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelMarc</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(139, 69, 19, 0.2);
            transition: all 0.3s ease;
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

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between">
@include('layouts.header')
<div class="container mx-auto px-4 py-12">
    <header class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
        <h1 class="text-5xl font-bold text-white mb-4 neon-text">Laravel Tinkerin Marc</h1>
        <p class="text-2xl text-gray-200">Gestió de películas y equipos</p>
    </header>

    <main class="grid md:grid-cols-2 gap-12">
        <section class="glass-effect p-8 hover-effect transition-all duration-300" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl font-semibold text-white mb-6">Películas</h2>
            <p class="text-gray-200 mb-6">Explora y gestiona tu universo cinematográfico. Desde blockbusters hasta joyas indie, todo en un solo lugar.</p>
            <a href="{{ route('peliculas.index') }}" class="inline-block btn-primary px-6 py-3 rounded-full font-bold">
                Descubre Películas
            </a>
        </section>

        <section class="glass-effect p-8 hover-effect transition-all duration-300" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <h2 class="text-3xl font-semibold text-white mb-6">Equipos</h2>
            <p class="text-gray-200 mb-6">Conoce a las mentes creativas detrás de la magia. Gestiona equipos de producción de clase mundial.</p>
            <a href="{{ route('equipos.index') }}" class="inline-block btn-primary px-6 py-3 rounded-full font-bold">
                Explora Equipos
            </a>
        </section>
    </main>

    <div class="mt-20 text-center" data-aos="zoom-in" data-aos-duration="1000">
        <img src="https://cdn.pixabay.com/photo/2014/04/02/16/17/ball-306820_1280.png" alt="Logo" class="mx-auto w-72 rounded-full shadow-lg float-animation">
    </div>
</div>
@include('layouts.footer')


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
