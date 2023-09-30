'use strict'

const toggleForm = () => {
    const form = document.querySelector(".myForm");
    if (form.style.display === "none" || form.style.display === "") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
};

//datepicker
$(() => {
    $("#arrivalDate").datepicker();
    $("#departureDate").datepicker();
});


//peoplecounter
document.querySelectorAll(".plus").forEach(function (button) {
    button.addEventListener("click", function () {
        var input = this.parentNode.querySelector("input");
        input.value = parseInt(input.value) + 1;
    });
});

document.querySelectorAll(".minus").forEach(function (button) {
    button.addEventListener("click", function () {
        var input = this.parentNode.querySelector("input");
        if (parseInt(input.value) > 0) {
            input.value = parseInt(input.value) - 1;
        }
    });
});

let slideIndex = 1;

//  Lightbox
function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

let currentSlideModal = 1;
showSlidesModal(currentSlideModal);

function plusSlidesModal(n) {
    showSlidesModal(currentSlideModal += n);
}

function currentSlide(n) {
    showSlidesModal(currentSlideModal = n);
}

function showSlidesModal(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        currentSlideModal = 1;
    }
    if (n < 1) {
        currentSlideModal = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[currentSlideModal - 1].style.display = "block";
}

//Slideshow
const carousel = () => {
    let i;
    let x = document.getElementsByClassName("fade");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1;
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 4000);
}
carousel();



