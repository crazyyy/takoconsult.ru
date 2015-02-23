$(document).ready(function(){
	$(".table tr:odd").addClass("odd");
	var parent = $(".left_menu a.active").parent();
	if ($(parent).find('ul').length > 0) {
		$(".left_menu a.active").next('ul').show();
	}
	/* $('.left_menu a').click(function(){
		var parent = $(this).parent();
		if ($(parent).find('ul').length > 0) {
			if ($(this).hasClass('active')) {
				location = $(this).attr('href');
			} else {
				$('.left_menu ul ul').slideUp('slow');
				$(this).next('ul').slideDown('slow');
			
				return false;
			}
		}
	}); */
	$("#slider").easySlider({
		auto:true,
		pause:5000,
		numeric:true,
		continuous: true
	});
	//$('#middle').equalHeights();
});