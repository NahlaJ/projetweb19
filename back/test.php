<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <script src="js/Chart.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAV</title>
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/date_actuellepicker3.css" rel="stylesheet">
    <link href="css1/styles.css" rel="stylesheet">
    <link href="css1/popup.css" rel="stylesheet">
    <link href="css1/recherch.css" rel="stylesheet">
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class=""
          style="width: 500px;height: 200px;">
            <div class="page-title">
            <canvas id="myChart" width="10" height="10" style="display: block;height: 20px !important ;width: 5px!important ; border : 5px"></canvas>


<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["produit","servoices"],
        datasets: [ {
           
            data: [ <?php 


                    $connection = mysqli_connect("localhost", "root", "", "projet");
                    $sql = "SELECT COUNT(numero) as number from reclamation where  type1='produit'";
                    $query = mysqli_query($connection, $sql);
                    $table = null;
                    while ($row = mysqli_fetch_array($query)) {
                        $table = $row[0];
                    }
                    print_r($table);


                    ?>
                     
                     <?php 


                        $connection = mysqli_connect("localhost", "root", "", "projet");
                        $sql = "SELECT COUNT(numero) as number from reclamation where  type1='services'";
                        $query = mysqli_query($connection, $sql);
                        $table = null;
                        while ($row = mysqli_fetch_array($query)) {
                            $table = $row[0];
                        }
                        print_r($table);


                        ?>
   
],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)'
            ],
            borderColor: [
                'rgba(255,99,132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)'
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