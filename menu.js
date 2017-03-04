$(document).ready(function(){
		
		$('li.headlink').hover(
			function() {
				$('.products').css('background-color', '#EEEEEE');
				$('#showMenu1').css('display', 'block');
				$('#submenu').css('z-index', '100000');
			},
			function() {
				$('.products').css('background-color', '#FFFFFF');
				$('#showMenu1').css('display', 'none');
			}
		);
});