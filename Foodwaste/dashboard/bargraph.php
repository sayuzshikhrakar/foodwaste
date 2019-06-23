
<?php

include('../connect.php');
include('include/header.php');
include('include/sidebar.php');
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<!DOCTYPE html>
<html>
<head>
 <title>Bargraph</title>
 </head>

<div id="page-wrapper">
<style>
#page-wrapper {
    margin: 0 0 0 220px;
    padding-left:200px;
}
table {
    border-collapse: collapse;
   }
th{
    padding: 10px;
    background-color: #a7cd3a;
    text-align: left;
    border-bottom: 1px solid #ddd;
    color: white;
    font-size:20px;
   }
   td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}


</style>


<body>
<?php
$id = $_SESSION['id'];
            if($type == 'admin')
            {
$result = mysqli_query($con,"SELECT location, COUNT(location) as num FROM pick group by location");
}
 elseif($type == 'user')
            {
$result = mysqli_query($con,"SELECT location, COUNT(location) as num FROM pick where userid='$id' group by location");
}
$click = mysqli_fetch_all($result,MYSQLI_ASSOC);
$num = json_encode(array_column($click, 'num'),JSON_NUMERIC_CHECK);
$location = json_encode(array_column($click, 'location'),JSON_NUMERIC_CHECK);

?>
<script>
$(document).ready(function()
{
    var data_num = <?php echo $num; ?>;
    var data_location = <?php echo $location; ?>;


    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Fig: Showing data of food wastage'
        },
        xAxis: {
            categories: data_location
        },
        yAxis: {
            title: {
                text: 'Numbers'
            }
        },
        plotOptions: {
            series: {
                pointWidth: 50,
                groupPadding:0.1
            }
        },
        series: [{
            name: 'Value',
            data: data_num,
            color: '#a7cd3a'
        }]
    });
});
</script>

<div id="container" style="height: 370px; width: 100%;"></div>
<?php

?>