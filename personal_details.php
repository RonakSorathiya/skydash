<?php include 'header.php'; ?>
 
<?php 

  // $action = 0;$action_message= ""; 
  // $p_id = $s_name = $s_age = $s_pan = $s_occ = $sp_name = $sp_age = $sp_pan = $sp_occ = $p_add = $p_email = $p_contact = $f_name =  $f_rel = $f_age = $f_dpn = $p_id = "";  

  //   // $g_id = $g_dsc = $g_freq = $g_value = $g_Inflation = $g_st_year = $g_end_year = $g_priority = $fg_id = $note = $risk_level = $a_id = $a_description = 

  //   if(isset($_POST['submit']))
  //   {
  //   	$s_name = $_POST['s_name'];
  //   	$s_age = $_POST['s_age'];
  //   	$s_pan = $_POST['s_pan'];
  //   	$s_occ = $_POST['s_occ'];
  //   	$sp_name = $_POST['sp_name'];
  //   	$sp_age = $_POST['sp_age'];
  //   	$sp_pan = $_POST['sp_pan'];
  //   	$sp_occ = $_POST['sp_occ'];
  //   	$p_add = $_POST['p_add'];
  //   	$p_email = $_POST['p_email'];
  //   	$p_contact = $_POST['p_contact'];
    	
  //   	$f_name = $_POST['f_name'];
  //   	$f_rel = $_POST['f_rel'];
  //   	$f_age = $_POST['f_age'];
  //   	$f_dpn = $_POST['f_dpn'];

  //     // $g_dsc = $_POST['g_dsc'];
  //     // $g_freq = $_POST['g_freq'];
  //     // $g_value = $_POST['g_value'];
  //     // $g_Inflation = $_POST['g_Inflation'];
  //     // $g_st_year = $_POST['g_st_year'];
  //     // $g_end_year = $_POST['g_end_year'];
  //     // $g_priority = $_POST['g_priority'];

  //     // $note = $_POST['note'];
  //     // $risk_level = $_POST['risk_level'];

  //     //  $a_description = $_POST['a_description'];

  //   	if($p_id == '')
  //       {
  //       	$sql_person = mysqli_query($conn,"INSERT INTO personal_detail(`s_name`,`s_age`,`s_pan`,`s_occ`,`sp_name`,`sp_age`,`sp_pan`,`sp_occ`,`p_add`,`p_email`,`p_contact`)
  //       		VALUES('$s_name','$s_age','$s_pan','$s_occ','$sp_name','$sp_age','$sp_pan','$sp_occ','$p_add','$p_email','$p_contact')");

  //       	$last_id = $conn->insert_id;

  //       	$sql_family = mysqli_query($conn,"INSERT INTO family_detail(`p_id`,`f_name`,`f_rel`,`f_age`,`f_dpn`)VALUES('$last_id','$f_name','$f_rel','$f_age','$f_dpn')");
  //       }
  //       if($sql_person)
  //       {
  //         $action=1;
  //         $action_message = '<div class="alert alert-success" id="success-alert" role="alert"><center><strong>Well Done!</strong> Succesfully Inserted</center></div>';
  //       }
  //       else
  //       {
  //         $action=2;
  //         $action_message= "Error:".mysqli_error($conn);
  //       }
  //   }
    	
  //   if(isset($_POST['save_financial_goal']))
  //   {

  //   }

?>  
<style type="text/css">
	.table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td {
    padding: 1.125rem 0.375rem;
  }
  #prevBtn {
  	background-color: #bbbbbb;
	}
