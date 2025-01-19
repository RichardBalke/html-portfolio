function includeHTML(source, dst) {
  fetch(source)
    .then((response) => response.text())
    .then((data) => {
      document.querySelector(dst).innerHTML = data;
    })
    .catch((error) => console.error("Error fetching the menu: ", error));
}

document.addEventListener("DOMContentLoaded", () => {
  // Check if the animation has already been shown in this session
  const isAnimationShown = sessionStorage.getItem("introAnimationShown");
  const imgLeft = document.querySelector(".scroll-img-container-left");
  const imgRight = document.querySelector(".scroll-img-container-right");
  const headerShow = document.querySelector(".hf-container");
  const contentFadeIn = document.querySelectorAll("#title-container", "#intro-skills-container", ".main-portfolio-container", ".content-split");

  // If not shown, add the animate class and set the session flag
  if (!isAnimationShown) {
    imgLeft.classList.add("animate");
    imgRight.classList.add("animate");
    headerShow.classList.add("animate");
    contentFadeIn.forEach((element) => {
      element.classList.add("animate");
    });

    // Mark the animation as shown in sessionStorage
    sessionStorage.setItem("introAnimationShown", "true");
  } else {
    // Ensure animations do not restart on reload
    imgLeft.style.transform = "translateX(-400px)";
    imgRight.style.transform = "translateX(400px)";
    headerShow.style.transform = "translatey(0px)";
  }

  if (window.matchMedia("(max-width: 800px)").matches) {
    const handleAnimationEnd = (container) => {
      container.style.display = "none";
    };
    imgLeft.addEventListener("animationend", () => handleAnimationEnd(imgLeft));
    imgRight.addEventListener("animationend", () =>
      handleAnimationEnd(imgRight)
    );
  }
});

document.getElementById("home-button").addEventListener("click", function () {
  window.location.href = "index.html";
});

document.getElementById("about-button").addEventListener("click", function () {
  window.location.href = "about.html";
});

document
  .getElementById("contact-button")
  .addEventListener("click", function () {
    window.location.href = "contact.html";
  });


    // Portfolio button in de header-navbar
// document
//   .getElementById("portfolio-button")
//   .addEventListener("click", function () {
//     window.location.href = "boxes.html";
//   });


  window.addEventListener('scroll', () => {
    const stickyHeader = document.querySelector('.hf-container');
    const headerHeight = stickyHeader.offsetHeight;
    
    if (window.scrollY > 1) {
      stickyHeader.classList.add('sticky');
      document.body.style.paddingTop = headerHeight + 'px';
    } else {
      stickyHeader.classList.remove('sticky');
      document.body.style.paddingTop = '0px'
    }
  });