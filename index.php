<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Hi welcome to BD Waste Recycling for cash program\n";
$response .= "1. Enter 1 to Request Pickup\n";
$response .= "2. Enter 2 to Check points\n";
$response .= "3. Enter 3 to Account history\n";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON Please select pickup type:\n";
$response .= "1. Immediate Pickup \n";
$response .= "2. Schedule Pickup \n";
$response .= "99. Main Menu";
}
//Menu for a user who selects '2' from the first menu 
// Will be brought to this third menu screen
else if ($text == "2") {
$response = "CON You have accumulated 2453 BD Points. \n";
$response .= "Please Enter 1 to redeem points \n";
$response .= "Enter number of points you want to redeem\n";
$response .= "99. Back\n";
$response .= "0. Main Menu";
}
//Menu for a user who selects '3' from the first menu 
// Will be brought to this fourth menu screen

else if ($text == "3") {
$response = "CON You have recycled a total of 4562435 kg of waste \n";
$response .= "OK";
}
else if ($text == "1*1") {
$response = "CON Please choose your location";
$response .= "1. Pokuase\n";
$response .= "2. Ablekuma\n";
$response .= "3. Awoshie\n";
$response .= "4. Nsawam Junction\n";
$response .= "99. Back\n";
$response .= "0. Main Menu";
} 
else if ($text == "1*2") {
$response = "CON Please Enter Date for Pickup in format DD|MM|YYYY\n";
$response .= "99. Back\n";
$response .= "0. Main Menu";
}
//echo response
header('Content-type: text/plain');
echo $response
?>