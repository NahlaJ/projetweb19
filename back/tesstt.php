<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="chart2.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body> hello
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


                        $connection = mysqli_connect("localhost", "root", "", "2a6");
                        $sql = "SELECT COUNT(numero) as number from reclamation where  type1='services'";
                        $query = mysqli_query($connection, $sql);
                        $table = null;
                        while ($row = mysqli_fetch_array($query)) {
                            $table = $row[0];
                        }
                        print_r($table);


                        ?>
    , <?php 


        $connection = mysqli_connect("localhost", "root", "", "2a6");
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
</body>
</html>