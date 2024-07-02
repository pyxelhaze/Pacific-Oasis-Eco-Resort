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

/* //datepicker
$(() => {
    $("#arrivalDate").datepicker();
    $("#departureDate").datepicker();
}); */


// peoplecounter
document.querySelectorAll(".plus").forEach(function (button) {
    button.addEventListener("click", function () {
        var input = this.parentNode.querySelector("input");
        input.value = parseInt(input.value) + 1;
    });
});

document.querySelectorAll(".minus").forEach(function (button) {
    button.addEventListener("click", function () {
        var input = this.parentNode.querySelector("input");
        if (input.id === "adults") {
            if (parseInt(input.value) > 1) { // Ensure adults value doesn't go below 1
                input.value = parseInt(input.value) - 1;
            }
        } else {
            if (parseInt(input.value) > 0) {
                input.value = parseInt(input.value) - 1;
            }
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

//modale

const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})

overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.modal.active')
    modals.forEach(modal => {
        closeModal(modal)
    })
})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal')
        closeModal(modal)
    })
})
// attach event listeners to the login and register buttons
$('#login-button').on('click', function (event) {
    event.preventDefault();
    closeModal(document.querySelector('#modal-invalid'));
    openModal(document.querySelector('#modal-login'));
});

$('#register-button').on('click', function (event) {
    event.preventDefault();
    closeModal(document.querySelector('#modal-invalid'));
    openModal(document.querySelector('#modal-register'));
});



function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
}






/* //formular und schaltflächenlogik
function toggleForm() {
    var form = document.querySelector('.myForm');
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
}

$(document).ready(function () {
    $("#arrivalDate").datepicker();
    $("#departureDate").datepicker();

    $(".plus").click(function () {
        var input = $(this).siblings("input");
        input.val(parseInt(input.val()) + 1);
    });

    $(".minus").click(function () {
        var input = $(this).siblings("input");
        if (parseInt(input.val()) > 0) {
            input.val(parseInt(input.val()) - 1);
        }
    });

    $("#toggleButton").click(function () {
        $("#hiddenText").toggle();
    });
});
 */