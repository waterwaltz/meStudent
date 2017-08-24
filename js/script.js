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



	var thisdevice = navigator.userAgent;
	if (thisdevice.match(/(iPhone|iPod|iPad|Android)/)){
		
		$('.myresult').hide();
		$(window).scroll(function() {
		   if($(window).scrollTop()  > 500) {
		       $('.myresult').fadeIn();
		   }else if($(window).scrollTop()  > 100){
		   		$('.myresult').fadeOut();
		   }
		});	
	}else{

		$('.myresult').hide();
		$(window).scroll(function() {
		   if($(window).scrollTop()  > 300) {
		       $('.myresult').fadeIn();
		   }else if($(window).scrollTop()  > 100){
		   		$('.myresult').fadeOut();
		   }
		});	
	}


});
