    
<?php 
  include 'header.php';

  $action = 0;$action_message = "";
  if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['payment_id']) && $_GET['payment_id']>0){
    $type = $_GET['type'];
    $payment_id = $_GET['payment_id'];
    if($type == 'delete'){
      mysqli_query($conn,"delete from `course_payment` where payment_id='$payment_id'");
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
        mysqli_query($conn,"update `course_payment` set course_status='$status' 
                            where payment_id='$payment_id'");
        $action=1;
        $action_message = "Status updated successfully.";
    }

  }


 ?>


 <!-- PAGE CONTENT WRAPPER -->
    <div class="content-wrapper">   
    <div class="col-md-12">             
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
            </div>
        <div class="card">
            <div class="card-body">
            
                

                <h3>All Incomes</h3>
                <!-- START DEFAULT DATATABLE -->
                    <table class="table table-striped table-responsive" id="order-listing">
                        <thead class="bg-dark text-light">
                            <th>No</th>
                            <th>Client Name</th>
                            <th>Course</th>
                            <th>Payment Amount</th>
                            <th>Payment Type</th>
                            <th>Payment Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                        <?php 
                            $course_result = mysqli_query($conn,"SELECT * FROM course_payment inner join course_master on course_master.course_id=course_payment.course_id ");
                            $i=1;
                            
                            while($result = mysqli_fetch_array($course_result))
                            {
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $result['client_name']; ?></td>
                                <td><?php echo $result['course_title']; ?></td>
                                <td><?php echo $result['pay_amount']; ?></td>
                                <td><?php echo $result['pay_type']; ?></td>
                                <td><?php echo $result['pay_date']; ?></td>
                                <td>
                                    <a title="Edit Detail" href="update_course_payment.php?payment_id=<?php echo $result['payment_id']?>" class="btn btn-primary p-2" >Edit</a>
                                </td>
                                <td>
                                    <a title="Delete Detail" 
                                        href="?payment_id=<?php echo $result['payment_id']?>&type=delete" onclick=" return confirm('Are you sure you want to delete record?');"
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
      window.location.href = 'list_course_payment.php';
  });
</script>
