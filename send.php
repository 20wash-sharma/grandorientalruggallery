<?php
	extract($_POST);
	$emailbody = "\nThe following data were sent: \n\n";
	$emailbody .= "Name............: $Name\n";
	$emailbody .= "Email...........: $Email\n";
	$emailbody .= "Phone..............: $Phone\n";
	$emailbody .= "======================================================\n";
	$emailbody .= "Subject.....: New Message from GrandOrientalRugGallery.com\n\n";
	$emailbody .= "======================================================\n\n";
	$emailbody .= $Comments;
	$emailto = "Grand Oriental Rug Gallery <info@grandorientalruggallery.com>";
	$emailfromaddr ="$Email";
	$emailrepply = $Email;
	$emailfromname = $Name;
	$emailsubject = "Contact from GrandOrientalRugGallery.com";
	$emailfromaddr = "";

    // The body can be as long as you wish, and any combination of text and variables
    // Here we are forming one large header line
    // Every header must be followed by a \n except the last
    $emailheaders = "From: $Name <$Email>\n";
    $emailheaders .= "Reply-To: $Email\n";
    // I write myself in here as a BCC so I can make sure no one is abusing the script
    $emailheaders .= "Bcc: $emailfromaddr\n";
    $emailheaders .= "X-Mailer: PHP/" . phpversion() . "\n";
    // Note the Sender-IP. I write this one in just as a small security percaution
    $emailheaders .= "X-Sender-IP: ". $_SERVER['REMOTE_ADDR'];
    // Because I predefined all of my variables, this mail() function looks nice and clean hmm?
	//echo $emailbody;
	//mail( $emailto,$emailsubject, $emailbody, $emailheaders);
        if(mail( $emailto,$emailsubject, $emailbody, $emailheaders))
                echo json_encode(array('sent' => 'yes')); 
       else 
           echo json_encode(array('sent' => 'yes'));
  
?>