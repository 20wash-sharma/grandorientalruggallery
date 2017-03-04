

            $(document).ready(function () {
//$(".zoom").fancybox();
$(".zoom").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false,
                'showNavArrows' :   true,
                'mouseWheel': true,
                helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
                
       
            });
          