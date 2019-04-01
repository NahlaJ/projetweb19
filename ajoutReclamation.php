<?PHP
include "entities/reclamation.php";
include "core/reclamationC.php";
 
 
if (isset($_POST['cin']) and isset($_POST['mail']) and isset($_POST['sujet']) and isset($_POST['message']) ){
$reclamation1=new reclamation($_POST['cin'],$_POST['mail'],$_POST['sujet'],$_POST['message']);

$reclamation1C=new reclamationC();
$reclamation1C->ajoutReclamation($reclamation1);

$message='votre reclamtion est prise en compte';
echo $message;
header('Location: afficherReclamation.php');	
}

else{

	$message='inserer vos données';
}
//*/

?>