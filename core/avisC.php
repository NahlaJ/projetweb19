<?PHP
include "C:/wamp64/www/nn/config.php";
class avisC 
{
	
	function ajouteravis($avis){
		$sql="insert into avis (cinn,commentaire,type) values (:cinn, :commentaire, :type)";
		$db = config::getConnexion();
		try{
		$cinn=$avis->getcinn();
        $req=$db->prepare($sql);
		$commentaire=$avis->getcommentaire();
        $type=$avis->gettype();
      
       
       $req->bindValue(':cinn',$cinn);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':type',$type);
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}


function afficheravis(){
		
		
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From avis  ";
		$db = config::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimeravis($cinn){
		$sql="DELETE FROM avis where cinn= :cinn";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cinn',$cinn);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


	
	//// AFFICHAGE FRONT////
	/*
	function afficheravis1($mail_client){
		
		
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From avis where mail_client= '$mail_client' ";
		$db = config::getConnexion();

		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}*/
	function trier()
	{
$sql="SElECT * From avis order by cinn ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
/*	function modifier($avis,$cinn)
	{
		$sql="UPDATE avis SET cinn=:cinn, commentaire=:commentaire where cinn='$cinn' ";
		$db = config::getConnexion();
		try
		{		
		$req=$db->prepare($sql);
		$cinn=$avis->getcinn();
		$type=$avis->gettype();
        $commentaire=$avis->getcommentaire();
        
        $datas = array(':cin'=>$cin, ':cinn'=>$cinn, ':commentaire'=>$commentaire, ':type'=>$type);
        $req->bindValue(':cin',$cin);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':type',$type);
		$req->bindValue(':commentaire', $commentaire);
		
        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
		
	}
}
*/

/*
	function modifieravis($cinn,$commentaire,$type){		
		$db = config::getConnexion();
	
	$sql = $db->prepare('UPDATE avis set cinn = :cinn , commentaire = :commentaire , type = :type   where cinn = :cinn');
	$sql->bindvalue(':cinn',$cinn);
	$sql->bindvalue(':commentaire',$commentaire);
	$sql->bindvalue(':type',$type);
	
	$sql->execute();
	}
*/

	function modifieravis($avis,$cinn){
		$sql="UPDATE avis SET cinn=:con, commentaire=:commentaire,type=:type WHERE cinn=:cinn";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$con=$avis->getcinn();
        $commentaire=$avis->getcommentaire();
        $type=$avis->gettype();
       
		$datas = array(':con'=>$con, ':cinn'=>$cinn, ':commentaire'=>$commentaire,':type'=>$type);
		$req->bindValue(':con',$con);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':type',$type);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	
	}


	
	function recupereravisc($cinn){
		$sql="SELECT * from avis where cinn=$cinn";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
}

?>