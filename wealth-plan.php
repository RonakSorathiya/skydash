<style type="text/css">

  .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .lightGallery .image-tile, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto{
    padding-right: 5px!important;
    padding-left: 5px!important;
  }

</style>
<?php
  include('header.php');

   $action = 0;$action_message= ""; 
    $p_id = $s_name = $s_age = $s_pan = $s_occ = $sp_name = $sp_age = $sp_pan = $sp_occ = $p_add = $p_email = $p_contact = $f_name =  $f_rel = $f_age = $f_dpn = $p_id = "";  

    // $g_id = $g_dsc = $g_freq = $g_value = $g_Inflation = $g_st_year = $g_end_year = $g_priority = $fg_id = $note = $risk_level = $a_id = $a_description = 

    if(isset($_POST['submit'])){
    	$s_name = $_POST['s_name'];
    	$s_age = $_POST['s_age'];
    	$s_pan = $_POST['s_pan'];
    	$s_occ = $_POST['s_occ'];
    	$sp_name = $_POST['sp_name'];
    	$sp_age = $_POST['sp_age'];
    	$sp_pan = $_POST['sp_pan'];
    	$sp_occ = $_POST['sp_occ'];
    	$p_add = $_POST['p_add'];
    	$p_email = $_POST['p_email'];
    	$p_contact = $_POST['p_contact'];
    	
    	$f_name = $_POST['f_name'];
    	$f_rel = $_POST['f_rel'];
    	$f_age = $_POST['f_age'];
    	$f_dpn = $_POST['f_dpn'];


      // $g_dsc = $_POST['g_dsc'];
      // $g_freq = $_POST['g_freq'];
      // $g_value = $_POST['g_value'];
      // $g_Inflation = $_POST['g_Inflation'];
      // $g_st_year = $_POST['g_st_year'];
      // $g_end_year = $_POST['g_end_year'];
      // $g_priority = $_POST['g_priority'];

      // $note = $_POST['note'];
      // $risk_level = $_POST['risk_level'];

      //  $a_description = $_POST['a_description'];

    }
    	if($p_id == '')
        {
        	$sql_person = mysqli_query($conn,"INSERT INTO personal_detail(`s_name`,`s_age`,`s_pan`,`s_occ`,`sp_name`,`sp_age`,`sp_pan`,`sp_occ`,`p_add`,`p_email`,`p_contact`)
        		VALUES('$s_name','$s_age','$s_pan','$s_occ','$sp_name','$sp_age','$sp_pan','$sp_occ','$p_add','$p_email','$p_contact')");

        	$last_id = $conn->insert_id;

        	$sql_family = mysqli_query($conn,"INSERT INTO family_detail(`p_id`,`f_name`,`f_rel`,`f_age`,`f_dpn`)VALUES('$last_id','$f_name','$f_rel','$f_age','$f_dpn')");
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
          <div class="row">   
               
            <div class="col-12 grid-margin">
              <div class="container">
              
              </div>
         <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Personal Details</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Financial Goals</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Net Worth</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><div class="card-body">                  
                  <form class="form-sample" action="" method="POST">                    
                    <div class="row">
                      <div class="col">
                          <label class="mt-2">Self Name</label>
                          <input type="text" class="form-control" name="s_name"/>
                      </div>
                      <div class="col">            
                          <label class="mt-2">Self Age</label>
                          <input type="number" class="form-control" name="s_age"/>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col">
                        <label class="mt-2"> Self Pan</label>
                        <input type="text" class="form-control" name="s_pan"/>
                      </div>
                      <div class="col">
                        <label class="mt-2">Self Occupation</label>
                        <input type="text" class="form-control" name="s_occ"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Spouse Name</label>
                        <input type="text" class="form-control" name="sp_name"> 
                      </div>
                      <div class="col">
                        <label class="mt-2">Spouse Age</label>  
                        <input type="number" class="form-control" name="sp_age">
                      </div>                     
                    </div>                    
                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Spouse Pan</label>
                        <input type="text" class="form-control" name="sp_pan">
                      </div>
                      <div class="col">
                          <label class="mt-2">Spouse Occupation</label>  
                          <input type="text" class="form-control" name="sp_occ"/>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Personal Contact</label>                        
                        <input type="number" class="form-control" name="p_contact"/>
                      </div>                      
                      <div class="col-md-6">
                        <label class="mt-2">Personal Email</label>
                        <input type="email" class="form-control" name="p_email"/> 
                      </div>                     
                    </div>
                    <div class="row">
                       <div class="col-md-6">
                          <label class="mt-2">Personal Address</label>
                          <textarea rows="4" class="form-control" name="p_add"/> </textarea> 
                      </div>                   
                    </div>
                    <h3 class="row mt-3">Family Details</h3>
                      <div class="row">
                        <div class="col">
                          <label class="mt-2">Name</label>
                          <input type="text" class="form-control" name="f_name"/>
                        </div>                      
                        <div class="col">
                          <label class="mt-2">Relationship</label>
                          <input type="text" class="form-control" name="f_rel"/>
                        </div>                     
                    </div>
                    <div class="row">
                      <div class="col">
                        <label class="mt-2">Age</label>
                        <input type="number" class="form-control" name="f_age"/>
                      </div>                      
                      <div class="col">
                          <label class="mt-2">Dependant</label>
                          
                            <!-- <input type="text" /> -->
                            <select class="form-control" name="f_dpn">
                              <option>Yes</option>
                              <option>No</option>
                            </select>

                      </div>                     
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" name="submit">Next</button>
                  </form>                 
                </div>
            </div>
            <!------ TAB-2------>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="card-body">                  
                  <form class="form-sample" action="" method="POST">                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Description</label>                          
                        <label class="col-sm-2 col-form-label">Frequency</label>
                        <label class="col-sm-2 col-form-label">Goal Rs</label>                          
                        <label class="col-sm-1 col-form-label">Inflation Rate</label>
                        <label class="col-sm-1 col-form-label">Start Year</label>  
                        <label class="col-sm-1 col-form-label">End Year</label>  
                        <label class="col-sm-1 col-form-label">Priority</label>                         
                        <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height:25px;">
                          <i class="ti-plus" ></i>
                        </button> 
                        </div>

                        <div class="form-group row">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="g_dsc"/>
                        </div>                         
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="g_freq"/>
                        </div>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="g_value"/>
                        </div>                         
                        <div class="col-sm-1">
                            <input type="number" class="form-control" name="g_Inflation" style="padding-right :3px" />
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control text-center" name="g_st_year" style="padding:0;" />
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control text-center" name="g_end_year" style="padding:0;"/>
                        </div>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="g_priority" >                          
                        </div> 
                        <!-- <button type="submit" class="col-sm-1 btn btn-success" name="submit">Add</button> -->
                      
                        <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height:25px;" >
                        <i class="ti-minus"></i>
                        </button>                           
                        
                      </div>

                      <h3 class="row">Note:</h3>
                      <div class="col-md-12">
                          <div class="row">
                                 <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height:25px;"><i class="ti-plus" ></i>
                                </button>&nbsp;&nbsp;
                                <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height: 25px;"><i class="ti-minus" ></i>
                                </button><br/><br/>
                                <textarea rows="5" class="form-control" name="note"/></textarea>
                          </div>

                                 
                                <!-- <label class="col-sm-5 col-form-label ml-4">Risk Level</label>  
                          <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height:25px;"><i class="ti-plus" ></i>
                          </button>  -->
                        </div>
                        
                        
                        <!-- <div class="col-sm-5">
                            <textarea rows="5" class="form-control" name="note"/></textarea>
                        </div> 
                        <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height: 25px;">
                        <i class="ti-minus" ></i>
                      </button>   
                       <div class="col-sm-5 ml-4">
                            <textarea rows="5" class="form-control" name="risk_level"/></textarea>
                        </div> 

                        <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height: 25px;">
                        <i class="ti-minus" ></i>
                      </button>                         
                      </div>       -->                                     
                      <br/>
                     <h3 class="row">Assumption:</h3> 
                      <div class="col-md-12">
                        <div class="form-group-sm row">
                          
                          <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height: 25px;"><i class="ti-plus" ></i>
                          </button> &nbsp;&nbsp;
                          <button type="button" class="btn btn-primary btn-rounded btn-icon mt-2" style="height: 25px;">
                              <i class="ti-minus" ></i>
                          </button> <br/><br/>
                          <textarea rows="5" class="form-control" name="a_description"/></textarea>
                          <br/><br/>
                        </div>                                 
                    </div> <br/>
                    <h3 class="row">Risk Level:</h3> 
                    <div class="form-group-sm row">

                        <textarea rows="5" class="form-control" name="risk_level"/></textarea>
                    </div><br/>       
                    </div>                     
                    
                    <button type="submit" class="btn btn-primary mb-2" name="submit">Next</button>
                  </form>
                 
            </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            3...
            </div>
          </div>
              
            </div>
          </div>
        </div>
      </div>
				
				
        <!-- content-wrapper ends --> 
<?php
  include('footer.php');
?>



