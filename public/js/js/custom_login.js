
$(document).ready(function()
{
	$('#Login').slideDown(1000);
	$('.daftar').show();
});

$(function() {
        // var $body = $(document);
        // $body.bind('scroll', function() {
        //     // "Disable" the horizontal scroll.
        //     if ($body.scrollLeft() !== 0) {
        //         $body.scrollLeft(0);
        //     }
        // });
}); 

$('#daftar_btn').click(function(){
	
	$('.login').animate({"right":"-100%"},500);
	$('.daftar').animate({"right":"50%"},500);
	
	$(".ftr").animate({top: '+=370px'});
	// $('html, body').animate({
	// 	scrollTop: $("body").offset().top
	// }, 1000)
	
});

$("#login_btn").click(function(){
	$('.login').animate({"right":"50%"},500);
	$('.daftar').animate({"right":"-100%"},500);
	$(".ftr").delay(200).animate({top: '-=370'});
	// $('html, body').animate({
	// 	scrollTop: $("body").offset().top
	// }, 1000)
})


