<?php
include "../entities/avis.php";
include "../core/avisC.php";
$email_mail=$_GET['mail_client'];
 
    ini_set('display_errors',1);
 
    /*error_reporting(E_ALL);*/
 
    $from = "hanen.tarhouni@esprit.tn";
 
    $to = $email_mail;
 
    $sujet = "Réponse !";
 
    $message = "AUTO REPAR vous informe que vos avis est en cours de traitement . Merci pour votre fid&eacutelit&eacute ";
    
     
 
    $headers = "From:".$from;


if(mail($to,$sujet,$message,$headers))
{
        echo "L'email a bien été envoyé.";
        
}
else
{
        echo "Une erreur c'est produite lors de l'envois de l'email.";
}
     



?>