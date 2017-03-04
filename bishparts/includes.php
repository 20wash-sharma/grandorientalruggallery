        <link href="inc.styles.css" rel="stylesheet" type="text/css">

       
       <!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script language="javascript" src="menu.js"></script>
        <script type="text/javascript" src="iepngfix_tilebg.js"></script>
        <script type="text/javascript" src="tablesorter-master/jquery-latest.js"></script>
        <script type="text/javascript" src="tablesorter-master/js/jquery.tablesorter.js"></script>
        <script type="text/javascript" src="tablesorter-master/addons/pager/jquery.tablesorter.pager.js"></script>
        <script type="text/javascript" src="tablesorter-master/js/chili/chili-1.8b.js"></script>
        <script type="text/javascript" src="tablesorter-master/js/docs.js"></script>
        <!-- end rugs head menu -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">



<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- Carpet Cleaning Miami. Your Complete Carpet Cleaning And Repairs In Miami Coral Gables. -->




<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox_bish/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox_bish/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox_bish/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox_bish/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<!--<link rel="stylesheet" href="pagination/styles.css" type="text/css" media="screen" />-->

<script type="text/javascript" src="fancybox_bish/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox_bish/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="fancybox_bish/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox_bish/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
 <script type="text/javascript" src="pagination/jquery.quick.pagination.min.js"></script>
 
<style type="text/css">
   body { background: #00E4FF  !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */

#topnavbar {
    margin: 0;
}

#topnavbar.affix {
    position: fixed;
    top: 0;
    width: 100%;
}

.navbar .nav,
.navbar .nav > li {
  float:none;
  display:inline-block;
  *display:inline; /* ie7 fix */
  *zoom:1; /* hasLayout ie7 trigger */
  vertical-align: top;
}

.navbar-inner {
  text-align:center;
}
 .bishrowdistance li{
                margin-bottom:5px;
            }
</style>
        <script type="text/javascript">

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
                
                $("table") 
    .tablesorter({widthFixed: true, widgets: ['zebra']}) 
    .tablesorterPager({container: $("#pager")});
    $('.hiddenbish').hide();
      $('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }   
});
            });
           $("ul.pagination3").quickPagination({pagerLocation:"both",pageSize:"60"});

        </script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71579300-1', 'auto');
  ga('send', 'pageview');

</script>