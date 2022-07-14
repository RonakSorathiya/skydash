<?php 
include 'header.php';


if(isset($_GET['income_id']))
{
  $income_id=$_GET['income_id'];
  $query="SELECT * FROM `add_income` WHERE income_id='$income_id'";
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
              <h3>Income Detail Update</h3>
              <form class="form-sample" action="server.php" method="post" enctype="multipart/form-data">
                    
                <div class="row">
                  <input type="hidden" name="hid"
                         value="<?php echo $row['income_id'] ?>"/>
                      <div class="col">
                          <label class="mt-2">Category</label>
                        <input type="text" name="income_category" class="form-control"
                        value="<?php echo $row['income_category'] ?>"> 
                      </div>
                      
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" 
                      name="update_income">Update</button>
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
