<?PHP
include "C:/wamp64/www/nn/core/reclamationC.php";




$reclamationC=new reclamationC();
if (isset($_POST["cin"])){
	$reclamationC->supprimerrec($_POST["cin"]);
	header('Location: index.php');
}

?>