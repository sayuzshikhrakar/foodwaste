<?php 
include('../connect.php');

if (empty($_POST)===false)
    {
      $errors[]=0;
      $count = 0;
      $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      
      $required_field=array($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);

      foreach ($_POST as $key => $value)
       {
        if (empty($value) && in_array($value, $required_field)===true)
         {
          $errors[]="All fields are required";
          break 1;
         }
       }
      }
       if($errors[0]==0)
    {
      if(($_POST['name'])<0)
      {
        $errors[]="Enter a name.";
      }
      else
      {
        $name=($_POST['name']);
        $count++;
        
      }
      if(empty($_POST['email']))
      {
        $errors[]="Email is empty";
      }
      else
      {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
          $email=($_POST['email']);
          $count++;
        }
        else
        {
          $errors[]="Email is not in format";
        }
      }

      if(($_POST['subject'])<0)
      {
        $errors[]="Enter subject.";
      }
      else
      {
        $subject=($_POST['subject']);
        $count++;
        
      }

      if(($_POST['message'])<0)
      {
        $errors[]="Enter message.";
      }
      else
      {
        $message=($_POST['message']);
        $count++;
        
      }
      
    }
    if($count == 4)
    {
      if (empty($_POST)==false && $errors[0]==0) 
      {
        // save_feedback($_POST['name'],$_POST['email'], $_POST['subject'], $_POST['message']);
        $sql = "INSERT INTO feedbacks
            SET
              name = '$name',
              email = '$email',
              subject = '$subject',
              message='$message'";
        $result = mysqli_query($con, $sql);
        echo '
        <span style="color:#AFA;
        font-size:40px;font-weight: bold;text-align:center;">Feedback Submitted</span>';
      }
    }
    else
    {
      echo json_encode($errors[1]);
          }
  // function save_feedback($name, $email, $subject, $message)
  // {
  //   $sql = "INSERT INTO feedbacks
  //           SET
  //           name = '$name',
  //             email = '$email',
  //             subject = '$subject',
  //             message='$message'";
  //   $result = mysqli_query($con, $sql);
   
  //   return $con->insertId();
  // }