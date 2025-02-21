
<?php
session_start();
error_reporting(0);
require_once('include/config.php');
$msg = ""; 
if(isset($_POST['submit'])) {
  $email = trim($_POST['email']);
  $password = md5(($_POST['password']));
  if($email != "" && $password != "") {
    try {
      $query = "select id, name, email, mobile, password from tbladmin where email=:email and password=:password";
      $stmt = $dbh->prepare($query);
      $stmt->bindParam('email', $email, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
        $_SESSION['adminid']   = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['fname'];
       header("location: dashboard.php");
      } else {
        $msg = "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
//Forgot Password
if(isset($_POST['reset']))
  {
    $email=$_POST['femail'];
$mobile=$_POST['fmobno'];
$newpassword=md5($_POST['newpwd']);
  $sql ="SELECT email FROM tbladmin WHERE email=:email and mobile=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tbladmin set password=:newpassword where email=:email and mobile=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton:wght@400;700&display=swap" rel="stylesheet">
    <title>Login - Employee Management System Admin</title>
    <style>

.password-container {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%; /* Makes it responsive */
}

.password-input {
    width: 100%;
    padding-right: 40px; /* Ensures text doesn't overlap the icon */
}

.toggle-password {
    position: absolute;
    right: 10px;
    cursor: pointer;
    color: gray;
    font-size: 18px;
}


      </style>
  </head>
  <body>
  <video autoplay muted loop id="bg-video">
        <source src="../videos/background.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <section class="login-content">
      <div class="logo">
        <h1>Prime Engineering's Employee Management System</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i> Sign In | Admin</h3>
           <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div  style="color:red" ><strong>Error</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <div class="form-group">
            <label class="control-label" style="color:white;">USERNAME</label>
            <input class="form-control" name="email" id="email" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
    <label class="control-label" style="color:white;">PASSWORD</label>
    <div class="password-container">
        <input class="form-control" name="password" id="password" type="password" placeholder="Password">
        <span class="toggle-password" onclick="togglePassword('password')">
            <i class="fa fa-eye"></i>
        </span>
    </div>
</div>

          <div class="form-group">
            <div class="utility">
         
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
           
            <input type="submit" name="submit" id="submit" value="SIGN IN" class="btn btn-primary btn-block">
<a href="../index.php" class="btn btn-info btn-block">Home Page</a>

          </div>
        </form>
        <form class="forget-form" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          
          <div class="form-group">
            <label class="control-label" style="color:white;">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email" name="femail" required>
          </div>

     <div class="form-group">
            <label class="control-label" style="color:white;">Mobile No</label>
            <input class="form-control" type="text" placeholder="Mobile Number" name="fmobno" required>
          </div>

          <!-- New Password Field (With Eye Icon Inside Input Box) -->
<div class="form-group">
    <label class="control-label" style="color:white;">New Password</label>
    <div class="password-container">
        <input class="form-control password-input" type="password" placeholder="New password" name="newpwd" id="newpwd" required>
        <span class="toggle-password" onclick="togglePassword('newpwd')">
            <i class="fa fa-eye"></i>
        </span>
    </div>
</div>



          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="reset"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });

      function togglePassword(fieldId) {
        var field = document.getElementById(fieldId);
        var icon = field.nextElementSibling.querySelector("i");
        if (field.type === "password") {
            field.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            field.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }





    </script>
  </body>
</html>