<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - EduHome</title>
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
                <li><a href="{{ route('about') }}" class="hover:text-blue-300 transition duration-300">About</a></li>
                <li><a href="{{ route('learning-paths') }}" class="hover:text-blue-300 transition duration-300">Learning Paths</a></li>
                <li><a href="{{ route('resource-library') }}" class="hover:text-blue-300 transition duration-300">Resources</a></li>
                <li><a href="{{ route('printables') }}" class="hover:text-blue-300 transition duration-300">Printables</a></li>
                 <li>
                    <a href="{{ route('dashboard') }}" class="hover:text-blue-300 transition duration-300">Dashboard</a>
                </li>
                <li><a href="{{ route('support') }}" class="hover:text-blue-300 transition duration-300">Support</a></li>
                 <li><a href="{{ route('contact') }}" class="hover:text-blue-300 transition duration-300">Contact</a></li>
            </ul>
        </nav>
        <div class="flex items-center mr-4">
            <button id="search-button" class="text-white focus:outline-none mr-2">
                 </button>
            <button id="chatbot-button" class="text-white focus:outline-none">
                </button>
        </div>
    </header>

    <main class="container mx-auto py-8">
        <section class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">Contact Us</h2>
            <p class="text-gray-700 text-lg mb-6 text-center">
                Contact us for suggestions, comments, opportunities to support, and to learn about book voucher promos.
            </p>
             <div class="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Name" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Email" required>
                    </div>
                    <div>
                        <label for="contact_number" class="block text-gray-700 text-sm font-bold mb-2">Contact Number (Optional)</label>
                        <input type="text" id="contact_number" name="contact_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Contact Number">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="popi" name="popi" required class="mr-2">
                        <label for="popi" class="text-gray-700 text-sm">I consent to the processing of my personal information as per the  <a href="{{ route('privacy-policy') }}" class="text-blue-500 hover:text-blue-700 underline">Privacy Policy</a></label>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4 text-center rounded-md absolute bottom-0 w-full">
        <p>© 2025 EduHome. All rights reserved.  <a href="{{ route('privacy-policy') }}" class="text-blue-300 hover:underline">Privacy Policy</a> | <a href="{{ route('terms-of-service') }}" class="text-blue-300 hover:underline">Terms of Service</a></p>
    </footer>
</body>
</html>
