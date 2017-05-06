var slideIndex = 1;
// showSlides(slideIndex);
if ($("container .slideshow-container").is("visible")) {}
$('.mySlides:eq(1)').attr("style","display:block;");

function plusSlides(obj, n) {
  showSlides(obj, slideIndex += n);
}

function currentSlide(obj, n) {
  showSlides(obj, slideIndex = n);
}

function showSlides(obj, n) {
  var ctx = $(obj).closest(".container");
  var i;
  var slides = $(".mySlides", ctx);
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  // slides[slideIndex-1].style.display = "block";
  $('.mySlides:eq(' + Number(slideIndex-1) + ')').attr("style","display:block;");
  // dots[slideIndex-1].className += " active";
  // $('.dot:eq(' + Number(slideIndex-1) + ')').addClass("active");
}