<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeschooling and Self-Directed Learning Platform</title>
    <meta name="description" content="A transformative platform for homeschooling and self-directed learning, providing resources, tools, and personalized learning paths for South African parents and learners.">
    <meta name="keywords" content="homeschooling, self-directed learning, education, South Africa, CAPS curriculum, online learning, printable resources, personalized learning, accessibility, rural education">
    <meta name="author" content="Salatiso Mdeni">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .swiper-button-next, .swiper-button-prev {
            color: #000;
        }
        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 2em;
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
                <li><a href="{{ route('dashboard') }}" class="hover:text-blue-300 transition duration-300">Dashboard</a></li>
                <li><a href="{{ route('support') }}" class="hover:text-blue-300 transition duration-300">Support</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-blue-300 transition duration-300">Contact</a></li>
            </ul>
        </nav>
        <div class="flex items-center mr-4">
            <button id="search-button" class="text-white focus:outline-none mr-2">Search</button>
            <button id="chatbot-button" class="text-white focus:outline-none">Chatbot</button>
        </div>
    </header>

    <main class="container mx-auto py-8">
        <!-- About Section -->
        <section id="about" class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">About Me</h2>
            <p class="text-gray-700 text-lg">
                Welcome to EduHome. I'm Salatiso Mdeni, and this platform is inspired by my passion for making education and knowledge accessible to everyone.
            </p>
            <p class="text-gray-700 text-lg mt-4">
                My journey has taken me from rural Transkei, where I often studied under a tree, to formal education and a career, and eventually to becoming a homeschooling father. My experiences have shaped this platform.
            </p>
            <p class="text-gray-700 text-lg mt-4">
                This website is a resource born from that experience, aiming to provide tools and support for homeschooling parents, self-directed learners, and anyone seeking to explore personalized education.
            </p>
        </section>

        <!-- Learning Paths Section -->
        <section id="learning-paths" class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">Learning Paths</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Online Learning</h3>
                    <p class="text-gray-700 text-lg mb-4">
                        Structured, curriculum-based learning aligned with the South African CAPS curriculum and other recognized programs. Ideal for users seeking a traditional, guided educational experience.
                    </p>
                    <a href="{{ route('online-learning') }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-800 font-semibold py-3 px-6 rounded-md transition duration-300 text-center">Explore Online Learning</a>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                    <h3 class="text-2xl font-semibold text-blue-600 mb-4">Homeschooling/Self-Driven Learning</h3>
                    <p class="text-gray-700 text-lg mb-4">
                        Flexible, personalized approach to education, tailored to individual interests and learning pace. Ideal for users seeking greater autonomy and a customizable educational journey.
                    </p>
                    <a href="{{ route('self-driven-learning') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-md transition duration-300 text-center">Explore Self-Driven Learning</a>
                </div>
            </div>
        </section>

        <!-- Resource Library Section -->
        <section id="resource-library" class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">Resource Library</h2>
            <p class="text-gray-700 text-lg mb-6">
                Explore a wealth of educational materials to support your learning journey. Our library includes lesson plans, worksheets, activities, assessments, and multimedia resources, all designed to enhance learning.
            </p>
            <div class="swiper resourceLibrarySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white rounded-lg shadow-md p-4 flex items-center">
                            <i class="fas fa-book-open text-blue-500 text-2xl mr-4"></i>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800">Lesson Plans</h4>
                                <p class="text-gray-600">Structured lesson outlines for various subjects and grade levels.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Additional slides can be added similarly -->
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <!-- Printable Resources Section -->
        <section id="printables" class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">Printable Resources</h2>
            <p class="text-gray-700 text-lg mb-6">
                Access a wide range of free, printable learning materials for various grades. No login required.
            </p>
            <div class="swiper printableSwiper">
                <div class="swiper-wrapper">
                    @for ($grade = 0; $grade <= 12; $grade++)
                        <div class="swiper-slide">
                            <a href="{{ route('printables.grade', ['grade' => $grade]) }}">
                                <div class="bg-white rounded-lg shadow-md p-4 text-center cursor-pointer hover:shadow-lg transition duration-300">
                                    <h4 class="text-xl font-semibold text-gray-800">Grade {{ $grade }}</h4>
                                    <p class="text-gray-600">Printable resources for Grade {{ $grade }} learners.</p>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <!-- Dashboard Section -->
        <section id="dashboard" class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">Your Dashboard</h2>
            <p class="text-gray-700 text-lg mb-6">
                Log in to access your personalized learning dashboard. Track your progress, view your courses/subjects, access assessments, and manage your account settings.
            </p>
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="text-gray-700 mb-4">
                    If you are a registered user, please log in to access the dashboard.
                </p>
                <a href="{{ route('login') }}" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-md transition duration-300 text-center inline-block">Login</a>
                <p class="mt-4 text-gray-700">
                    New user? Please register.
                </p>
                <a href="{{ route('register') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-md transition duration-300 text-center inline-block mt-2">Register</a>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="mb-12 rounded-md">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">Contact Us</h2>
            <p class="text-gray-700 text-lg mb-6 text-center">
                Contact us for suggestions, comments, opportunities to support, and to learn about book voucher promos.
            </p>
            <div class="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
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
                        <label for="popi" class="text-gray-700 text-sm">I consent to the processing of my personal information as per the <a href="{{ route('privacy-policy') }}" class="text-blue-500 hover:underline">Privacy Policy</a>.</label>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4 text-center rounded-md">
        <p>© 2025 EduHome. All rights reserved. <a href="{{ route('privacy-policy') }}" class="text-blue-300 hover:underline">Privacy Policy</a> | <a href="{{ route('terms-of-service') }}" class="text-blue-300 hover:underline">Terms of Service</a></p>
    </footer>
</body>
</html>