</style>    
<div class="content-wrapper">
  <div class="row">
  	<div class="col-md-12">
  		<?php
          if(isset($_SESSION['action'])>0)
          {
            echo $_SESSION['action_message'];
            unset($_SESSION['action']);
          }
       ?>
	 		<div class="card">
	      <div class="card-body">
	      
	      	<form id="example-form" method="post" action="insert_personal_data.php">
                    <div>
                      <h3>Personal Details</h3>
                      <section>
                        <!-- <h3>Account</h3> -->
                        <p class="card-description">
				                      Personal info
				                    </p>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label >Self Name</label>
				                          <!-- <div class="col-sm-9"> -->
				                            <input type="text" class="form-control" name="s_name"/>
				                          <!-- </div> -->
				                        </div>
				                        <!-- <div class="form-group">
						                      <label for="exampleInputUsername1">Username</label>
						                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
						                    </div> -->
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label >Self Age</label>
				                          <!-- <div class="col-sm-9"> -->
				                            <input type="number" class="form-control" name="s_age" />
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label >Self Pan</label>
				                          <!-- <div class="col-sm-9"> -->
				                           <input type="text" class="form-control" name="s_pan"/>
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Self Occupation</label>
				                          <!-- <div class="col-sm-9"> -->
				                           <input type="text" class="form-control" name="s_occ"/>
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Spouse Name</label>
				                          <!-- <div class="col-sm-9"> -->
				                           <input type="text" class="form-control" name="sp_name">
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Spouse Age</label>
				                         	<!-- <div class="col-sm-9"> -->
	                            				<input type="number" class="form-control" name="sp_age">                            
	                          				<!-- </div> -->
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Spouse Pan</label>
				                          <!-- <div class="col-sm-9"> -->
				                           <input type="text" class="form-control" name="sp_pan">
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Spouse Occupation</label>
				                         	<!-- <div class="col-sm-9"> -->
	                            				<input type="text" class="form-control" name="sp_occ">                            
	                          				<!-- </div> -->
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
					                    <div class="col-md-6">
					                        <div class="form-group">
					                          <label>Personal Contact</label>
					                          <!-- <div class="col-sm-9"> -->
					                           <input type="text" class="form-control" name="p_contact">
					                          <!-- </div> -->
					                        </div>
					                    </div>
					                    <div class="col-md-6">
					                        <div class="form-group">
					                          <label>Personal Email</label>
					                         	<!-- <div class="col-sm-9"> -->
		                            				<input type="email" class="form-control" name="p_email">                     
		                          				<!-- </div> -->
					                        </div>
					                    </div>
				                    </div>
				                    <div class="row">
					                    <div class="col-md-6">
					                        <div class="form-group">
					                          <label>Personal Address</label>
					                          <!-- <div class="col-sm-9"> -->
					                            <textarea rows="4" class="form-control" name="p_add"/> </textarea> 
					                          <!-- </div> -->
					                        </div>
					                    </div>
				                    </div>

				                    <p class="card-description">
				                      Family Details
				                    </p>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Name</label>
				                          <!-- <div class="col-sm-9"> -->
				                            <input type="text" class="form-control" name="f_name"/>
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Relationship</label>
				                          <!-- <div class="col-sm-9"> -->
				                            <input type="text" class="form-control" name="f_rel"/>
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Age</label>
				                          <!-- <div class="col-sm-9"> -->
				                            <input type="text" class="form-control" name="f_age"/>
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group">
				                          <label>Dependant</label>
				                          <!-- <div class="col-sm-9"> -->
				                            <select class="form-control" name="f_dpn">
				                              <option>Yes</option>
				                              <option>No</option>
				                            </select>
				                          <!-- </div> -->
				                        </div>
				                      </div>
				                    </div>
                      </section>

                      <h3>Financial Goal</h3>
                      <section>
                        <!-- <h3>Profile</h3> -->
                           <p class="card-description">
				                      Financial Goal
				                    </p>
				                    <div class="form-group table-responsive">
					                    <table id="myTable" class="table table-borderless">
					                    	<thead>
					                    		<tr>
					                    		<td>Description</td>
					                    		<td>Frequency</td>
					                    		<td>Goal Rs</td>
					                    		<td>Inflation Rate</td>
					                    		<td>Start Year</td>
					                    		<td>End Year</td>
					                    		<td>Priority</td>
					                    		<td></td>
					                    	</tr>
					                    	</thead>
					                    	<tbody id="next_financial_goal">
					                    		<tr>
					                    			<td> 
					                    				<input type="text" class="form-control" name="g_dsc[]" />
					                    			</td>
					                    			<td> 
					                    				<input type="number" class="form-control" name="g_freq[]"/>
					                    			</td>
					                    			<td> <input type="number" class="form-control" name="g_value[]"/></td>
					                    			<td>  <input type="number" class="form-control" name="g_Inflation[]"  /></td>
					                    			<td>  <input type="text" class="form-control text-center" name="g_st_year[]"  /></td>
					                    			<td>   <input type="text" class="form-control text-center" name="g_end_year[]" /> </td>
					                    				<td> <input type="text" class="form-control" name="g_priority[]" ></td>
					                    			<td> <button type="button" id="add_financial_goal"  name="addmore" class="btn btn-primary btn-sm">+</button></td>
					                    		</tr>
					                    	</tbody>
					                    </table>
				                  	</div>
				                 

					                <input type="hidden" name="serial[]" class="sl_financial_goal" id="hd" value="1">
					                <!-- <div id="next_financial_goal_1"></div> -->

					                <div class="form-group row">
					                	<div class="col-md-11 col-11">
					                      <label for="exampleInputEmail1">Note</label>
					                      <textarea rows="3" class="form-control" name="note[]" placeholder="Enter Note" /></textarea>
					                    </div>
					                    <div class="col-md-1 col-1">
					                          <label for="exampleInputPassword1"><br></label><br>
					                          <button type="button" id="add_note"  name="addmore" class="btn btn-primary btn-sm">+</button>
					                    </div>
					                </div>
					                <input type="hidden" name="serial[]" class="sl_note" id="hd" value="1">
					                <div id="next_note"></div>

					                <div class="form-group row">
					                	<div class="col-md-11 col-11">
					                      <label for="exampleInputEmail1">Assumption</label>
					                      <textarea rows="3" class="form-control" name="a_description[]" placeholder="Enter Assumption" /></textarea>
					                    </div>
					                    <div class="col-md-1 col-1">
					                       	<label for="exampleInputPassword1"><br></label><br>
					                        <button type="button" id="add_assumption"  name="addmore" class="btn btn-primary btn-sm">+</button>
					                    </div>
					                </div>
					                <input type="hidden" name="serial[]" class="sl_assumption" id="hd" value="1">
					                <div id="next_assumption"></div>

					                 <div class="form-group row">
					                	<div class="col-md-11">
					                      <label for="exampleInputEmail1">Risk Level</label>
					                      <textarea rows="3" class="form-control" name="risk_level" placeholder="Enter Risk Level" /></textarea>
					                  </div>
					                </div>
					                <br>
                      </section>
