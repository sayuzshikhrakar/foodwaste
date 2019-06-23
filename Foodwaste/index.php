<?php
ob_start();
session_start();  // if the user has signed out then tries to copy ta url and open in another browser it doesnt open
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Food Waste- Utilize & Reduce Food Waste</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/logsin.css" rel="stylesheet">

</head>

<body>
  <!-- Page Content
    ================================================== -->
    <!-- Hero -->

    <section class="hero">
     <section>
      <p class="scroll"> Scroll </p>
      <a  class="scroll-down" address="true"></a>
    </section>
  </section>
  <script type="text/javascript">
   $(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('section.ok').offset().top }, 'slow');
      return false;
    });
  });
</script>
<!-- /Hero -->

<!-- Header -->
<header id="header">
  <div class="container">
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="#about">HOW IT WORKS </a></li>
        <li><a href="#features">OUR MISSION</a></li>
      </ul>
    </nav>

    <div id="logo" class="pull-left">
      <h1><a href="#hero">FOOD WASTE</a></h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="#join">JOIN US </a></li>
        <li><a href="#contact">CONTACT US </a></li>
      </ul>
    </nav>
  </div>
</header>
<!-- #header -->

<!-- How it works -->

<section class="about" id="about">
  <div class="container text-center">
    <h2>
      HOW IT WORKS
    </h2>

    <div class="imagew">
     <a href="#"><img src="img/green.png" alt="green"/></a>
   </div>
 </div>
</section>

<!-- mission -->

<section class="features" id="features">
  <div class="container">
    <h2 class="text-center" style=>
      OUR MISSION
    </h2>

    <div class="row">
      <div class="feature-col col-lg-4 col-xs-12">
        <div class="card card-block text-center">
          <div>
            <div class="feature-icon">
              <span>1</span>
            </div>
          </div>

          <div>
            <h3>
              Zero Pollution
            </h3>

            <p>
             World Food Program (WFP) study reports that around 70% waste generated in Kathmandu Valley is organic, mainly food waste.
           </p>
         </div>
       </div>
     </div>

     <div class="feature-col col-lg-4 col-xs-12">
      <div class="card card-block text-center">
        <div>
          <div class="feature-icon">
            <span>2</span>
          </div>
        </div>

        <div>
          <h3>
           Sustainable Development
         </h3>

         <p>
           Providing sustainable excess asset diposition and remarketing and recycling solutions to business.
         </p>
       </div>
     </div>
   </div>

   <div class="feature-col col-lg-4 col-xs-12">
    <div class="card card-block text-center">
      <div>
        <div class="feature-icon">
          <span>3</span>
        </div>
      </div>

      <div>
        <h3>
          Renewable Energy
        </h3>

        <p>
          Since Our Program will collect more food waste from which we can generate sufficient amount of bio-gas which is
          renewable sources of energy.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="feature-col col-lg-4 col-xs-12">
    <div class="card card-block text-center">
      <div>
        <div class="feature-icon">
          <span>4</span>
        </div>
      </div>

      <div>
        <h3>
          Awareness
        </h3>

        <p>
          We will provide awareness on utilizing the food waste by giving different techniques and tips.
        </p>
      </div>
    </div>
  </div>

  <div class="feature-col col-lg-4 col-xs-12">
    <div class="card card-block text-center">
      <div>
        <div class="feature-icon">
          <span>5</span>
        </div>
      </div>

      <div>
        <h3>
          Strong Economy
        </h3>

        <p>
          Energy Savings, Cheaper production materails, etc will automatically boost the economy of country
        </p>
      </div>
    </div>
  </div>

  <div class="feature-col col-lg-4 col-xs-12">
    <div class="card card-block text-center">
      <div>
        <div class="feature-icon">
          <span>6</span>
        </div>
      </div>

      <div>
        <h3>
          Recycling Center
        </h3>

        <p>
          We will create a recycling center in each locality which will make control of food waste management.
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!-- form -->
<section id="join">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-title">JOIN US</h2>
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-12">

        <div class="form">


          <ul class="tab-group">
            <li class="tab active"><a href="#login">LOG IN</a></li>
            <li class="tab"><a href="#signup">SIGN UP</a></li>
          </ul>

          <div class="tab-content">

          
<!-- login form php code -->
<!-- login form php code -->
<?php
include('connect.php');
if(!empty($_POST["login"])){
  $result = mysqli_query($con,"SELECT * FROM signup WHERE email='" . $_POST["email"] . "' and password = '". md5($_POST["password"])."'");

  $row  = mysqli_fetch_array($result);
  if(is_array($row)) {
    $_SESSION["id"] = $row['id'];

    header("location:dashboard/dashboard.php");
  } else {
    echo'
    <script>
    window.onload = function() {
      alert("Username/Password not matched");
      location.href = "index.php";  
    }
    </script>
    ';
  }
}
?>
          



<!-- login form html code -->
<div id="login">

  <form action="" method="post">
  <!-- <div class="field-wrap">
      <label>
        Type<span class="req">*</span>
      </label>
      <select name="type">
      <option value="-1">Select user type</option>
      <option value="admin">Admin</option>
      <option value="user">User</option>
   </div> -->

    <div class="field-wrap"> 
      <label>
        Email<span class="req">*</span>
      </label>
      <input type="email"required placeholder="Your Email" name="email" autocomplete="off"/>
    </div>

    <div class="field-wrap">
      <label>
        Password<span class="req">*</span>
      </label>
      <input type="password"required placeholder="Your Password" pattern=".{6,}" title="Six or more characters" name="password" autocomplete="off"/>
    </div>



    <button type="submit" name="login" value="submit" class="button button-block">Log In</button>



  </form>

</div>

