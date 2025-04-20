<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Books - EduHome</title>
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
        .swiper-button-next::after, .swiper-button-prev::after{
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
            <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center bg-gradient-to-r from-blue-200 to-blue-300 bg-clip-text text-transparent">My Books</h2>
            <p class="text-gray-700 text-lg mb-6 text-center">
                Explore my collection of works, including eBooks, Audiobooks, and Paperbacks.
            </p>
            <div class="swiper booksSwiper">
                <div class="swiper-wrapper">
                    @foreach ($books as $book)
                        <div class="swiper-slide">
                            <div class="bg-white rounded-lg shadow-md p-4 text-center">
                                 <h4 class="text-xl font-semibold text-gray-800">{{ $book->title }}</h4>
                                <p class="text-gray-600">{{ $book->summary }}</p>
                                <a href="{{ $book->buy_link }}" class="mt-4 inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md transition duration-300" target="_blank" rel="noopener noreferrer">Buy Now</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
             <p class="text-gray-700 text-lg mt-6 text-center">
                Stay tuned for promos and special pricing — <a href="{{ route('contact') }}" class="text-blue-500 hover:text-blue-700 underline">send us an inquiry</a> to learn more!
            </p>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-4 text-center rounded-md absolute bottom-0 w-full">
        <p>© 2025 EduHome. All rights reserved.  <a href="{{ route('privacy-policy') }}" class="text-blue-300 hover:underline">Privacy Policy</a> | <a href="{{ route('terms-of-service') }}" class="text-blue-300 hover:underline">Terms of Service</a></p>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Initialize Swiper for Resource Library
        var resourceLibrarySwiper = new Swiper(".resourceLibrarySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        // Initialize Swiper for Printable Resources
        var printableSwiper = new Swiper(".printableSwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
             breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });

        // Initialize Swiper for Books
        var booksSwiper = new Swiper(".booksSwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
             breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>
</html>