<!-- 
                      <h3>Comments</h3>
                      <section>
                        <h3>Comments</h3>
                        <div class="form-group">
                          <label>Comments</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </section>

                      <h3>Finish</h3>
                      <section>
                        <h3>Finish</h3>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section> -->
                    </div>
                  </form>
	    

	    	</div>

	    </div>
		</div>
	</div>
</div>


<script
  src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script>
	 $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#success-alert").slideUp(500);
      window.location.href = 'personal_details.php';
  });

  $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
      $("#danger-alert").slideUp(500);
      window.location.href = 'personal_details.php';
  });


</script>

<?php include 'footer.php'; ?>
<script>
	(function($) {
  'use strict';
  var form = $("#example-form");
  form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onFinished: function(event, currentIndex) {
      //alert("Submitted!");
       // Submit form input
    	form.submit();
    }
  });

  // var validationForm = $("#example-validation-form");
  // validationForm.val({
  //   errorPlacement: function errorPlacement(error, element) {
  //     element.before(error);
  //   },
  //   rules: {
  //     confirm: {
  //       equalTo: "#password"
  //     }
  //   }
  // });
  // validationForm.children("div").steps({
  //   headerTag: "h3",
  //   bodyTag: "section",
  //   transitionEffect: "slideLeft",
  //   onStepChanging: function(event, currentIndex, newIndex) {
  //     validationForm.val({
  //       ignore: [":disabled", ":hidden"]
  //     })
  //     return validationForm.val();
  //   },
  //   onFinishing: function(event, currentIndex) {
  //     validationForm.val({
  //       ignore: [':disabled']
  //     })
  //     return validationForm.val();
  //   },
  //   onFinished: function(event, currentIndex) {
  //     alert("Submitted!");
  //   }
  // });

  // var verticalForm = $("#example-vertical-wizard");
  // verticalForm.children("div").steps({
  //   headerTag: "h3",
  //   bodyTag: "section",
  //   transitionEffect: "slideLeft",
  //   stepsOrientation: "vertical",
  //   onFinished: function(event, currentIndex) {
  //     alert("Submitted!");
  //   }
  // });
})(jQuery);
</script>

