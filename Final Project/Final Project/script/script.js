
function showPDF() {
  let x = document.getElementById("pdf-container");
  x.classList.toggle("show-pdf");
}


 window.addEventListener("scroll", function() {
      var navbar = document.querySelector(".navbar");
      if (window.scrollY > 0) {
        navbar.classList.add("navbar-scroll");
      } else {
        navbar.classList.remove("navbar-scroll");
      }
    });