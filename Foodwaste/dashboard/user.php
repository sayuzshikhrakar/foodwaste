<?php

// Inialize session
include('include/header.php');

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['id'])) {
header('Location: ../index.php');
}

?>

<?php
include"../connect.php";// Database connection
  
  if(isset($_POST['PickupTime'])) { //Checks if form is submitted
    $scheduledate = $_POST['schedule_date'];
    $selecttime = $_POST['select_time'];
    $phoneno = $_POST['phone_no'];
    $location = $_POST['location'];

  $check=mysqli_query($con,"SELECT * FROM pick WHERE phone_no='$phoneno'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
  echo'
   <script>
   window.onload = function() {
      alert("Picktime Already Exists");
      location.href = "user.php";  
   }
   </script>';
   } else {  
    $id = $_SESSION['id'];
      $sqlQuery = "INSERT IGNORE INTO pick (schedule_date, select_time, phone_no, userid, location) VALUES ( '$scheduledate', '$selecttime', '$phoneno', '$id', '$location')";  
      if ($result = mysqli_query($con, $sqlQuery)) {
            echo'
   <script>
   window.onload = function() {
      alert("Your PickupTime is Registered");
      location.href = "user.php";  
   }
   </script>
';
    } else {
            echo'
   <script>
   window.onload = function() {
      alert("Error in database. Contact to Admin");
      location.href = "user.php";  
   }
   </script>
';

    }

}
  }

  ?>

    <script type="text/javascript">
//Function to allow only numbers to textbox
function validate(key)
{
//getting key code of pressed key
var keycode = (key.which) ? key.which : key.keyCode;
var phn = document.getElementById('txtPhn');
//comparing pressed keycodes
if (!(keycode==8 || keycode==46)&&(keycode < 48 || keycode > 57))
{
return false;
}
else
{
//Condition to check textbox contains ten numbers or not
if (phn.value.length <10)
{
return true;
}
else
{
return false;
}
}
}
</script>

  <div class="col-xs-offset-3 col-xs-8">
   <div class="login-page">
  <div class="form">

      <h1 style="color: #6c7073; margin: 0px 0px 40px 0px;">Select Your Pickup Time</h1>

    <form class="login-form" action="" method="post" >
      <input type="" required name="schedule_date" id="datepicker1" placeholder="Select PickupDate" autocomplete="off"/>
           
            <select name="select_time" placeholder="select_time">
                <option selected="true" disabled="disabled">Select Time</option>
                <option value="06:00 AM to 09:00 AM">06:00 AM to 09:00 AM</option>
                <option value="09:00 AM to 12:00 Noon">09:00 AM to 12:00 Noon</option>
                <option value="12:00 Noon to 03:00 PM">12:00 Noon to 03:00 PM</option>
                <option value="03:00 PM to 06:00 PM">03:00 PM to 06:00 PM</option>
            </select> 
            <select name="waste_type" placeholder="Waste Type">
                <option selected="true" disabled="disabled">Waste Type</option>
                <option value="raw">raw</option>
                <option value="cooked">cooked</option>
                
            </select> 

            <select name="location" placeholder="location">
                <option selected="true" disabled="disabled">Select Location</option>
                <option value="Chabahil">Chabahil</option>
                <option value="Mitrapark">Mitrapark</option>
                <option value="Baudha">Baudha</option>
                <option value="Gopi Krishna">Gopi Krishna</option>
                <option value="Sukhedhara">Sukhedhara</option>
            </select> 
     
            <input type="text"required name="phone_no" placeholder="Your contact Number" ID="txtPhn" onkeypress="return validate(event)" autocomplete="off"/>
        
          
     
 <button type="submit" value="submit" name="PickupTime" class="button button-block"/>Register</button>  
    </form>
  </div>
</div>
</div>

  <style>



.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  width: 100%;
  padding: 45px;
  text-align: center;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 20px 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 17px;
}
.form select{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 20px 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 17px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #a7cd3a;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-top: 20px;
}
.form button:hover,.form button:active,.form button:focus {
  background: #b6df3f;
}
</style>



<?php
include('include/sidebar.php');
?>