<script type="text/javascript">
	$('#add_financial_goal').click(function(){
 
    var length = $('.sl_financial_goal').length;
    var i   = parseInt(length)+parseInt(1);
    // var newrow = $('#next_financial_goal').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_financial_goal" value="'+i+'"></div><div class="form-group row dts"><div class="col-md-2"><label for="exampleInputEmail1">Description</label><input type="text"  class="form-control" name="g_dsc[]" id="g_dsc" placeholder="Enter Description" autofocus="" tabindex="1"></div><div class="col-md-2"><label for="exampleInputPassword1">Frequency</label><input type="number" class="form-control"  name="g_freq[]" id="g_freq" placeholder="Enter Frequency" tabindex="2"></div><div class="col-md-2"><label for="exampleInputPassword1">Goal Rs</label><input type="text" class="form-control" name="g_value[]" id="g_value" placeholder="Enter Goal Rs." tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Inflation Rate</label><input type="number" class="form-control" name="g_Inflation[]" id="g_Inflation" placeholder="Enter Inflation Rate" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Start Year</label><input type="text" class="form-control" name="g_st_year[]" id="g_st_year" placeholder="Enter Start Year" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">End Year</label><input type="text" class="form-control" name="g_end_year[]" id="g_end_year" placeholder="Enter End Year" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Priority</label><input type="text" class="form-control" name="g_priority[]" id="g_priority" placeholder="Enter Priority" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1"><br></label><br><button type="button"   name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></div></div>');
    
    var newrow = $('#next_financial_goal').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_financial_goal" value="'+i+'"></div><td><input type="text" class="form-control" name="g_dsc[]" id="g_dsc" /></td><td><input type="number" class="form-control" name="g_freq[]" id="g_freq"/></td><td> <input type="number" class="form-control" name="g_value[]" id="g_value" /></td><td><input type="number" class="form-control" name="g_Inflation[]" id="g_Inflation"/></td><td><input type="text" class="form-control text-center" name="g_st_year[]" id="g_st_year" /></td><td>   <input type="text" class="form-control text-center" name="g_end_year[]" id="g_end_year" /> </td><td> <input type="text" class="form-control" name="g_priority[]" id="g_priority" ></td><td> <button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');


    });
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('.dts').remove()
  });

  
  $('#add_note').click(function(){
   
    var length = $('.sl_note').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_note').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_note" value="'+i+'"></div> <div class="form-group row dts_note"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="note[]" placeholder="Enter Note" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btnNoteRemove">-</button></div></div>');
    
    });
  
  // Removing event here
  $('body').on('click','.btnNoteRemove',function() {
       $(this).closest('.dts_note').remove()
  });

   $('#add_assumption').click(function(){
   
    var length = $('.sl_assumption').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_assumption').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_assumption" value="'+i+'"></div> <div class="form-group row dts_assumption"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="a_description[]" placeholder="Enter Assumption" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button"  name="addmore" class="btn btn-danger btn-sm btnAssumptionRemove">-</button></div></div>');
    
    });
  
  // Removing event here
  $('body').on('click','.btnAssumptionRemove',function() {
       $(this).closest('.dts_assumption').remove()
  });
</script>