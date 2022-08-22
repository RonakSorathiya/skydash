    
<?php 
  include 'header.php';

  $action = 0;$action_message = "";
  if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['course_id']) && $_GET['course_id']>0){
    $type = $_GET['type'];
    $course_id = $_GET['course_id'];
    if($type == 'delete'){
      mysqli_query($conn,"delete from `course_master` where course_id='$course_id'");
      $action=1;
      $action_message = "Record deleted successfully.";
    }
    if($type=='active' || $type=='deactive')
    {
      $status=1;
      if($type=='deactive')
      {
        $status=0;
      }
        mysqli_query($conn,"update `course_master` set course_status='$status' 
                            where course_id='$course_id'");
        $action=1;
        $action_message = "Status updated successfully.";
    }

  }


 ?>


 <!-- PAGE CONTENT WRAPPER -->
    <div class="content-wrapper">                
        <div class="card">
            <div class="card-body">
            
                <?php 
                    if($action==1)
                    {
                ?>         
                        <div class="alert alert-success" id="success-alert" role="alert">
                                <center><strong>Well Done!</strong>  
                                    <?php echo $action_message; ?>
                              </center>
                         </div>    
                <?php 
                    }
                ?>

                <h3>All Incomes</h3>
                <!-- START DEFAULT DATATABLE -->
                    <table class="table table-striped table-responsive" id="order-listing">
                        <thead class="bg-dark text-light">
                            <th>No</th>
                            <th>Course Title</th>
                            <th>Course Duration</th>
                            <th>Course Price</th>
                            <th>Course Description</th>
                            <th>Course Cover Image</th>
                            <th>Course Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                        <?php 
                            $course_result = mysqli_query($conn,"SELECT * FROM `course_master` ");
                            $i=1;
                            
                            while($result = mysqli_fetch_array($course_result))
                            {
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $result['course_title']; ?></td>
                                <td><?php echo $result['course_duration']; ?></td>
                                <td><?php echo $result['course_price']; ?></td>
                                <td><?php echo $result['course_desc']; ?></td>
                                <td class="text-center">
                                    <img src="img/<?php echo $result['course_coverimg']; ?>" style="height: 50px;width: 50px;">
                                </td>
                                <td>  
                                    <?php
                                      
                                      if($result['course_status']==1)
                                                          {
                                    ?>
                                      <a href="?course_id=<?php echo $result['course_id']?>&type=deactive">
                                          <span class="label label-info label-form">
                                            Active
                                          </span>
                                      </a>
                                    <?php
                                      }
                                      else
                                      {
                                    ?>
                                      <a href="?course_id=<?php echo $result['course_id']?>&type=active">
                                            <span class="text-danger">   Deactive
                                            </span>
                                      </a>

                                    <?php
                                      }
                                    ?>
                                  </td>
                                <td>
                                    <a title="Edit Detail" href="update_course_master.php?course_id=<?php echo $result['course_id']?>" class="btn btn-primary p-2" >Edit</a>
                                </td>
                                <td>
                                    <a title="Delete Detail" 
                                        href="?course_id=<?php echo $result['course_id']?>&type=delete" onclick=" return confirm('Are you sure you want to delete record?');"
                                                        class="btn btn-danger p-2">Delete
                                    </a>
                                </td>
                            </tr>
                                        <?php } ?>
                        </tbody>
                    </table>
                                
                            <!-- END DEFAULT DATATABLE -->    
            <!-- END PAGE CONTENT -->

            </div>
        </div>
    </div>
        <!-- END PAGE CONTAINER -->    
<?php include 'footer.php'; ?>
<script type="text/javascript">
  $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
      window.location.href = 'list_course_master.php';
  });
</script>
