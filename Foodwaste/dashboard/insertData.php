<?php

$link = mysqli_connect("localhost", "root", "root", "foodwaste");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$schedule_date = $_REQUEST['schedule_date'];
$time = $_REQUEST['select_time'];
$waste_type = $_REQUEST['waste_type'];
$location = $_REQUEST['location'];
$phone = $_REQUEST['phone_no'];
$userid = $_REQUEST['userid'];
// Attempt insert query execution
$sql1 = "INSERT INTO  pick(schedule_date, select_time, phone_no, userid, location) VALUES ('$schedule_date','$time','$phone','$userid','$location')";
$sql2 = "INSERT INTO waste_type(waste_type, location, phone_no, userid) VALUES ('$waste_type','$location','$phone','$userid');";

if(mysqli_query($link, $sql1)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}
if(mysqli_query($link, $sql2)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);