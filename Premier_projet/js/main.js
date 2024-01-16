jQuery(document).ready(function ($) {

  // Smooth scroll for the menu and links with .scrollto classes
  $('.smothscroll').on('click', function (e) {
    e.preventDefault();
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {

        $('html, body').animate({
          scrollTop: target.offset().top + 20
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  $(".navbar-collapse a").on('click', function () {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  $('.carousel').carousel({
    interval: 3500
  });
});

$(document).ready(function () {
  var $soltiScan = $(".soltiScan");
  var $images = $(".image-container .owl-item");

  $(window).on("scroll", function () {
    var scrollPosition = $(this).scrollTop();
    var soltiScanPosition = $soltiScan.offset().top;

    if (scrollPosition + $(window).height() > soltiScanPosition) {
      $soltiScan.addClass("active");
      $images.each(function (index) {
        var $image = $(this);
        setTimeout(function () {
          $image.addClass("active");
        }, index * 500);
      });
    }
  });

  $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: true,
    navText: [
      "<div class='owl-prev'><i class='bi bi-chevron-left'></i></div>",
      "<div class='owl-next'><i class='bi bi-chevron-right'></i></div>"
    ],
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
  };
  const handleIntersect = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.remove("hidden");
        animateCards();
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(handleIntersect, options);
  const target = document.querySelector("#Produits");
  observer.observe(target);

  // Ajouter une gestionnaire d'événement pour le redimensionnement de la fenêtre
  window.addEventListener("resize", function () {
    // Vérifier si la section "Produits" est visible après le redimensionnement
    const isProduitsVisible = target.getBoundingClientRect().top < window.innerHeight;
    if (isProduitsVisible) {
      animateCards();
    }
  });
});

function animateCards() {
  var cards = document.querySelectorAll('.card');
  var animationSpeed = 400;
  cards.forEach(function (card, index) {
    setTimeout(function () {
      card.classList.add('visible');
    }, index * animationSpeed);
  });
}

document.addEventListener("DOMContentLoaded", function () {
  const optionsValeurs = {
    root: null,
    rootMargin: "0px",
    threshold: 0.25
  };

  const handleIntersectValeurs = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !entry.target.classList.contains("animated")) {
        entry.target.classList.remove("hidden1");
        animateSectionValeurs(entry.target);
        entry.target.classList.add("animated");
        observer.unobserve(entry.target);
      }
    });
  };

  const observerValeurs = new IntersectionObserver(handleIntersectValeurs, optionsValeurs);
  const targetValeurs = document.querySelector("#valeurs");
  observerValeurs.observe(targetValeurs);
});

function animateSectionValeurs(target) {
  target.classList.add("animate__fadeInRight", "animate__slideInLeft");
  var elementsToAnimate = target.querySelectorAll('.animate__animated');
  elementsToAnimate.forEach(function (element, index) {
    element.style.opacity = 1;
    element.style.transform = "translateY(0)";
  });
}
