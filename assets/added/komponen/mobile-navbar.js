$(document).ready(function(){
	$(".navbar .navbar-header button").click(function(){
		var $this = $(this).attr("data-target");

		$(".navbar .navbar-header button").each(function(){
			var $else = $(this).attr("data-target");
			if ($else != $this) {
				$($else).removeClass("collapse in").addClass("collapse");
				// if (!$(this).hasClass("collapsed")) {
				// 	$("" + $else + "").toggle();
				// }
			}
		});
	});
});