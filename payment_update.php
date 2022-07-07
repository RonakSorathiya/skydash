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
              <h3>Payment Detail Update</h3>
              <form class="form-sample" action="server.php" method="post" enctype="multipart/form-data">
                    
                <div class="row">
                  <div class="col">
                    <label class="mt-2">Payment Type</label>
                    <input type="text" class="form-control" name="u_payment_type" value="<?php echo $row['payment_type'] ?>" />
                  </div>
                  <div class="col">
                    <label class="mt-2">Payment Date</label>
                    <input type="date" class="form-control" name="u_payment_date"  value="<?php echo $row['payment_date'] ?>" />
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="mt-2">Client Name</label>
                    <input type="text" class="form-control" name="u_client_name"   value="<?php echo $row['client_name'] ?>"/>
                  </div>
                  <div class="col">
                      <label class="mt-2 w-100">Image</label>
                      <img src="img/<?php echo $row['image'] ?>" width="50%" class="mt-2"/>
                      <input type="hidden" name="old_img" value="<?php echo $row['image'] ?>" />
                      <input type="file" class="form-control mt-3" name="u_img" />
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