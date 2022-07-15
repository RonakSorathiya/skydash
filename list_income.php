    
<?php 
  include 'header.php';

  $action = 0;$action_message = "";
    if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['income_id']))
    {
        $type = $_GET['type'];
        $income_id = $_GET['income_id'];
        if($type == 'delete'){
            mysqli_query($conn,"delete from add_income where income_id='$income_id'");
            $action=1;
            $action_message = "Record deleted successfully.";
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
                    <table class="table table-striped" id="order-listing">
                        <thead class="bg-dark text-light">
                            <th>No</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                        <?php 
                            $client_result = mysqli_query($conn,"SELECT * FROM add_income");
                            $i=1;
                            
                            while($result = mysqli_fetch_array($client_result))
                            {
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $result['income_category']; ?></td>
                                <td><?php echo $result['date']; ?></td>
                              
                <td>
                                    <a title="Edit Detail" href="update_income.php?income_id=<?php echo $result['income_id']?>" class="btn btn-primary p-2" >Edit</a>
                                </td>
                                <td>
                                    <a title="Delete Detail" 
                                        href="?income_id=<?php echo $result['income_id']?>&type=delete" onclick=" return confirm('Are you sure you want to delete record?');"
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
      window.location.href = 'list_income.php';
  });
</script>
