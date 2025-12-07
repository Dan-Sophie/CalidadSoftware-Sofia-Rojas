<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center 
             bg-gradient-to-br from-black via-purple-900 to-black">

    <div class="backdrop-blur-lg bg-gray-900/60 p-8 rounded-2xl shadow-xl 
                w-full max-w-md border border-purple-600/40">

        <h1 class="text-4xl font-extrabold text-purple-400 text-center mb-6 tracking-wide">
            Inicio de Sesión
        </h1>

        <form action="index.php?view=login_validar" method="POST" class="space-y-5">

            <div>
                <label class="text-purple-200 text-sm font-medium">Usuario</label>
                <input type="text" name="usuario" required 
                       class="mt-1 w-full p-3 rounded-lg bg-black/60 border border-gray-700 
                              text-white focus:outline-none focus:border-purple-500 
                              focus:ring-1 focus:ring-purple-500 transition">
            </div>

            <div>
                <label class="text-purple-200 text-sm font-medium">Contraseña</label>
                <input type="password" name="password" required
                       class="mt-1 w-full p-3 rounded-lg bg-black/60 border border-gray-700 
                              text-white focus:outline-none focus:border-purple-500 
                              focus:ring-1 focus:ring-purple-500 transition">
            </div>

            <div>
                <label class="text-purple-200 text-sm font-medium">Confirmar contraseña</label>
                <input type="password" name="password_confirm"
                       class="mt-1 w-full p-3 rounded-lg bg-black/60 border border-gray-700 
                              text-white focus:outline-none focus:border-purple-500 
                              focus:ring-1 focus:ring-purple-500 transition">
            </div>

            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg 
                       font-semibold shadow-lg shadow-purple-900/40 transition">
                Ingresar
            </button>

        </form>
    </div>

</body>
</html>





