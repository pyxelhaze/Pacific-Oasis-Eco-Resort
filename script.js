'use strict'

let slideIndex = 0;

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


//Slideshow
let carouselTimeout;

const carousel = () => {
    let i;
    let x = document.getElementsByClassName("fade");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) { slideIndex = 1 }
    x[slideIndex - 1].style.display = "block";
    carouselTimeout = setTimeout(carousel, 4000);
}
carousel();

// carousel stop
const stopCarousel = () => {
    clearTimeout(carouselTimeout);
}

// fullscreen img
const images = document.querySelectorAll('img');

images.forEach(image => image.addEventListener('click', (e) => {
    if (!document.fullscreenElement) {
        image.requestFullscreen().then(() => {
            stopCarousel();
        }).catch(error => {
            console.error('Fehler beim Aktivieren des Vollbildmodus:', error);
        });
    } else if (document.fullscreenElement && document.exitFullscreen) {
        document.exitFullscreen().then(() => {

            carousel();
        }).catch(error => {
            console.error('Fehler beim Verlassen des Vollbildmodus:', error);
        });
    }
}));

document.addEventListener('fullscreenchange', (e) => {
    if (document.fullscreenElement) {
        stopCarousel();
    } else {
        carousel();
    }
});

//hidden welcome text
document.addEventListener("DOMContentLoaded", () => {
    const toggleButton = document.getElementById("toggleButton");
    const hiddenText = document.getElementById("hiddenText");

    toggleButton.addEventListener("click", () => {
        if (hiddenText.style.display === "none" || hiddenText.style.display === "") {
            hiddenText.style.display = "block";
            toggleButton.innerText = "Read Less";
        } else {
            hiddenText.style.display = "none";
            toggleButton.innerText = "Read More";
        }
    });
});



