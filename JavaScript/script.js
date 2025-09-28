function includeHTML(source, dst) {
  fetch(source)
    .then((response) => response.text())
    .then((data) => {
      document.querySelector(dst).innerHTML = data;
    })
    .catch((error) => console.error("Error fetching the menu: ", error));
}

document.addEventListener("DOMContentLoaded", () => {
  const isAnimationShown = sessionStorage.getItem("introAnimationShown");
  const imgLeft = document.querySelector(".scroll-img-container-left");
  const imgRight = document.querySelector(".scroll-img-container-right");
  const headerShow = document.querySelector(".hf-container");
  const titleContentFadeIn = document.querySelector("#title-container");
  const allContent = document.querySelector("#all-Content");
  const footerShow = document.querySelector("footer");
  let check = false;

  if (!isAnimationShown) {
    imgLeft.classList.add("animate");
    imgRight.classList.add("animate");
    headerShow.classList.add("animate");
    titleContentFadeIn.classList.add("animate");
    check = true;
    sessionStorage.setItem("introAnimationShown", "true");


    setTimeout(() => {
      if (check) {
        allContent.classList.add("show");
        footerShow.classList.add("show");
      }
    }, 6000);
    
  } else {
    imgLeft.style.transform = "translateX(-400px)";
    imgRight.style.transform = "translateX(400px)";
    headerShow.style.transform = "translateY(0px)";
    allContent.style.display = "block";
    footerShow.style.display = "block";
  }

  // let animationsComplete = 0;

  // const handleAnimationEnd = () => {
  //   animationsComplete++;
  //   if (animationsComplete === 4) {
  //     allContent.classList.add("show");
  //     footerShow.classList.add("show");
  //   }
  //   imgLeft.addEventListener("animationend", handleAnimationEnd);
  //   imgRight.addEventListener("animationend", handleAnimationEnd);

  // };

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

// document
//   .getElementById("skills-text-show-button")
//   .addEventListener("click", function () {
//     const skillsContainer = document.querySelector("#skills-container");
//     const skillsTextContainer = document.querySelector(
//       "#skills-text-container"
//     );
//     const skillsButton = document.querySelector("#skills-text-show-button");
//     skillsTextContainer.classList.add("show");
//     skillsButton.classList.add("hide");
//     skillsContainer.classList.add("show");
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

document.addEventListener("click", (event) => {
  if (event.target.id === "skills-text-show-button") {
    const skillsContainer = document.querySelector("#skills-container");
    const skillsTextContainer = document.querySelector(
      "#skills-text-container"
    );
    const skillsButton = document.querySelector("#skills-text-show-button");
    skillsTextContainer.classList.add("show");
    skillsButton.classList.add("hide");
    skillsContainer.classList.add("show");
  }
});
