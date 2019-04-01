
<?PHP
include "entities/avis.php";
include "core/avisC.php";

if (isset($_POST['cinn']) and isset($_POST['commentaire']) and isset($_POST['type']))
{
$avis1=new avis($_POST['cinn'],$_POST['commentaire'],$_POST['type']);

$avis1C=new avisC();

$avis1C->ajouteravis($avis1);

$message='votre reclamtion est prise en compte';
echo $message;
header('Location:afficheravis.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>


