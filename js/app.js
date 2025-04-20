**1. Global Scripts (app.js)**

Create a file named `app.js` in your `public/js` directory. This file will contain JavaScript code that is used across multiple pages of your website.

```javascript
// Smooth scrolling for navigation links (Global)
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
```

**Explanation:**

* **Smooth Scrolling:** This JavaScript code implements smooth scrolling for navigation links that target elements on the same page (e.g., `<a href="#about">`).  It's a common web feature that improves user experience.
* **Swiper Initialization:** This code initializes the Swiper carousels for the "Resource Library" and "Printable Resources" sections.
    * It targets the HTML elements with the classes `.resourceLibrarySwiper` and `.printableSwiper`.
    * It sets various options for the carousels, such as:
        * `slidesPerView`: The number of slides visible at once.
        * `spaceBetween`: The space between slides.
        * `loop`: Whether the carousel should loop.
        * `autoplay`: Settings for automatic slideshow functionality.
        * `navigation`: Enables the next and previous buttons.
        * `breakpoints`: Adjusts the number of slides based on screen size

**2. Page-Specific Scripts**

You might not need separate JS files for each page.  The global `app.js` file should handle most of your JavaScript functionality.

**How to Include JavaScript**

* **Blade Templates:** Include the `app.js` file in your Laravel Blade templates (e.g., `index.blade.php`, `dashboard.blade.php`, etc.) using the `<script>` tag:

    ```html
    <script src="{{ asset('js/app.js') }}" defer></script>
    ```

    * Place this tag just before the closing `</body>` tag in your Blade templates.  The `asset()` helper function generates the correct URL to your `public/js/app.js` file.
    * The `defer` attribute tells the browser to load the JavaScript file in the background and execute it after the HTML has been parsed, which improves page load performance.

**Key Points**

* **Global JavaScript:** The `app.js` file contains code that is used across multiple pages like  smooth scrolling and carousel initialization.
* **Page-Specific JavaScript:** If you have a small amount of JavaScript that is only needed on a specific page, you can include it directly within a  `<script>`  tag in that page's Blade template.  However, for larger amounts of page-specific JavaScript, you might want to create separate files and include them in your Blade templates.
* **Best Practice:** It's generally best to load JavaScript files using the  `defer`  or  `async`  attributes to prevent them from blocking page rendering.
