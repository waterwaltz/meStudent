function show_tb(){
	$('.rate_tb').slideDown();
	$('.rate_tit').addClass('actived');
}



$(function(){


	$('.rate_tit').click(function(){
		if( $(this).hasClass('actived')){
			$('.rate_tb').slideUp();
			$(this).removeClass('actived');
		}else{
			$('.rate_tb').slideDown();
			$(this).addClass('actived');
		}
		
	})





});
