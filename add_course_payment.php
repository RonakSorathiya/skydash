<?php
include('header.php');
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

              <h2>Add Course Payment</h2>
  
                  <form class="form-sample" action="server.php" method="POST">                    
                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Client Name</label>
                        <input type="text" name="c_name" class="form-control" required /> 
                      </div>
                      <div class="col">
                        <label class="mt-2">Course</label>

                        <select class="form-control" name="course_name">
                          
                            <?php

                              $query = "SELECT * FROM `course_master`";
                              $data =mysqli_query($conn,$query);
                              while($res=mysqli_fetch_assoc($data))
                              {
                            ?>
                            <option>
                            <?php    
                                  echo $res['course_title'];  
                            ?>
                            </option>
                            <?php
                              }
                            ?>
                        </select>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Pay Amount</label>
                        <input type="text" name="p_amount" class="form-control" required /> 
                      </div>
                      <div class="col">
                        <label class="mt-2">Pay Type</label>
                        <select class="form-control" name="p_type">
                          <option>Cash</option>
                          <option>Cheque</option>
                          <option>Online</option>
                        </select>
                      </div>
                      <div class="col">
                        <label class="mt-2">Pay Date</label>
                        <input type="date" name="p_date" class="form-control" required /> 
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3" 
                      name="add_course_payment">Add</button>
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
      window.location.href = 'list_course_payment.php';
  });

  $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#danger-alert").slideUp(500);
      window.location.href = 'add_course_payment.php';
  });
</script>
