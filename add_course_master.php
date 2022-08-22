
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

              <h2>Add Course</h2>
  
                  <form class="form-sample" action="server.php" method="POST" enctype="multipart/form-data">                    
                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Course Title</label>
                        <input type="text" name="c_title" class="form-control" required /> 
                      </div>
                      <div class="col">
                          <label class="mt-2">Course Duration</label>
                        <input type="text" name="c_duration" class="form-control" required /> 
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                          <label class="mt-2">Course Price</label>
                        <input type="text" name="c_price" class="form-control" required /> 
                      </div>
                      <div class="col">
                          <label class="mt-2">Course Description</label>
                        <input type="text" name="c_description" class="form-control" required /> 
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                          <label class="mt-2">Course Cover Image</label>
                        <input type="file" name="c_image" class="form-control" required> 
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" 
                      name="add_course_master">Add</button>
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
      window.location.href = 'list_course_master.php';
  });

  $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#danger-alert").slideUp(500);
      window.location.href = 'add_course_master.php';
  });
</script>



