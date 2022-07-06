<?php include 'header.php';

$action=0;$action_message="";

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
                    <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Payment Type</th>
                          <th>Payment Date</th>
                          <th>Client Name</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $srNo=1;
                            $result = mysqli_query($conn,"SELECT * from payment");
                            while($row = mysqli_fetch_array($result))
                            {
                        ?>
                        <tr>
                          <td><?php echo $srNo++; ?></td>
                          <td><?php echo $row['payment_type'] ?></td>
                          <td><?php echo $row['payment_date'] ?></td>
                          <td><?php echo $row['client_name'] ?></td>
                          <td>
                            <a href="img/<?php echo $row['image'] ?>" target="_blank">
                              <img src="img/<?php echo $row['image'] ?>" style="height: 50px;width: 50px;">
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
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