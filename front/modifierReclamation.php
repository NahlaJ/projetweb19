<?php
include "entities/reclamation.php";
include "core/reclamationC.php";
 
$reclamation1C= new ReclamationC();
$result=$reclamation1C->modifierrec(reclamation,getCin());
header('Location: index.php');

?>