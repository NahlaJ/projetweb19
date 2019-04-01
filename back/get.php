
<?php  
include "../core/reclamationC.php"; 
       
$reclamation=new reclamationC();
$q = intval($_GET['id']);
if($q!="")
{

		$tab=$reclamation->recuperer($q,$q);}
		else
			 {
			 	$tab=$reclamation->afficherReclamation1();
			 }


?>
<TABLE class='table'> 
<center><h1> Liste des réclamations </h1>  </center>

<TR> 
<TH> Num   </TH> 
<TH> Sujet </TH> 
<TH> type  </TH> 
<TH> Description  </TH> 
<TH> mail </TH> 
<TH> date </TH> 
<TH> Etat   </TH> 
<TH> Refrence produit   </TH> 

<TH>  </TH> 
<TH>  <center><font color="#C8AD7F">Gérer les réclmations </font></center></TH> 
</TR> 
<?php foreach($tab  as $row) { ?>
<TR> 

<TD><?php echo $row['numero'] ?></TD> 
<TD><?php echo $row['sujet'] ?> </TD> 
<TD> <?php echo $row['type1'] ?></TD> 
<TD> <?php echo $row['description'] ?> </TD> 
<TD> <?php echo $row['mail'] ?> </TD> 
<TD> <?php echo $row['date_actuelle'] ?></TD> 
<TD> <?php echo $row['etat'] ?> </TD>
<TD> <?php echo $row['id_produit'] ?> </TD>  

    
<TD> <button type="submit" class="btn btn-info" ><a href="modifierReclamation.php?numero=<?php echo $row['numero'];?>">
   Traiter </a></button></TD> 
   
   <TD> <button type="submit" class="btn btn-success" ><a href="mail.php?mail=<?php echo $row['mail'];?>">
   Envoyer mail </a></button></TD>


   <td><form method="POST" action="supprimerReclamation.php"><a id="cd-popup-trigger"> 
    <input type="button" name="supprimer" value="supprimer" class="btn btn-danger"></a>
    <input type="hidden" value="<?PHP echo $row['numero']; ?>" name="numero">
        </td>
</TR> 
<?php } ?>
    <div class="cd-popup" role="alert">
                <div class="cd-popup-container">
                    <p>voulez-vous vraiment supprimer cette reclamation ?</p>
                    <ul class="cd-buttons">
                        <li><input type="submit" name="supprimer"  value="OUI" ></li>
                        <li><a href="index.php" >NON</a></li>
                    </ul>
                    <a href="#0" class="cd-popup-close img-replace">Close</a>
                </div> <!-- cd-popup-container -->
            </div>



</TABLE>
 
