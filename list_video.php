    
<?php 
	include 'header.php';

	$action = 0;$action_message = "";
	if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['video_id']) && $_GET['video_id']>0){
		$type = $_GET['type'];
		$video_id = $_GET['video_id'];
		if($type == 'delete'){
			mysqli_query($conn,"delete from add_video where video_id='$video_id'");
			$action=1;
			$action_message = "Record deleted successfully.";
		}
		if($type=='active' || $type=='deactive'){
			$status=1;
			if($type=='deactive'){
				$status=0;
			}
			mysqli_query($conn,"update add_video set status='$status' where video_id='$video_id'");
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
                <h3>All Videos</h3>
                <!-- START DEFAULT DATATABLE -->
                    <table class="table table-striped" id="order-listing">
                        <thead class="bg-dark text-light">
                            <th>No</th>
                            <th>Video</th>
                            <th>Upload Date</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                        <?php 
                            $client_result = mysqli_query($conn,"SELECT * FROM add_video");
                            $i=1;
                            
                            while($result = mysqli_fetch_array($client_result))
                            {
                        ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td>
                                   <!--  <iframe width="100" height="100" src="<?php echo $result['video_url']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                        
                                    </iframe> -->
                                    <?php echo $result['video_url']?>

                                                   <!--  <video>
                                                        <source src="<?php echo $result['video_url'] ?>" type="">
                                                    </video> -->
                                                    <!-- <iframe width="150" height="100" src="<?php echo $result['video_url'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                    -->
                                </td>

                                <td><?php echo $result['upload_date']; ?></td>
                                <td>                                                	<?php
										if($result['status']==1)
                                        {
									?>
										<a href="?video_id=<?php echo $result['video_id']?>&type=deactive">
                                            <span class="label label-info label-form">Active</span>
                                        </a>
									<?php
									   }
                                       else
                                       {
									?>
										<a href="?video_id=<?php echo $result['video_id']?>&type=active">
                                            <span class="label label-primary label-form">Deactive</span>
                                        </a>
									<?php
										}
									?>
								</td>
								<td>
                                    <a title="Edit Detail" href="update_video.php?video_id=<?php echo $result['video_id']?>" class="btn btn-primary p-2" >Edit</a>
                                </td>
                                <td>
                                    <a title="Delete Detail" 
                                        href="?video_id=<?php echo $result['video_id']?>&type=delete" onclick=" return confirm('Are you sure you want to delete record?');"
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
      window.location.href = 'list_video.php';
  });
</script>
