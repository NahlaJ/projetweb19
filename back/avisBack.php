<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session

?>




<!DOCTYPE html>
<html>
<head>
<?php
include "C:/wamp64/www/nn/entities/avis.php";
include "C:/wamp64/www/nn/core/avisC.php";
$omaima=new avisC();
$tab=$omaima->afficheravis();
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SAV</title>
	<link href="css1/bootstrap.min.css" rel="stylesheet">
	<link href="css1/font-awesome.min.css" rel="stylesheet">
	<link href="css1/date_actuellepicker3.css" rel="stylesheet">
	<link href="css1/styles.css" rel="stylesheet">
	<link href="css1/popup.css" rel="stylesheet">
	<link href="css1/recherch.css" rel="stylesheet">
	
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a><br />
										<small class="text-muted">1:24 pm - 25/03/2015</small>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					        </a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			< <li class=""><a href="../../ghaylene web/dashs/afficherclient.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client</a></li>
      <li><a href="../../ghaylene web/dashs/afficherclientfidel2.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client fidele</a></li>
      <li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/jeux.php"><em class="fa fa-clone">&nbsp;</em>Concours</a></li>
      <li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/offre.php"><em class="fa fa-clone">&nbsp;</em>Offre</a></li>
      
      <li class=""><a href="afficherCommande.php"><em class="fa fa-clone">&nbsp;</em> Commande</a></li>
              
            <li class=""><a href="../../livraison/CRUD/views/afficherLivraison.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livraisons</a></li>
      <li class=""><a href="../../livraison/CRUD/views/afficherL.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livreurs</a></li>
      
			
			<li class=""><a href="index.php"><em class="fa fa-toggle-off">&nbsp;</em> Reclamation</a></li>
			<li class="active"><a href="avisBack.php"><em class="fa fa-toggle-off">&nbsp;</em> Avis</a></li>
			<li class=""><a href="http://localhost/sav/livechat/php/app.php?admin"><em class="fa fa-toggle-off">&nbsp;</em> forum</a></li>
		</ul>
		<li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">AVIS</h1>
			</div>
		</div><div id="hacker-list">
              				<a href="trieravis.php"><span class="sort" data-sort="name" >Sort by type</span></a>	
						</div>
			
	
	<TABLE class='table'> 
<center><h1> Liste des avis </h1>  </center>

<TR > 
<TH> cinn  </TH> 
<TH> commentaire </TH>  
<TH> type  </TH> 
<TH>  </TH> 
<TH>  </TH> 
<TH>  </TH> 
 
<TH>  <center><font color="#C8AD7F">Gérer les avis </font></center></TH> 
<?php foreach($tab  as $row) {
if($row['cinn']==0) {?> 
</TR> 

<TR style="background-color:#ffe6e6;""> 


<TD><?php echo $row['cinn'] ?></TD> 
<TD> <?php echo $row['commentaire'] ?></TD> 
<TD><?php echo $row['type'] ?> </TD> 
	
<TD> ></TD> 
   
   <TD> </TD>


        <td> 
		<a id="cd-popup-trigger"><input type="button" name="supprimer" value="supprimer" class="btn btn-danger"></a></td>
	<form method="POST" action="supprimeravis.php">
	 <input type="hidden" value="<?PHP echo $row['cinn']; ?>" name="cin">

		<div class="cd-popup" role="alert">
                <div class="cd-popup-container">
                    <p>voulez-vous vraiment supprimer cet avis ?</p>
                    <ul class="cd-buttons">
                        <li><input type="submit" name="supprimer"  value="OUI" ></li>
                        <li><a href="afficheravis.php" >NON</a></li>
                    </ul>
                    <a href="#0" class="cd-popup-close img-replace">Close</a>
                </div> <!-- cd-popup-container -->
         </div>
    </form>
</TR> <?php }
else { ?>
  

<TR> 


<TD><?php echo $row['cinn'] ?></TD> 
<TD> <?php echo $row['commentaire'] ?></TD> 
<TD><?php echo $row['type'] ?> </TD> 



	
<TD> </TD> 
   
   <TD> </TD>


   		<td>
   	<form method="POST" action="supprimeravis.php"><a id="cd-popup-trigger"> 
			<input type="button" name="supprimer" value="supprimer" class="btn btn-danger"></a>
			<input type="hidden" value="<?PHP echo $row['cinn']; ?>" name="cinn">
		</td>
		   <div class="cd-popup" role="alert">
                <div class="cd-popup-container">
                    <p>voulez-vous vraiment supprimer cet avis ?</p>
                    <ul class="cd-buttons">
                        <li><input type="submit" name="supprimer"  value="OUI" ></li>
                        <li><a href="avisBack.php">NON</a></li>
                    </ul>
                    <a href="#0" class="cd-popup-close img-replace">Close</a>
                </div> <!-- cd-popup-container -->
            </div>
     </form>


</TR>

<?php
} }?>






<!--TD> <button type="submit" class="btn btn-success" ><a href="mail.php?mail=<?php echo $row['mail'];?>">
   Envoyer mail </a></button></TD-->



</TABLE>

</body>
</html>
		
		<?php


?>