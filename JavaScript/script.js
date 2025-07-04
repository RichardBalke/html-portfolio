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
  const titleContentFadeIn = document.querySelector("#title-container");
  // const allContent = document.querySelector("#all-Content");
  const footerShow = document.querySelector("footer");

  // If not shown, add the animate class and set the session flag
  if (!isAnimationShown) {
    imgLeft.classList.add("animate");
    imgRight.classList.add("animate");
    headerShow.classList.add("animate");
    titleContentFadeIn.classList.add("animate");
    // allContent.classList.add("show");
    footerShow.classList.add("show");

    // Mark the animation as shown in sessionStorage
    sessionStorage.setItem("introAnimationShown", "true");
  } else {
    // Ensure animations do not restart on reload
    imgLeft.style.transform = "translateX(-400px)";
    imgRight.style.transform = "translateX(400px)";
    headerShow.style.transform = "translatey(0px)";
    allContent.style.display = "block";
    footerShow.style.display = "block";
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

document
.getElementById("skills-text-show-button")
.addEventListener("click", function () {
  const skillsContainer = document.querySelector("#skills-container");
  const skillsTextContainer = document.querySelector("#skills-text-container");
  const skillsButton = document.querySelector("#skills-text-show-button");
  skillsTextContainer.classList.add("show");
  skillsButton.classList.add("hide");
  skillsContainer.classList.add("show");
});

// Portfolio button in de header-navbar
// document
//   .getElementById("portfolio-button")
//   .addEventListener("click", function () {
//     window.location.href = "boxes.html";
//   });

window.addEventListener("scroll", () => {
  const stickyHeader = document.querySelector(".hf-container");
  const headerHeight = stickyHeader.offsetHeight;

  if (window.scrollY > 1) {
    stickyHeader.classList.add("sticky");
    document.body.style.paddingTop = headerHeight + "px";
  } else {
    stickyHeader.classList.remove("sticky");
    document.body.style.paddingTop = "0px";
  }
});

// Event listener voor de allContent na de eerste pagina load
document.addEventListener("DOMContentLoaded", () => {
  const allContent = document.querySelector("#all-Content");
  const imgLeft = document.querySelector(".scroll-img-container-left");
  const imgRight = document.querySelector(".scroll-img-container-right");
  const footerShow = document.querySelector("footer");

  let animationsCompleted = 0;

  const handleAnimationEnd = () => {
    animationsCompleted++;
    if (animationsCompleted === 2) {
      allContent.classList.add("show");
      footerShow.classList.add("show");
    }
  };

  imgLeft.addEventListener("animationend", handleAnimationEnd);
  imgRight.addEventListener("animationend", handleAnimationEnd);

  setTimeout(() => {
    if (
      (!allContent.classList.contains("show"),
      !footerShow.classList.contains("show"))
    ) {
      allContent.classList.add("show");
      footerShow.classList.add("show");
    }
  }, 6000);
});
