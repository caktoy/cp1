$('.carousel').carousel({
	interval: 2500
});

$(".see-more").hover(function() {
	/* Stuff to do when the mouse enters the element */
	$(".isi-text").text("Lihat Lainnya");
}, function() {
	/* Stuff to do when the mouse leaves the element */
	$(".isi-text").html("&bull;&bull;&bull;");
});

$(function() {
	$(".datepicker").datepicker({
		dateFormat: "dd MM yy"
	});
});