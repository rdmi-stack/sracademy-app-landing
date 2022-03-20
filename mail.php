
<?php


//get data from form  
$to = "ankit@rdmi.in";
    $name = $_POST['uname'];
    $city= $_POST['city'];
	$mobile= $_POST['mobile'];
$to = ("ankit@rdmi.in");
$subject = "Query from SRA";
$txt ="Name = ". $name . "\r\n City = " . $city . "\r\n Mobile = " . $mobile;
$headers = "From: " . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}


?>

