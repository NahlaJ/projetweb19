<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p']) && $_SESSION['role']=="admin") 
{ 

?>







<!DOCTYPE html>
<html>
<head>
<?php

include "../entities/reclamation.php";
include "../core/reclamationC.php";
include"../core/notifcore.php";

?>


	<meta charset="utf-8">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="chart.js" type="text/javascript"></script>
    <script src="chart2.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SAV</title>
	<link href="css1/bootstrap.min.css" rel="stylesheet">
	<link href="css1/font-awesome.min.css" rel="stylesheet">
	<link href="css1/date_actuellepicker3.css" rel="stylesheet">
	<link href="css1/styles.css" rel="stylesheet">
	
	<link href="css1/recherch.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
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
						<em class="fa fa-bell"></em><span class="label label-info"> <?php echo $liste?></span>
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

			 <li class=""><a href="../../ghaylene web/dashs/afficherclient.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client</a></li>
      <li><a href="../../ghaylene web/dashs/afficherclientfidel2.php"><em class="fa fa-clone">&nbsp;</em>Gestion Client fidele</a></li>
      <li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/jeux.php"><em class="fa fa-clone">&nbsp;</em>Concours</a></li>
      <li><a href="../../projet_dashboard_CRUD/CRUD_Offre/views/offre.php"><em class="fa fa-clone">&nbsp;</em>Offre</a></li>
      
      <li class="active"><a href="afficherCommande.php"><em class="fa fa-clone">&nbsp;</em> Commande</a></li>
              
            <li class=""><a href="../../livraison/CRUD/views/afficherLivraison.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livraisons</a></li>
      <li class=""><a href="../../livraison/CRUD/views/afficherL.php"><em class="fa fa-clone">&nbsp;</em> Gestion Livreurs</a></li>
      
			
			
			<li class=""><a href="index.php"><em class="fa fa-toggle-off">&nbsp;</em> Reclamation</a></li>
			<li class=""><a href="avisBack.php"><em class="fa fa-toggle-off">&nbsp;</em> Avis</a></li>
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
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">R&eacuteclamations</h1>
				
					
				  <div style="width: 500px; height: 500px">
						<canvas id="myChart" width="1000" height="1000" style="display: block;height: 50px !important ;width: 20px!important ; border : 20px"></canvas>


							<script>
									var ctx = document.getElementById("myChart").getContext('2d');
									var myChart = new Chart(ctx, {
  											  type: 'bar',
   												 data: {
          					  labels: ["services","Produit"],
       													 datasets: [{
        							    label: '# of Votes',
         												   data: [  <?php 


                        $connection = mysqli_connect("localhost", "root", "", "projet");
                        $sql = "SELECT COUNT(numero) as number from reclamation where  type1='services'";
                        $query = mysqli_query($connection, $sql);
                        $table = null;
                        while ($row = mysqli_fetch_array($query)) {
                            $table = $row[0];
                        }
                        print_r($table);


                        ?>
   												 , <?php 


      										  $connection = mysqli_connect("localhost", "root", "", "projet");
      										 $sql = "SELECT COUNT(numero) as number from reclamation where  type1='produit'";
      					  $query = mysqli_query($connection, $sql);
       								 $table = null;
        while ($row = mysqli_fetch_array($query)) {
            $table = $row[0];
        }
        print_r($table);


        ?>
],
            backgroundColor: [
                'rgba(0, 102, 204)',
                'rgba(102, 179, 255)'
                //'rgba(255, 206, 86)'
            ],
            borderColor: [
                'rgba(0, 102, 204)',
                'rgba(102, 179, 255)'
                //'rgba(255, 206, 86)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


</script>
</div>

			</div>
			</div>
		</div>
</div>
		

  
</div>
</body>
</html>
<?php
}
else{
	header('location:loginghaylene.php');
}

?>
