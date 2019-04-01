<?PHP
include "C:/wamp64/www/nn/core/reclamationC.php";
$reclamation1C=new reclamationC();
$listereclamation=$reclamation1C->afficherReclamation();

?>


<table border="1">
<tr>
<td>Cin</td>
<td>mail</td>
<td>sujet</td>
<td>prenom</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listereclamation as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['sujet']; ?></td>
	<td><?PHP echo $row['message']; ?></td>
	
	<td><form method="POST" action="supprimerReclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierReclamation.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


