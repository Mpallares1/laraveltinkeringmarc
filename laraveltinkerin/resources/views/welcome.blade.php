<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Cinematográfica Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0d0e1f 0%, #393001 100%);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .neon-text {
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #ff00de, 0 0 35px #ff00de, 0 0 40px #ff00de, 0 0 50px #ff00de, 0 0 75px #ff00de;
        }

        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
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
<div class="container mx-auto px-4 py-12">
    <header class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000">
        <h1 class="text-5xl font-bold text-white mb-4 neon-text">Laravel Tinkerin Marc</h1>
        <p class="text-2xl text-gray-200">Gestió de películas y equipos</p>
    </header>

    <main class="grid md:grid-cols-2 gap-12">
        <section class="glass-effect p-8 hover-effect transition-all duration-300" data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-3xl font-semibold text-white mb-6">Películas</h2>
            <p class="text-gray-200 mb-6">Explora y gestiona tu universo cinematográfico. Desde blockbusters hasta joyas indie, todo en un solo lugar.</p>
            <a href="{{ route('peliculas.index') }}" class="inline-block bg-gradient-to-r from-pink-500 to-purple-500 text-white px-6 py-3 rounded-full font-bold hover:from-pink-600 hover:to-purple-600 transition-colors">
                Descubre Películas
            </a>
        </section>

        <section class="glass-effect p-8 hover-effect transition-all duration-300" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <h2 class="text-3xl font-semibold text-white mb-6">Equipos</h2>
            <p class="text-gray-200 mb-6">Conoce a las mentes creativas detrás de la magia. Gestiona equipos de producción de clase mundial.</p>
            <a href="{{ route('equipos.index') }}" class="inline-block bg-gradient-to-r from-green-400 to-blue-500 text-white px-6 py-3 rounded-full font-bold hover:from-green-500 hover:to-blue-600 transition-colors">
                Explora Equipos
            </a>
        </section>
    </main>

    <div class="mt-20 text-center" data-aos="zoom-in" data-aos-duration="1000">
        <img src="https://cdn.pixabay.com/photo/2014/04/02/16/17/ball-306820_1280.png" alt="Logo" class="mx-auto w-72 rounded-full shadow-lg float-animation">
    </div>
</div>

<footer class="mt-12 text-center text-gray-300 pb-6">
    <p>&copy; {{ date('Y') }} Gestión Cinematográfica Pro. Todos los derechos reservados.</p>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
