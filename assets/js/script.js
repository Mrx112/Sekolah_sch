// Preloader / loading animation
document.addEventListener("DOMContentLoaded", function () {
    // Add 'loaded' class to body after the page is fully loaded
    document.body.classList.add("loaded");
});

// Javascript for slideshow
let slideshow = 0;
function showSlides() {
    let slides = document.getElementsByClassName("slides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Change slide every 3 seconds
}
document.addEventListener("DOMContentLoaded", showSlides);