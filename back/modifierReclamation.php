<?php
include "../entities/reclamation.php";
include "../core/reclamationC.php";
 
$reclamation1C= new ReclamationC();
$result=$reclamation1C->modifierReclamation($_GET['numero']);
header('Location: index.php');

?>