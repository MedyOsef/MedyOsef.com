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

btnScrollToTop.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

/******************** theme buttonn **************/
const btntheme = document.getElementById('btntheme');

btntheme.addEventListener('change', () =>{
  // change the theme of the website
});
