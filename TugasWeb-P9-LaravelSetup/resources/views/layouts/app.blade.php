<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Tugas P9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">
    <nav class="bg-slate-800 px-6 py-4 flex gap-6">
        <a href="/" class="font-bold text-pink-400">Laravel P9</a>
        <a href="/" class="hover:text-pink-300">Home</a>
        <a href="/about" class="hover:text-pink-300">About</a>
        <a href="/contact" class="hover:text-pink-300">Contact</a>
    </nav>
    <main class="max-w-2xl mx-auto p-6">
        @yield('content')
    </main>
</body>
</html>