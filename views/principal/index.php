<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Monarch - Tienda de Moda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

<!-- NAV -->
<nav class="bg-gray-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="index.php?view=principal" class="text-purple-400 font-bold text-2xl">Monarch</a>
        <div class="hidden md:flex space-x-6 items-center">
            <a href="#sobre" class="hover:text-purple-400 transition">Sobre nosotros</a>
            <a href="#contacto" class="hover:text-purple-400 transition">Contacto</a>
            <a href="#donaciones" class="hover:text-purple-400 transition">Donaciones</a>
            <a href="index.php?view=login" class="bg-purple-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-purple-600 transition">
                Iniciar sesión
            </a>
        </div>
        <div class="md:hidden">
            <button id="menuBtn" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    <div id="mobileMenu" class="hidden md:hidden bg-gray-700 px-4 py-2 space-y-2">
        <a href="#sobre" class="block hover:text-purple-400 transition">Sobre nosotros</a>
        <a href="#contacto" class="block hover:text-purple-400 transition">Contacto</a>
        <a href="#donaciones" class="block hover:text-purple-400 transition">Donaciones</a>
        <a href="index.php?view=login" class="block bg-purple-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-purple-600 transition">
            Iniciar sesión
        </a>
    </div>
</nav>

<!-- HERO -->
<section class="flex items-center justify-center h-96 bg-gradient-to-r from-purple-700 to-purple-900 text-center">
    <h1 class="text-4xl md:text-5xl font-bold drop-shadow-lg">¡Explora la moda que define tu estilo!</h1>
</section>

<!-- CONSEJOS DE MODA Y FRASES DESTACADAS -->
<section class="my-16 px-4">
    <h2 class="text-center text-3xl font-bold text-purple-400 mb-10">Consejos de Moda & Frases Inspiradoras</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-7xl mx-auto">

        <!-- Consejo 1 -->
        <div class="bg-gray-800 rounded-xl p-6 hover:scale-105 transform transition flex flex-col items-center text-center">
            <i class="fa-solid fa-palette text-purple-400 text-3xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Combinaciones de Colores</h3>
            <p class="text-gray-300 text-sm">Aprende a combinar colores sin esfuerzo y destaca tu estilo cada día.</p>
            <p class="text-gray-400 italic mt-3">"La moda se desvanece, el estilo es eterno." – Yves Saint Laurent</p>
        </div>

        <!-- Consejo 2 -->
        <div class="bg-gray-800 rounded-xl p-6 hover:scale-105 transform transition flex flex-col items-center text-center">
            <i class="fa-solid fa-gem text-purple-400 text-3xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Accesorios Clave</h3>
            <p class="text-gray-300 text-sm">Los accesorios adecuados pueden transformar cualquier look básico en elegante.</p>
            <p class="text-gray-400 italic mt-3">"La moda no solo está en la ropa, está en la actitud." – Coco Chanel</p>
        </div>

        <!-- Consejo 3 -->
        <div class="bg-gray-800 rounded-xl p-6 hover:scale-105 transform transition flex flex-col items-center text-center">
            <i class="fa-solid fa-leaf text-purple-400 text-3xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Ropa Sostenible</h3>
            <p class="text-gray-300 text-sm">Descubre marcas y prácticas que cuidan del planeta mientras luces increíble.</p>
            <p class="text-gray-400 italic mt-3">"Comprar menos, elegir bien, hacer durar." – Vivienne Westwood</p>
        </div>

        <!-- Consejo 4 -->
        <div class="bg-gray-800 rounded-xl p-6 hover:scale-105 transform transition flex flex-col items-center text-center">
            <i class="fa-solid fa-star text-purple-400 text-3xl mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Tips para Eventos</h3>
            <p class="text-gray-300 text-sm">Cómo vestirte para distintas ocasiones sin perder tu estilo personal.</p>
            <p class="text-gray-400 italic mt-3">"La moda es arquitectura: es una cuestión de proporciones." – Coco Chanel</p>
        </div>

    </div>
</section>



<!-- CATEGORÍAS -->
<section class="my-16 px-4">
    <h2 class="text-center text-3xl font-bold text-purple-400 mb-10">Explora por Categoría</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-7xl mx-auto">
        <div class="bg-gray-700 rounded-xl py-10 text-center hover:bg-gray-600 transition cursor-pointer">Camisetas</div>
        <div class="bg-gray-700 rounded-xl py-10 text-center hover:bg-gray-600 transition cursor-pointer">Accesorios</div>
        <div class="bg-gray-700 rounded-xl py-10 text-center hover:bg-gray-600 transition cursor-pointer">Zapatos</div>
        <div class="bg-gray-700 rounded-xl py-10 text-center hover:bg-gray-600 transition cursor-pointer">Chaquetas</div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-gray-800 mt-16 py-10 border-t border-gray-700">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <h5 class="text-purple-400 font-bold mb-3">Monarch</h5>
            <p class="text-gray-300">Tienda de moda moderna con estilo único. Calidad y diseño en cada prenda.</p>
        </div>
        <div>
            <h5 class="text-purple-400 font-bold mb-3">Enlaces</h5>
            <a href="#sobre" class="block text-gray-300 hover:text-purple-400 mb-1">Sobre nosotros</a>
            <a href="#contacto" class="block text-gray-300 hover:text-purple-400 mb-1">Contacto</a>
            <a href="#donaciones" class="block text-gray-300 hover:text-purple-400">Donaciones</a>
        </div>
        <div>
            <h5 class="text-purple-400 font-bold mb-3">Síguenos</h5>
            <div class="flex space-x-4 justify-start">
                <i class="fa-brands fa-facebook fa-lg"></i>
                <i class="fa-brands fa-instagram fa-lg"></i>
                <i class="fa-brands fa-tiktok fa-lg"></i>
                <i class="fa-brands fa-x-twitter fa-lg"></i>
            </div>
        </div>
    </div>
</footer>

<!-- SCRIPT MOBILE MENU -->
<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>

