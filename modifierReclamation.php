<?php
include "entities/reclamation.php";
include "core/reclamationC.php";
 

if (isset($_GET['cin'])){
	$reclamationr=new reclamationC();
    $result=$reclamationr->recupererrec($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$mail=$row['mail'];
		$sujet=$row['sujet'];
		$message=$row['message'];
		?>


<form action="modifierReclamation.php" id="contact-form" name ="f" method="post">
									
										<div class="form_group half" >
										<input type="text" name="cin" required="required"  placeholder="votre cin" 

										value="<?PHP echo $cin ?>"
										 >
										
									</div>
									
							
									<div class="form_group half">
										
										<input type="email" name="mail"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required=""
										value="<?PHP echo $mail ?>">
										
									</div>
									<div class="form_group">
										<input type="text" required="required" name="sujet"  placeholder="votre sujet" value="<?PHP echo $sujet ?>">

										
									</div>
									<div class="form_group">
										<input style="width:1260px; height:300px " name="message"  value="<?PHP echo $message ?>">
									</div>
									<div class="form_group">
										<div class="btn_wrapper" >
											<input class="btn_two" type="submit" value="modifier" name="modifier" >
											
										</div>

									</div>
									<input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>">

								</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['cin'],$_POST['mail'],$_POST['sujet'],$_POST['message']);
	$reclamationC=new reclamationC();
	$reclamationC->modifierrec($reclamation,$_POST['cin_ini']);
	echo "<script>alert('la modification est effectutée avec succes')</script>";
	header('Location: afficherReclamation.php');
}
?>