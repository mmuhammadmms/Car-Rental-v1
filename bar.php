<!doctype html>
<html>

<head>
    <title>Bar Chart</title>
    <script src="js2/jquery.min.js"></script>
    <script src="dist/Chart.bundle.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>





<?php
include ("connect.php");
$sql3 = "SELECT C.cars_name , COUNT(R.reservation_id)
FROM reservation R , cars C
WHERE C.cars_id = R.cars_id
GROUP BY C.cars_name
ORDER BY COUNT(R.reservation_id)  DESC";
$stid3 = oci_parse($conn, $sql3);
oci_execute($stid3);

$i = 0;
while($row3 = oci_fetch_array($stid3,OCI_BOTH)){


$cars[$i] = $row3["CARS_NAME"];
$rent[$i] = $row3["COUNT(R.RESERVATION_ID)"];
echo $cars[$i];
echo $rent[0];
$i++;

}



?>


<body>
    <div id="container" style="width: 75%;">
        <canvas id="canvas"></canvas>
    </div>

    <script>

        var barChartData = {
            labels: ["<?php echo $cars[0];?>", "<?php echo $cars[1];?>", "<?php echo $cars[2];?>","" ],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: "rgba(220,220,220,0.5)",
                data: [<?php echo $rent[0];?>,<?php echo $rent[1];?>,<?php echo $rent[2];?>,0]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    // Elements options apply to all of the options unless overridden in a dataset
                    // In this case, we are setting the border of each bar to be 2px wide and green
                    elements: {
                        rectangle: {
                            borderWidth: 2  ,
                            borderColor: 'rgb(0, 255, 0)',
                            borderSkipped: 'bottom'
                        }
                    },
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };


    </script>
</body>

</html>
