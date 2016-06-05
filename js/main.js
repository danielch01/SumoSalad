// $(window).scroll(function(){
// 	var wScroll = $(this).scrollTop();
// 	if(wScroll > 1117){
// 		$('.header').fadeIn();
// 		$('.header').css({
// 			'position' : 'fixed'
// 		});
// 	} else {
// 		if(wScroll > 0){ 
// 			$('.header').fadeOut();
// 		}
// 		else{
// 			$('.header').fadeIn();
// 		}
// 	}
// });


$('.menu-button').on('click', function() {

$(this).toggleClass('active');
$('.menu').toggleClass('active');

});