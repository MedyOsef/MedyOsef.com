/****************** Header responsive     *******************/
$(".header-navbar-toggle").click(function (e) {
  e.preventDefault();
  $(".header-navbar").toggleClass("is-open");
});
/******************* Scroll Button ***************************/

const btnScrollToTop = document.querySelector("#btnScrollToTop");

window.addEventListener("scroll", () => {
  const scrolled = window.scrollY;
  if (scrolled < 918) {
    btnScrollToTop.style.display = "none";
  } else {
    btnScrollToTop.style.display = "block";
  }
});

btnScrollToTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

/**********  scroll bar progression -***********/

const progressBar = document.querySelector('#progress-bar');
const articleViewContainer = document.querySelector('.article-view-container');
const animateProgressBar = () =>{
      let scrollDistance = -articleViewContainer.getBoundingClientRect().top;
      let progressWidth = (scrollDistance / (articleViewContainer.getBoundingClientRect().height - document.documentElement.clientHeight)) * 100;
      let value = Math.floor(progressWidth);
      progressBar.style.width = value + '%';
      if (value < 0){
          progressBar.style.width = '0%';
      }
}
window.addEventListener("scroll", animateProgressBar);