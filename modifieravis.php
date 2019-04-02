<?php
include "entities/avis.php";
include "core/avisC.php";
 

if (isset($_GET['cinn'])){
	$avisC=new avisC();
    $result=$avisC->recupereravisc($_GET['cinn']);

	foreach($result as $row){
		$cinn=$row['cinn'];
		$commentaire=$row['commentaire'];
		$type=$row['type'];
		?>


<form action="modifieravis.php" id="contact-form" name ="f" method="post">
									
										<div class="form_group half" >
										<input type="text" name="cinn" required="required"  placeholder="votre cinn" 

										value="<?PHP echo $cinn ?>"
										 >
										
									</div>
									
							
									
									<div class="form_group">
										<input type="text" required="required" name="type"  placeholder="type" value="<?PHP echo $type ?>">

										
									</div>
									<div class="form_group">
										<input style="width:560px; height:200px " name="commentaire"  value="<?PHP echo $commentaire ?>">

									</div>
									<div class="form_group">
										<div class="btn_wrapper" >
											<input class="btn_two" type="submit" value="modifier" name="modifier" >
											
										</div>

									</div>
									<input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cinn'];?>">

</form>

<?PHP
	}
}

if (isset($_POST['modifier'])){
	$avis=new avis($_POST['cinn'],$_POST['commentaire'],$_POST['type']);
	$avisC=new avisC();
	$avisC->modifieravis($avis,$_POST['cin_ini']);
	echo "<script>alert('la modification est effectutée avec succes')</script>";
	header('Location: afficheravis.php');
}
?>