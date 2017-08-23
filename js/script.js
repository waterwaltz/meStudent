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


	// $(window).scroll(function() {
	//    if($(window).scrollTop() + $(window).height() == $(document).height()) {
	//        $('.myresult').removeClass('fixed');
	//        $('.myform').removeClass('fixed');

	//    }else if($(window).scrollTop() + $(window).height() > $(document).height() - 80){
	//    		if (!$('.myresult').hasClass('fixed')) {
			    
	// 		}
	   		
	//    }
	// });



	$(window).scroll(function() {
		var wS = $(window).scrollTop();
		var wH = $(window).height();
		var dH = $(document).height();

	   if ($('.myresult').hasClass('fixed')){
	   		if(wS + wH == dH){
	   			$('.myresult').removeClass('fixed');
	       		$('.myform').removeClass('fixed');
	   		}
	       
	   }
	});

	
	



});
