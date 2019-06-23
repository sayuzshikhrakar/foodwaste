<?php

// Inialize session
include('include/header.php');

if (!isset($_SESSION['id'])) {
header('Location: ../index.php');
}
?>
<?php
?>
<!DOCTYPE html>
<html>
<head>
 <title>Table with feedback</title>
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
 <table>
 <tr>
  <th>ID</th> 
  <th>NAME</th> 
  <th>EMAIL</th>
  <th>SUBJECT</th>
  <th>MESSAGE</th>
 </tr>

<?php
$con = mysqli_connect("localhost", "root", "", "foodwaste");
// Check connection
  $sql = "SELECT id, name, email,subject,message FROM feedbacks";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>". $row["email"]. "</td><td>". $row["subject"]. "</td><td>". $row["message"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</div>
</html>

<?php
include('include/sidebar.php');
?>