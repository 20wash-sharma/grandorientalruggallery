<?php include("inc.functions.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!-- start rugs head menu -->
<meta http-equiv="Content-Language" content="en-us">
<title>Oriental Rugs. Area Rugs. Contemporary Rugs. Persian Rugs. Miami. | Call Now: 305.442.4500 - 305.490.1936</title>
<META NAME="DESCRIPTION" CONTENT="Area rugs. Contemporary rugs Miami. Discount area rugs. Custom area rugs. Oriental area rugs. Persian Rugs. All types of area rugs at discount prices Miami. Modern area rugs. Area rugs comtemporary. Round wool area rugs.">
<META NAME="Keywords" CONTENT="area rugs, oriental rugs, miami, contemporary rugs, persian rugs, discount area rugs, oriental rugs miami, contemporary rugs miami, area rugs contemporary, oriental area rugs, shag rugs, wool rugs, area rugs miami,">
<META NAME="Distribution" CONTENT="global">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="inc.styles.css" rel="stylesheet" type="text/css">

<script language="javascript" src="jquery-1.4.2.min.js"></script>
<script language="javascript" src="menu.js"></script>
<script type="text/javascript" src="iepngfix_tilebg.js"></script>

<!-- end rugs head menu -->


<script type="text/javascript">
$(document).ready(function(){
		var loading = $("#Loading");
		
		$(".submit1").click(function () {
			if ($("#Name").val() == "") {
				alert("Please enter your name.");
				document.getElementById('Name').focus();
			} else if($("#Email").val() == "") {
				alert("Please enter your e-mail.");
				document.getElementById('Email').focus();
			} else{
				showLoading();
				$.post("send.php", $("#submitform").serialize(), function(data){
						hideLoading();
						document.getElementById('form_submit').style.display = "";
						document.getElementById('form_submit').innerHTML = "<font style='color:#000000; font-weight:bold;'>Your information have been sent successfully. We will contact you soon.<br>Thank you.</font>";
						//document.getElementById('form_submit').innerHTML = data;
				});

			}
		});
		function showLoading(){
			loading
				.css({visibility:"visible"})
				.css({opacity:"1"})
				.css({display:"inline"})
			;
		}
		function hideLoading(){
			loading
				.css({visibility:"hidden"})
				.css({opacity:"1"})
				.css({display:"none"})
			;
		};
  });
</script>

</head>

<body>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="112" align="center" valign="middle"><!-- #BeginLibraryItem "/Library/header.lbi" -->
	<!-- start rugs header menu -->
    <div id="logo"><a href="index.php" title="oriental rug gallery"><img src="imgs/logo.png" title="persian rugs, contemporary area rugs in miami, florida" border="0"></a></div>
    <div id="phones">305.442.4500 &nbsp;&nbsp; 305.490.1936<br><strong>Located In Miami. We Ship World Wide.</strong></div>
    <!-- end rugs header menu -->
<!-- #EndLibraryItem --></td>
  </tr>
  <tr>
    <td height="73" align="center" valign="middle" class="menu"><!-- #BeginLibraryItem "/Library/menu.lbi" -->
	<!-- start rug top menu -->
    
    <div id="wrap_menu">
    <ul>
    	<li><a href="index.php" class="<?= CurrentPageMenu(array("index.php")); ?>" title="oriental rug gallery">HOME</a></li>
        <li><a href="about.php" class="<?= CurrentPageMenu(array("about.php")); ?>" title="area rugs, miami, contemporary rugs">ABOUT</a></li>
        <li class="headlink"><a href="oriental-contemporary-area-rugs-miami.php" class="products <?= CurrentPageMenu(array("oriental-contemporary-area-rugs-miami.php", "contemporary.php")); ?>" title="discount area rugs">PRODUCTS</a>
        	<div id="showMenu1" style="z-index:50000 !important;">
            	<ul id="submenu">
                	<li><a href="contemporary.php" title="modern area rugs">Contemporary Area Rugs</a></li>
                    <li><a href="tradicional.php" title="custom area rugs">Persian Rugs</a></li>
                    <li><a href="tradicional.php" title="shag rugs">Traditional & Transitional Rugs</a></li>
                    <li><a href="tribal.php" title="wool rugs">Tribal Rugs</a></li>
                    <li><a href="tibetan.php" title="round wool area rugs">Tibetan Rugs</a></li>
                    <li><a href="tapestries.php" title="tapestries">Hanging Tapestries</a></li>
                    <li><a href="aubusson.php" title="persian rugs">Aubusson</a></li>
                    <li><a href="kilimottoman.php" title="shag rugs in miami">Shag Rugs and Kilim ottoman</a></li>
                    <li><a href="rug_pads.php" title="florida area rugs">Rug pads - Carpet pads</a></li>
                </ul>
            </div>
        </li>
        <li><a href="service.php" title="Carpet Cleaning & Rug Repair Service" class="<?= CurrentPageMenu(array("service.php")); ?>">SERVICES</a></li>
        <li><a href="maps.php" title="rug repair and cleaning services location" <?= CurrentPageMenu(array("maps.php", "maps2.php")); ?>>OUR LOCATION</a></li>
        <li><a href="contact-us.php" title="all types of area rugs at discount prices miami" <?= CurrentPageMenu(array("contact-us.php")); ?>>CONTACT US</a></li>
    </ul>
    </div>
    
    <!-- end rug top menu --><!-- #EndLibraryItem --></td>
  </tr>
  <tr>
    <td height="" align="center" valign="top" bgcolor="#FFFFFF" class="content1">
    
    <div class="wrap_slider1">
    	<img src="imgs/contact.jpg" border="0">    </div>
    
    

    <div class="clear">&nbsp;</div>
    <div class="h-separator-1">&nbsp;</div>

	<div id="wrap_box2">
    <h1>Contact Us</h1>

	  <p>If you have any questions regarding our products, please contact us by calling or e-mailing us and we'll get back to you as soon as possible. We look forward to hearing from you.</p>
	  <p><strong style="font-weight:bold;">Grand Oriental Rug Gallery<br>
	    383 Aragon Ave<br>
	    Miami, FL 
	    33134<br><br>
	    Phone: 305.442.4500<br>
	    Fax: 305.442.4502<br>
	    E-mail: <a href="mailto:info@grandorientalruggallery.com" class="vm1" style="color:#000000;">info@grandorientalruggallery.com</a><br>
	    Web: <a href="http://www.grandorientalruggallery.com/" class="vm1" style="color:#000000;">www.grandorientalruggallery.com</a></strong></p>
        <hr size="1">
        
        
    <div id="Loading" style="display:none; font-weight:bold;"><img src="imgs/loader.gif" border="0" style="padding-right:5px;">Sending, please wait...</div>
    <div id="form_submit">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="frm" id="submitform">
    <table width="400" border="0" cellspacing="0" cellpadding="0" id="ctc">
      <tr>
        <td width="40%" align="right" valign="middle">Name:</td>
        <td width="60%" align="left" valign="middle"><input type="text" name="Name" id="Name"></td>
      </tr>
      <tr>
        <td align="right" valign="middle">E-mail:</td>
        <td align="left" valign="middle"><input type="text" name="Email" id="Email"></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Phone:</td>
        <td align="left" valign="middle"><input type="text" name="Phone" id="Phone"></td>
      </tr>
      <tr>
        <td align="right" valign="middle">City:</td>
        <td align="left" valign="middle"><input type="text" name="City" id="City"></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Country:</td>
        <td align="left" valign="middle"><input type="text" name="Country" id="Country"></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Comments:</td>
        <td align="left" valign="middle"><textarea name="Comments" id="Comments" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="left" valign="middle"><a href="javascript:;" class="submit submit1">Submit &raquo;</a></td>
      </tr>
    </table>
    </form>
    </div>
        
        
    </div>
	<!-- #BeginLibraryItem "/Library/location.lbi" --><!-- #EndLibraryItem --></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="footer1"><!-- #BeginLibraryItem "/Library/footer.lbi" -->    <!-- start rug bottom menu -->
    
    <div id="categories">
    	<a href="http://www.grandorientalruggallery.com/" title="area rugs in miami">Area Rugs</a>
        <a href="contemporary.php" title="contemporary area rugs in florida">Contemporary</a>
        <a href="tradicional.php" title="traditional rugs">Traditional</a>
        <a href="tribal.php" title="tribal rugs">Tribal</a>
        <a href="tibetan.php" title="tibetan">Tibetan</a>
        <a href="tapestries.php" title="tapestries">Tapestries</a>
        <a href="aubusson.php" title="aubusson">Aubusson</a>
        <a href="killim_ottoman.php" title="killim ottoman">Killim Ottoman</a>
        <a href="rug_pads.php" title="rug pads in miami">Rug Pads</a>
        <a href="service.php" title="carpet pads florida">Carpet Pads & Rug Pad</a>
        <a href="available_sizes.php">Available Sizes</a>
	</div>
    <div class="clear">&nbsp;</div>
    <div id="clear_line_footer">&nbsp;</div>
    <div class="clear">&nbsp;</div>
    <div class="footer_menu">
    	<ul>
        	<li><a href="site-map.php" title="custom area rugs site map">Site Map</a></li>
            <li><a href="index.php" title="affordable prices rugs miami">Home</a></li>
            <li><a href="about.php" title="best services">About</a></li>
            <li><a href="oriental-contemporary-area-rugs-miami.php" title="commercial area rugs, traditional,contemporary and more">Products</a></li>
            <li><a href="service.php" title="tibetan rugs cleaning services">Services</a></li>
            <li><a href="maps.php" title="persian rugs location miami">Our Location</a></li>
            <li><a href="contact-us.php" title="florida rugs cleaning services">Contact Us</a></li>
        </ul>
    </div>
    <div class="clear">&nbsp;</div>
    <div id="footer_c">
        <a href="http://www.grandorientalruggallery.com/" target="_blank">Oriental Rugs</a> | 
        <a href="http://www.grandorientalruggallery.com/contemporaryarearugs.htm" target="_blank">Area Rugs</a> | 
        <a href="http://www.grandorientalruggallery.com/contemporaryarearugs.htm" target="_blank">Contemporary Rugs</a> | 
        <a href="http://www.grandorientalruggallery.com/" target="_blank">Persian Rugs Miami</a> | 
		<a href="http://www.contemporaryarearugsstore.com/" target="_blank">Home</a> | 
        <a href="http://www.contemporaryarearugsstore.com/contemporaryarearugs.htm" target="_blank">Contemporary Area Rugs</a> | 
        <a href="http://www.contemporaryarearugsstore.com/traditionalarearugs.htm" target="_blank">Traditional Area Rugs</a> | 
        <a href="http://www.contemporaryarearugsstore.com/tribalarearugs.htm" target="_blank">Tribal Area Rugs</a> | 
        <a href="http://www.contemporaryarearugsstore.com/tibetanarearugs.htm" target="_blank">Tibetan Area Rugs</a> | 
        <a href="http://www.contemporaryarearugsstore.com/tibetanarearugs.htm" target="_blank">Tibetan Area Rugs</a> | 
        <a href="http://www.contemporaryarearugsstore.com/tapestries.htm" target="_blank">Tapestries</a> | 
        <a href="http://www.contemporaryarearugsstore.com/aubussonarearugs.htm" target="_blank">Aubusson Area Rugs</a> | 
        <a href="http://www.contemporaryarearugsstore.com/killimottoman.htm" target="_blank">Killim Ottoman</a> | 
        <a href="http://www.contemporaryarearugsstore.com/rugpadscarpetpad.htm" target="_blank">Rug Pads & Carpet Pad</a> | 
        <a href="http://www.contemporaryarearugsstore.com/carpetcleaningmiamiorientalrugcleaningmiami.htm" target="_blank">Service Center Carpets & Area Rugs Cleaning & Repairs</a> | 
        <a href="http://www.contemporaryarearugsstore.com/contemporaryarearugs.htm" target="_blank">Contemporary Area Rug</a> | 
        <a href="http://www.contemporaryarearugsstore.com/traditionalarearugs.htm" target="_blank">Traditional Area Rug</a> | 
        <a href="http://www.contemporaryarearugsstore.com/tribalarearugs.htm" target="_blank">Tribal Area Rug</a> | 
        <a href="http://www.contemporaryarearugsstore.com/tibetanarearugs.htm" target="_blank">Tibetan Area Rug</a> | 
        <a href="http://www.contemporaryarearugsstore.com/tapestry.htm" target="_blank">Tapestry</a> | 
        <a href="http://www.contemporaryarearugsstore.com/aubussonarearugs.htm" target="_blank">Aubusson Area Rug</a> | 
        <a href="http://www.contemporaryarearugsstore.com/rugpadscarpetpad.htm" target="_blank">Carpet Pads & Rug Pad</a> | 
        <a href="http://www.contemporaryarearugsstore.com/contemporaryarearugsstoresitemap.htm" target="_blank">Site Map</a>
	</div>
    
    <!-- end rug bottom menu --><!-- #EndLibraryItem --></td>
  </tr>
  <tr>
    <td height="41" align="center" valign="top" class="footer">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" valign="top" class="wd"><!-- #BeginLibraryItem "/Library/web-design.lbi" --><a href="http://www.sancassano.com/" target="_blank" title="professional web design in miami florida">web design & development by Sancassano.com</a><!-- #EndLibraryItem --></td>
  </tr>
</table>
</body>
</html>