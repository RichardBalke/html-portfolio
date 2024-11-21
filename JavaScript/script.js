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

  // If not shown, add the animate class and set the session flag
  if (!isAnimationShown) {
    document.querySelector('.scroll-img-container-left').classList.add('animate');
    document.querySelector('.scroll-img-container-right').classList.add('animate');
    document.querySelector('.hf-container').classList.add('animate');

    // Mark the animation as shown in sessionStorage
    sessionStorage.setItem("introAnimationShown", "true");
  } else {
    // Ensure animations do not restart on reload
    document.querySelector('.scroll-img-container-left').style.transform = 'translateX(-400px)';
    document.querySelector('.scroll-img-container-right').style.transform = 'translateX(400px)';
    document.querySelector('.hf-container').style.transform = 'translatey(0px)';
  }
});