<!-- signup form php code -->
   <?php
   include('connect.php');

  if(isset($_POST['signup'])) { //Checks if form is submitted
    $usertype = $_POST['user_type'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword=$_POST['repass'];
    $phoneno = $_POST['phone_no'];
    $check=mysqli_query($con,"SELECT * FROM signup WHERE email='$email' and phone_no='$phoneno'");
    $checkrows=mysqli_num_rows($check);

    if($checkrows>0) {
     echo'
     <script>
     window.onload = function() {
      alert("User Already Exists");
      location.href = "index.php";
    }
    </script>
    ';
  } else {
    $passwordmd5 = md5($password);
   $sqlQuery = "INSERT IGNORE INTO signup (user_type, first_name, last_name, email, password, phone_no) VALUES ( '$usertype', '$firstname', '$lastname', '$email', '$passwordmd5', '$phoneno')";

   if ($result = mysqli_query($con, $sqlQuery)) {
      echo'
      <script>
      window.onload = function() {
        alert("You are registered");
        location.href = "index.php";
      }
      </script>
      ';
    } else {
      echo'
      <script>
      window.onload = function() {    
        alert("Error in database. Contact to Admin");
        location.href = "index.php";
      }
      </script>
      ';

    }

  }
// window.onload le chai Execute a JavaScript immediately after a page has been loaded
    // if($password != $repassword){
    //   echo'
    //   <script>
    //   window.onload = function() {
    //    alert("password dont match");
    //    location.href = "index.php";
    //  }
    //  </script>
    // //  ';
    //    }else{


    //   }
    // $check=mysqli_query($con,"SELECT * FROM signup WHERE email='$email' and phone_no='$phoneno'");
    //     $checkrows=mysqli_num_rows($check);
    //      $passwordmd5 = md5($password);
    //    $sqlQuery = "INSERT IGNORE INTO signup (user_type, first_name, last_name, email, password, phone_no) VALUES ( '$usertype', '$firstname', '$lastname', '$email', '$passwordmd5', '$phoneno')";

    //    if ($result = mysqli_query($con, $sqlQuery)) {
    //       echo'
    //       <script>
    //       window.onload = function() {
    //         alert("You are registered");
    //         location.href = "index.php";
    //       }
    //       </script>
    //       ';
    //     } else {
    //       echo'
    //       <script>
    //       window.onload = function() {
    //         alert("Error in database. Contact to Admin");
    //         location.href = "index.php";
    //       }
    //       </script>
    //       ';

    //     }

      // } else {

      // }
    }

?>

  <!-- letter and number validation code js -->
  <script>
   function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
  }

  $('.input').keyup(function () {
    if (!this.value.match(/[0-9]/)) {
      this.value = this.value.replace(/[^0-9]/g, '');
    }
   });
  </script>

  <script type="text/javascript">
//Function to allow only numbers to textbox
function validate(key)
{
//getting key code of pressed key like alt,ctrl
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


<!-- signup form html code -->

<div id="signup">

<form action=""  method="post">

<div class="top-row">
  <div class="field-wrap" >
    <label>
      User Type<span class="req">*</span>
    </label>
    <select required name="user_type" style="width: 208%;">
      <option disabled="disabled" value="" selected="true">Select User Type</option>
      <option value="Corporate">Corporates</option>
      <option value="Household">Household</option>
    </select>

  </div>

  <div class="field-wrap">
    <label>
      First Name<span class="req">*</span>
    </label>
    <input type="text" placeholder="Your First Name" required name="first_name" onkeyup="lettersOnly(this)" autocomplete="off" />
  </div>

  <div class="field-wrap">
    <label>
      Last Name<span class="req">*</span>
    </label>
    <input type="text"required placeholder="Your Last Name" name="last_name" onkeyup="lettersOnly(this)" autocomplete="off"/>
  </div>
</div>

<div class="field-wrap">
  <label>
    Email<span class="req">*</span>
  </label>
  <input type="email"required placeholder="Your Email" name="email" autocomplete="off"/>
</div>

<div class="field-wrap">
  <label>
    Password<span class="req">*</span>
  </label>
  <input type="password"required placeholder="Your Password" id="mainpassword"   pattern=".{6,}" title="Six or more characters" name="password" autocomplete="on"/>
</div>

<div class="field-wrap">
  <label>
    Renter Password<span class="req">*</span>
  </label>
  <input type="password"required onkeyup="check()" placeholder="Renter Password" id="confirm_password"   pattern=".{6,}" title="Six or more characters" name="repass" autocomplete="on" required  />
  <span id="message"></span>
</div>

<div class="field-wrap">
  <label>
   Phone No<span class="req">*</span>
 </label>
 <input type="text"required placeholder="Your Contact No" ID="txtPhn" onkeypress="return validate(event)" name="phone_no" autocomplete="off"/>
</div>



<button type="submit" value="submit" name="signup" class="button button-block"/>Register</button>

</form>  
</div>




</div><!-- tab-content -->
</div> <!-- /form -->


</div>
</div>

</section>

<!-- @component: contact us -->

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-title">CONTACT US</h2>
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-5 col-md-8" style="margin-left: 30px;">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- footer -->

<footer class="site-footer">
  <div class="bottom">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-xs-12 text-lg-left text-center">
          <p class="copyright-text">
            © 2018 All Rights Reserverd
          </p>
         
        </div>

      </div>
    </div>
  </div>
</footer>
<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


<!-- Required JavaScript Libraries -->
<!-- <script src="lib/jquery/jquery.min.js"></script>
 --><script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.js"></script>
<script src="lib/stickyjs/sticky.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>
<script src="js/style.js"></script>
<script src="contactform/contactform.js"></script>

<!-password validation->
<script>
    function check() {
  if (document.getElementById('mainpassword').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

</script>
</body>
</html>
