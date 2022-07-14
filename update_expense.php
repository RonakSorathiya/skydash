<?php 
include 'header.php';


if(isset($_GET['expense_id']))
{
  $expense_id=$_GET['expense_id'];
  $query="SELECT * FROM `add_expense` WHERE expense_id='$expense_id'";
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
              <h3>Expense Detail Update</h3>
              <form class="form-sample" action="server.php" method="post" enctype="multipart/form-data">
                    
                <div class="row">
                  <input type="hidden" name="hid"
                         value="<?php echo $row['expense_id'] ?>"/>
                      <div class="col">
                          <label class="mt-2">Category</label>
                        <input type="text" name="expense_category" class="form-control"
                        value="<?php echo $row['expense_category'] ?>"> 
                      </div>
                      
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" 
                      name="update_expense">Update</button>
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
