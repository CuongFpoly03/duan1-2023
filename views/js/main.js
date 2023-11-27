//BAI banner
let indexSlides = 1;
show(indexSlides);
function slide(m) {
  show((indexSlides += m));
}

function show(m) {
  let i;
  let slidess = document.getElementsByClassName("img-banner");
  if (m > slidess.length) {
    indexSlides = 1;
  }

  if (m < 1) {
    indexSlides = slidess.length;
  }

  for (i = 0; i < slidess.length; i++) {
    slidess[i].style.display = "none";
  }
  slidess[indexSlides - 1].style.display = "block";
}
//BAI product
let indexSlide = 1;
shows(indexSlide);
function slides(n) {
  shows((indexSlide += n));
}

function shows(n) {
  let i;
  let slides = document.getElementsByClassName("sp-laptops");
  if (n > slides.length) {
    indexSlide = 1;
  }

  if (n < 1) {
    indexSlide = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[indexSlide - 1].style.display = "block";
}


//shop
function OpenCart() {
  document.getElementById("myshop").style.width = "25%";
}

function CloseShop() {
  document.getElementById("myshop").style.width = "0%";
}


// down
const btnScrollTo = document.querySelector(".btn--scroll-to");
const section1 = document.querySelector("#product-your--1");
btnScrollTo.addEventListener("click", function (e) {
  const s1coords = section1.getBoundingClientRect();
  console.log(s1coords);

  console.log(e.target.getBoundingClientRect());

  console.log("Current scroll (X/Y)", window.pageXOffset, window.pageYOffset);

  console.log(
    "height/width viewport",
    document.documentElement.clientHeight,
    document.documentElement.clientWidth
  );
  section1.scrollIntoView({ behavior: "smooth" });
});


//navbar
window.onscroll = function () {
  myFunction();
};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
