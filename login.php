<?php

//Checking Session
session_start();
if(isset($_SESSION['AdminID']) && !empty($_SESSION['Email']) && !empty($_SESSION['Password'])) {
    header("location: /admin/dashboard/");
    die;
} 

//Setting Cookies
ini_set("session.cookie_httponly", 1);

//Including DB Connection
require_once'/home/sih2018/public_html/includes/sql.php';
require_once'/home/sih2018/public_html/admin/includes/login.class.php';
error_reporting(E_ALL);
ini_set("error_reporting",E_ALL);

//Class Instances
$csrf = new csrf();
$security = new Security(); 
$adminlogin = new adminLogin();

// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
 
// Generate Random Form Names
$form_names = $csrf->form_names(array('usernameinput', 'passwordinput'), false);
$today=date("Y-m-d H:i:s"); 

$message ="";
$failedLogin = 0;
$username = '';
$password = '';
$EncPass = '';

    if(isset($_POST[$form_names['usernameinput']], $_POST[$form_names['passwordinput']])) {
        
        // Get the Form Variables.
        $username = $db->real_escape_string($_POST[$form_names['usernameinput']]);
        $password = $db->real_escape_string($_POST[$form_names['passwordinput']]);
        $EncPass =$security->encrypt($password);
        $ip       = $db->real_escape_string(UserIP());
        $username = $db->real_escape_string($username);
        $password = $db->real_escape_string($password);
        $dologin = $adminlogin->Login($username,$EncPass,$ip,$db);
        if($dologin===1)
        {    
            header("location: /admin/dashboard/");
            die;
        }
        elseif($dologin===0)
        {
            $message = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
  
                Username Or Password Wrong !!
                </div>';
        }else
        {
        
        }
    }
        



?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
        <?php echo $message;?>
      <div class="card-header">Admin Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="<?php echo $form_names['usernameinput']; ?>" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" pattern=".{6,30}" name="<?php echo $form_names['passwordinput']; ?>" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
                          <input type="hidden" name="<?php echo $token_id; ?>" value="
            <?php echo $token_value; ?>" />
                <input id="login_button" type="submit" value="Log in" />
        </form>
        <div class="text-center">
          <!--<a class="d-block small mt-3" href="register.html">Register an Account</a>-->
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
