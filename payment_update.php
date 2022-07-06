<?php 
include 'header.php';


if(isset($_GET['uid']))
{
  $uid=$_GET['uid'];
  $query="SELECT * FROM `payment` WHERE payment_id='$uid'";
  $data=mysqli_query($conn,$query);

  while($row=mysqli_fetch_assoc($data))
  {
    
?>      
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12">
   		<div class="card">
        <div class="card-body">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Payment Detail Update</h4>
              <form class="form-sample" action="server.php" method="post" enctype="multipart/form-data">
                    
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Type</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="u_payment_type" value="<?php echo $row['payment_type'] ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Payment Date</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="u_payment_date"  value="<?php echo $row['payment_date'] ?>" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Client Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="u_client_name"   value="<?php echo $row['client_name'] ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                        <img src="img/<?php echo $row['image'] ?>" width="50%"/>
                        <input type="hidden" name="old_img" value="<?php echo $row['image'] ?>" />
                        <input type="file" class="form-control mt-3" name="u_img" />
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <input type="hidden" name="h_id" value="<?php echo $row['payment_id'] ?>">
                </div>
                <button type="submit" class="btn btn-primary mb-2" name="update">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  }
}
?>
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