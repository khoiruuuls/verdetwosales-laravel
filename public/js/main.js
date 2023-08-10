document.addEventListener("DOMContentLoaded", function () {
    // Initialize Swiper for portfolio-details-slider
    const portfolioSwiper = new Swiper(".slides-1", {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 2000, // Set the interval between slides in milliseconds (e.g., 5000ms = 5 seconds)
            disableOnInteraction: false,
        },
        slidesPerView: 1, // Display one slide at a time
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
