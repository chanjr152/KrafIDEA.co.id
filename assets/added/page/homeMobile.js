$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#back-to-top').fadeIn();
    } else {
        $('#back-to-top').fadeOut();
    }
});
// scroll body to 0px on click
$('#back-to-top').click(function () {
    $('#back-to-top').tooltip('hide');
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});

$('#back-to-top').tooltip('show');

/* plan B */
// $(window).resize(function(){
// 	if ($(window).width() > 767) {
// 		if ($(".col-md-2.feature-grid").parent().is(".cst-itemCenter")) {
// 			$(".col-md-2.feature-grid").unwrap();
// 		}
// 	}
// 	else{
// 		if ($(".col-md-2.feature-grid").parent().is(".items-sec")) {
// 			// $(".col-md-2.feature-grid").wrap('<div class="cst-itemCenter"></div>');
// 			var target = $(".col-md-2.feature-grid");
// 			// for (var i = 0; i < target.length; i+=3) {
// 			// 	target.slice(i, i+3).wrapAll("<div class='new'></div>");
// 			// }
// 		}
// 	}
// });