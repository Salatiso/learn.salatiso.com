<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Resources for Grade {{ $grade }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white py-4 flex justify-between items-center shadow-md sticky top-0 z-10 rounded-md">
        <div class="logo text-xl font-bold ml-4">
            <a href="/" class="hover:text-blue-300 transition duration-300">
                <span class="text-yellow-400">Edu</span>Home
            </a>
        </div>
        <nav class="mr-4">
            <ul class="flex space-x-4">
                <li><a href="/">Home</a></li>
                </ul>
        </nav>
    </header>

    <main class="container mx-auto py-8">
        <section class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Printable Resources for Grade {{ $grade }}</h2>
            <p class="text-gray-700 text-lg mb-6">
                Here are the printable resources available for Grade {{ $grade }}.
            </p>

            @if ($resources->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($resources as $resource)
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <h4 class="text-xl font-semibold text-gray-800">{{ $resource->lesson_title }}</h4>
                            <p class="text-gray-600">{{ $resource->description ?? 'No description available' }}</p>
                            <a href="{{ $resource->file_path }}" class="mt-4 inline-block bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md transition duration-300" download>Download</a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-700">No printable resources are currently available for Grade {{ $grade }}.</p>
            @endif
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4 text-center rounded-md">
        <p>© 2025 EduHome. All rights reserved.  <a href="/privacy-policy" class="text-blue-300 hover:underline">Privacy Policy</a> | <a href="/terms-of-service" class="text-blue-300 hover:underline">Terms of Service</a></p>
    </footer>
</body>
</html>
