
<?php
  include('header.php');
?>
     <!-- partial -->
      <!-- <div class="main-panel">  -->
      <div class="content-wrapper">
          <div class="card mt-3">
            <div class="card-body">

              <h2>Add Income</h2>
  
                  <form class="form-sample" action="server.php" method="POST">                    
                    <div class="row">
                      <div class="col">
                      	  <label class="mt-2">Category</label>
	                      <input type="text" name="income_category" class="form-control col-5"> 
                      </div>
                      
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" 
                    	name="add_income">Add</button>
                  </form>                 
              </div>
            </div>  
        </div>     	
				
        <!-- content-wrapper ends --> 
<?php
  include('footer.php');
?>



