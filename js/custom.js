
jQuery(document).ready(function( $ ) {
	$(".orgnavBtn").on("click", function () {
	    $(".orgnavBtn").removeClass("active");
	    $(this).addClass("active");
	});
});