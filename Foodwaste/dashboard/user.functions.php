<?php
include('../connect.php');
function getUsers($filters=[])
{
    global $con;

    $sqlQuery = "SELECT * FROM pick";

    if(!empty($filters) and array_key_exists('search', $filters)){
        $search =    $filters['search'];
        $sqlQuery = "
          SELECT * FROM pick 
          WHERE id LIKE '%$search%' or phone_no LIKE '%$search%' ";
    }

    $result = mysqli_query($con, $sqlQuery);
    return $result;
}

function deleteUser($id)
{
    global $con;

    $sqlQuery = "DELETE FROM pick WHERE id = $id";
    $result = mysqli_query($con, $sqlQuery);

    header("Location:dashboard.php");
}
