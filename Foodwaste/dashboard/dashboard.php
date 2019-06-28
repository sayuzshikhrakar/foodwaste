<?php
include('include/header.php');
// Inialize session

// Check, if username session is NOT set then this page will jump to login page

if (!isset($_SESSION['id'])) {

header('Location: ../index.php');
}
else
{
  $id = $_SESSION['id'];
}

?>

 
<!-- Table  html code-->
<div id="page-wrapper">
<div class="col-md-offset-2 col-md-8">
<div class="panel panel-default">
<div class="panel-heading1">
<i class="fa fa-clock-o"></i> Total Pickup Schedule
<div class="search">
  <form method="get">
  <input type="text" name="search" placeholder="Search..">
</form>
</div>
 </div>
  <div class="panel-body">                    
 
<div class="table-resposnsive">
  <table>
     <tr>
    <th>ID</th>  
    <th>Schedule Date</th>
    <th>Select Time</th>
    <th>Contact</th>
    <th>Location</th>

  </tr>

<!-- per page limit code -->
 <?php
 $perpage = 7;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
if($type == 'admin')
{
  $PageSql = "SELECT * FROM `pick` ";
}
elseif ($type == 'user') {
$PageSql = "SELECT * FROM `pick` WHERE `userid`='$id' ";
}
$pageres = mysqli_query($con, $PageSql);
$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

if($type == 'admin')
{
  $ReadSql = "SELECT * FROM `pick` LIMIT $start, $perpage";

}
elseif ($type == 'user') {
$ReadSql = "SELECT * FROM `pick` WHERE `userid`='$id' LIMIT $start, $perpage";

}
$res = mysqli_query($con, $ReadSql);
   ?>


<!-- data display from table -->

<?php
include ('user.functions.php');

$queryString = $_SERVER['QUERY_STRING'];
if(!empty($queryString)) {
    parse_str($queryString, $queryArray);

    $res = getUsers($queryArray);

}
while($r = mysqli_fetch_assoc($res)){
?>

  <tr>
        <td><?php echo $r['id']; ?></td> 
        <td><?php echo $r['schedule_date']; ?></td> 
        <td><?php echo $r['select_time']; ?></td> 
        <td><?php echo $r['phone_no']; ?></td> 
        <td><?php echo $r['location']; ?></td>
        <td> <div class="btn-group btn-group-justified">

</div> 
</td> 


      </tr> 
  <?php
        
 }

?>
</table>
</div>
</div>
</div>
</div>
</div>
   <style>

#page-wrapper {
    margin: 0 0 0 220px;
}

.fa-users{
  font-size: 25px;
   }

   .fa-edit{
  font-size: 16px;
   }

   .fa-trash{
  font-size: 16px;
   }


table {
    border-collapse: collapse;
    width: 100%;
    font-size: 15px;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}



.btn-group-justified {
    width: auto; 
}

.panel-heading1{
  background-color: #a7cd3a !important;
  font-size: 18px;
  color: #fff !important;
  padding: 10px 15px;
}

.panel-body{
  padding: 0 !important;
}

.search{
  float: right;
}

.search input[type=text] {
    width: 130px;
    border: 2px solid #fff;
    border-radius: 4px;
    color: #000;
    padding: 0px 0px 0px 7px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.search input[type=text]:focus {
    width: 100%;
    outline: 0;
}

</style>



<?php
include('include/sidebar.php');

?>


