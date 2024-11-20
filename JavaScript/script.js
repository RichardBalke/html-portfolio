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
  const imgLeft = document.querySelector('.scroll-img-container-left');
  const imgRight = document.querySelector('.scroll-img-container-right');
  const headerShow = document.querySelector('.hf-container')


  // If not shown, add the animate class and set the session flag
  if (!isAnimationShown) {
    imgLeft.classList.add('animate');
    imgRight.classList.add('animate');
    headerShow.classList.add('animate');
    
    // Mark the animation as shown in sessionStorage
    sessionStorage.setItem("introAnimationShown", "true");
  } else {
    // Ensure animations do not restart on reload
    imgLeft.style.transform = 'translateX(-400px)';
    imgRight.style.transform = 'translateX(400px)';
    headerShow.style.transform = 'translatey(0px)';
  }
});


