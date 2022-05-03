<?php
include 'connection.php';

$action = 0;
if(isset($_POST['signin']))
{
    $name = $_POST['name'];
    $pswd = $_POST['pswd'];

    $sql = mysqli_query($conn,"SELECT * FROM login WHERE name = '$name' and pswd = '$pswd'");
    $num = mysqli_num_rows($sql);
    if($num == 1)
    {
        $_SESSION['name'] = $name;
        header("location:Dashboard.php");
    }
    else
    {
        $action = 1;
       // echo "<script>alert('Username or Password wrong')</script>";
        // header("location:login.php");        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.png" alt="logo">
              </div>
              
              
              <form class="pt-3" action="index.php" method="post">
                <?php 
                            if($action)
                            {
                        ?>         
                                <div class="alert alert-danger" id="success-alert" role="alert">
                                    <strong>Oh snap!</strong> Email and Password Incorrect !
                                </div>    
                        <?php 
                            }
                        ?>
                <div class="form-group">
                  <input type="text
                  " class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="name">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="pswd">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" 
                  name="signin">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
