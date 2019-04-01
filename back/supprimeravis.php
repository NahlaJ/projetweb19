<?PHP
include "C:/wamp64/www/nn/core/avisC.php";




$avisC=new avisC();
if (isset($_POST["cinn"])){
	$avisC->supprimeravis($_POST["cinn"]);
	header('Location: avisBack.php');
}

?>
<?PHP
