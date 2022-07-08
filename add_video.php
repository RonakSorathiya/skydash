<style type="text/css">

 /* .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .lightGallery .image-tile, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto{
    padding-right: 0px!important;
    padding-left: 0px!important;
  }*/

</style>



<?php
  include('header.php');

   $action = 0;$action_message= ""; 
    $video_id = $video_url = $upload_date = $status = "";  

    if(isset($_POST['submit'])){
    	$video_url = $_POST['video_url'];
    	$upload_date = $_POST['upload_date'];
    	$status = 1;

    }
    	if($video_id == '')
        {
        	$sql_person = mysqli_query($conn,"INSERT INTO add_video(`video_url`,`upload_date`,`status`)
        		VALUES('$video_url','$upload_date','$status')");        	
        }
        if($sql_person)
            {
                $action=1;
                $action_message = "Successfully Inserted".mysqli_error($conn);
            }
            else
            {
                $action=2;
                $action_message= "Error:".mysqli_error($conn);
            }
?>
     <!-- partial -->
      <!-- <div class="main-panel">  -->
      <div class="content-wrapper">
          <div class="card mt-3">
            <div class="card-body">

              <h2>Add Video</h2>
  
                  <form class="form-sample" action="" method="POST">                    
                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Video URL</label>
                        <input type="text" class="form-control" name="video_url"/>
                      </div>
                      <div class="col">
                        <label class="mt-2">Upload Date</label>
                        <input type="date" class="form-control" name="upload_date"/>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col">
                        <label class="mt-2">Status</label>
                            <select class="form-control" name="s_pan">
                              <option>Active</option>
                              <option>Deactive</option>>
                            </select>
                      </div>
                          
                            <!-- <input type="text" /> -->
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
                  </form>                 
              </div>
            </div>  
        </div>     	
				
        <!-- content-wrapper ends --> 
<?php
  include('footer.php');
?>



