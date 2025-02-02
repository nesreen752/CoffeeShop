//first slider
let slideIndex = 1;
showDivs(slideIndex);
function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" change-color", "");
    }
    x[slideIndex-1].style.display="block"; 
    dots[slideIndex-1].className += " change-color";
}

let slideeIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("change-color", "");
    }
    slideeIndex++;
    if (slideeIndex > x.length) {slideeIndex = 1}
    x[slideeIndex-1].style.display = "block";
    dots[slideeIndex-1].className += " change-color";
    setTimeout(carousel, 4000); // Change image every 4 seconds
}


// second slider

let Index = 0;
const slides = document.querySelector('.slider');
const totalSlides = document.querySelectorAll('.slide').length;

function showSlides() {
    Index++;
    if (Index >= 5) {
        Index = 0; // Reset to the first slide
    }

    // Move the slides by changing the transform property
    slides.style.transform = `translateX(-${Index * 20}%)`;

    // Change slide every 3 seconds
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

showSlides();

