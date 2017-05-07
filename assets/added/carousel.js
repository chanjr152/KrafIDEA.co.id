var slideIndex = 1;
// showSlides(0);
$(document).ready(function(){
  $(".slideshow-container").each(function(idx){
  $(this).next("div").remove();
  $(this).attr("style", "padding-bottom:10px;");
});
});

// percobaan masih gagal
// if ($("container .slideshow-container").is("visible")) {}
// $('.mySlides:eq(1)').attr("style","display:block;");

function plusSlides(obj, n) {
  // showSlides(slideIndex += n);
  slideIndex += 1;
  var length = $(".mySlides", $(obj).closest(".slideshow-container")).length;
  $(".mySlides", $(obj).closest(".slideshow-container")).each(function(idx){
    // idx == 0 ? console.log("y") : console.log("t");
    slideIndex > length ? slideIndex = 1 : 0;
    slideIndex < 1 ? slideIndex = length : 0;
    $(this).attr("style", "display:none;");
  });

  var dots = $(".dot", $(obj).closest(".slideshow-container").next("div"));
  
  dots.each(function(){
    $(this).removeClass("active");
  });
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  $('.mySlides:eq(' + Number(slideIndex-1) + ')', $(obj).closest(".slideshow-container")).attr("style","display:block;");

  // $('.dot:eq(' + Number(slideIndex-1) + ')').addClass("active");
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  // var ctx = $(obj).closest(".container");
  var i;
  
  var slides = $(".mySlides");
  var dots = $(".dot");
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
  $('.dot:eq(' + Number(slideIndex-1) + ')').addClass("active");
}