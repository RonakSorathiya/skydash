
<?php
  include('header.php');
  $action=0;
?>
     <!-- partial -->
      <!-- <div class="main-panel">  -->
      <div class="content-wrapper">
        <div class="col-md-12">
          <?php
             if(isset($_SESSION['action'])>0)
          {
            echo $_SESSION['action_message'];
            unset($_SESSION['action']);
          }
           ?>
         </div>
          <div class="card mt-3">
            <div class="card-body">

              <h2>Add Expense</h2>
  
                  <form class="form-sample" action="server.php" method="POST">                    
                    <div class="row">
                      <div class="col">
                          <label class="mt-2">Category</label>
                        <input type="text" name="expecse_category" class="form-control col-5"> 
                      </div>
                      
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" 
                      name="add_expense">Add</button>
                  </form>                 
              </div>
            </div>  
        </div>      
        
        <!-- content-wrapper ends --> 
<?php
  include('footer.php');
?>
<script type="text/javascript">
  $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
      window.location.href = 'list_expense.php';
  });

  $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#danger-alert").slideUp(500);
      window.location.href = 'add_expense.php';
  });
</script>



