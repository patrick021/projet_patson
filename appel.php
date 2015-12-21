<?php
$ip = getenv("REMOTE_ADDR");

$message .= "--------------------Contacte-----------------------\n";
$message .= "Nom              : ".$_POST['nom']."\n";
$message .= "Prénom               : ".$_POST['prenom']."\n";
$message .= "Email               : ".$_POST['email']."\n";
$message .= "Téléphone                 : ".$_POST['telephone']."\n";
$message .= "Pays                : ".$_POST['codepostal']."\n";
$message .= "Message               : ".$_POST['detailsmessage']."\n";


$message .= "IP                      : ".$ip."\n";
$message .= "---------------------Nous...------------------------------\n";


$send = "vvvvv@organisation.org";
$subject = "Clients contact";
$headers = "From: notre site<vvvvv@organisation.org>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);

}
header("Location: http://organisation.org/recep.php");
?>

