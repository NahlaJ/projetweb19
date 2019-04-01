<?php 
include_once "C:/wamp64/www/nn/config.php";
include_once"C:/wamp64/www/nn/back/notif.php"

$sql="UPDATE `reclamation` SET `notif`=1 " ;

$db=config::getConnexion();

$req=$db->prepare($sql);
$req->execute();
header ('Location:index.php');


?>