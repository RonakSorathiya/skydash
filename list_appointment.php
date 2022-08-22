    
<?php 
  include 'header.php';

  $action = 0;$action_message = "";
    if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['appointment_id']))
    {
        $type = $_GET['type'];
        $appointment_id = $_GET['appointment_id'];
        if($type == 'delete'){
            mysqli_query($conn,"delete from add_appointment where appointment_id='$appointment_id'");
            $action=1;
            $action_message = "Record deleted successfully.";
        }
        if($type=='approved' || $type=='unapproved'){
            $status=1;
            if($type=='unapproved'){
                $status=0;
            }
            mysqli_query($conn,"update add_appointment set status='$status' where appointment_id='$appointment_id'");
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
        <div class="card col-20">
            <div class="card-body">
            
               

                <h3>All Appointments</h3>
                <!-- START DEFAULT DATATABLE -->
                    <table class="table table-striped" id="order-listing">
                        <thead class="bg-dark text-light">
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                        <?php 
                            $client_result = mysqli_query($conn,"SELECT * FROM add_appointment");
                            $i=1;
                            
                            while($result = mysqli_fetch_array($client_result))
                            {
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['phone_number']; ?></td>
                                <td><?php echo $result['email_address']; ?></td>
                                <td><?php echo $result['message']; ?></td>
                                <td>
                                        <?php
                                        if($result['status']==1)
                                        {
                                    ?>
                                        <a href="?appointment_id=
                                            <?php echo $result['appointment_id']?>&type=unapproved">
                                            <span class="label label-info label-form">Approved</span>
                                        </a>
                                    <?php
                                       }
                                       else
                                       {
                                    ?>
                                        <a href="?appointment_id=
                                        <?php echo $result['appointment_id']?>&type=approved">
                                            <span class="label label-primary label-form">Unapproved</span>
                                        </a>
                                    <?php
                                        }
                                    ?>


                                </td>
                                <td>
                                    <button class="btn btn-primary p-2"
                                    data-bs-toggle="modal" data-bs-target="#view">View</button>
                                </td>
                                <td>
                                    <a title="Delete Detail" 
                                        href="?appointment_id=<?php echo $result['appointment_id']?>&type=delete" onclick=" return confirm('Are you sure you want to delete record?');"
                                                        class="btn btn-danger p-2">Delete
                                    </a>
                                </td>
                            </tr>

    <div class="modal" id="view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-0 mt-3 ml-2" >
                    <h3>View Message</h3>
                    <button data-bs-dismiss="modal" class="btn btn-transparent">X</button> 
                </div>
                <div class="card-body">
                  <div class="row">
                        <div class="col">
                            <label>Name : <?php echo $result['name'] ?></label>
                        </div> 
                        <div class="col">
                            <label class="float-right">Phone Number :<?php echo $result['phone_number'] ?></label>          
                        </div>

                  </div>  
                        

                  <div class="row">
                      <div class="col">
                        <hr style="width:auto;text-align:left;margin-left:0">
                            <label>Message</label>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" ><?php echo $result['message'] ?></textarea>  
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>




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
      window.location.href = 'list_appointment.php';
  });
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>