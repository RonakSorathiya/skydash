<?php include 'header.php';

$action=0;$action_message="";
if(isset($_POST['submit']))
{
  $payment_type = $_POST['payment_type'];
  $payment_date = $_POST['payment_date'];
  $client_name  = $_POST['client_name'];
  $filename     = $_FILES['img']['name']; 

  $allowed = array('gif', 'png', 'jpg','jpeg');
      
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

  if($filename != "")
  {
    if (!in_array($ext, $allowed)) {
      echo "<script>alert('Invalid filetype')</script>";
    }
    else
    {
      $imgnewfile=md5($filename).".".$ext;
      move_uploaded_file($_FILES["img"]["tmp_name"],"img/".$imgnewfile);
    }
  }
  else
  {
    $imgnewfile = "";
  }

  $sql="INSERT INTO payment(`payment_type`, `payment_date`, `client_name`, `image`)VALUES('$payment_type','$payment_date','$client_name','$imgnewfile')";
  $result=mysqli_query($conn,$sql);

  $action=1;
  $action_message = '<div class="alert alert-success" id="success-alert" role="alert">
                        <center><strong>Well Done!</strong> Succesfully Inserted</center>
                     </div>';
}

?>      
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <?php
          if($action>0)
          {
            echo $action_message;
          }
       ?>
   		<div class="card">
        <div class="card-body">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Payment Detail</h4>
              <form class="form-sample" method="post" enctype="multipart/form-data">
                     <!--  <p class="card-description">
                        Personal info
                      </p> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Type</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="payment_type" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment_date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="payment_date" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Client Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="client_name" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="img" />
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
  $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
      window.location.href = 'list_payment.php';
  });

  $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#danger-alert").slideUp(500);
      window.location.href = 'manage_payment.php';
  });
</script>