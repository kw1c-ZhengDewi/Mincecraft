/*
Auteurs: Dewi, Connor, Damian
Datum: 29-03-2025
 */
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    // Loop through all the slides
    for (i = 0; i < slides.length; i++) {
        // Hide each slide by setting its display style to "none"
        slides[i].style.display = "none";
    }

// Increase the slide index by 1 to move to the next slide
// Increase the slide index to move to the next slide
    slideIndex++;

    // If slideIndex is greater than the total number of slides, reset it to 1
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

// Display the current slide (subtract 1 because arrays are zero-based)
    slides[slideIndex - 1].style.display = "block";

// Automatically call showSlides() again after 2 seconds to create a slideshow effect
    setTimeout(showSlides, 2000);
}