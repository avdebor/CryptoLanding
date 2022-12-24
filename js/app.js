//timer
let date = new Date(document.querySelector(".hidden_text").textContent);

function counts() {
  let now = new Date();
  gap = date - now;

  let days = Math.floor(gap / 1000 / 60 / 60 / 24);
  hours = Math.floor(gap / 1000 / 60 / 60) % 24;
  minutes = Math.floor(gap / 1000 / 60 / 60) % 60;
  seconds = Math.floor(gap / 1000) % 60;
  if (gap < 0) {
    days = days + 7;
    hours = hours + 10;
    minutes = minutes + 45;
    seconds = seconds + 60;
  }

  document.getElementById("d").innerText = days;
  document.getElementById("h").innerText = hours;
  document.getElementById("m").innerText = minutes;
  document.getElementById("s").innerText = seconds;
}

setInterval(() => {
  counts();
}, 1000);

//spotlight

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

const one = document.querySelector("#one");
two = document.querySelector("#two");
three = document.querySelector("#three");
four = document.querySelector("#four");

let spotlightElements = [one, two, three, four];

async function spotlightDo() {
  setTimeout(async () => {
    await spotlight();
  }, 1000);
}

async function spotlight() {
  for (let i = 0; i < spotlightElements.length; i++) {
    const element = spotlightElements[i];

    element.style.cssText = "box-shadow: 0px 0px 100px rgba(239, 68, 59, 0.8);";
    await sleep(i * 2500);
    element.style.cssText = "box-shadow: 0;";
  }
  spotlightDo();
}

spotlightDo();

$(function () {
  let screenWidth = screen.width;
  let adaptiveCards = document.querySelector(".adaptive-crypto-cards");
  let featureBlock = document.querySelector(".features_block-container");
  let pagePractice = document.querySelector(".page_practice");

  if (screenWidth > 1154) {
    $(".crypo_slider").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
    });
    adaptiveCards.remove();
  } else {
    crypotSlider = document.querySelector(".crypo_slider");
    crypotSlider.remove();
  }

  if (screenWidth <= 871) {
    featureBlock.remove();
  } else {
    pagePractice.remove();
  }

  $(".feedback_slider").slick({
    infinite: true,
    slidesToShow: 3,
    arrows: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          infinite: true,
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          infinite: true,
          arrows: false,
          centerMode: true,
          slidesToShow: 1,
        },
      },
    ],
  });
});

//cookie popup
let cookieBtn = document.querySelector(".cookie-btn");
let cookieAlertBlock = document.querySelector(".cookie_alert");

cookieBtn.addEventListener("click", () => {
  localStorage.setItem("AlertShowStatus", 1);
  cookieAlertBlock.remove();
});

if (localStorage.getItem("AlertShowStatus") == 1) {
  cookieAlertBlock.remove();
}

//site animation
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
  });
});

let hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));

function onEntry(entry) {
  entry.forEach((change) => {
    if (change.isIntersecting) {
      change.target.classList.add("element-show");
    }
  });
}

let options = { threshold: [0.5] };
let observert = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll(".element-animation");

for (let elm of elements) {
  observert.observe(elm);
}
