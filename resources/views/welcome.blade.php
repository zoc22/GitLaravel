<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GitHubLaravel</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<<<<<<< HEAD
<body>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <h1 class="text-3xl text-green-100 font-bold underline">
         <form method="POST" action="/submit">
            @csrf
            <input type="text" name="name" placeholder="Enter your name">
            <input type="email" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit">Submit</button>
         </form>
        </h1>
=======
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-2xl p-10 max-w-md w-full text-center">

        <!-- Logo / Titre -->
        <h1 class="text-4xl font-extrabold text-gray-800 mb-4">
            GitHub<span class="text-green-600">Laravel</span>
        </h1>


        <!-- Séparateur -->
        <div class="w-16 h-1 bg-green-500 mx-auto mb-6 rounded"></div>

        <!-- Message -->
        <p class="text-gray-700 mb-8">
            🚀 Bienvenue !
            Le serveur fonctionne correctement.
        </p>

        <!-- Boutons -->
        <div class="flex gap-4 justify-center">
            <a href="#"
               class="px-6 py-2 rounded-lg bg-green-600 text-white font-semibold hover:bg-green-700 transition">
                Documentation
            </a>

            <a href="#"
               class="px-6 py-2 rounded-lg border border-green-600 text-green-600 font-semibold hover:bg-green-50 transition">
                GitHub
            </a>
        </div>

        
    </div>

>>>>>>> db6e87aae8cc6d67b9c143c2ee4f89934f14a190
</body>
</html>
