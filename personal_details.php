<?php include 'header.php'; ?>
 <style type="text/css">
 	.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead, .tt-query, .tt-hint {
  
    padding: 0.875rem 0.375rem;
 
}
 </style>

<style type="text/css">
	.table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td {
    padding: 1.125rem 0.375rem;
  }
  #prevBtn {
  	background-color: #bbbbbb;
	}
	.wizard.vertical > .steps {
    display: inline;
    float: left;
    width: 25%;
}
.wizard.vertical > .content {
    display: inline;
    float: left;
    margin: 0 2.5% 0.5em 2.5%;
    width: 70%;
 }

 .wizard > .content > .body {
 	position: inherit;
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
					                    				<input type="text" class="form-control" name="g_freq[]"/>
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

                      <h3>Net Worth</h3>
                      <section>
                        <!-- -<h3>Net Worth</h3> -->
                       	<p class="card-description">
				                  Net Worth
				                </p>
                        <!-- <h3>Assets</h3> -->
                        <!-- assets start -->
                        <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Assets</b></label>
				                      <input type="text" class="form-control" id="assets_name_1" name="assets_name[]"/>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><b>Amount</b></label>
				                            <input type="number" class="form-control assets_amount" id="assets_amount_1" name="assets_amount[]" value="0" onchange="get_assets_amount()" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label><b>% of Total Amount</b></label>
				                            <input type="number" class="form-control" id="assets_per_amount_1" name="assets_per_amount[]" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-1 col-1">
				                        <div class="form-group">
				                          <label ><br></label><br>
				                            <button type="button" id="add_assets"  name="addmore" class="btn btn-primary btn-sm">+</button>
				                        </div>
				                      </div>
				                </div>
					              <div id="next_assets"></div>

				                <input type="hidden" name="serial[]" class="sl_assets" id="hd" value="1">
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Total</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="assets_total_amount" name="assets_total_amount" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="assets_total_per_amount" name="assets_total_per_amount" value="0" />
				                        </div>
				                      </div>
				                </div>
				                <!-- assets end -->

				                <!-- financial assets start -->
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Financial Assets</b></label>
				                      <input type="text" class="form-control" id="financial_assets_name_1" name="financial_assets_name[]"/>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label><br></label>
				                            <input type="number" class="form-control financial_assets_amount" id="financial_assets_amount_1" name="financial_assets_amount[]" value="0" onchange="get_financial_assets_amount()" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control" id="financial_assets_per_amount_1" name="financial_assets_per_amount[]" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-1 col-1">
				                        <div class="form-group">
				                          <label ><br></label><br>
				                            <button type="button" id="add_financial_assets"  name="addmore" class="btn btn-primary btn-sm">+</button>
				                        </div>
				                      </div>
				                </div>
					              <div id="next_financial_assets"></div>

				                <input type="hidden" name="serial[]" class="sl_financial_assets" id="hd" value="1">
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Total</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="financial_assets_total_amount" name="financial_assets_total_amount" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="financial_assets_total_per_amount" name="financial_assets_total_per_amount" value="0" />
				                        </div>
				                      </div>
				                </div>
				                <!-- financial assets end -->

				                <!-- tangible assets start -->
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Tangible Assets</b></label>
				                      <input type="text" class="form-control" id="tangible_assets_name_1" name="tangible_assets_name[]"/>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control tangible_assets_amount" id="tangible_assets_amount_1" name="tangible_assets_amount[]" value="0"  onchange="get_tangible_assets_amount()" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control" id="	tangible_assets_per_amount_1" name="tangible_assets_per_amount[]" value="0"  />
				                        </div>
				                      </div>
				                      <div class="col-md-1 col-1">
				                        <div class="form-group">
				                          <label ><br></label><br>
				                            <button type="button" id="add_tangible_assets"  name="addmore" class="btn btn-primary btn-sm">+</button>
				                        </div>
				                      </div>
				                </div>
					              <div id="next_tangible_assets"></div>

				                <input type="hidden" name="serial[]" class="sl_tangible_assets" id="hd" value="1">
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Total</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="tangible_assets_total_amount" name="tangible_assets_total_amount" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="tangible_assets_total_per_amount" name="tangible_assets_total_per_amount" value="0"/>
				                        </div>
				                      </div>
				                </div>
				                <!-- tangible assets end -->

				                 <!-- personal assets start -->
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Personal Assets</b></label>
				                      <input type="text" class="form-control" id="personal_assets_name_1" name="personal_assets_name[]"/>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control personal_assets_amount" id="personal_assets_amount_1" name="personal_assets_amount[]" value="0" onchange="get_personal_assets_amount()" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control" id="personal_assets_per_amount_1" name="personal_assets_per_amount[]" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-1 col-1">
				                        <div class="form-group">
				                          <label ><br></label><br>
				                            <button type="button" id="add_personal_assets" name="addmore" class="btn btn-primary btn-sm">+</button>
				                        </div>
				                      </div>
				                </div>
					              <div id="next_personal_assets"></div>

				                <input type="hidden" name="serial[]" class="sl_personal_assets" id="hd" value="1">
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Total</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="personal_assets_total_amount" name="personal_assets_total_amount" value="0"/>
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="personal_assets_total_per_amount" name="personal_assets_total_per_amount" value="0"/>
				                        </div>
				                      </div>
				                </div>
				                <!-- personal assets end -->

				                 <!-- retirement assets start -->
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Retirement Assets</b></label>
				                      <input type="text" class="form-control" id="retirement_assets_name_1" name="retirement_assets_name[]"/>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control retirement_assets_amount" id="	retirement_assets_amount_1" name="retirement_assets_amount[]" value="0" onchange="get_retirement_assets_amount()" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control retirement_assets_per_amount" id="retirement_assets_per_amount_1" name="retirement_assets_per_amount[]" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-1 col-1">
				                        <div class="form-group">
				                          <label ><br></label><br>
				                            <button type="button" id="add_retirement_assets" name="addmore" class="btn btn-primary btn-sm">+</button>
				                        </div>
				                      </div>
				                </div>

				                <input type="hidden" name="serial[]" class="sl_retirement_assets" id="retirement_assets_1" value="1">
					              <div id="next_retirement_assets"></div>

				                
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Total</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="retirement_assets_total_amount" name="retirement_assets_total_amount" value="0"/>
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="retirement_assets_total_per_amount" name="retirement_assets_total_per_amount" value="0"/>
				                        </div>
				                      </div>
				                </div>
				                <!-- personal assets end -->

				                <!-- total assets start -->
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Total Assets</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="all_assets_total_amount" name="all_assets_total_amount" value="0"/>
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="all_assets_total_per_amount" name="all_assets_total_per_amount" value="0"/>
				                        </div>
				                      </div>
				                </div>
				                <!-- total assets end -->

				                 <!-- liabilities and networth start -->
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Liabilities and Net Worth</b></label>
				                      <input type="text" class="form-control" id="liabilities_name_1" name="liabilities_name[]"/>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control liabilities_amount" id="liabilities_amount_1" name="liabilities_amount[]" value="0"  onchange="get_liabilities_amount()" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                          <label ><br></label>
				                            <input type="number" class="form-control" id="liabilities_per_amount_1" name="liabilities_per_amount[]" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-1 col-1">
				                        <div class="form-group">
				                          <label ><br></label><br>
				                            <button type="button" id="add_liabilities"  name="addmore" class="btn btn-primary btn-sm">+</button>
				                        </div>
				                      </div>
				                </div>
					              <div id="next_liabilities"></div>

				                <input type="hidden" name="serial[]" class="sl_liabilities" id="hd" value="1">
				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Total Liabilities</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="liabilities_total_amount" name="liabilities_total_amount" value="0" />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="liabilities_total_per_amount" name="liabilities_total_per_amount" value="0" />
				                        </div>
				                      </div>
				                </div>
				                <!-- liabilities and networth end -->

				                <div class="row">
				                  <div class="col-md-5 col-5">
				                    <div class="form-group">
				                      <label><b>Net Worth</b></label>
				                    </div>
				                  </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="net_worth_total_amount" name="net_worth_total_amount" value="0"  />
				                        </div>
				                      </div>
				                      <div class="col-md-3 col-3">
				                        <div class="form-group">
				                            <input type="number" class="form-control" id="net_worth_total_per_amount" name="net_worth_total_per_amount" value="0" />
				                        </div>
				                      </div>
				                </div>

				                <div class="row">
				                  <div class="col-md-12 col">
				                    <div class="form-group">
				                      <label><b>Notes</b></label>
				                      <textarea class="form-control" name="notes"></textarea>
				                    </div>
				                  </div>
				                </div>
                      </section>


                      <h3>Cash Flow</h3>
                      <section>
          
                        <p class="card-description">
				                 Cash Flow
				                </p>

				                <div class="row">
				                	<div class="col-md-4 col-4">
				                		<div class="form-group">
				                			<label></label>
				                		</div>
				                	</div>
				                	<div class="col-md-4 col-4">
				                		<div class="form-group">
				                			<label><b>Current</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-4 col-4">
				                		<div class="form-group">
				                			<label><b>Recommended</b></label>
				                		</div>
				                	</div>
				                </div>

				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Description</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b>% of total Income</b></label>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b>Annualy</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b>Monthly</b></label>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b>% of total Income</b></label>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b>Annualy</b></label>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b>Monthly</b></label>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>

				                <!-- income start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Income</b></label>
				                			<input type="text" class="form-control" name="income_description[]">
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_per_income" id="current_per_income_1" name="current_per_income[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_annualy_income" id="current_annualy_income_1" name="current_annualy_income[]" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_monthly_income" id="current_monthly_income_1" name="current_monthly_income[]" value="0" onchange="get_current_annualy_income(1)" >
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_per_income" id="rec_per_income_1" name="rec_per_income[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_annualy_income" id="rec_annualy_income_1" name="rec_annualy_income[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_monthly_income" id="rec_monthly_income_1" name="rec_monthly_income[]" value="0" onchange="get_rec_annualy_income(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<button type="button" id="add_income" class="btn btn-primary btn-sm">+</button>
				                		</div>
				                	</div>
				                </div>

				                <input type="hidden" name="serial[]" class="sl_income" id="income_1" value="1">
				                <div id="next_income"></div>

				                

				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Total Income</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_total_per_income" id="current_total_per_income" name="current_total_per_income" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_income" name="current_total_annualy_income" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_income" name="current_total_monthly_income" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_income" name="rec_total_per_income" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_income" name="rec_total_annualy_income" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_income" name="rec_total_monthly_income" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- income end -->

				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Expense</b></label>
				                		</div>
				                	</div>
				               
				                </div>

				                <!-- living expense start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Living Expenses</b></label>
				                			<input type="text" class="form-control" name="living_expense_description[]">
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_living_per_expense" id="current_living_per_expense" name="current_living_per_expense[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_annualy_living_expense" id="current_annualy_living_expense_1" name="current_annualy_living_expense[]" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_monthly_living_expense" id="current_monthly_living_expense_1" name="current_monthly_living_expense[]" value="0" onchange="get_current_annualy_expense(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_living_per_expense" id="rec_living_per_expense" name="rec_living_per_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_annualy_living_expense" id="rec_annualy_living_expense_1" name="rec_annualy_living_expense[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_monthly_living_expense" id="rec_monthly_living_expense_1" name="rec_monthly_living_expense[]" value="0" onchange="get_rec_annualy_expense(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<button type="button" id="add_living_expense" class="btn btn-primary btn-sm">+</button>
				                		</div>
				                	</div>
				                </div>

				                <input type="hidden" name="serial[]" class="sl_living_expense" id="living_expense_1" value="1">

				                <div id="next_living_expense"></div>

				               
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Total Living Expenses</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_expense" name="current_total_per_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_expense" name="current_total_annualy_expense" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_expense" name="current_total_monthly_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_expense" name="rec_total_per_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_expense" name="rec_total_annualy_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_expense" name="rec_total_monthly_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- living expense end -->


				                <!-- EMI start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Loan EMIs</b></label>
				                			<input type="text" class="form-control" name="emi_description[]">
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_per_emi" id="current_per_emi_1" name="current_per_emi[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_annualy_emi" id="current_annualy_emi_1" name="current_annualy_emi[]" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_monthly_emi" id="current_monthly_emi_1" name="current_monthly_emi[]" value="0" onchange="get_current_annualy_emi(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_per_emi" id="rec_per_emi_1" name="rec_per_emi[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_annualy_emi" id="rec_annualy_emi_1" name="rec_annualy_emi[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_monthly_emi" id="rec_monthly_emi_1" name="rec_monthly_emi[]" value="0" onchange="get_rec_annualy_emi(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<button type="button" id="add_emi" class="btn btn-primary btn-sm">+</button>
				                		</div>
				                	</div>
				                </div>

				                <input type="hidden" name="serial[]" class="sl_emi" id="emi_1" value="1">
				                <div id="next_emi"></div>

				               
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Total EMIs</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_emi" name="current_total_per_emi" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_emi" name="current_total_annualy_emi" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_emi" name="current_total_monthly_emi" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_emi" name="rec_total_per_emi" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_emi" name="rec_total_annualy_emi" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_emi" name="rec_total_monthly_emi" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- EMIs end -->

				                <!-- Insurance Premium start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Insurance Premium</b></label>
				                			<input type="text" class="form-control" name="insurance_description[]">
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_per_insurance" id="current_per_insurance_1" name="current_per_insurance[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_annualy_insurance" id="current_annualy_insurance_1" name="current_annualy_insurance[]" value="0" onchange="get_current_monthly_insurance(1)">
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_monthly_insurance" id="current_monthly_insurance_1" name="current_monthly_insurance[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_per_insurance" id="rec_per_insurance_1" name="rec_per_insurance[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_annualy_insurance" id="rec_annualy_insurance_1" name="rec_annualy_insurance[]" value="0" onchange="get_rec_monthly_insurance(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_monthly_insurance" id="rec_monthly_insurance_1" name="rec_monthly_insurance[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<button type="button" id="add_insurance" class="btn btn-primary btn-sm">+</button>
				                		</div>
				                	</div>
				                </div>

				                <input type="hidden" name="serial[]" class="sl_insurance" id="insurance_1" value="1">
				                <div id="next_insurance"></div>


				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Total Insurance Premium</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_insurance" name="current_total_per_insurance" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_insurance" name="current_total_annualy_insurance" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_insurance" name="current_total_monthly_insurance" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_insurance" name="rec_total_per_insurance" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_insurance" name="rec_total_annualy_insurance" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_insurance" name="rec_total_monthly_insurance" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- Insurance Premium end -->

				                <!-- Other Expenses start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Other Expenses</b></label>
				                			<input type="text" class="form-control" name="other_exp_description[]">
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_per_other_exp" id="current_per_other_exp_1" name="current_per_other_exp[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_annualy_other_exp" id="current_annualy_other_exp_1" name="current_annualy_other_exp[]" value="0" onchange="get_current_monthly_other_exp(1)">
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_monthly_other_exp" id="current_monthly_other_exp_1" name="current_monthly_other_exp[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_per_other_exp" id="rec_per_other_exp_1" name="rec_per_other_exp[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_annualy_other_exp" id="rec_annualy_other_exp_1" name="rec_annualy_other_exp[]" value="0" onchange="get_rec_monthly_other_exp(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_monthly_other_exp" id="rec_monthly_other_exp_1" name="rec_monthly_other_exp[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<button type="button" id="add_other_exp" class="btn btn-primary btn-sm">+</button>
				                		</div>
				                	</div>
				                </div>

				                <input type="hidden" name="serial[]" class="sl_other_exp" id="other_exp_1" value="1">
				                <div id="next_other_exp"></div>

				               
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Total Other Expenses</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_other_exp" name="current_total_per_other_exp" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_other_exp" name="current_total_annualy_other_exp" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_other_exp" name="current_total_monthly_other_exp" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_other_exp" name="rec_total_per_other_exp" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_other_exp" name="rec_total_annualy_other_exp" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_other_exp" name="rec_total_monthly_other_exp" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- Other Expenses end -->

				                
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Contribution of Emergency Fund</b></label>
				                		</div>
				                	</div>
				                	
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_fund" name="current_total_per_fund" value="0">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_fund" name="current_total_annualy_fund" value="0" onchange="get_current_all_annualy_expense()">
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_fund" name="current_total_monthly_fund" value="0" onchange="get_current_all_monthly_expense()">
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_fund" name="rec_total_per_fund" value="0">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_fund" name="rec_total_annualy_fund" value="0" onchange="get_rec_all_annualy_expense()">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_fund" name="rec_total_monthly_fund" value="0" onchange="get_rec_all_monthly_expense()">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>

				                <!-- Taxes start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Taxes</b></label>
				                			<input type="text" class="form-control" name="tax_description[]">
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_per_tax" id="current_per_tax_1" name="current_per_tax[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_annualy_tax" id="current_annualy_tax_1" name="current_annualy_tax[]" value="0" onchange="get_current_monthly_tax(1)">
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_monthly_tax" id="current_monthly_tax_1" name="current_monthly_tax[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_per_tax" id="rec_per_tax_1" name="rec_per_tax[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_annualy_tax" id="rec_annualy_tax_1" name="rec_annualy_tax[]" value="0" onchange="get_rec_monthly_tax(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_monthly_tax" id="rec_monthly_tax_1" name="rec_monthly_tax[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<button type="button" id="add_tax" class="btn btn-primary btn-sm">+</button>
				                		</div>
				                	</div>
				                </div>
				                <input type="hidden" name="serial[]" class="sl_tax" id="tax_1" value="1">
				                <div id="next_tax"></div>

				                
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Total Taxes</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_tax" name="current_total_per_tax" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_tax" name="current_total_annualy_tax" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_tax" name="current_total_monthly_tax" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_tax" name="rec_total_per_tax" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_tax" name="rec_total_annualy_tax" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_tax" name="rec_total_monthly_tax" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- Taxes end -->

				                <!-- total expenses start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Total Expenses</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_all_per_expense" name="current_total_all_per_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_all_annualy_expense" name="current_total_all_annualy_expense" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_all_monthly_expense" name="current_total_all_monthly_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_all_per_expense" name="rec_total_all_per_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_all_annualy_expense" name="rec_total_all_annualy_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_all_monthly_expense" name="rec_total_all_monthly_expense" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- total expenses end -->

				                <!-- excess/shortage before saving start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Excess/Shortage before savings</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_before_saving" name="current_total_per_before_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_before_saving" name="current_total_annualy_before_saving" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_before_saving" name="current_total_monthly_before_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_before_saving" name="rec_total_per_before_saving" value="0" readonly> 
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_annualy_before_saving" name="rec_total_annualy_before_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_before_saving" name="rec_total_monthly_before_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- excess/shortage before saving end-->

				                <!-- saving start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Savings</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_per_saving" name="current_per_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_annualy_saving" name="current_annualy_saving" value="0" onchange="get_current_monthly_saving()">
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_monthly_saving" name="current_monthly_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_per_saving" name="rec_per_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_annualy_saving" name="rec_annualy_saving" value="0" onchange="get_rec_monthly_saving()">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_monthly_saving" name="rec_monthly_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                		</div>
				                	</div>
				                </div>
				                <!-- saving end -->

				                 <!-- Contribution of Retirement Assest start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<label><b>Contribution of Retirement Assets</b></label>
				                			<input type="text" class="form-control" id="contribute_assets_description" name="contribute_assets_description[]">
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_per_contribute_assets" id="current_per_contribute_assets_1" name="current_per_contribute_assets[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_annualy_contribute_assets" id="current_annualy_contribute_assets_1" name="current_annualy_contribute_assets[]" value="0" onchange="get_current_contribute_assets(1)">
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control current_monthly_contribute_assets" id="current_monthly_contribute_assets_1" name="current_monthly_contribute_assets[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_per_contribute_assets" id="rec_per_contribute_assets_1" name="rec_per_contribute_assets[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_annualy_contribute_assets" id="rec_annualy_contribute_assets_1" name="rec_annualy_contribute_assets[]" value="0" onchange="get_rec_contribute_assets(1)">
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control rec_monthly_contribute_assets" id="rec_monthly_contribute_assets_1" name="rec_monthly_contribute_assets[]" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<button type="button" id="add_contribute_assets" class="btn btn-primary btn-sm">+</button>
				                		</div>
				                	</div>
				                </div>

				                <input type="hidden" name="serial[]" class="sl_contribute_assets" id="contribute_assets_1" value="1">
				                <div id="next_contribute_assets"></div>

				               
				                <!-- Contribution of Retirement Assest end -->

				                <!-- Excess/Shortage after saving start -->
				                <div class="row">
				                	<div class="col-md-3 col-3">
				                		<div class="form-group">
				                			<br>
				                			<label><b>Excess/Shortage after saving</b></label>
				                		</div>
				                	</div>
				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_per_after_saving" name="current_total_per_after_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_annualy_after_saving" name="current_total_annualy_after_saving" value="0" readonly>
				                		</div>
				                	</div>
				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="current_total_monthly_after_saving" name="current_total_monthly_after_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-2 col-2">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_per_after_saving" name="rec_total_per_after_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control"  id="rec_total_annualy_after_saving" name="rec_total_annualy_after_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label>
				                			<input type="text" class="form-control" id="rec_total_monthly_after_saving" name="rec_total_monthly_after_saving" value="0" readonly>
				                		</div>
				                	</div>

				                	<div class="col-md-1 col-1">
				                		<div class="form-group">
				                			<label><b><br></b></label><br>
				                			<!-- <input type="text" class="form-control" name=""> -->
				                		<!-- 	<button type="button" class="btn btn-primary btn-sm">+</button> -->
				                		</div>
				                	</div>
				                </div>
				                <!-- Excess/Shortage after saving end -->

				                <!-- notes start -->
				                <div class="row">
				                	<div class="col-md-12 col-12">
				                		<div class="form-group">
				                			<label><b>Notes</b></label>
				                			<textarea class="form-control" name=""></textarea>
				                		</div>
				                	</div>
				                </div>
				                <!-- notes end -->

				                <!-- <div class="row">
				                	<div class="col-md-4">
				                		<div class="form-group">
				                			<label><b>Income</label>
				                			<input type="text" class="form-control" name="description">
				                		</div>
				                	</div>
				                	<div class="col-md-4">
				                		<div class="col-md-1">
					                		<div class="form-group">
					                			<label><b></label>
					                			<input type="text" class="form-control" name="description">
					                		</div>
					                	</div>
					                	<div class="col-md-1">
					                		<div class="form-group">
				                				<label></label>
				                				<input type="text" class="form-control" name="description">
				                			</div>
				                		</div>
				                		<div class="col-md-1">
					                		<div class="form-group">
				                				<label></label>
				                				<input type="text" class="form-control" name="description">
				                			</div>
				                		</div>

				                	</div>
				                	<div class="col-md-4">
				                		<div class="form-group">
				                			<label></label>
				                			<input type="text" class="form-control" name="description">
				                			<label></label>
				                			<input type="text" class="form-control" name="description">
				                			<label></label>
				                			<input type="text" class="form-control" name="description">
				                		</div>
				                	</div>
				                </div> -->

				               <!--  <div class="row">
				                	<div class="col-md-3">
				                		<div class="form-group">
				                			<input type="text" class="form-control" name="description">
				                		</div> 
				                	</div>
				                	<div class="col-md-4">
				                		<div class="row">
				                			<div class="col-md-4">
				                				<input type="text" class="form-control" name="description">
				                			</div>

				                			<div class="col-md-4">
				                				<input type="text" class="form-control" name="description">
				                			</div>
				                			<div class="col-md-4">
				                				<input type="text" class="form-control" name="description">
				                			</div>
				                		</div>
				                	</div>
				                	<div class="col-md-4">
				                		<div class="row">
				                			<div class="col-md-4">
				                				<input type="text" class="form-control" name="description">
				                			</div>

				                			<div class="col-md-4">
				                				<input type="text" class="form-control" name="description">
				                			</div>
				                			<div class="col-md-4">
				                				<input type="text" class="form-control" name="description">
				                			</div>
				                		</div>
				                	</div>

				                	<div class="col-md-1">
				                        <div class="form-group">
				                          <label ><br></label><br>
				                            <button type="button" id="add_assets"  name="addmore" class="btn btn-primary btn-sm">+</button>
				                        </div>
				                      </div>
				                </div>
 -->



				               <!--  <div class="row table-responsive">
				                	<table class="table table-bordered">
				                		<tr>
				                			<th></th>
									            <th colspan="3"><center>Current</center></th>
									            <th colspan="3"><center>Recommended</center></th>
									            <th></th>
									          </tr>
									          <tr>
									            <th>Description</th>
									            <th>% of total Income</th>
									            <th>Annual</th>
									            <th>Monthly</th>

									            <th>% of total Income</th>
									            <th>Annual</th>
									            <th>Monthly</th>
									          	
									          	<th></th>
									          </tr>
									          <tr>
									         		<th>Income</th>
									         		<th></th>
									            <th></th>
									            <th></th>

									            <th></th>
									            <th></th>
									            <th></th>
									          	<th></th>
									         	</tr>

									         	<tr>
									         		<th>
									         			<input type="text" class="form-control" name="">
									         		</th>
									         		<th>
									         			<input type="text" class="form-control" name="">
									         		</th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>

									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									          	<th>
									          		<button type="button" class="btn btn-primary btn-sm">+</button>
									          	</th>
									         	</tr>

									         	<tr>
									         		<th>
									         			Total Income
									         		</th>
									         		<th>
									         			<input type="text" class="form-control" name="">
									         		</th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>

									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									            <th>
									            	<input type="text" class="form-control" name="">
									            </th>
									          	<th>
									          		<button type="button" class="btn btn-primary btn-sm">+</button>
									          	</th>
									         	</tr>
				                	</table>
				                
				                </div> -->
                        
                      </section>

                      <h3>Emergency Fund</h3>
                      <section>
                        <!-- <h3>Profile</h3> -->
											  <p class="card-description">
												   Create and maintain an adequate emergency fund
												</p>
															                 												

											 	<div class="row">
													<div class="col">
													  	<p class="form-inline">
															  	As based on your current situation, I request you to park an amount equal to minimum 6 months committed expenses (before tax) amounting to approximately Rs.
															  	<input type="text" name="before_tax" size="5"/>lakh should be maintained towards emergency fund. The committed expenses include living expenses (as describe in cash flow), Loan EMIs, Insurance premium and other expenses. So I advise you to park some portion of your emergency fund in savings account with sweep in facilities and remaining portions as a FD.
															</p>	
													</div>
												</div>

											  <div class="row mt-3">
											   	<div class="col">
											        <label>
																Your current saving account balance is Rs.
															</label>
															<input type="text" name="balance" size="8">
													</div>

													<div class="col">
															<label>
															   	Interest on or over 1 lakh in saving account will be earned equal to  FD rate.
															</label>
															<input type="text" name=""  size="2">
													</div>
											  </div>

												<div class="form-group table-responsive">
											    <table id="myTable" class="table table-borderless">
											     	<thead>
															<tr>
																<td>Category</td>
																<td>Amount</td>
																<td></td>
															</tr>
														</thead>
														<tbody id="next_emerency_fund">
															<tr>
																<td> 
																	<input type="text" class="form-control" name="fund_category[]" />
																</td>

																<td> 
																	<input type="number" class="form-control fund_amount" name="fund_amount[]" onchange="get_fund_amount()"/>
																</td>
																
																<td> 
																	<button type="button" id="add_emergency"  name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>
															
														</tbody>
														<tfoot>
															<tr>
																<th>Total</th>
																<th><input type="text" class="form-control" id="total_fund_amount" name="total_fund_amount" ></th>
															</tr>
														</tfoot>
													</table>
											  </div>
															                				                       

											</section>

											<h3>Investment Planning</h3>
											<section>
											  <p class="card-description">
												Current Asset Allocation  
											  </p>
											  <div class="row">
													<div class="col">
													  	<p class="form-inline">
															  	Asset allocation is the cornerstone of good investing. Each investment included in your portfolio must be part of an overall asset allocation strategy. And this plan must not be generic (one-size-fits-all), but rather must be tailored to your specific needs. Based on the information that you have provided, the current asset allocation of your portfolio is: 
															</p>	
													</div>
												</div>

												<div class="form-group table-responsive">
											     <table id="myTable" class="table table-borderless">
											     	<thead>
														<tr>
															<th>Asset Class </th>
															<th>Amount in Rs. </th>
															<th>% of total assets</th>
															<td></td>
														</tr>
													</thead>
													<input type="hidden" name="serial[]" class="sl_c_assets1" id="sl_c_assets_1" value="1">

													<tbody id="next_c_assets">
														<tr class="sl_c_assets" id="dts_cur_asstes_1">
															<td> 
																<input type="text" class="form-control current_class" id="current_class_1" name="current_class[]" />
															</td>
															<td> 
																<input type="number" class="form-control current_amount" id="current_amount_1" name="current_amount[]" onchange="get_current_allocation(1)"/>
															</td>
															<td> 
																<input type="number" class="form-control current_per_assets" id="current_per_assets_1" name="current_per_assets[]" readonly />
															</td>
														
															<td> 
																<button type="button" id="add_c_assets"  name="addmore" class="btn btn-primary btn-sm">+</button>
															</td>
														</tr>
													
													</tbody>
													<tfoot>
														<tr>
															<th>Total</th>
															<th><input type="number" class="form-control" id="current_total_amount" name="current_total_amount" readonly></th>
															<th><input type="number" class="form-control" id="current_per_total" name="current_per_total" readonly></th>
														</tr>
													</tfoot>
												</table>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label><b>Notes</b></label>
					                		<textarea class="form-control" name="current_allocation_notes"></textarea>
														</div>
													</div>
												</div>

												<p class="card-description">
													Proposed Asset Allocation
												</p>
											  
												  <div class="row">
														<div class="col">
														  	<p class="form-inline">
																  	In order to identify a recommended asset allocation that is appropriate for you, we take into consideration your risk appetite, your current investment habits, future goals, and your time horizon. These constraints are then translated into an asset allocation strategy that optimizes the risk/reward relationship. Your proposed asset allocation is :
																</p>	
														</div>
													</div>

												<div class="form-group table-responsive">
											     <table id="myTable" class="table table-borderless">
											     	<thead>
														<tr>
															<th>Asset Class </th>
															<th>Amount in Rs. </th>
															<th>% of total assets</th>
															<td></td>
														</tr>
													</thead>
													<tbody id="next_p_assets">
														<tr class="sl_p_assets" id="dts_p_assets_1">
															<td> 
																<input type="text" class="form-control proposed_class" id="proposed_class_1" name="proposed_class[]" />
															</td>
															<td> 
																<input type="number" class="form-control proposed_amount" id="proposed_amount_1" name="proposed_amount[]" onchange="get_proposed_allocation(1)" />
															</td>
															<td> 
																<input type="number" class="form-control proposed_per_assets" id="proposed_per_assets_1" name="proposed_per_assets[]" readonly />
															</td>
														
															<td> 
																<button type="button" id="add_p_assets"  name="addmore" class="btn btn-primary btn-sm">+</button>
															</td>
														</tr>
														<input type="hidden" name="serial[]" class="sl_p_assets1" id="hd" value="1">
													</tbody>
													<tfoot>
														<tr>
															<th>Total</th>
															<th><input type="number" class="form-control" id="proposed_total_amount" name="proposed_total_amount" readonly></th>
															<th><input type="number" class="form-control" id="proposed_per_total" name="proposed_per_total" readonly></th>
														</tr>
													</tfoot>
												</table>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label><b>Notes</b></label>
					                		<textarea class="form-control" name="proposed_allocation_notes"></textarea>
														</div>
													</div>
												</div>

												<div class="form-group table-responsive">
											     <table id="myTable" class="table table-borderless">
											     	
													<thead>
														<tr>
															<td></td>
															<th colspan="2" style="text-align: center;">Current</th>
															<th colspan="2" style="text-align: center;">Recommended</th>
															<th colspan="2" style="text-align: center;">Repositioning</th>
														</tr>
														<tr>
															<th>Asset Class </th>
															<th>Amount in Rs. </th>
															<th>% of total assets</th>
															<th>Amount in Rs. </th>
															<th>% of total assets</th>
															<th>Amount in Rs. </th>
															<th>% of total assets</th>
															
															<td></td>
														</tr>
													</thead>
													<tbody id="next_total">
														<tr class="sl_final_assets" id="dts_final_assets_1">
															<td> 
																<input type="text" class="form-control assets_class" id="assets_class_1" name="assets_class[]" />
															</td>
															<td> 
																<input type="number" class="form-control cur_assets_amount" id="cur_assets_amount_1" name="cur_assets_amount[]" value="0" onchange="get_final_cur_allocation(1)" />
															</td>
															<td> 
																<input type="number" class="form-control cur_per_assets" id="cur_per_assets_1" name="cur_per_assets[]" value="0" readonly/>
															</td>
															<td> 
																<input type="number" class="form-control rec_assets_amount" id="rec_assets_amount_1" name="rec_assets_amount[]" value="0" onchange="get_final_rec_allocation(1)"/>
															</td>
															<td> 
																<input type="number" class="form-control rec_per_assets" id="rec_per_assets_1" name="rec_per_assets[]" value="0" readonly />
															</td>
															<td> 
																<input type="number" class="form-control rep_assets_amount" id="rep_assets_amount_1" name="rep_assets_amount[]" value="0" readonly/>
															</td>
															<td> 
																<input type="number" class="form-control rep_per_assets" id="rep_per_assets_1" name="rep_per_assets[]" value="0" readonly/>
															</td>
														
															<td> 
																<button type="button" id="add_total"  name="addmore" class="btn btn-primary btn-sm">+</button>
															</td>
														</tr>
														<!-- <input type="hidden" name="serial[]" class="sl_total" id="hd" value="1"> -->
													</tbody>

													<tfoot>
														<tr>
															<th>Total</th>
															<th><input type="text" class="form-control cur_total_amount" id="cur_total_amount" name="cur_total_amount" value="0" readonly></th>
															<th><input type="text" class="form-control cur_per_total" id="cur_per_total" name="cur_per_total" value="0" readonly></th>
															<th><input type="text" class="form-control rec_total_amount" id="rec_total_amount" name="rec_total_amount" value="0" readonly></th>
															<th><input type="text" class="form-control rec_per_total" id="rec_per_total" name="rec_per_total" value="0" readonly></th>
															<th><input type="text" class="form-control rep_total_amount" id="rep_total_amount" name="rep_total_amount" value="0" readonly></th>
															<th><input type="text" class="form-control rep_per_total" id="rep_per_total" name="rep_per_total" value="0" readonly></th>
														</tr>
													</tfoot>
												</table>
												</div>
											</section>

											<h3>Protection Planning</h3>
											<section>
                        <!-- <h3>Profile</h3> -->
									    	<p class="card-description">
												Protection Planning 
													</p>
														   
												 	<div class="row">
														<div class="col">
													    		<p>
																The purpose of this protection planning section is to examine existing insurance coverage and your protection needs. The goal is to determine whether there is adequate coverage or if any additional coverage is needed. Life Insurance 
															</p>	
																		    
														</div>
													</div>	


												  <p class="card-description">
														Life Insurance  
													</p>
														   
												 	<div class="row">
														<div class="col">
													    		<p>
																Life Insurance Life insurance need analysis requires that we look at what would happen in the event of your deaths. This analysis is done using information you provided to us about your income, expenditure, assets and insurance coverage.We have computed the insurance coverage requirement for you so that in the event of your death all household expenses that will need to be incurred by your family and all other financial goals and liabilities are fully met. 
															</p>	
														</div>
													</div>	
												 
												  <p class="card-description">
														Observation   
													</p>
														   
												 	<div class="row">
														<div class="col">
													    		<p class="form-inline">
																Currently you are insured by 3 traditional insurance policies with sum assured of Rs.<input type="text" name="insurance_policy" size="5"/>. You pay an annual premium of Rs. <input type="text" name="annual_premium" size="5"/> (see existing life insurance details, Annexure 1)
															</p>	
														</div>
													</div>

													<p class="card-description">
														Analysis   
													</p>
														   
												 	<div class="row">
														<div class="col">
													    <p class="form-inline">
																Analysis As per my analysis you are under insured by Rs.<input type="text" name="analysis" size="5"/>. (see life insurance need analysis, Annexure 2).
															</p>	
														</div>
													</div>

													<p class="card-description">		
														Recommendation    
													</p>
														   
												 	<div class="row">
														<div class="col">
													    		<p class="form-inline">
																Recommendation I recommend that you to buy life policy, for yourself sum assured of Rs <input type="text" name="life_policy" size="5"/> Estimated annual life insurance premium would be approximately Rs.<input type="text" name="annual_life_insurance" size="5"/> P.A.for you.  
																<br>
																Note: Based on your current Financial situation I recommended you to  buy only term plan in April we review your situation and based on that think for any additional buying.
															</p>	
														</div>
													</div>


													<p class="card-description">		
														Health Insurance 
													</p>
														   
												 	<div class="row">
														<div class="col">
													    		<p>
																Health Insurance Currently, your family is insured by your employer. It's enough for next 10 year or 2 years before you leave the job)
															</p>	
														</div>
													</div>

											</section>

											<h3>Goal Planning</h3>
											<section>
                        <!-- <h3>Profile</h3> -->
												  
													<p class="card-description">
													   1st  Goal: Retirement
													</p>
													

													<div class="form-group row">
														<div class="col-md-11 col-11">
															<label for="exampleInputEmail1">Observation </label>
															<textarea rows="3" class="form-control" name="goal_rt_observation[]" placeholder="Enter Observation " /></textarea>
														</div>
															
														<div class="col-md-1 col-1">
															<label><br></label><br>
															<button type="button" id="add_observation"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_observation" id="hd" value="1">
													<div id="next_observation"></div>

													<div class="form-group row">
													  <div class="col-md-11">
															<label for="exampleInputEmail1">Note</label>
															<textarea rows="3" class="form-control" name="goal_rt_notes" placeholder="Enter Note" /></textarea>
														</div>
													</div>

													<div class="form-group row">
													   	<div class="col-md-11 col-11">
															<label >Analysis</label>
															<textarea rows="3" class="form-control" name="goal_rt_analysis[]" placeholder="Enter Analysis" /></textarea>
														</div>
														
														<div class="col-md-1 col-1">
															<label ><br></label><br>
															<button type="button" id="add_analysis"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_analysis" id="hd" value="1">
													<div id="next_analysis"></div>

																	                
												  <div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
																<tr>
																	<td>Description</td>
																	<td>Goal Amount(In today's value)</td>
																	<td>Goal Amount(After retirement )</td>
																	<td></td>
																</tr>
															</thead>
															<tbody id="next_analysis_f">
																<tr>
																	<td> 
																		<input type="text" class="form-control" name="goal_rt_desc[]" />
																	</td>
																	<td> 
																		<input type="number" class="form-control" name="goal_rt_today[]"/>
																	</td>
																	<td> 
																		<input type="number" class="form-control" name="goal_rt_after[]"/>
																	</td>
																
																	<td> 
																		<button type="button" id="add_analysis_f"  name="addmore" class="btn btn-primary btn-sm">+</button>
																	</td>
																</tr>
																<input type="hidden" name="serial[]" class="sl_analysis_f" id="hd" value="1">
															</tbody>
														</table>
													</div>
													
													<div class="form-group row">
													   	<div class="col-md-11 col-11">
															<label >Recommendation</label>
															<textarea rows="3" class="form-control" name="goal_rt_recommendation[]" placeholder="Enter Recommendation" /></textarea>
														</div>
														
														<div class="col-md-1 col-1">
															<label ><br></label><br>
															<button type="button" id="add_recommendation"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_recommendation" id="hd" value="1">
													<div id="next_recommendation"></div>
													

													<div class="form-group row">
													   	<div class="col-md-11 col-11">
															<label >Funding available towards goal</label>
															<textarea rows="3" class="form-control" name="goal_rt_fund[]" placeholder="Enter Funding available towards goal" /></textarea>
														</div>
														
														<div class="col-md-1 col-1">
															<label ><br></label><br>
															<button type="button" id="add_f_a_goal"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_f_a_goal" id="hd" value="1">
													<div id="next_f_a_goal"></div>
														                				

													<div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
															<tr>
																<td>Description</td>
																<td>Amount In Rs.</td>
																<td></td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th>Required Corpus fund in 2035 (On 1st of Sep.2035)</th>
																<th><input type="number" class="form-control goal_rt_f_corpus_fund" id="goal_rt_f_corpus_fund" name="goal_rt_f_corpus_fund" onchange="get_rt_rem_fund()"></th>
															</tr>
															<tr>
																<th>Less: All available fund in 2035</th>
															</tr>
														</tbody>
														<tbody id="next_funding">
															<tr>
																<td> 
																	<input type="text" class="form-control" name="goal_rt_f_desc[]" />
																</td>
																<td> 
																	<input type="number" class="form-control goal_rt_f_amount" id="goal_rt_f_amount_1" name="goal_rt_f_amount[]" value="0" onchange="get_rt_rem_fund()" />
																</td>
															
																<td> 
																	<button type="button" id="add_funding"  name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>
															<input type="hidden" name="serial[]" class="sl_f_amount" id="hd" value="1">
														</tbody>
														<tfoot>
															<tr>
																<th>Remaining fund to arrange </th>
																<th>
																	<input type="number" class="form-control goal_rt_remaining_fund" id="goal_rt_remaining_fund" name="goal_rt_remaining_fund" value="0">
																</th>
															</tr>
															<tr>
																<th>To achieve  remaining corpus you need to invest monthly<br> @8% p.a. compounded quarterly constant till retirement </th>
																<th>
																	<input type="number" class="form-control goal_rt_const" id="goal_rt_const" name="goal_rt_const">
																</th>
															</tr>
														</tfoot>
													</table>
													</div>

												<p class="card-description">
													   2nd  Goal: Education
												</p>

													<div class="form-group row">
														<div class="col-md-11 col-11">
															<label for="exampleInputEmail1">Observation </label>
															<textarea rows="3" class="form-control" name="goal_edu_observation[]" 
															 placeholder="Enter Observation " /></textarea>
														</div>
															
														<div class="col-md-1 col-1">
															<label><br></label><br>
															<button type="button" id="add_e_observation"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_e_observation" id="hd" value="1">
													<div id="next_e_observation"></div>

													<div class="form-group row">
													   	<div class="col-md-11 col-11">
															<label >Analysis</label>
															<textarea rows="3" class="form-control" name="goal_edu_analysis[]" placeholder="Enter Analysis" /></textarea>
														</div>
														
														<div class="col-md-1 col-1">
															<label ><br></label><br>
															<button type="button" id="add_e_analysis"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_e_analysis" id="hd" value="1">
													<div id="next_e_analysis"></div>

													<div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
															<tr>
																<td>Description</td>
																<td>Goal Amount (In Future Value)</td>
																<td></td>
															</tr>
														</thead>
														<tbody id="next_e_analysis2">
															<tr>
																<td> 
																	<input type="text" class="form-control" name="goal_edu_a_desc[]" />
																</td>
																<td> 
																	<input type="number" class="form-control" name="goal_edu_a_amount[]" value="0" />
																</td>
															
																<td> 
																	<button type="button" id="add_e_analysis2"  name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>
															<input type="hidden" name="serial[]" class="sl_e_analysis2" id="hd" value="1">
														</tbody>
													</table>
													</div>

													<div class="form-group row">
													   	<div class="col-md-11 col-11">
															<label >Recommendation</label>
															<textarea rows="3" class="form-control" name="goal_edu_recommendation[]" placeholder="Enter Recommendation" /></textarea>
														</div>
														
														<div class="col-md-1 col-1">
															<label ><br></label><br>
															<button type="button" id="add_e_recommendation"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_e_recommendation" id="hd" value="1">
													<div id="next_e_recommendation"></div>
													
													<div class="form-group row">
													    <div class="col-md-11">
															<label for="exampleInputEmail1">Funding available towards goal</label>
															<textarea rows="3" class="form-control" name="goal_edu_fund[]" placeholder="Enter Funding available towards goal" /></textarea>
														</div>
													</div>

													<div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
															<tr>
																<td>Description</td>
																<td>Amount In Rs.</td>
																<td></td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th>Required amount in April,2028 (including inflation rate 10%)  </th>
																<td><input type="number" class="form-control goal_edu_req_amt" id="goal_edu_req_amt" name="goal_edu_req_amt" onchange="get_edu_rem_fund()"></td>
															</tr>
															<tr>
																<th>Less: All available fund in April, 2034</th>
															</tr>
														</tbody>
														<tbody id="next_e_f_g">
															<tr>
																<td> 
																	<input type="text" class="form-control" name="goal_edu_desc[]" />
																</td>
																<td> 
																	<input type="number" class="form-control goal_edu_amount" id="goal_edu_amount_1" name="goal_edu_amount[]" value="0" onchange="get_edu_rem_fund()"/>
																</td>
															
																<td> 
																	<button type="button" id="add_e_f_g" name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>
															<input type="hidden" name="serial[]" class="sl_e_f_g" id="hd" value="1">
														</tbody>

														<tfoot>
															<tr>
																<th>Remaining fund to arrange </th>
																<th><input type="number" class="form-control goal_edu_rem_fund" id="goal_edu_rem_fund" name="goal_edu_rem_fund"></th>
															</tr>
															<tr>
																<th>Required investment amount to achieve this goal (monthly)<br> from now to next 165 months (@12%  return on Investment)</th>
																<th><input type="number" class="form-control goal_edu_req_investment" id="goal_edu_req_investment" name="goal_edu_req_investment"></th>
															</tr>
														</tfoot>
													</table>
													</div>

												<p class="card-description">
													   3rd  Goal: Marriage 
												</p>

													<div class="form-group row">
														<div class="col-md-11 col-11">
															<label for="exampleInputEmail1">Observation </label>
															<textarea rows="3" class="form-control" name="goal_m_observation[]" placeholder="Enter Observation " /></textarea>
														</div>
															
														<div class="col-md-1 col-1">
															<label><br></label><br>
															<button type="button" id="add_m_observation"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_m_observation" id="hd" value="1">
													<div id="next_m_observation"></div>

													<div class="form-group row">
													   	<div class="col-md-11 col-11">
															<label >Analysis</label>
															<textarea rows="3" class="form-control" name="goal_m_analysis[]" placeholder="Enter Analysis" /></textarea>
														</div>
														
														<div class="col-md-1 col-1">
															<label ><br></label><br>
															<button type="button" id="add_m_analysis"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_m_analysis" id="hd" value="1">
													<div id="next_m_analysis"></div>

													<div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
															<tr>
																<td>Description</td>
																<td>Goal Amount (In 2021 )</td>
																<td>Goal Amount (In 2035 )</td>
																<td></td>
															</tr>
														</thead>
														<tbody id="next_m_analysis2">
															<tr>
																<td> 
																	<input type="text" class="form-control" name="goal_m_a_desc[]" />
																</td>
																<td> 
																	<input type="number" class="form-control goal_m_amount" id="goal_m_amount_1" name="goal_m_amount[]"/>
																</td>
																<td> 
																	<input type="number" class="form-control goal_m_f_amount" id="goal_m_f_amount_1" name="goal_m_f_amount[]" value="0" />
																</td>
																<td> 
																	<button type="button" id="add_m_analysis2"  name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>
															<input type="hidden" name="serial[]" class="sl_m_analysis2" id="hd" value="1">
														</tbody>
													</table>
													</div>

													<div class="form-group row">
													    <div class="col-md-11">
															<label for="exampleInputEmail1">Recommendation</label>
															<textarea rows="3" class="form-control" name="goal_m_recommendation[]" placeholder="Enter Recommendation" /></textarea>
														</div>
													</div>

													<div class="form-group row">
													   	<div class="col-md-11 col-11">
															<label>Funding available towards goal</label>
															<textarea rows="3" class="form-control" name="goal_m_fund[]" placeholder="Enter Funding available towards goal" /></textarea>
														</div>
														
														<div class="col-md-1 col-1">
															<label ><br></label><br>
															<button type="button" id="add_m_f_a_t_g"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_m_f_a_t_g" id="hd" value="1">
													<div id="next_m_f_a_t_g"></div>
													
													<div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
															<tr>
																<td>Description</td>
																<td>Amount In Rs.</td>
																<td></td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th>Required amount in begin of 2035</th>
																<th><input type="number" class="form-control goal_m_req_amt" id="goal_m_req_amt" name="goal_m_req_amt" onchange="get_m_rem_fund()"></th>
															</tr>
															<tr>
																<th>Less: All available fund at this time</th>
															</tr>
														</tbody>
														<tbody id="next_m_f_g">
															<tr>
																<td> 
																	<input type="text" class="form-control" name="goal_m_f_g_desc[]" />
																</td>
																<td> 
																	<input type="number" class="form-control goal_m_f_g_amount" id="goal_m_f_g_amount_1" name="goal_m_f_g_amount[]" value="0" onchange="get_m_rem_fund()"/>
																</td>
																<td> 
																	<button type="button" id="add_m_f_g"  name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>

															<input type="hidden" name="serial[]" class="sl_m_f_g" id="hd" value="1">				
														</tbody>
														<tfoot>
															<tr>
																<th>Remaining fund to arrange </th>
																<th><input type="number" class="form-control goal_m_rem_fund" id="goal_m_rem_fund" name="goal_m_rem_fund" value="0"></th>
															</tr>
															<tr>
																<th>	Required investment amount to achieve this goal (monthly)<br> from now to next 167 months (@8%  return on Investment<br> compounded quarterly)</th>
																<th><input type="number" class="form-control goal_m_req_investment" id="goal_m_req_investment" name="goal_m_req_investment"></th>
															</tr>
														</tfoot>
													</table>
													
													</div>

													<!-- <div class="form-group">
														<div class="row">
															<div class="col-5 ">
																<label>					
																	Required investment amount to achieve this goal (monthly) from now to next 167 months (@8%  return on Investment compounded quarterly)
																</label>
															</div>
															<div class="col ml-5">
																<input type="text" name="" class="col-5">
															</div>
														</div>
													</div> -->

												<p class="card-description">
													   4th  Goal: Charity & Gifting
												</p>

													<div class="form-group row">
														<div class="col-md-11 col-11">
															<label for="exampleInputEmail1"> Charity & Gifting </label>
															<textarea rows="3" class="form-control" name="goal_c_gift[]" 
															 placeholder="Enter Charity & Gifting " /></textarea>
														</div>
															
														<div class="col-md-1 col-1">
															<label><br></label><br>
															<button type="button" id="add_c_gift"  name="addmore" class="btn btn-primary btn-sm">+</button>
														</div>
													</div>
													<input type="hidden" name="serial[]" class="sl_c_gift" id="hd" value="1">
													<div id="next_c_gift"></div>

													<div class="form-group row ">
													    <div class="col-md-11">
															<label for="exampleInputEmail1">Analysis</label>
															<textarea rows="3" class="form-control mb-5" name="goal_c_analysis" placeholder="Enter Analysis" /></textarea>
														</div>
													</div>

											</section>

											<h3>Funding For Goals</h3>
											<section>
                        <!-- <h3>Profile</h3> -->
												<p class="card-description">
												   Allocation of Fund from Annual Income Surplus
												</p>

												<div class="form-group table-responsive">
											    <table id="myTable" class="table table-borderless">
											     	<thead>
														<tr>
															<td>Description</td>
															<td>Annual</td>
															<td>Monthly</td>
															<td></td>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td> 
																Monthly Income Surplus 
																<!-- <input type="text" class="form-control" name="f_desc[]" /> -->
															</td>
															<td> 
																<input type="number" class="form-control annual_income_surplus" id="annual_income_surplus" name="annual_income_surplus" value="0" onchange="get_monthly_income_surplus()" />
															</td>
															<td> 
																<input type="number" class="form-control monthly_income_surplus" id="monthly_income_surplus" name="monthly_income_surplus" value="0" readonly />
															</td>
														
															<td> 
																<!-- <button type="button" id="add_goals"  name="addmore" class="btn btn-primary btn-sm">+</button> -->
															</td>
														</tr>
													</tbody>
												</table>
												<table class="table table-borderless">
													<tbody id="next_goals">
														<tr class="sl_f_f_goals" id="dts_fund_goals_1">
															<th>Less:Allocation of Funds</th>
														</tr>
														<tr>
															<td> 
																<input type="text" class="form-control" name="fund_description[]" />
															</td>
															<td> 
																<input type="number" class="form-control annual_fund" id="annual_fund_1" name="annual_fund[]" value="0" readonly />
															</td>
															<td> 
																<input type="number" class="form-control monthly_fund" id="monthly_fund_1" name="monthly_fund[]" value="0" onchange="get_annual_allocation_fund(1)" />
															</td>
														
															<td> 
																<button type="button" id="add_goals" name="addmore" class="btn btn-primary btn-sm">+</button>
															</td>
														</tr>
														<input type="hidden" name="serial[]" class="sl_f_f_goals1" id="hd" value="1">
													</tbody>
													<tfoot>
														<tr>
															<th>Total  Allocated Fund for goals</th>
															<th><input type="text" class="form-control" id="total_annual_fund" name="total_annual_fund" value="0" readonly></th>
															<th><input type="text" class="form-control" id="total_monthly_fund" name="total_monthly_fund" value="0" readonly></th>
														</tr>
														<tr>
															<th>Access Funds</th>
															<th><input type="text" class="form-control" id="access_annual_fund" name="access_annual_fund" value="0" readonly></th>
															<th><input type="text" class="form-control" id="access_monthly_fund" name="access_monthly_fund" value="0" readonly></th>
														</tr>
														
													</tfoot>
												</table>
												
											</div>
												<!-- <div class="form-group">
													<div class="row">
														<div class="col">
															<label>
																Total  Allocated Fund for goals
															</label>
														</div>
														<div class="col">
															<input type="text" name="" class="col-5">
														</div>
														<div class="col">
															<input type="text" name="" class="col-5">
														</div>
													</div>

													<div class="row">
														<div class="col">
															<label>
																Access Funds
															</label>
														</div>
														<div class="col">
															<input type="text" name="" class="col-5">
														</div>
														<div class="col">
															<input type="text" name="" class="col-5">
														</div>
													</div>
												</div> -->	
															                				                      
											</section>

											<h3>Disclaimer</h3>

											<section>
											                        <!-- <h3>Profile</h3> -->
											    	<p class="card-description">
													Disclaimer
												</p>
													   
												<div class="row">
													<div class="col">
												    		<p>
															This wealth plan is based on information detailed in your personal Client Information and Investment Profile Questionnaire and personal discussions with you. A copy of your Questionnaire is available on request. You must read the information contained in the Questionnaire and in this wealth plan carefully. If you believe that any relevant information may have been overlooked or misinterpreted, please contact us before proceeding with the implementation of the plan. We have relied on information supplied to us by you, which, we have assumed to be correct. No responsibility can be accepted if the information that you have provided is incorrect or inaccurate. This plan is prepared solely for the use of the client to whom it is addressed.
														</p>	
														<hr/>
														<p>
															This wealth plan is a forward-looking document. The words "forecast", "anticipate", "estimate", "project", "intend", "expect", "should", "believe", and similar expressions are intended to identify forward-looking statements. These forward-looking statements involve, and are subject to known and unknown risks, uncertainties and other factors, which could cause actual results, performance or achievements to differ from the future results, performance or achievements expressed or implied by such forward-looking statements. All forward-looking statements attributable to APS herein are expressly qualified in their entirety by the above mentioned cautionary statement. APS does not accept any direct or indirect liability for any results, performance or achievements that differ from results, performance or achievements implied by such forward-looking statements. 
														</p>	
														<hr/>
														<p>
															We do not promise that the investments you make based on this plan will be profitable. The investments are subject to various market, currency, economic, political and business risks. We will not be liable for any losses that may be caused directly or indirectly by circumstances beyond our reasonable control or on account of our good faith decisions or actions. This document does not constitute an offer to sell or a solicitation of an offer to buy any security or other financial product, which may be referred to herein. This wealth plan is based on your current situation and goals, which will change with the passage of time and your age. Any material change in your financial situation will necessarily render the contents of the plan out of date. Material changes refer to change in income/salary levels, assets acquired, liabilities incurred, change in number of dependants, health condition, or the passage of time of more than 12 months or the effect of inflation or deflation. We strongly recommend that a) you review this plan periodically to ensure that your plan's actual performance is consistent in meeting your goals, and b) you update your plan annually to ensure that your plan is updated for your changing situation and goals. 
														</p>


													</div>
												</div>	

											</section>

											<h3>Annexure 1</h3>
											<section>
                        <!-- <h3>Profile</h3> -->

													<div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
															<tr>
																<td>Proposer</td>
																<td>Insurer </td>
																<td>Base Policy</td>
																<td>Term</td>
																<td>Sum Assured</td>
																<td>Annual Premium</td>
																<td>Year of Commencement</td>
																<td></td>
															</tr>
														</thead>
														<thead>
															<tr>
																<td>Nominee </td>
																<td></td>
																<td>Type</td>
																<td>PPT</td>
																<td>Guaranteed</td>
																<td>Mode of Payment</td>
																<td>Year of Maturity</td>
																<td></td>
															</tr>
														</thead>
														<tbody id="next_annexure1">
															<tr>
																<td> 
																	<input type="text" class="form-control p_nominee" id="p_nominee_1" name="p_nominee[]" />
																</td>
																<td> 
																	<input type="number" class="form-control insurer" id="insurer_1" name="insurer[]"/>
																</td>
																<td> 
																	<input type="number" class="form-control b_p_type" id="b_p_type_1" name="b_p_type[]"/>
																</td>

																<td> 
																	<input type="number" class="form-control" name="t_ppt[]"/>
																</td>
																<td> 
																	<input type="number" class="form-control" name="s_a_guaranteed[]"/>
																</td>
																<td> 
																	<input type="number" class="form-control" name="m_of_payment[]"/>
																</td>
																<td> 
																	<input type="number" class="form-control" name="y_of_maturity[]"/>
																</td>
																<td> 
																	<button type="button" id="add_annexure1"  name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>
															<input type="hidden" name="serial[]" class="sl_f_f_annexure1" id="hd" value="1">
														</tbody>
													</table>
													</div>
													
																                				                      
											</section>

											<h3>Annexure 2</h3>
											<section>
                        <!-- <h3>Profile</h3> -->

													<p class="card-description">
													   Insurance Need by "Income Replacement Method"
													</p>

													<div class="form-group table-responsive">
												    <table id="myTable" class="table table-borderless">
												     	<thead>
															<tr>
																<td>Details</td>
																<td>Amount </td>
																<td></td>
															</tr>
														</thead>
														
														<tbody id="next_annexure2">
															<tr>
																<td> 
																	<input type="text" class="form-control a_detail" id="a_detail_1" name="a_detail[]" />
																</td>
																<td> 
																	<input type="number" class="form-control a_amount" id="a_amount_1" name="a_amount[]"/>
																</td>
																<td> 
																	<button type="button" id="add_annexure2"  name="addmore" class="btn btn-primary btn-sm">+</button>
																</td>
															</tr>
															<input type="hidden" name="serial[]" class="sl_f_f_annexure2" id="hd" value="1">
														</tbody>
														<tfoot>
															<tr>
																<th>By using above details Present Value of  Insurance cover is </th>
																<td>
																	<input type="number" class="form-control present_value" id="present_value" name="present_value" value="0" onchange="get_additional_insurance()">
																</td>
															</tr>
															<tr>
																<td><b>Less </b>: present Insurance cover</td>
																<td>
																	<input type="number" class="form-control less_present_value" id="less_present_value" name="less_present_value" value="0" onchange="get_additional_insurance()">
																</td>
															</tr>
															<tr>
																<th>Additional Insurance required</th>
																<th>
																	<input type="number" class="form-control additional_insurance" id="additional_insurance" name="additional_insurance" >
																</th>
															</tr>
														</tfoot>
													</table>	
													</div>
													<!-- <div class="form-group">
														<div class="row">
															<div class="col">
																<label>
																	Additional Insurance required
																</label>
															</div>
															<div class="col">
																<input type="text" class="form-control" name="" >
															</div>
														</div>

													</div> -->
														                				                      
											</section>
                      <!-- <h3>Comments</h3>
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
  //$("#example-form").validate();
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

  var verticalForm = $("#example-vertical-wizard");
  verticalForm.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
    onFinished: function(event, currentIndex) {
      // alert("Submitted!");
      verticalForm.submit();

    }
  });
})(jQuery);
</script>

<!-- financial goal tab -->
<script type="text/javascript">
	$('#add_financial_goal').click(function(){
 
    var length = $('.sl_financial_goal').length;
    var i   = parseInt(length)+parseInt(1);
    // var newrow = $('#next_financial_goal').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_financial_goal" value="'+i+'"></div><div class="form-group row dts"><div class="col-md-2"><label for="exampleInputEmail1">Description</label><input type="text"  class="form-control" name="g_dsc[]" id="g_dsc" placeholder="Enter Description" autofocus="" tabindex="1"></div><div class="col-md-2"><label for="exampleInputPassword1">Frequency</label><input type="number" class="form-control"  name="g_freq[]" id="g_freq" placeholder="Enter Frequency" tabindex="2"></div><div class="col-md-2"><label for="exampleInputPassword1">Goal Rs</label><input type="text" class="form-control" name="g_value[]" id="g_value" placeholder="Enter Goal Rs." tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Inflation Rate</label><input type="number" class="form-control" name="g_Inflation[]" id="g_Inflation" placeholder="Enter Inflation Rate" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Start Year</label><input type="text" class="form-control" name="g_st_year[]" id="g_st_year" placeholder="Enter Start Year" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">End Year</label><input type="text" class="form-control" name="g_end_year[]" id="g_end_year" placeholder="Enter End Year" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Priority</label><input type="text" class="form-control" name="g_priority[]" id="g_priority" placeholder="Enter Priority" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1"><br></label><br><button type="button"   name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></div></div>');
    
    var newrow = $('#next_financial_goal').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_financial_goal" value="'+i+'"></div><td><input type="text" class="form-control" name="g_dsc[]" id="g_dsc" /></td><td><input type="text" class="form-control" name="g_freq[]" id="g_freq"/></td><td> <input type="number" class="form-control" name="g_value[]" id="g_value" /></td><td><input type="number" class="form-control" name="g_Inflation[]" id="g_Inflation"/></td><td><input type="text" class="form-control text-center" name="g_st_year[]" id="g_st_year" /></td><td>   <input type="text" class="form-control text-center" name="g_end_year[]" id="g_end_year" /> </td><td> <input type="text" class="form-control" name="g_priority[]" id="g_priority" ></td><td> <button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');


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

<!-- net worth tab  start-->
<script type="text/javascript">

	function get_assets_amount() 
	{
		// body...
		var sum_amount = 0;
    $('.assets_amount').each(function(){
      sum_amount += +$(this).val();
      // alert(sum_amount);
      //$('#final_total').html(sum_amount);
      $('#assets_total_amount').val(sum_amount);
    })
    total_assets();
	}

	function get_per_assets() 
	{
		// body...
		var total_per_assets = 0;
		var total_assets = $('#assets_total_amount').val();
		var all_assets_total_amount = $('#all_assets_total_amount').val();

		total_per_assets = (parseInt(total_assets)/parseInt(all_assets_total_amount))*100;
		$('#assets_total_per_amount').val(total_per_assets);
	}
	function get_financial_assets_amount() 
	{
		// body...
		var sum_amount = 0;
    $('.financial_assets_amount').each(function(){
      sum_amount += +$(this).val();
     // alert(sum_amount);
      //$('#final_total').html(sum_amount);
      $('#financial_assets_total_amount').val(sum_amount);
    })
    total_assets();
	}
	function get_per_financial_assets() 
	{
		// body...
		var total_per_financial_assets = 0;
		var total_financial_assets = $('#financial_assets_total_amount').val();
		var all_assets_total_amount = $('#all_assets_total_amount').val();

		total_per_financial_assets = (parseInt(total_financial_assets)/parseInt(all_assets_total_amount))*100;
		$('#financial_assets_total_per_amount').val(total_per_financial_assets);
	}

	function get_tangible_assets_amount() 
	{
		// body...
		var sum_amount = 0;
    $('.tangible_assets_amount').each(function(){
      sum_amount += +$(this).val();
     // alert(sum_amount);
      //$('#final_total').html(sum_amount);
      $('#tangible_assets_total_amount').val(sum_amount);
    })
    total_assets();
	}
	function get_per_tangible_assets() 
	{
		// body...
		var total_per_tangible_assets = 0;
		var total_tangible_assets = $('#tangible_assets_total_amount').val();
		var all_assets_total_amount = $('#all_assets_total_amount').val();

		total_per_tangible_assets = (parseInt(total_tangible_assets)/parseInt(all_assets_total_amount))*100;
		$('#tangible_assets_total_per_amount').val(total_per_tangible_assets);
	}

	function get_personal_assets_amount() 
	{
		// body...
		var sum_amount = 0;
    $('.personal_assets_amount').each(function(){
      sum_amount += +$(this).val();
     // alert(sum_amount);
      //$('#final_total').html(sum_amount);
      $('#personal_assets_total_amount').val(sum_amount);
    })
    total_assets();
	}
	function get_per_personal_assets() 
	{
		// body...
		var total_per_personal_assets = 0;
		var total_personal_assets = $('#personal_assets_total_amount').val();
		var all_assets_total_amount = $('#all_assets_total_amount').val();

		total_per_personal_assets = (parseInt(total_personal_assets)/parseInt(all_assets_total_amount))*100;
		$('#personal_assets_total_per_amount').val(total_per_personal_assets);
	}

	function get_retirement_assets_amount() 
	{

		var sum_amount = 0;
    $('.retirement_assets_amount').each(function(){
      sum_amount += +$(this).val();
     // alert(sum_amount);
      //$('#final_total').html(sum_amount);
      $('#retirement_assets_total_amount').val(sum_amount);
    })


		var retirement_assets_amount = document.querySelectorAll('.retirement_assets_amount');
		var retirement_assets_per_amount = document.querySelectorAll('.retirement_assets_per_amount');
		for(var i=0;i<retirement_assets_per_amount.length;i++)
		{
			var retirement_assets_amount_1 = retirement_assets_amount[i].value;
			//sum_annual = parseInt(sum_annual)+parseInt(current_annualy_income_1);
			var retirement_per_assets = (parseInt(retirement_assets_amount_1)/parseInt(sum_amount))*100;
			$('#'+retirement_assets_per_amount[i].id).val(retirement_per_assets);

		}
		// body...
		
    total_assets();
	}	
	function get_per_retirement_assets() 
	{
		// body...
		var total_per_retirement_assets = 0;
		var total_retirement_assets = $('#retirement_assets_total_amount').val();
		var all_assets_total_amount = $('#all_assets_total_amount').val();

		total_per_retirement_assets = (parseInt(total_retirement_assets)/parseInt(all_assets_total_amount))*100;
		$('#retirement_assets_total_per_amount').val(total_per_retirement_assets);
	}

	function total_assets()
	{

		var all_assets_total_amount = 0;
		var assets = $('#assets_total_amount').val();
		var financial_assets = $('#financial_assets_total_amount').val();
		var tangible_assets = $('#tangible_assets_total_amount').val();
		var personal_assets = $('#personal_assets_total_amount').val();
		var retirement_assets = $('#retirement_assets_total_amount').val();

		all_assets_total_amount = parseInt(assets)+parseInt(financial_assets)+parseInt(tangible_assets)+parseInt(personal_assets)+parseInt(retirement_assets);
		//alert(all_assets_total_amount);
		$('#all_assets_total_amount').val(all_assets_total_amount);

		get_per_assets();
		get_per_financial_assets(); 
		get_per_tangible_assets();
		get_per_personal_assets();
		get_per_retirement_assets(); 
		total_all_per_assets(); 
		total_per_liabilities();
		total_net_worth();
		total_per_net_worth();
	}
	function total_all_per_assets()
	{
		var total_all_per_assets = 0;
		var assets = $('#assets_total_per_amount').val();
		var financial_assets = $('#financial_assets_total_per_amount').val();
		var tangible_assets = $('#tangible_assets_total_per_amount').val();
		var personal_assets = $('#personal_assets_total_per_amount').val();
		var retirement_assets = $('#retirement_assets_total_per_amount').val();

		total_all_per_assets = parseFloat(assets)+parseFloat(financial_assets)+parseFloat(tangible_assets)+parseFloat(personal_assets)+parseFloat(retirement_assets);
		//alert(total_all_per_assets);
		$('#all_assets_total_per_amount').val(total_all_per_assets);
	}

	function get_liabilities_amount() 
	{
		// body...
		var sum_amount = 0;
    $('.liabilities_amount').each(function(){
      sum_amount += +$(this).val();
     // alert(sum_amount);
      //$('#final_total').html(sum_amount);
      $('#liabilities_total_amount').val(sum_amount);
    })
    total_net_worth();
    total_all_per_assets();
    total_per_liabilities();
	}

	function total_per_liabilities()
	{
		var liabilities_per_ass_total = 0;
		var all_assets_total_amount = $('#all_assets_total_amount').val();
		var total_liabilities = $('#liabilities_total_amount').val();

		liabilities_per_ass_total = (parseInt(total_liabilities)/parseInt(all_assets_total_amount))*100;
		$('#liabilities_total_per_amount').val(liabilities_per_ass_total);
	}

	function total_net_worth()
	{
		var total_net_worth = 0;
		var all_assets_total_amount = $('#all_assets_total_amount').val();
		var total_liabilities = $('#liabilities_total_amount').val();

		total_net_worth = parseInt(all_assets_total_amount)-parseInt(total_liabilities);
		$('#net_worth_total_amount').val(total_net_worth);
		total_per_net_worth();
	}

	function total_per_net_worth()
	{
		var net_worth_total_per_amount = 0;
		var all_assets_total_amount = $('#all_assets_total_amount').val();
		var net_worth_total_amount = $('#net_worth_total_amount').val();

		net_worth_total_per_amount = (parseInt(net_worth_total_amount)/parseInt(all_assets_total_amount))*100;
		$('#net_worth_total_per_amount').val(net_worth_total_per_amount);
	}

	$('#add_assets').click(function(){
   
    var length = $('.sl_assets').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_assets').append('<div class="row dts_assets"><div class="col-md-5 col-5"><div class="form-group"><input type="hidden" name="serial[]" class="sl_assets" value="'+i+'"><input type="text" class="form-control" id="assets_name_'+i+'" name="assets_name[]"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control assets_amount" id="assets_amount_'+i+'" name="assets_amount[]" value="0" onchange="get_assets_amount()"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control assets_per_amount" id="assets_per_amount" name="assets_per_amount[]" value="0" /></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="add_assets"  name="addmore" class="btn btn-danger btn-sm btnAssetsRemove">-</button></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnAssetsRemove',function() {
       $(this).closest('.dts_assets').remove();
       get_assets_amount();
  });

  $('#add_financial_assets').click(function(){
   
    var length = $('.sl_financial_assets').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_financial_assets').append('<div class="row dts_financial_assets"><div class="col-md-5 col-5"><div class="form-group"><input type="hidden" name="serial[]" class="sl_financial_assets" value="'+i+'"><input type="text" class="form-control" id="	financial_assets_name_'+i+'" name="financial_assets_name[]"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control financial_assets_amount" id="financial_assets_amount_'+i+'" name="financial_assets_amount[]" value="0" onchange="get_financial_assets_amount()"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control financial_assets_per_amount" id="financial_assets_per_amount" name="financial_assets_per_amount[]" value="0"/></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="add_financial_assets" name="addmore" class="btn btn-danger btn-sm btnFinancialAssetsRemove">-</button></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnFinancialAssetsRemove',function() {
       $(this).closest('.dts_financial_assets').remove();
       get_financial_assets_amount(); 
  });

    $('#add_tangible_assets').click(function(){
   
    var length = $('.sl_tangible_assets').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_tangible_assets').append('<div class="row dts_tangible_assets"><div class="col-md-5 col-5"><div class="form-group"><input type="hidden" name="serial[]" class="sl_tangible_assets" value="'+i+'"><input type="text" class="form-control" id="tangible_assets_name_'+i+'" name="tangible_assets_name[]"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control tangible_assets_amount" id="tangible_assets_amount_'+i+'" name="tangible_assets_amount[]" value="0" onchange="get_tangible_assets_amount()"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control tangible_assets_per_amount" id="tangible_assets_per_amount" name="tangible_assets_per_amount[]" value="0"/></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="add_tangible_assets"  name="addmore" class="btn btn-danger btn-sm btnTangibleAssetsRemove">-</button></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnTangibleAssetsRemove',function() {
       $(this).closest('.dts_tangible_assets').remove();
       get_tangible_assets_amount(); 
  });

  $('#add_personal_assets').click(function(){
   
    var length = $('.sl_personal_assets').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_personal_assets').append('<div class="row dts_personal_assets"><div class="col-md-5 col-5"><div class="form-group"><input type="hidden" name="serial[]" class="sl_personal_assets" value="'+i+'"><input type="text" class="form-control" id="personal_assets_name_'+i+'" name="personal_assets_name[]"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control personal_assets_amount" id="personal_assets_amount_'+i+'" name="personal_assets_amount[]" value="0" onchange="get_personal_assets_amount()"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control personal_assets_per_amount" id="personal_assets_per_amount" name="personal_assets_per_amount[]" value="0"/></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="add_personal_assets"  name="addmore" class="btn btn-danger btn-sm btnPersonalAssetsRemove">-</button></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnPersonalAssetsRemove',function() {
       $(this).closest('.dts_personal_assets').remove();
       get_personal_assets_amount(); 
  });

  $('#add_retirement_assets').click(function(){
   
    var length = $('.sl_retirement_assets').length;
    var lastid = $(".sl_retirement_assets:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[2]) + 1;

    // var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_retirement_assets').append('<div class="row dts_retirement_assets" id="retirement_assets_'+i+'"><div class="col-md-5 col-5"><div class="form-group"><input type="hidden" id="retirement_assets_'+i+'" name="serial[]" class="sl_retirement_assets" value="'+i+'"><input type="text" class="form-control" id="retirement_assets_name_'+i+'" name="retirement_assets_name[]"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control retirement_assets_amount" id="retirement_assets_amount_'+i+'" name="retirement_assets_amount[]" value="0" onchange="get_retirement_assets_amount()"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control retirement_assets_per_amount" id="retirement_assets_per_amount_'+i+'" name="retirement_assets_per_amount[]" value="0"/></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="retirement_assets_'+i+'" name="addmore" class="btn btn-danger btn-sm btnRetirementAssetsRemove">-</button></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnRetirementAssetsRemove',function() {
       //$(this).closest('.dts_retirement_assets').remove();
      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];

		  // Remove <div> with id
		  $("#retirement_assets_" + deleteindex).remove();

      get_retirement_assets_amount(); 
  });

  $('#add_liabilities').click(function(){
   
    var length = $('.sl_liabilities').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_liabilities').append('<div class="row dts_liabilities"><div class="col-md-5 col-5"><div class="form-group"><input type="hidden" name="serial[]" class="sl_liabilities" value="'+i+'"><input type="text" class="form-control" id="liabilities_name'+i+'" name="liabilities_name[]"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control liabilities_amount" id="liabilities_amount_'+i+'" name="liabilities_amount[]" value="0" onchange="get_liabilities_amount()"/></div></div><div class="col-md-3 col-3"><div class="form-group"><input type="number" class="form-control liabilities_per_amount" id="liabilities_per_amount" name="liabilities_per_amount[]" value="0"/></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="add_liabilities"  name="addmore" class="btn btn-danger btn-sm btnLiabilitiesRemove">-</button></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnLiabilitiesRemove',function() {
       $(this).closest('.dts_liabilities').remove();
       get_liabilities_amount(); 
  });
</script>
<!-- net worth tab end-->

<!-- cash flow tab start -->
<script type="text/javascript">

	$('#add_income').click(function(){
   
    var length = $('.sl_income').length;
    var lastid = $(".sl_income:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[1]) + 1;
	  // alert(lastid);
	  // alert(i);
    // var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_income').append('<div class="row dts_income" id="dts_income_'+i+'"><div class="col-md-3 col-3"><div class="form-group"><input type="hidden" id="income_'+i+'" name="serial[]" class="sl_income" value="'+i+'"><input type="text" class="form-control" name="income_description[]"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control current_per_income" id="current_per_income_'+i+'" name="current_per_income[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_annualy_income" id="current_annualy_income_'+i+'" name="current_annualy_income[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_monthly_income" id="current_monthly_income_'+i+'" name="current_monthly_income[]" onchange="get_current_annualy_income('+i+')" value="0"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control rec_per_income" id="rec_per_income_'+i+'" name="rec_per_income[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_annualy_income" id="rec_annualy_income_'+i+'" name="rec_annualy_income[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_monthly_income" id="rec_monthly_income_'+i+'" name="rec_monthly_income[]" value="0" onchange="get_rec_annualy_income('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="income_'+i+'" name="addmore" class="btn btn-danger btn-sm btnIncomeRemove">-</button></div></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnIncomeRemove',function() {
      // $(this).closest('.dts_income').remove();

      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[1];

		  // Remove <div> with id
		  $("#dts_income_" + deleteindex).remove();

       get_current_total_monthly_income();
       get_current_total_annualy_income();
       get_rec_total_monthly_income();
       get_rec_total_annualy_income();

       get_current_total_per_expense();
       get_current_total_per_emi();
       get_current_total_per_insurance();
       get_current_total_per_other_exp();
       get_current_total_per_tax();

       get_rec_total_per_expense();
       get_rec_total_per_emi();
       get_rec_total_per_insurance();
       get_rec_total_per_other_exp();
       get_rec_total_per_tax();


      get_current_all_annualy_expense();
			get_current_all_monthly_expense();
			get_current_all_per_expense();
			get_rec_all_annualy_expense();
			get_rec_all_monthly_expense();
			get_rec_all_per_expense();

			get_current_annualy_before_saving();
			get_current_per_before_saving();
			get_current_monthly_before_saving();
			get_rec_per_before_saving();
			get_rec_annualy_before_saving();
			get_rec_monthly_before_saving();

			get_current_annualy_after_saving();
			get_current_per_after_saving();
			get_current_monthly_after_saving();
			
			get_rec_annualy_after_saving();
			get_rec_per_after_saving();
			get_rec_monthly_after_saving();
			
  });

  // income
	function get_current_annualy_income(id) 
	{
		var sum_annual=0;
		var length = $('.sl_income').length;
		
		var current_monthly_income = $('#current_monthly_income_'+id).val();

		var count_annualy_income = current_monthly_income*12;
		$('#current_annualy_income_'+id).val(count_annualy_income);
		
		// var current_total_annualy_income = $('#current_total_annualy_income').val(sum_annual);

		var annualy_income = document.querySelectorAll('.current_annualy_income');
		var per_income = document.querySelectorAll('.current_per_income');
    for(var i = 0; i<annualy_income.length; i++){
          // console.log(annualy_income[i].id);
          // console.log(annualy_income[i].value);

          // console.log(per_income[i].id);
       var current_annualy_income_1 = annualy_income[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(current_annualy_income_1);

    }
		// total annual income
		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var current_annualy_income_1 = $('#current_annualy_income_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(current_annualy_income_1);
		// }

		// for(var i=1;i<=length;i++)
		// {
		// 	var current_annualy_income_1 = $('#current_annualy_income_'+i).val();
		// 	var current_per_income = (parseInt(current_annualy_income_1)/parseInt(sum_annual))*100;
		// 	// alert(current_annualy_income_1);
	 //  	$('#current_per_income_'+i).val(current_per_income);
	  		
		// }
		var current_total_annualy_income = $('#current_total_annualy_income').val(sum_annual);

		var total = (parseInt(sum_annual)/parseInt(sum_annual))*100;
		$('#current_total_per_income').val(total);
		
		get_current_total_monthly_income();
		
		get_current_total_per_expense();
    get_current_total_per_emi();
    get_current_total_per_insurance();
    get_current_total_per_other_exp();
    get_current_total_per_tax();
		get_current_all_per_expense();

		get_current_annualy_before_saving();
		get_current_per_before_saving();
		get_current_monthly_before_saving();

		get_current_annualy_after_saving();
		get_current_per_after_saving();
		get_current_monthly_after_saving();

		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
	}

	function get_current_total_monthly_income()
	{
		var sum_amount =0;
    $('.current_monthly_income').each(function(i){
      sum_amount += +$(this).val();
     //alert($(this).val());
     // alert(i);
      //$('#final_total').html(sum_amount);
      $('#current_total_monthly_income').val(sum_amount);

    })

    // total annual
    var sum_annual=0;
    var annualy_income = document.querySelectorAll('.current_annualy_income');
     for(var i = 0; i<annualy_income.length; i++){
         // console.log(annualy_income[i].id);
          //console.log(annualy_income[i].value);
         // alert(per_income[i].id);

        var current_annualy_income_1 = annualy_income[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(current_annualy_income_1);
    }

    // per income
    var per_income = document.querySelectorAll('.current_per_income');
    for(var i = 0; i<per_income.length; i++){
          //console.log(annualy_income[i].id);
          //console.log(annualy_income[i].value);
          //alert(per_income[i].id);

        var current_annualy_income_1 = annualy_income[i].value;
			//sum_annual = parseInt(sum_annual)+parseInt(current_annualy_income_1);
			var current_per_income = (parseInt(current_annualy_income_1)/parseInt(sum_annual))*100;
			$('#'+per_income[i].id).val(current_per_income);
    }
    
	}
	function get_current_total_annualy_income()
	{
		var sum_amount =0;
    $('.current_annualy_income').each(function(){
      sum_amount += +$(this).val();
     //alert($(this).val());
      //$('#final_total').html(sum_amount);
      $('#current_total_annualy_income').val(sum_amount);

    })
	}

	function get_rec_annualy_income(id) 
	{
		var sum_rec_annual=0;
		var length = $('.sl_income').length;
		
		var rec_monthly_income = $('#rec_monthly_income_'+id).val();

		var count_annualy_income = rec_monthly_income*12;
		$('#rec_annualy_income_'+id).val(count_annualy_income);

		// var rec_annualy_income = document.querySelectorAll('.rec_annualy_income');
		// for(var i=1;i<=rec_annualy_income.length;i++)
		// {
		// 	console.log(rec_annualy_income[i].id);
		// 	// var rec_annualy_income = $('#rec_annualy_income_'+i).val();
		// 	var rec_annualy_income = rec_annualy_income[i].value;
		// 	 // temp_annual = parseInt(temp_annual)+parseInt(rec_annualy_income);
		// 	 sum_rec_annual = parseInt(sum_rec_annual)+parseInt(rec_annualy_income);
		// //	alert("temp:"+temp_annual);
		// 	//alert("sum:"+sum_rec_annual);
		// }

		// var sum_amount =0;
    $('.rec_annualy_income').each(function(){
      sum_rec_annual += +$(this).val();
     //alert($(this).val());
      //$('#final_total').html(sum_rec_annual);
     // $('#current_total_annualy_income').val(sum_rec_annual);

    })

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var rec_annualy_income_1 = $('#rec_annualy_income_'+i).val();
		// 	var rec_per_income = (parseInt(rec_annualy_income_1)/parseInt(sum_rec_annual))*100;
		// 	// alert(rec_annualy_income_1);
	 //  	$('#rec_per_income_'+i).val(rec_per_income);
	  	
		// }
		var rec_total_annualy_income = $('#rec_total_annualy_income').val(sum_rec_annual);

		var total = (parseInt(sum_rec_annual)/parseInt(sum_rec_annual))*100;
		$('#rec_total_per_income').val(total);
		
		get_rec_total_monthly_income();

		get_current_total_per_expense();
    get_current_total_per_emi();
    get_current_total_per_insurance();
    get_current_total_per_other_exp();
    get_current_total_per_tax();
		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		get_rec_all_per_expense();

		get_rec_annualy_before_saving();
		get_rec_per_before_saving();
		get_rec_monthly_before_saving();

		get_rec_annualy_after_saving();
		get_rec_per_after_saving();
		get_rec_monthly_after_saving();

	}

	function get_rec_total_monthly_income()
	{
		var sum_amount =0;
    $('.rec_monthly_income').each(function(){
      sum_amount += +$(this).val();
     //alert($(this).val());
      //$('#final_total').html(sum_amount);
      $('#rec_total_monthly_income').val(sum_amount);

    })

    // total annual
    var sum_annual=0;
    var annualy_income = document.querySelectorAll('.rec_annualy_income');
     for(var i = 0; i<annualy_income.length; i++){
         // console.log(annualy_income[i].id);
          //console.log(annualy_income[i].value);
         // alert(per_income[i].id);

        var rec_annualy_income_1 = annualy_income[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_income_1);
    }

    // per income
    var per_income = document.querySelectorAll('.rec_per_income');
    for(var i = 0; i<per_income.length; i++){
          //console.log(annualy_income[i].id);
          //console.log(annualy_income[i].value);
          //alert(per_income[i].id);

        var rec_annualy_income_1 = annualy_income[i].value;
			//sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_income_1);
			var rec_per_income = (parseInt(rec_annualy_income_1)/parseInt(sum_annual))*100;
			$('#'+per_income[i].id).val(rec_per_income);
    }

	}
	function get_rec_total_annualy_income()
	{
		var sum_amount = 0;
    $('.rec_annualy_income').each(function(){
      sum_amount += +$(this).val();
     //alert($(this).val());
      //$('#final_total').html(sum_amount);
      $('#rec_total_annualy_income').val(sum_amount);

    })
	}

  $('#add_living_expense').click(function(){
   
    var length = $('.sl_living_expense').length;
    var lastid = $(".sl_living_expense:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[2]) + 1;

	  // alert(lastid);
	  // alert(i);
    // var length = $('.sl_living_expense').length;
    // var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_living_expense').append('<div class="row dts_living_expense" id="dts_living_expense_'+i+'"><div class="col-md-3 col-3"><div class="form-group"><input type="hidden" name="serial[]" id="living_expense_'+i+'" class="sl_living_expense" value="'+i+'"><input type="text" class="form-control" name="living_expense_description[]"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control" id="current_per_living_expense" name="current_per_living_expense[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_annualy_living_expense" id="current_annualy_living_expense_'+i+'" name="current_annualy_living_expense[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_monthly_living_expense" id="current_monthly_living_expense_'+i+'" name="current_monthly_living_expense[]" onchange="get_current_annualy_expense('+i+')" value="0"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control" id="rec_per_living_expense_'+i+'" name="rec_per_living_expense[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_annualy_living_expense" id="rec_annualy_living_expense_'+i+'" name="rec_annualy_living_expense[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_monthly_living_expense" id="rec_monthly_living_expense_'+i+'" name="rec_monthly_living_expense[]" value="0" onchange="get_rec_annualy_expense('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="living_expense_'+i+'" name="addmore" class="btn btn-danger btn-sm btnLivingExpenseRemove">-</button></div></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnLivingExpenseRemove',function() {
  	// $('#current_total_monthly_expense').val(0);
       // $(this).closest('.dts_living_expense').remove();

      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];

		  // Remove <div> with id
		  $("#dts_living_expense_" + deleteindex).remove();
       
       get_current_total_monthly_expense();
       get_current_total_annualy_expense();
       get_current_total_per_expense();
       get_rec_total_monthly_expense(); 
       get_rec_total_annualy_expense(); 
       get_rec_total_per_expense();

       get_current_all_annualy_expense();
			get_current_all_monthly_expense();
			get_current_all_per_expense();
			get_rec_all_annualy_expense();
			get_rec_all_monthly_expense();
			get_rec_all_per_expense();

			get_current_annualy_after_saving();
			get_current_per_after_saving();
			get_current_monthly_after_saving();
			
			get_rec_annualy_after_saving();
			get_rec_per_after_saving();
			get_rec_monthly_after_saving();
  });
  // living expense
	
	function get_current_annualy_expense(id)
	{
		//alert(id);
		var sum_annual=0;
		var length = $('.sl_living_expense').length;
		
		var current_monthly_living_expense = $('#current_monthly_living_expense_'+id).val();
		var count_annualy_living_expense = current_monthly_living_expense*12;
		$('#current_annualy_living_expense_'+id).val(count_annualy_living_expense);

		 var annualy_income = document.querySelectorAll('.current_annualy_living_expense');
     for(var i = 0; i<annualy_income.length; i++){
         // console.log(annualy_income[i].id);
          //console.log(annualy_income[i].value);
         // alert(per_income[i].id);

        var rec_annualy_income_1 = annualy_income[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_income_1);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var current_annualy_income_1 = $('#current_annualy_living_expense_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(current_annualy_income_1);
		// }
		var current_total_annualy_income = $('#current_total_annualy_expense').val(sum_annual);

		// var total_annualy_income = $('#current_total_annualy_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_annualy_income))*100;
		// $('#current_total_per_expense').val(total);

		get_current_total_monthly_expense();
		get_current_total_per_expense();
		get_current_all_annualy_expense();
		get_current_all_monthly_expense();
		get_current_all_per_expense();
		// get_rec_all_annualy_expense();
		// get_rec_all_monthly_expense();
		// get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_current_per_after_saving();
		
	}
	function get_current_total_per_expense()
	{

		var current_total_annualy_income = $('#current_total_annualy_income').val();
		var current_total_annualy_expense = $('#current_total_annualy_expense').val();
		// alert("income: "+current_total_annualy_income);
		// alert("expense: "+current_total_annualy_expense);
		var total = (parseInt(current_total_annualy_expense)/parseInt(current_total_annualy_income))*100;
		$('#current_total_per_expense').val(total);
	}
	function get_rec_total_per_expense()
	{
		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_annualy_expense = $('#rec_total_annualy_expense').val();
		// alert("income: "+rec_total_annualy_income);
		// alert("expense: "+rec_total_annualy_expense);
		var total = (parseInt(rec_total_annualy_expense)/parseInt(rec_total_annualy_income))*100;
		$('#rec_total_per_expense').val(total);
	}
	function get_current_total_monthly_expense()
	{
		var sum_amount = 0;var sum_expense = 0;
    $('.current_monthly_living_expense').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_monthly_expense').val(sum_amount);
    })
    get_current_monthly_before_saving();
	}
	function get_current_total_annualy_expense()
	{
		var sum_amount = 0;var sum_expense = 0;
    $('.current_annualy_living_expense').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_annualy_expense').val(sum_amount);
    })
    get_current_annualy_before_saving();
    get_current_per_before_saving();
	}

	function get_rec_annualy_expense(id)
	{
		var sum_annual=0;
		var length = $('.sl_living_expense').length;
		
		var rec_monthly_living_expense = $('#rec_monthly_living_expense_'+id).val();
		var count_annualy_living_expense = rec_monthly_living_expense*12;
		$('#rec_annualy_living_expense_'+id).val(count_annualy_living_expense);

		var annualy_income = document.querySelectorAll('.rec_annualy_living_expense');
    for(var i = 0; i<annualy_income.length; i++){
         // console.log(annualy_income[i].id);
          //console.log(annualy_income[i].value);
         // alert(per_income[i].id);

      var rec_annualy_income_1 = annualy_income[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_income_1);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var rec_annualy_expense_1 = $('#rec_annualy_living_expense_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_expense_1);
		// }
		var rec_total_annualy_expense = $('#rec_total_annualy_expense').val(sum_annual);

		// var total_annualy_expense = $('#rec_total_annualy_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_annualy_expense))*100;
		// $('#rec_total_per_expense').val(total);

		get_rec_total_monthly_expense();
		get_rec_total_per_expense();
		// get_current_all_annualy_expense();
		// get_current_all_monthly_expense();
		// get_current_all_per_expense();
		get_rec_all_annualy_expense();
		get_rec_all_monthly_expense();
		get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();

		get_rec_per_after_saving();
	}
	function get_rec_total_per_expense()
	{
		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_annualy_expense = $('#rec_total_annualy_expense').val();
		// alert("income: "+rec_total_annualy_income);
		// alert("expense: "+rec_total_annualy_expense);
		var total = (parseInt(rec_total_annualy_expense)/parseInt(rec_total_annualy_income))*100;
		$('#rec_total_per_expense').val(total);
	}
	function get_rec_total_monthly_expense()
	{
		var sum_amount = 0;var sum_expense = 0;
    $('.rec_monthly_living_expense').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_monthly_expense').val(sum_amount);
    })
	}
	function get_rec_total_annualy_expense()
	{
		var sum_amount = 0;var sum_expense = 0;
    $('.rec_annualy_living_expense').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_annualy_expense').val(sum_amount);
    })
	}


  $('#add_emi').click(function(){
   
   	var length = $('.sl_emi').length;
    var lastid = $(".sl_emi:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[1]) + 1;

    // var length = $('.sl_emi').length;
    // var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_emi').append('<div class="row dts_emi" id="dts_emi_'+i+'"><div class="col-md-3 col-3"><div class="form-group"><input type="hidden" id="emi_'+i+'" name="serial[]" class="sl_emi" value="'+i+'"><input type="text" class="form-control" name="emi_description[]"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control" id="current_per_emi_'+i+'" name="current_per_emi[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_annualy_emi" id="current_annualy_emi_'+i+'" name="current_annualy_emi[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_monthly_emi" id="current_monthly_emi_'+i+'" name="current_monthly_emi[]" onchange="get_current_annualy_emi('+i+')" value="0"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control" id="rec_per_emi_'+i+'" name="rec_per_emi[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_annualy_emi" id="rec_annualy_emi_'+i+'" name="rec_annualy_emi[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_monthly_emi" id="rec_monthly_emi_'+i+'" name="rec_monthly_emi[]" value="0" onchange="get_rec_annualy_emi('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="emi_'+i+'" name="addmore" class="btn btn-danger btn-sm btnemiRemove">-</button></div></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnemiRemove',function() {
       //$(this).closest('.dts_emi').remove();

      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[1];
      
        // Remove <div> with id
		  $("#dts_emi_" + deleteindex).remove();

       get_current_total_monthly_emi();
       get_current_total_annualy_emi();
       get_current_total_per_emi();
       get_rec_total_monthly_emi(); 
       get_rec_total_annualy_emi(); 
       get_rec_total_per_emi();

      get_current_all_annualy_expense();
			get_current_all_monthly_expense();
			get_current_all_per_expense();
			get_rec_all_annualy_expense();
			get_rec_all_monthly_expense();
			get_rec_all_per_expense();

			get_current_annualy_after_saving();
			get_current_per_after_saving();
			get_current_monthly_after_saving();
			
			get_rec_annualy_after_saving();
			get_rec_per_after_saving();
			get_rec_monthly_after_saving();
  });

  // loan EMI
	function get_current_annualy_emi(id)
	{
		var sum_annual=0;
		var length = $('.sl_emi').length;
		
		var current_monthly_emi = $('#current_monthly_emi_'+id).val();
		var count_annualy_emi = current_monthly_emi*12;
		$('#current_annualy_emi_'+id).val(count_annualy_emi);

		var annualy_emi = document.querySelectorAll('.current_annualy_emi');
    for(var i = 0; i<annualy_emi.length; i++){
         // console.log(annualy_emi[i].id);
          //console.log(annualy_emi[i].value);
         // alert(per_income[i].id);

      var rec_annualy_emi_1 = annualy_emi[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_emi_1);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var current_annualy_emi_1 = $('#current_annualy_emi_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(current_annualy_emi_1);
		// }
		var current_total_annualy_emi = $('#current_total_annualy_emi').val(sum_annual);

		// var total_annualy_income = $('#current_total_annualy_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_annualy_income))*100;
		// $('#current_total_per_expense').val(total);

		get_current_total_monthly_emi();
		get_current_total_per_emi();
		get_current_all_annualy_expense();
		get_current_all_monthly_expense();
		get_current_all_per_expense();
		// get_rec_all_annualy_expense();
		// get_rec_all_monthly_expense();
		// get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_current_per_after_saving();
	}
	function get_current_total_per_emi()
	{

		var current_total_annualy_income = $('#current_total_annualy_income').val();
		var current_total_annualy_emi = $('#current_total_annualy_emi').val();
		// alert("income: "+current_total_annualy_income);
		// alert("emi: "+current_total_annualy_emi);
		var total = (parseInt(current_total_annualy_emi)/parseInt(current_total_annualy_income))*100;
		$('#current_total_per_emi').val(total);
	}
	function get_current_total_monthly_emi()
	{
		var sum_amount = 0;var sum_emi = 0;
    $('.current_monthly_emi').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_monthly_emi').val(sum_amount);
    })
	}
	function get_current_total_annualy_emi()
	{
		var sum_amount = 0;var sum_emi = 0;
    $('.current_annualy_emi').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_annualy_emi').val(sum_amount);
    })
	}

	function get_rec_annualy_emi(id)
	{
		var sum_annual=0;
		var length = $('.sl_emi').length;
		
		var rec_monthly_emi = $('#rec_monthly_emi_'+id).val();
		var count_annualy_emi = rec_monthly_emi*12;
		$('#rec_annualy_emi_'+id).val(count_annualy_emi);

		var annualy_emi = document.querySelectorAll('.rec_annualy_emi');
    for(var i = 0; i<annualy_emi.length; i++){
         // console.log(annualy_emi[i].id);
          //console.log(annualy_emi[i].value);
         // alert(per_income[i].id);

      var rec_annualy_emi_1 = annualy_emi[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_emi_1);
    }
		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var rec_annualy_emi_1 = $('#rec_annualy_emi_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_emi_1);
		// }
		var rec_total_annualy_emi = $('#rec_total_annualy_emi').val(sum_annual);

		// var total_annualy_emi = $('#rec_total_annualy_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_annualy_emi))*100;
		// $('#rec_total_per_emi').val(total);

		get_rec_total_monthly_emi();
		get_rec_total_per_emi();
		// get_current_all_annualy_expense();
		// get_current_all_monthly_expense();
		// get_current_all_per_expense();
		get_rec_all_annualy_expense();
		get_rec_all_monthly_expense();
		get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_rec_per_after_saving();
	}
	function get_rec_total_per_emi()
	{

		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_annualy_emi = $('#rec_total_annualy_emi').val();
		// alert("income: "+rec_total_annualy_income);
		// alert("emi: "+rec_total_annualy_emi);
		var total = (parseInt(rec_total_annualy_emi)/parseInt(rec_total_annualy_income))*100;
		$('#rec_total_per_emi').val(total);
	}
	function get_rec_total_monthly_emi()
	{
		var sum_amount = 0;var sum_emi = 0;
    $('.rec_monthly_emi').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_monthly_emi').val(sum_amount);
    })
	}
	function get_rec_total_annualy_emi()
	{
		var sum_amount = 0;var sum_emi = 0;
    $('.rec_annualy_emi').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_annualy_emi').val(sum_amount);
    })
	}

  $('#add_insurance').click(function(){
   
   	var length = $('.sl_insurance').length;
    var lastid = $(".sl_insurance:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[1]) + 1;

    // var length = $('.sl_insurance').length;
    // var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_insurance').append('<div class="row dts_insurance" id="dts_insurance_'+i+'"><div class="col-md-3 col-3"><div class="form-group"><input type="hidden" name="serial[]" id="insurance_'+i+'" class="sl_insurance" value="'+i+'"><input type="text" class="form-control" name="insurance_description[]"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control" id="current_per_insurance_'+i+'" name="current_per_insurance[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_annualy_insurance" id="current_annualy_insurance_'+i+'" name="current_annualy_insurance[]" value="0" onchange="get_current_monthly_insurance('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_monthly_insurance" id="current_monthly_insurance_'+i+'" name="current_monthly_insurance[]" value="0" readonly></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control" id="rec_per_insurance_'+i+'" name="rec_per_insurance[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_annualy_insurance" id="rec_annualy_insurance_'+i+'" name="rec_annualy_insurance[]" value="0" onchange="get_rec_monthly_insurance('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_monthly_insurance" id="rec_monthly_insurance_'+i+'" name="rec_monthly_insurance[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="insurance_'+i+'" name="addmore" class="btn btn-danger btn-sm btninsuranceRemove">-</button></div></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btninsuranceRemove',function() {
       //$(this).closest('.dts_insurance').remove();

      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[1];
      
        // Remove <div> with id
		  $("#dts_insurance_" + deleteindex).remove();

       get_current_total_monthly_insurance();
       get_current_total_annualy_insurance();
       get_current_total_per_insurance();
       get_rec_total_monthly_insurance(); 
       get_rec_total_annualy_insurance(); 
       get_rec_total_per_insurance();

      get_current_all_annualy_expense();
			get_current_all_monthly_expense();
			get_current_all_per_expense();
			get_rec_all_annualy_expense();
			get_rec_all_monthly_expense();
			get_rec_all_per_expense();

			get_current_annualy_after_saving();
			get_current_per_after_saving();
			get_current_monthly_after_saving();
			
			get_rec_annualy_after_saving();
			get_rec_per_after_saving();
			get_rec_monthly_after_saving();
  });

  // insurance
	
	function get_current_monthly_insurance(id)
	{
		var sum_annual=0;
		var length = $('.sl_insurance').length;
		
		var current_annualy_insurance = $('#current_annualy_insurance_'+id).val();
		var count_monthly_insurance = current_annualy_insurance/12;
		$('#current_monthly_insurance_'+id).val(count_monthly_insurance);

		var monthly_insurance = document.querySelectorAll('.current_monthly_insurance');
    for(var i = 0; i<monthly_insurance.length; i++){
         // console.log(monthly_insurance[i].id);
          //console.log(monthly_insurance[i].value);
         // alert(per_income[i].id);

      var rec_monthly_insurance_1 = monthly_insurance[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_monthly_insurance_1);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var current_monthly_insurance_1 = $('#current_monthly_insurance_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(current_monthly_insurance_1);
		// }
		var current_total_monthly_insurance = $('#current_total_monthly_insurance').val(sum_annual);

		// var total_annualy_income = $('#current_total_annualy_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_annualy_income))*100;
		// $('#current_total_per_expense').val(total);

		get_current_total_annualy_insurance();
		get_current_total_per_insurance();
		get_current_all_annualy_expense();
		get_current_all_monthly_expense();
		get_current_all_per_expense();
		// get_rec_all_annualy_expense();
		// get_rec_all_monthly_expense();
		// get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_current_per_after_saving();
	}
	function get_current_total_per_insurance()
	{

		var current_total_annualy_income = $('#current_total_annualy_income').val();
		var current_total_annualy_insurance = $('#current_total_annualy_insurance').val();
		// alert("income: "+current_total_annualy_income);
		// alert("insurance: "+current_total_annualy_insurance);
		var total = (parseInt(current_total_annualy_insurance)/parseInt(current_total_annualy_income))*100;
		$('#current_total_per_insurance').val(total);
	}
	function get_current_total_annualy_insurance()
	{
		var sum_amount = 0;var sum_insurance = 0;
    $('.current_annualy_insurance').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_annualy_insurance').val(sum_amount);
    })
	}
	function get_current_total_monthly_insurance()
	{
		var sum_amount = 0;var sum_insurance = 0;
    $('.current_monthly_insurance').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_monthly_insurance').val(sum_amount);
    })
	}

	function get_rec_monthly_insurance(id)
	{
		var sum_annual=0;
		var length = $('.sl_insurance').length;
		
		var rec_annualy_insurance = $('#rec_annualy_insurance_'+id).val();
		var count_monthly_insurance = rec_annualy_insurance/12;
		$('#rec_monthly_insurance_'+id).val(count_monthly_insurance);

		var monthly_insurance = document.querySelectorAll('.rec_monthly_insurance');
    for(var i = 0; i<monthly_insurance.length; i++){
         // console.log(monthly_insurance[i].id);
          //console.log(monthly_insurance[i].value);
         // alert(per_income[i].id);

      var rec_monthly_insurance_1 = monthly_insurance[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_monthly_insurance_1);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var rec_monthly_insurance_1 = $('#rec_monthly_insurance_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(rec_monthly_insurance_1);
		// }
		var rec_total_monthly_insurance = $('#rec_total_monthly_insurance').val(sum_annual);

		// var total_monthly_insurance = $('#rec_total_monthly_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_monthly_insurance))*100;
		// $('#rec_total_per_insurance').val(total);

		get_rec_total_annualy_insurance();
		get_rec_total_per_insurance();
		// get_current_all_annualy_expense();
		// get_current_all_monthly_expense();
		// get_current_all_per_expense();
		get_rec_all_annualy_expense();
		get_rec_all_monthly_expense();
		get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_rec_per_after_saving();
	}
	function get_rec_total_per_insurance()
	{

		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_annualy_insurance = $('#rec_total_annualy_insurance').val();
		// alert("income: "+rec_total_annualy_income);
		// alert("insurance: "+rec_total_annualy_insurance);
		var total = (parseInt(rec_total_annualy_insurance)/parseInt(rec_total_annualy_income))*100;
		$('#rec_total_per_insurance').val(total);
	}
	function get_rec_total_annualy_insurance()
	{
		var sum_amount = 0;var sum_insurance = 0;
    $('.rec_annualy_insurance').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_annualy_insurance').val(sum_amount);
    })
	}
	function get_rec_total_monthly_insurance()
	{
		var sum_amount = 0;var sum_insurance = 0;
    $('.rec_monthly_insurance').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_monthly_insurance').val(sum_amount);
    })
	}


  $('#add_other_exp').click(function(){
   
    var length = $('.sl_other_exp').length;
    var lastid = $(".sl_other_exp:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[2]) + 1;

    //var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_other_exp').append('<div class="row dts_other_exp" id="dts_other_exp_'+i+'"><div class="col-md-3 col-3"><div class="form-group"><input type="hidden" id="other_exp_'+i+'" name="serial[]" class="sl_other_exp" value="'+i+'"><input type="text" class="form-control" name="other_exp_description[]"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control current_per_other_exp" id="current_per_other_exp_'+i+'" name="current_per_other_exp[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_annualy_other_exp" id="current_annualy_other_exp_'+i+'" name="current_annualy_other_exp[]" value="0" onchange="get_current_monthly_other_exp('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_monthly_other_exp" id="current_monthly_other_exp_'+i+'" name="current_monthly_other_exp[]" value="0" readonly></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control rec_per_other_exp" id="rec_per_other_exp_'+i+'" name="rec_per_other_exp[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_annualy_other_exp" id="rec_annualy_other_exp_'+i+'" name="rec_annualy_other_exp[]" value="0" onchange="get_rec_monthly_other_exp('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_monthly_other_exp" id="rec_monthly_other_exp_'+i+'" name="rec_monthly_other_exp[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="other_exp_'+i+'" name="addmore" class="btn btn-danger btn-sm btnother_expRemove">-</button></div></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btnother_expRemove',function() {
       //$(this).closest('.dts_other_exp').remove();
       
      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];
      
        // Remove <div> with id
		  $("#dts_other_exp_" + deleteindex).remove();

      get_current_total_monthly_other_exp();
      get_current_total_annualy_other_exp();
      get_current_total_per_other_exp();
      get_rec_total_monthly_other_exp(); 
      get_rec_total_annualy_other_exp(); 
      get_rec_total_per_other_exp();

      get_current_all_annualy_expense();
			get_current_all_monthly_expense();
			get_current_all_per_expense();
			get_rec_all_annualy_expense();
			get_rec_all_monthly_expense();
			get_rec_all_per_expense();

			get_current_annualy_after_saving();
			get_current_per_after_saving();
			get_current_monthly_after_saving();
			
			get_rec_annualy_after_saving();
			get_rec_per_after_saving();
			get_rec_monthly_after_saving();
  });
  // other expenses
	
	function get_current_monthly_other_exp(id)
	{
		var sum_annual=0;
		var length = $('.sl_other_exp').length;
		
		var current_annualy_other_exp = $('#current_annualy_other_exp_'+id).val();
		var count_monthly_other_exp = current_annualy_other_exp/12;
		$('#current_monthly_other_exp_'+id).val(count_monthly_other_exp);

		var monthly_other_exp = document.querySelectorAll('.current_monthly_other_exp');
    for(var i = 0; i<monthly_other_exp.length; i++){
         // console.log(monthly_other_exp[i].id);
          //console.log(monthly_other_exp[i].value);
         // alert(per_income[i].id);

      var rec_monthly_other_exp_1 = monthly_other_exp[i].value;
			sum_annual = parseFloat(sum_annual)+parseFloat(rec_monthly_other_exp_1);
    }
		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var current_monthly_other_exp_1 = $('#current_monthly_other_exp_'+i).val();
		// 	sum_annual = parseFloat(sum_annual)+parseFloat(current_monthly_other_exp_1);
		// }
		var current_total_monthly_other_exp = $('#current_total_monthly_other_exp').val(sum_annual);

		// var total_annualy_income = $('#current_total_annualy_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_annualy_income))*100;
		// $('#current_total_per_expense').val(total);

		get_current_total_annualy_other_exp();
		get_current_total_per_other_exp();

		get_current_all_annualy_expense();
		get_current_all_monthly_expense();
		get_current_all_per_expense();
		// get_rec_all_annualy_expense();
		// get_rec_all_monthly_expense();
		// get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_current_per_after_saving();

	}
	function get_current_total_per_other_exp()
	{

		var current_total_annualy_income = $('#current_total_annualy_income').val();
		var current_total_annualy_other_exp = $('#current_total_annualy_other_exp').val();
		// alert("income: "+current_total_annualy_income);
		// alert("other_exp: "+current_total_annualy_other_exp);
		var total = (parseInt(current_total_annualy_other_exp)/parseInt(current_total_annualy_income))*100;
		$('#current_total_per_other_exp').val(total);
	}
	function get_current_total_annualy_other_exp()
	{
		var sum_amount = 0;var sum_other_exp = 0;
    $('.current_annualy_other_exp').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_annualy_other_exp').val(sum_amount);
    })
	}
	function get_current_total_monthly_other_exp()
	{
		var sum_amount = 0;var sum_other_exp = 0;
    $('.current_monthly_other_exp').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_monthly_other_exp').val(sum_amount);
    })
	}

	function get_rec_monthly_other_exp(id)
	{
		var sum_annual=0;
		var length = $('.sl_other_exp').length;
		
		var rec_annualy_other_exp = $('#rec_annualy_other_exp_'+id).val();
		var count_monthly_other_exp = rec_annualy_other_exp/12;
		$('#rec_monthly_other_exp_'+id).val(count_monthly_other_exp);

		var monthly_other_exp = document.querySelectorAll('.rec_monthly_other_exp');
    for(var i = 0; i<monthly_other_exp.length; i++){
         // console.log(monthly_other_exp[i].id);
          //console.log(monthly_other_exp[i].value);
         // alert(per_income[i].id);

      var rec_monthly_other_exp_1 = monthly_other_exp[i].value;
			sum_annual = parseFloat(sum_annual)+parseFloat(rec_monthly_other_exp_1);
    }
		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var rec_monthly_other_exp_1 = $('#rec_monthly_other_exp_'+i).val();
		// 	sum_annual = parseFloat(sum_annual)+parseFloat(rec_monthly_other_exp_1);
		// }
		var rec_total_monthly_other_exp = $('#rec_total_monthly_other_exp').val(sum_annual);

		// var total_monthly_other_exp = $('#rec_total_monthly_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_monthly_other_exp))*100;
		// $('#rec_total_per_other_exp').val(total);

		get_rec_total_annualy_other_exp();
		get_rec_total_per_other_exp();
		// get_current_all_annualy_expense();
		// get_current_all_monthly_expense();
		// get_current_all_per_expense();
		get_rec_all_annualy_expense();
		get_rec_all_monthly_expense();
		get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_rec_per_after_saving();
	}
	function get_rec_total_per_other_exp()
	{

		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_annualy_other_exp = $('#rec_total_annualy_other_exp').val();
		// alert("income: "+rec_total_annualy_income);
		// alert("other_exp: "+rec_total_annualy_other_exp);
		var total = (parseInt(rec_total_annualy_other_exp)/parseInt(rec_total_annualy_income))*100;
		$('#rec_total_per_other_exp').val(total);
	}
	function get_rec_total_annualy_other_exp()
	{
		var sum_amount = 0;var sum_other_exp = 0;
    $('.rec_annualy_other_exp').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_annualy_other_exp').val(sum_amount);
    })
	}
	function get_rec_total_monthly_other_exp()
	{
		var sum_amount = 0;var sum_other_exp = 0;
    $('.rec_monthly_other_exp').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_monthly_other_exp').val(sum_amount);
    })
	}

  $('#add_tax').click(function(){
   
    var length = $('.sl_tax').length;
    var lastid = $(".sl_tax:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[1]) + 1;

    // var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_tax').append('<div class="row dts_tax" id="dts_tax_'+i+'"><div class="col-md-3 col-3"><div class="form-group"><input type="hidden" id="tax_'+i+'" name="serial[]" class="sl_tax" value="'+i+'"><input type="text" class="form-control" name="tax_description[]"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control current_per_tax" id="current_per_tax_'+i+'" name="current_per_tax[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_annualy_tax" id="current_annualy_tax_'+i+'" name="current_annualy_tax[]" value="0" onchange="get_current_monthly_tax('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_monthly_tax" id="current_monthly_tax_'+i+'" name="current_monthly_tax[]" value="0" readonly></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control rec_per_tax" id="rec_per_tax_'+i+'" name="rec_per_tax[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_annualy_tax" id="rec_annualy_tax_'+i+'" name="rec_annualy_tax[]" value="0" onchange="get_rec_monthly_tax('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_monthly_tax" id="rec_monthly_tax_'+i+'" name="rec_monthly_tax[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="tax_'+i+'" name="addmore" class="btn btn-danger btn-sm btntaxRemove">-</button></div></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btntaxRemove',function() {
      // $(this).closest('.dts_tax').remove();

      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[1];
      
        // Remove <div> with id
		  $("#dts_tax_" + deleteindex).remove();
       
      get_current_total_monthly_tax();
      get_current_total_annualy_tax();
      get_current_total_per_tax();
      get_rec_total_monthly_tax(); 
      get_rec_total_annualy_tax(); 
      get_rec_total_per_tax();

      get_current_all_annualy_expense();
			get_current_all_monthly_expense();
			get_current_all_per_expense();
			get_rec_all_annualy_expense();
			get_rec_all_monthly_expense();
			get_rec_all_per_expense();

			get_current_annualy_after_saving();
			get_current_per_after_saving();
			get_current_monthly_after_saving();
			
			get_rec_annualy_after_saving();
			get_rec_per_after_saving();
			get_rec_monthly_after_saving();
  });

  // taxes
	function get_current_monthly_tax(id)
	{
		var sum_annual=0;
		var length = $('.sl_tax').length;
		
		var current_annualy_tax = $('#current_annualy_tax_'+id).val();
		var count_monthly_tax = current_annualy_tax/12;
		$('#current_monthly_tax_'+id).val(count_monthly_tax);

		var monthly_tax = document.querySelectorAll('.current_monthly_tax');
    for(var i = 0; i<monthly_tax.length; i++){
         // console.log(monthly_tax[i].id);
          //console.log(monthly_tax[i].value);
         // alert(per_income[i].id);

      var rec_monthly_tax_1 = monthly_tax[i].value;
			sum_annual = parseFloat(sum_annual)+parseFloat(rec_monthly_tax_1);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var current_monthly_tax_1 = $('#current_monthly_tax_'+i).val();
		// 	sum_annual = parseFloat(sum_annual)+parseFloat(current_monthly_tax_1);
		// }
		var current_total_monthly_tax = $('#current_total_monthly_tax').val(sum_annual);

		// var total_annualy_income = $('#current_total_annualy_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_annualy_income))*100;
		// $('#current_total_per_expense').val(total);

		get_current_total_annualy_tax();
		get_current_total_per_tax();
		get_current_all_annualy_expense();
		get_current_all_monthly_expense();
		get_current_all_per_expense();
		// get_rec_all_annualy_expense();
		// get_rec_all_monthly_expense();
		// get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_current_per_after_saving();
	}
	function get_current_total_per_tax()
	{

		var current_total_annualy_income = $('#current_total_annualy_income').val();
		var current_total_annualy_tax = $('#current_total_annualy_tax').val();
		// alert("income: "+current_total_annualy_income);
		// alert("tax: "+current_total_annualy_tax);
		var total = (parseInt(current_total_annualy_tax)/parseInt(current_total_annualy_income))*100;
		$('#current_total_per_tax').val(total);
	}
	function get_current_total_annualy_tax()
	{
		var sum_amount = 0;var sum_tax = 0;
    $('.current_annualy_tax').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_annualy_tax').val(sum_amount);
    })
	}
	function get_current_total_monthly_tax()
	{
		var sum_amount = 0;var sum_tax = 0;
    $('.current_monthly_tax').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#current_total_monthly_tax').val(sum_amount);
    })
	}

	function get_rec_monthly_tax(id)
	{
		var sum_annual=0;
		var length = $('.sl_tax').length;
		
		var rec_annualy_tax = $('#rec_annualy_tax_'+id).val();
		var count_monthly_tax = rec_annualy_tax/12;
		$('#rec_monthly_tax_'+id).val(count_monthly_tax);

		// alert(rec_annualy_tax);
		// alert(count_monthly_tax);
		var monthly_tax = document.querySelectorAll('.rec_monthly_tax');
    for(var i = 0; i<monthly_tax.length; i++){
         // console.log(monthly_tax[i].id);
          //console.log(monthly_tax[i].value);
         // alert(per_income[i].id);

      var rec_monthly_tax_1 = monthly_tax[i].value;
			sum_annual = parseFloat(sum_annual)+parseFloat(rec_monthly_tax_1);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var rec_monthly_tax_1 = $('#rec_monthly_tax_'+i).val();
		// 	sum_annual = parseFloat(sum_annual)+parseFloat(rec_monthly_tax_1);
		// }
		var rec_total_monthly_tax = $('#rec_total_monthly_tax').val(sum_annual);

		// var total_monthly_tax = $('#rec_total_monthly_income').val();
		// var total = (parseInt(sum_annual)/parseInt(total_monthly_tax))*100;
		// $('#rec_total_per_tax').val(total);

		get_rec_total_annualy_tax();
		get_rec_total_per_tax();

		// get_current_all_annualy_expense();
		// get_current_all_monthly_expense();
		// get_current_all_per_expense();
		get_rec_all_annualy_expense();
		get_rec_all_monthly_expense();
		get_rec_all_per_expense();

		// get_current_per_before_saving();
		// get_current_annualy_before_saving();
		// get_current_monthly_before_saving();
		// get_rec_per_before_saving();
		// get_rec_annualy_before_saving();
		// get_rec_monthly_before_saving();
		get_rec_per_after_saving();
	}
	function get_rec_total_per_tax()
	{

		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_annualy_tax = $('#rec_total_annualy_tax').val();
		// alert("income: "+rec_total_annualy_income);
		// alert("tax: "+rec_total_annualy_tax);
		var total = (parseInt(rec_total_annualy_tax)/parseInt(rec_total_annualy_income))*100;
		$('#rec_total_per_tax').val(total);
	}
	function get_rec_total_annualy_tax()
	{
		var sum_amount = 0;var sum_tax = 0;
    $('.rec_annualy_tax').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_annualy_tax').val(sum_amount);
    })
	}
	function get_rec_total_monthly_tax()
	{
		var sum_amount = 0;var sum_tax = 0;
    $('.rec_monthly_tax').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      $('#rec_total_monthly_tax').val(sum_amount);
    })
	}

		// total all expenses
	function get_current_all_annualy_expense() 
	{
		var current_total_annualy_expense = $('#current_total_annualy_expense').val();
		var current_total_annualy_emi = $('#current_total_annualy_emi').val();
		var current_total_annualy_insurance = $('#current_total_annualy_insurance').val();
		var current_total_annualy_other_exp = $('#current_total_annualy_other_exp').val();
		var current_total_annualy_fund = $('#current_total_annualy_fund').val();
		var current_total_annualy_tax = $('#current_total_annualy_tax').val();
		
		var total_all_expenses = parseInt(current_total_annualy_expense)+parseInt(current_total_annualy_emi)+parseInt(current_total_annualy_insurance)+parseInt(current_total_annualy_other_exp)+parseInt(current_total_annualy_fund)+parseInt(current_total_annualy_tax);

		$('#current_total_all_annualy_expense').val(total_all_expenses);

		get_current_annualy_before_saving();
		get_current_per_before_saving();
		// get_current_annualy_after_saving();
	}
	function get_current_all_monthly_expense() 
	{
		var current_total_monthly_expense = $('#current_total_monthly_expense').val();
		var current_total_monthly_emi = $('#current_total_monthly_emi').val();
		var current_total_monthly_insurance = $('#current_total_monthly_insurance').val();
		var current_total_monthly_other_exp = $('#current_total_monthly_other_exp').val();
		var current_total_monthly_fund = $('#current_total_monthly_fund').val();
		var current_total_monthly_tax = $('#current_total_monthly_tax').val();
		
		var total_all_expenses = parseFloat(current_total_monthly_expense)+parseFloat(current_total_monthly_emi)+parseFloat(current_total_monthly_insurance)+parseFloat(current_total_monthly_other_exp)+parseFloat(current_total_monthly_fund)+parseFloat(current_total_monthly_tax);

		$('#current_total_all_monthly_expense').val(total_all_expenses);

		get_current_monthly_before_saving();
		// get_current_monthly_after_saving();
	}
	function get_current_all_per_expense() 
	{
		var current_total_annualy_income = $('#current_total_annualy_income').val();
		var current_total_all_annualy_expense = $('#current_total_all_annualy_expense').val();

		var total_per_expense = (parseFloat(current_total_all_annualy_expense)/parseFloat(current_total_annualy_income))*100;
		$('#current_total_all_per_expense').val(total_per_expense);

		get_current_per_before_saving();
		// get_current_per_after_saving();
	}

	function get_rec_all_annualy_expense() 
	{
		var rec_total_annualy_expense = $('#rec_total_annualy_expense').val();
		var rec_total_annualy_emi = $('#rec_total_annualy_emi').val();
		var rec_total_annualy_insurance = $('#rec_total_annualy_insurance').val();
		var rec_total_annualy_other_exp = $('#rec_total_annualy_other_exp').val();
		var rec_total_annualy_fund = $('#rec_total_annualy_fund').val();
		var rec_total_annualy_tax = $('#rec_total_annualy_tax').val();

		var total_all_expenses = parseInt(rec_total_annualy_expense)+parseInt(rec_total_annualy_emi)+parseInt(rec_total_annualy_insurance)+parseInt(rec_total_annualy_other_exp)+parseInt(rec_total_annualy_fund)+parseInt(rec_total_annualy_tax);

		$('#rec_total_all_annualy_expense').val(total_all_expenses);

		get_rec_annualy_before_saving();
		// get_rec_annualy_after_saving();
	}
	function get_rec_all_monthly_expense() 
	{
		var rec_total_monthly_expense = $('#rec_total_monthly_expense').val();
		var rec_total_monthly_emi = $('#rec_total_monthly_emi').val();
		var rec_total_monthly_insurance = $('#rec_total_monthly_insurance').val();
		var rec_total_monthly_other_exp = $('#rec_total_monthly_other_exp').val();
		var rec_total_monthly_fund = $('#rec_total_monthly_fund').val();
		var rec_total_monthly_tax = $('#rec_total_monthly_tax').val();
		
		var total_all_expenses = parseFloat(rec_total_monthly_expense)+parseFloat(rec_total_monthly_emi)+parseFloat(rec_total_monthly_insurance)+parseFloat(rec_total_monthly_other_exp)+parseFloat(rec_total_monthly_fund)+parseFloat(rec_total_monthly_tax);

		$('#rec_total_all_monthly_expense').val(total_all_expenses);

		get_rec_monthly_before_saving();
		// get_rec_monthly_after_saving();
	}
	function get_rec_all_per_expense() 
	{
		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_all_annualy_expense = $('#rec_total_all_annualy_expense').val();

		var total_per_expense = (parseFloat(rec_total_all_annualy_expense)/parseFloat(rec_total_annualy_income))*100;
		$('#rec_total_all_per_expense').val(total_per_expense);

		get_rec_per_before_saving();
		// get_rec_per_after_saving();
	}

	// Excess/Shortage before savings
	function get_current_per_before_saving()
	{
		var current_total_per_income = $('#current_total_per_income').val();
		var current_total_all_per_expense = $('#current_total_all_per_expense').val();

		var total_per_before_saving = parseFloat(current_total_per_income)-parseFloat(current_total_all_per_expense);
		$('#current_total_per_before_saving').val(total_per_before_saving);

		//get_current_per_after_saving();
	}
	function get_current_annualy_before_saving()
	{
		var current_total_annualy_income = $('#current_total_annualy_income').val();
		var current_total_all_annualy_expense = $('#current_total_all_annualy_expense').val();

		var total_annualy_before_saving = parseFloat(current_total_annualy_income)-parseFloat(current_total_all_annualy_expense);
		$('#current_total_annualy_before_saving').val(total_annualy_before_saving);

		get_current_annualy_after_saving();
		get_current_per_after_saving();
	}
	function get_current_monthly_before_saving()
	{
		var current_total_monthly_income = $('#current_total_monthly_income').val();
		var current_total_all_monthly_expense = $('#current_total_all_monthly_expense').val();

		var total_monthly_before_saving = parseFloat(current_total_monthly_income)-parseFloat(current_total_all_monthly_expense);
		$('#current_total_monthly_before_saving').val(total_monthly_before_saving);

		get_current_monthly_after_saving();
	}

	function get_rec_per_before_saving()
	{
		var rec_total_per_income = $('#rec_total_per_income').val();
		var rec_total_all_per_expense = $('#rec_total_all_per_expense').val();

		var total_per_before_saving = parseFloat(rec_total_per_income)-parseFloat(rec_total_all_per_expense);

		// alert("per_income:"+rec_total_per_income);
		// alert("all_per_income:"+rec_total_all_per_expense);
		// alert("total:"+total_per_before_saving);
		$('#rec_total_per_before_saving').val(total_per_before_saving);
		
		//get_rec_per_after_saving();
	}
	function get_rec_annualy_before_saving()
	{
		var rec_total_annualy_income = $('#rec_total_annualy_income').val();
		var rec_total_all_annualy_expense = $('#rec_total_all_annualy_expense').val();

		var total_annualy_before_saving = parseFloat(rec_total_annualy_income)-parseFloat(rec_total_all_annualy_expense);
		$('#rec_total_annualy_before_saving').val(total_annualy_before_saving);

		get_rec_annualy_after_saving();
		get_rec_per_after_saving();
	}
	function get_rec_monthly_before_saving()
	{
		var rec_total_monthly_income = $('#rec_total_monthly_income').val();
		var rec_total_all_monthly_expense = $('#rec_total_all_monthly_expense').val();

		var total_monthly_before_saving = parseFloat(rec_total_monthly_income)-parseFloat(rec_total_all_monthly_expense);
		$('#rec_total_monthly_before_saving').val(total_monthly_before_saving);

		get_rec_monthly_after_saving();
	}

	// savings
	function get_current_monthly_saving()
	{
		var current_annual_saving = $('#current_annualy_saving').val();

		var current_monthly_saving = parseInt(current_annual_saving)/12;
		$('#current_monthly_saving').val(current_monthly_saving);

		get_current_annualy_after_saving();
		get_current_per_after_saving();
		get_current_monthly_after_saving();
	}
	function get_rec_monthly_saving()
	{
		var rec_annual_saving = $('#rec_annualy_saving').val();

		var rec_monthly_saving = parseInt(rec_annual_saving)/12;
		$('#rec_monthly_saving').val(rec_monthly_saving);
		

		get_rec_annualy_after_saving();
		get_rec_per_after_saving();
		get_rec_monthly_after_saving();
	}

  $('#add_contribute_assets').click(function(){
   
    var length = $('.sl_contribute_assets').length;
    var lastid = $(".sl_contribute_assets:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[2]) + 1;

    //var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_contribute_assets').append('<div class="row dts_contribute_assets" id="dts_contribute_assets_'+i+'"><div class="col-md-3 col-3"><div class="form-group"><input type="hidden" name="serial[]" class="sl_contribute_assets"  id="sl_contribute_assets_'+i+'" value="'+i+'"><input type="text" class="form-control" name="contribute_assets_description[]"></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control current_per_contribute_assets" id="current_per_contribute_assets_'+i+'" name="current_per_contribute_assets[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_annualy_contribute_assets" id="current_annualy_contribute_assets_'+i+'" name="current_annualy_contribute_assets[]" value="0" onchange="get_current_contribute_assets('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control current_monthly_contribute_assets" id="current_monthly_contribute_assets_'+i+'" name="current_monthly_contribute_assets[]" value="0" readonly></div></div><div class="col-md-2 col-2"><div class="form-group"><input type="text" class="form-control rec_per_contribute_assets" id="rec_per_contribute_assets_'+i+'" name="rec_per_contribute_assets[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_annualy_contribute_assets" id="rec_annualy_contribute_assets_'+i+'" name="rec_annualy_contribute_assets[]" value="0" onchange="get_rec_contribute_assets('+i+')"></div></div><div class="col-md-1 col-1"><div class="form-group"><input type="text" class="form-control rec_monthly_contribute_assets" id="rec_monthly_contribute_assets_'+i+'" name="rec_monthly_contribute_assets[]" value="0" readonly></div></div><div class="col-md-1 col-1"><div class="form-group"><button type="button" id="contribute_assets_'+i+'" name="addmore" class="btn btn-danger btn-sm btncontribute_assetsRemove">-</button></div></div></div></div>');
    });
  
  // Removing event here
  $('body').on('click','.btncontribute_assetsRemove',function() {
       //$(this).closest('.dts_contribute_assets').remove();
      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];
      
        // Remove <div> with id
		  $("#dts_contribute_assets_" + deleteindex).remove();
      
      get_current_per_after_saving();
      get_current_annualy_after_saving();
			get_current_monthly_after_saving();

      get_rec_annualy_after_saving();
      get_rec_per_after_saving();
			get_rec_monthly_after_saving();
  });
  // Contribution of retirement assets
	function get_current_contribute_assets(id) 
	{
		var sum_annual=0;
		var length = $('.sl_contribute_assets').length;
		
		var current_total_annualy_income = $('#current_total_annualy_income').val();

		var current_annualy_contribute_assets = $('#current_annualy_contribute_assets_'+id).val();

		var count_monthly_contribute_assets = current_annualy_contribute_assets/12;
		$('#current_monthly_contribute_assets_'+id).val(count_monthly_contribute_assets);
		
		// var current_total_annualy_income = $('#current_total_annualy_income').val(sum_annual);

		var contribute_assets = document.querySelectorAll('.current_annualy_contribute_assets');
		var contribute_per_assets = document.querySelectorAll('.current_per_contribute_assets');
    for(var i = 0; i<contribute_assets.length; i++){
         // console.log(contribute_assets[i].id);
          //console.log(contribute_assets[i].value);
         // alert(per_income[i].id);

      var current_contribute_assets_1 = contribute_assets[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(current_contribute_assets_1);

			var per_assets = contribute_per_assets[i].id;
			var current_per_contribute_assets = (parseInt(current_contribute_assets_1)/parseInt(current_total_annualy_income))*100;
			// alert(current_annualy_income_1);
	  	$('#'+per_assets).val(current_per_contribute_assets);
    }

		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var current_annualy_contribute_assets_1 = $('#current_annualy_contribute_assets_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(current_annualy_contribute_assets_1);
		// }

		// for(var i=1;i<=length;i++)
		// {
		// 	var current_total_annualy_contribute_assets = $('#current_annualy_contribute_assets_'+i).val();

		// 	var current_per_contribute_assets = (parseInt(current_total_annualy_contribute_assets)/parseInt(current_total_annualy_income))*100;
		// 	// alert(current_annualy_income_1);
	 //  	$('#current_per_contribute_assets_'+i).val(current_per_contribute_assets);  		
		// }

		get_current_annualy_after_saving();
		get_current_per_after_saving();
		get_current_monthly_after_saving();
	}

	function get_rec_contribute_assets(id) 
	{
		var sum_annual=0;
		var length = $('.sl_contribute_assets').length;
		
		var rec_total_annualy_income = $('#rec_total_annualy_income').val();

		var rec_annualy_contribute_assets = $('#rec_annualy_contribute_assets_'+id).val();

		var count_monthly_contribute_assets = rec_annualy_contribute_assets/12;
		$('#rec_monthly_contribute_assets_'+id).val(count_monthly_contribute_assets);
		
		// var rec_total_annualy_income = $('#rec_total_annualy_income').val(sum_annual);

		var contribute_assets = document.querySelectorAll('.rec_annualy_contribute_assets');
		var contribute_per_assets = document.querySelectorAll('.rec_per_contribute_assets');
    for(var i = 0; i<contribute_assets.length; i++){
         // console.log(contribute_assets[i].id);
          //console.log(contribute_assets[i].value);
         // alert(per_income[i].id);

      var rec_contribute_assets_1 = contribute_assets[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(rec_contribute_assets_1);

			var per_assets = contribute_per_assets[i].id;
			var rec_per_contribute_assets = (parseInt(rec_contribute_assets_1)/parseInt(rec_total_annualy_income))*100;
			// alert(rec_annualy_income_1);
	  	$('#'+per_assets).val(rec_per_contribute_assets);
    }
		// for(var i=1;i<=length;i++)
		// {
		// 	// alert(i);
		// 	var rec_annualy_contribute_assets_1 = $('#rec_annualy_contribute_assets_'+i).val();
		// 	sum_annual = parseInt(sum_annual)+parseInt(rec_annualy_contribute_assets_1);
		// }

		// for(var i=1;i<=length;i++)
		// {
		// 	var rec_total_annualy_contribute_assets = $('#rec_annualy_contribute_assets_'+i).val();

		// 	var rec_per_contribute_assets = (parseInt(rec_total_annualy_contribute_assets)/parseInt(rec_total_annualy_income))*100;
		// 	// alert(rec_annualy_income_1);
	 //  	$('#rec_per_contribute_assets_'+i).val(rec_per_contribute_assets);  		
		// }
		get_rec_annualy_after_saving();
		get_rec_per_after_saving();
		get_rec_monthly_after_saving();
	}

	// excess/shortage after savings
	function get_current_per_after_saving()
	{
		var sum_amount = 0;
		var total_per_income = $('#current_total_per_income').val();
		var total_all_per_expense = $('#current_total_all_per_expense').val();

		$('.current_per_contribute_assets').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
    })

    var total = parseFloat(total_per_income)-parseFloat(total_all_per_expense)-parseFloat(sum_amount);
    $('#current_total_per_after_saving').val(total);
	}
	function get_current_annualy_after_saving()
	{
		var sum_amount = 0;
		var annualy_before_saving = $('#current_total_annualy_before_saving').val();
		var annualy_saving = $('#current_annualy_saving').val();

		$('.current_annualy_contribute_assets').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
    })
    var total = parseInt(annualy_before_saving)-parseInt(annualy_saving)-parseInt(sum_amount);
    $('#current_total_annualy_after_saving').val(total);

	}
	function get_current_monthly_after_saving()
	{
		var sum_amount = 0;
		var monthly_before_saving = $('#current_total_monthly_before_saving').val();
		var monthly_saving = $('#current_monthly_saving').val();

		$('.current_monthly_contribute_assets').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
    })
    var total = parseFloat(monthly_before_saving)-parseFloat(monthly_saving)-parseFloat(sum_amount);
    $('#current_total_monthly_after_saving').val(total);
	}

	function get_rec_per_after_saving()
	{
		var sum_amount = 0;
		var total_per_income = $('#rec_total_per_income').val();
		var total_all_per_expense = $('#rec_total_all_per_expense').val();

		$('.rec_per_contribute_assets').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
    })

    var total = parseFloat(total_per_income)-parseFloat(total_all_per_expense)-parseFloat(sum_amount);
    $('#rec_total_per_after_saving').val(total);
	}
	function get_rec_annualy_after_saving()
	{
		var sum_amount = 0;
		var annualy_before_saving = $('#rec_total_annualy_before_saving').val();
		var annualy_saving = $('#rec_annualy_saving').val();

		$('.rec_annualy_contribute_assets').each(function(){
			sum_amount += +$(this).val();
   
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
      
    })
    var total = parseInt(annualy_before_saving)-parseInt(annualy_saving)-parseInt(sum_amount);
    $('#rec_total_annualy_after_saving').val(total);
	}
	function get_rec_monthly_after_saving()
	{
		var sum_amount = 0;
		var monthly_before_saving = $('#rec_total_monthly_before_saving').val();
		var monthly_saving = $('#rec_monthly_saving').val();

		$('.rec_monthly_contribute_assets').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
    })
    var total = parseFloat(monthly_before_saving)-parseFloat(monthly_saving)-parseFloat(sum_amount);
    $('#rec_total_monthly_after_saving').val(total);
	}
</script>
<!-- cash flow tab end -->

<!-- Emergency Fund tab start -->
<script type="text/javascript">
	$('#add_emergency').click(function(){
 
    var length = $('.sl_emergency').length;
    var i   = parseInt(length)+parseInt(1);
    
    var newrow = $('#next_emerency_fund').append('<tr class="dts_fund"><div class="form-group"><input type="hidden" name="serial[]" class="sl_emergency" value="'+i+'"></div><td><input type="text" class="form-control" name="fund_category[]" id="Category" /></td><td><input type="number" class="form-control fund_amount" name="fund_amount[]" id="amount" onchange="get_fund_amount()"/></td><td> <button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');

    });
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('.dts_fund').remove();
       get_fund_amount();
  });

  function get_fund_amount() 
	{
		// body...
		var sum_amount = 0;
    $('.fund_amount').each(function(){
      sum_amount += +$(this).val();
      // alert(sum_amount);
      //$('#final_total').html(sum_amount);
      $('#total_fund_amount').val(sum_amount);
    })
	}

</script>
<!--  Emergency fund end -->

<!-- investment planning start -->
<script type="text/javascript">
  $('#add_c_assets').click(function(){
 
    var length = $('.sl_c_assets').length;
    var lastid = $(".sl_c_assets:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[3]) + 1;
	  //alert(i);
    //var i   = parseInt(length)+parseInt(1);
    
    var newrow = $('#next_c_assets').append('<tr class="sl_c_assets" id="dts_cur_asstes_'+i+'"><input type="hidden" id="sl_c_assets_'+i+'" name="serial[]" class="sl_c_assets1" value="'+i+'"><td><input type="text" class="form-control current_class" name="current_class[]" id="current_class_'+i+'" /></td><td><input type="number" class="form-control current_amount" name="current_amount[]" id="current_amount_'+i+'" onchange="get_current_allocation('+i+')"/></td><td><input type="number" class="form-control current_per_assets" name="current_per_assets[]" id="current_per_assets_'+i+'" readonly/></td><td> <button type="button" id="current_assets_'+i+'" name="addmore" class="btn btn-danger btn-sm btnCurRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
    });
  
  // Removing event here
  $('body').on('click','.btnCurRemove',function() {
       // $(this).closest('.dts').remove();
      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];
      
        // Remove <div> with id
		  $("#dts_cur_asstes_" + deleteindex).remove();

		  get_total_cur_amount();
  });

  function get_current_allocation(id)
	{
		var sum_annual=0;
		var length = $('.sl_c_assets').length;
		
		var current_amount = $('#currrent_amount_'+id).val();
		
		get_total_cur_amount();
  }
  function get_total_cur_amount()
	{
		var sum_amount =0;

		$('.current_amount').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
     $('#current_total_amount').val(sum_amount);
    })
    
		var sum_annual = 0;
    var current_amount = document.querySelectorAll('.current_amount');
    for(var i = 0; i<current_amount.length; i++){
         // console.log(annualy_emi[i].id);
          //console.log(annualy_emi[i].value);
         // alert(per_income[i].id);

      var cur_amount = current_amount[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(cur_amount);
    }

    var current_per_assets = document.querySelectorAll('.current_per_assets');
    for(var i = 0; i<current_per_assets.length; i++){
        // console.log(current_amount[i].id);
         // console.log(current_per_assets[i].value);
         // alert(per_income[i].id);

      var c_amount = current_amount[i].value;
			var c_per_assets = (parseInt(c_amount)/parseInt(sum_annual))*100;
			$('#'+current_per_assets[i].id).val(c_per_assets);
    }

  	get_per_total();
	}

	function get_per_total()
	{
		var sum_per_amount =0;

		$('.current_per_assets').each(function(){
			sum_per_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_per_amount);
     // alert(sum_per_amount);
     $('#current_per_total').val(sum_per_amount);
    })
	}

  $('#add_p_assets').click(function(){
 
    var length = $('.sl_p_assets').length;
    var lastid = $(".sl_p_assets:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[3]) + 1;
	  // alert(i);
    // var i   = parseInt(length)+parseInt(1);
    
    var newrow = $('#next_p_assets').append('<tr class="sl_p_assets" id="dts_p_asstes_'+i+'"><div class="form-group"><input type="hidden" name="serial[]" class="sl_p_assets1" value="'+i+'"></div><td><input type="text" class="form-control proposed_class" name="proposed_class[]" id="proposed_class_'+i+'" /></td><td><input type="number" class="form-control proposed_amount" name="proposed_amount[]" id="proposed_amount_'+i+'" onchange="get_proposed_allocation('+i+')"/></td><td><input type="number" class="form-control proposed_per_assets" name="proposed_per_assets[]" id="proposed_per_assets_'+i+'" readonly/></td><td> <button type="button" id="proposed_assets_'+i+'" name="addmore" class="btn btn-danger btn-sm btnPRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
    });
  
  // Removing event here
  $('body').on('click','.btnPRemove',function() {
       // $(this).closest('.dts').remove()
       var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];
      
        // Remove <div> with id
		  $("#dts_p_asstes_" + deleteindex).remove();
		  get_total_proposed_amount();
  });

  function get_proposed_allocation(id)
	{
		var sum_annual=0;
		var length = $('.sl_p_assets').length;
		
		var proposed_amount = $('#proposed_amount_'+id).val();
		
		get_total_proposed_amount();
  }
  function get_total_proposed_amount()
	{
		var sum_amount =0;

		$('.proposed_amount').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
     $('#proposed_total_amount').val(sum_amount);
    })
    
		var sum_annual = 0;
    var proposed_amount = document.querySelectorAll('.proposed_amount');
    for(var i = 0; i<proposed_amount.length; i++){
         // console.log(annualy_emi[i].id);
          //console.log(annualy_emi[i].value);
         // alert(per_income[i].id);

      var pr_amount = proposed_amount[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(pr_amount);
    }

    var proposed_per_assets = document.querySelectorAll('.proposed_per_assets');
    for(var i = 0; i<proposed_per_assets.length; i++){
        // console.log(proposed_amount[i].id);
          //console.log(proposed_per_assets[i].value);
         // alert(per_income[i].id);

      var p_amount = proposed_amount[i].value;
			var p_per_assets = (parseInt(p_amount)/parseInt(sum_annual))*100;
			$('#'+proposed_per_assets[i].id).val(p_per_assets);
    }

  	get_pr_per_total();
	}

	function get_pr_per_total()
	{
		var sum_per_amount =0;

		$('.proposed_per_assets').each(function(){
			sum_per_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_per_amount);
     // alert(sum_per_amount);
     $('#proposed_per_total').val(sum_per_amount);
    })
	}


  $('#add_total').click(function(){
 
    var length = $('.sl_final_assets').length;
    var lastid = $(".sl_final_assets:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[3]) + 1;
	 // alert(i);
    // var i   = parseInt(length)+parseInt(1);
    
    var newrow = $('#next_total').append('<tr class="sl_final_assets" id="dts_final_assets_'+i+'"><div class="form-group"><input type="hidden" name="serial[]" class="sl_total" value="'+i+'"></div><td><input type="text" class="form-control assets_class" name="assets_class[]" id="assets_class_'+i+'" /></td><td><input type="number" class="form-control cur_assets_amount" name="cur_assets_amount[]" id="cur_assets_amount_'+i+'" onchange="get_final_cur_allocation('+i+')" value="0"/></td><td><input type="number" class="form-control cur_per_assets" name="cur_per_assets[]" id="cur_per_assets_'+i+'" value="0" readonly/></td> <td><input type="number" class="form-control rec_assets_amount" name="rec_assets_amount[]" id="rec_assets_amount_'+i+'" value="0" onchange="get_final_rec_allocation('+i+')"/></td><td><input type="number" class="form-control rec_per_assets" name="rec_per_assets[]" id="rec_per_assets_'+i+'" value="0" readonly/></td><td><input type="number" class="form-control rep_assets_amount" name="rep_assets_amount[]" id="rep_assets_amount_'+i+'" value="0" readonly/></td> <td><input type="number" class="form-control rep_per_assets" name="rep_per_assets[]" id="rep_per_assets_'+i+'" value="0" readonly/></td><td> <button type="button" id="final_assets_'+i+'" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
    });
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       // $(this).closest('.dts').remove()
      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];
      
        // Remove <div> with id
		  $("#dts_final_assets_" + deleteindex).remove();

		  get_final_cur_total_amount();
		  get_final_rec_total_amount();
  });

  function get_final_cur_allocation(id)
	{
		var sum_annual=0;
		var length = $('.sl_p_assets').length;
		
		var cur_assets_amount = $('#cur_assets_amount_'+id).val();
		
		get_final_cur_total_amount();
		//get_rep_amount();
  }
  function get_final_cur_total_amount()
	{
		var sum_amount =0;

		$('.cur_assets_amount').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
     $('#cur_total_amount').val(sum_amount);
    })
    
		var sum_annual = 0;
    var cur_assets_amount = document.querySelectorAll('.cur_assets_amount');
    var rec_assets_amount = document.querySelectorAll('.rec_assets_amount');
    var rep_assets_amount = document.querySelectorAll('.rep_assets_amount');

    for(var i = 0; i<cur_assets_amount.length; i++){
         // console.log(annualy_emi[i].id);
          //console.log(annualy_emi[i].value);
         // alert(per_income[i].id);

      var c_assets_amount = cur_assets_amount[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(c_assets_amount);

			var rep_amount = parseInt(rec_assets_amount[i].value)-parseInt(cur_assets_amount[i].value);
			$('#'+rep_assets_amount[i].id).val(rep_amount);
    }

    var cur_per_assets = document.querySelectorAll('.cur_per_assets');
    var rec_per_assets = document.querySelectorAll('.rec_per_assets');
    var rep_per_assets = document.querySelectorAll('.rep_per_assets');
    for(var i = 0; i<cur_per_assets.length; i++){
        // console.log(proposed_amount[i].id);
        // console.log(cur_per_assets[i].id);
        // alert(cur_per_assets[i].id);

      var c_assets_amount = cur_assets_amount[i].value;
			var c_per_assets = (parseInt(c_assets_amount)/parseInt(sum_annual))*100;
			
			$('#'+cur_per_assets[i].id).val(c_per_assets);

			var rep_per_amount = parseFloat(rec_per_assets[i].value)-parseFloat(cur_per_assets[i].value);
			$('#'+rep_per_assets[i].id).val(rep_per_amount);
    }

  	get_final_cur_per_total();
	}

	function get_final_cur_per_total()
	{
		var sum_per_amount =0;

		$('.cur_per_assets').each(function(){
			sum_per_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_per_amount);
     // alert(sum_per_amount);
     $('#cur_per_total').val(sum_per_amount);
    })

		var cur_per_total = $('#cur_per_total').val();
		var rec_per_total = $('#rec_per_total').val();
		var total = parseInt(rec_per_total)	- parseInt(cur_per_total);
		$('#rep_per_total').val(total);

		get_rep_total_amount(); 
	}

	function get_final_rec_allocation(id)
	{
		var sum_annual=0;
		var length = $('.sl_p_assets').length;
		
		var rec_assets_amount = $('#rec_assets_amount_'+id).val();
		
		get_final_rec_total_amount();
		//get_rep_amount();
  }
  function get_final_rec_total_amount()
	{
		var sum_amount =0;

		$('.rec_assets_amount').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
     $('#rec_total_amount').val(sum_amount);
    })
    
	
		var sum_annual = 0;
		var cur_assets_amount = document.querySelectorAll('.cur_assets_amount');
    var rec_assets_amount = document.querySelectorAll('.rec_assets_amount');

    var rep_assets_amount = document.querySelectorAll('.rep_assets_amount');
    for(var i = 0; i<rec_assets_amount.length; i++){
         // console.log(annualy_emi[i].id);
          //console.log(annualy_emi[i].value);
         // alert(per_income[i].id);

      var r_assets_amount = rec_assets_amount[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(r_assets_amount);

			var rep_amount = parseInt(rec_assets_amount[i].value)-parseInt(cur_assets_amount[i].value);
			$('#'+rep_assets_amount[i].id).val(rep_amount);
    }

    var cur_per_assets = document.querySelectorAll('.cur_per_assets');
    var rec_per_assets = document.querySelectorAll('.rec_per_assets');
    var rep_per_assets = document.querySelectorAll('.rep_per_assets');
    for(var i = 0; i<rec_per_assets.length; i++){
        // console.log(proposed_amount[i].id);
        // console.log(rec_per_assets[i].id);
        // alert(rec_per_assets[i].id);

      var r_assets_amount = rec_assets_amount[i].value;
			var r_per_assets = (parseInt(r_assets_amount)/parseInt(sum_annual))*100;
			
			$('#'+rec_per_assets[i].id).val(r_per_assets);

			var rep_per_amount = parseFloat(rec_per_assets[i].value)-parseFloat(cur_per_assets[i].value);
			$('#'+rep_per_assets[i].id).val(rep_per_amount);
    }

  	get_final_rec_per_total();
	}

	function get_final_rec_per_total()
	{
		var sum_per_amount =0;

		$('.rec_per_assets').each(function(){
			sum_per_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_per_amount);
     // alert(sum_per_amount);
     $('#rec_per_total').val(sum_per_amount);
    })

    var cur_per_total = $('#cur_per_total').val();
		var rec_per_total = $('#rec_per_total').val();
		var total = parseInt(rec_per_total)	- parseInt(cur_per_total);
		$('#rep_per_total').val(total);

		get_rep_total_amount(); 
	}

	function get_rep_total_amount() 
	{
		var cur_total_amount = $('#cur_total_amount').val();
		var rec_total_amount = $('#rec_total_amount').val();
	
		var total = parseInt(rec_total_amount)- parseInt(cur_total_amount);
		$('#rep_total_amount').val(total);
	}
</script>
<!-- investment planning end -->

<!-- Goal Planning start -->
<script type="text/javascript">


	$('#add_observation').click(function(){
	   
	    var length = $('.sl_observation').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_observation').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_observation" value="'+i+'"></div> <div class="form-group row dts_observation"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="observation[]" placeholder="Enter Observation" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btno_NoteRemove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btno_NoteRemove',function() {
	       $(this).closest('.dts_observation').remove()
	  });



	$('#add_analysis').click(function(){
	   
	    var length = $('.sl_analysis').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_analysis').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_analysis" value="'+i+'"></div> <div class="form-group row dts_analysis"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="analysis_goal[]" placeholder="Enter Analysis" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btn_analysis_Remove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btn_analysis_Remove',function() {
	       $(this).closest('.dts_analysis').remove()
	  });

	  $('#add_analysis_f').click(function(){
	 
	    var length = $('.sl_analysis_f').length;
	    var i   = parseInt(length)+parseInt(1);
	    
	    var newrow = $('#next_analysis_f').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_analysis_f" value="'+i+'"></div><td><input type="text" class="form-control" name="a_desc[]" id="a_desc" /></td><td><input type="number" class="form-control" name="goal_rt_today[]" id="goal_rt_today"/></td><td><input type="number" class="form-control" name="goal_rt_after[]" id="g_a_after"/></td><td> <button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
	    });
	  
	  // Removing event here
	  $('body').on('click','.btnRemove',function() {
	       $(this).closest('.dts').remove()
	  });



	$('#add_recommendation').click(function(){
	   
	    var length = $('.sl_recommendation').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_recommendation').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_recommendation" value="'+i+'"></div> <div class="form-group row dts_recommendation"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="recommendation[]" placeholder="Enter Recommendation" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btn_recommendation_Remove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btn_recommendation_Remove',function() {
	       $(this).closest('.dts_recommendation').remove()
	  });

	  $('#add_f_a_goal').click(function(){
	   
	    var length = $('.sl_f_a_goal').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_f_a_goal').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_f_a_goal" value="'+i+'"></div> <div class="form-group row dts_f_a_goal"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="f_a_goal[]" placeholder="Enter Funding available towards goal" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btn_f_a_goal_Remove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btn_f_a_goal_Remove',function() {
	       $(this).closest('.dts_f_a_goal').remove()
	  });


	  $('#add_funding').click(function(){
	 
	    var length = $('.sl_funding').length;
	    var i   = parseInt(length)+parseInt(1);
	    
	    var newrow = $('#next_funding').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_funding" value="'+i+'"></div><td><input type="text" class="form-control" name="goal_rt_f_desc[]" id="goal_rt_f_desc" /></td><td><input type="number" class="form-control goal_rt_f_amount" name="goal_rt_f_amount[]" id="goal_rt_f_amount_'+i+'" value="0" onchange="get_rt_rem_fund()"/></td><td> <button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
	    });
	  
	  // Removing event here
	  $('body').on('click','.btnRemove',function() {
	       $(this).closest('.dts').remove();
	       get_rt_rem_fund();

	  });

	  function get_rt_rem_fund()
	  {
	  	var sum_amount = 0;

	  	var corpus_fund = $("#goal_rt_f_corpus_fund").val();
	  	//var goal_rt_f_amount = $("#goal_rt_f_amount").val();
	  	$('.goal_rt_f_amount').each(function(){
				sum_amount += +$(this).val();
	     // alert($(this).val());
	      //$('#final_total').html(sum_per_amount);
	     // alert(sum_per_amount);

	     var total = parseInt(corpus_fund)-parseInt(sum_amount);
	     $('#goal_rt_remaining_fund').val(total);
	    })
	  	
	  }

	//////////////////////////////////- Education -//////////////////////////////////////

	$('#add_e_observation').click(function(){
	   
	    var length = $('.sl_e_observation').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_e_observation').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_e_observation" value="'+i+'"></div> <div class="form-group row dts_e_observation"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="e_observation[]" placeholder="Enter Observation" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btno_NoteRemove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btno_NoteRemove',function() {
	       $(this).closest('.dts_e_observation').remove()
	  });

	$('#add_e_analysis').click(function(){
	   
	    var length = $('.sl_e_analysis').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_e_analysis').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_e_analysis" value="'+i+'"></div> <div class="form-group row dts_e_analysis"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="e_analysis[]" placeholder="Enter Analysis" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btn_e_analysis_Remove">-</button></div></div>');
	    
	  });

	 // Removing event here
	  $('body').on('click','.btn_e_analysis_Remove',function() {
	       $(this).closest('.dts_e_analysis').remove()
	  });

	 $('#add_e_analysis2').click(function(){
	 
	    var length = $('.sl_e_analysis2').length;
	    var i   = parseInt(length)+parseInt(1);
	    
	    var newrow = $('#next_e_analysis2').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_e_analysis2" value="'+i+'"></div><td><input type="text" class="form-control" name="e_a_desc[]" id="e_a_desc" /></td><td><input type="number" class="form-control" name="e_a_amount[]" id="e_a_amount"/></td><td><button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
	    });
	  
	  // Removing event here
	  $('body').on('click','.btnRemove',function() {
	       $(this).closest('.dts').remove()
	  });

	  $('#add_e_recommendation').click(function(){
	   
	    var length = $('.sl_e_recommendation').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_e_recommendation').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_e_recommendation" value="'+i+'"></div> <div class="form-group row dts_e_recommendation"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="e_recommendation[]" placeholder="Enter Recommendation" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btn_e_recommendation_remove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btn_e_recommendation_remove',function() {
	       $(this).closest('.dts_e_recommendation').remove()
	  });

	   $('#add_e_f_g').click(function(){
	 
	    var length = $('.sl_e_f_g').length;
	    var i   = parseInt(length)+parseInt(1);
	    
	    var newrow = $('#next_e_f_g').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_e_f_g" value="'+i+'"></div><td><input type="text" class="form-control" name="goal_edu_desc[]" id="goal_edu_desc" /></td><td><input type="number" class="form-control goal_edu_amount" name="goal_edu_amount[]" id="goal_edu_amount_'+i+'" value="0" onchange="get_edu_rem_fund()"/></td><td><button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
	    });
	  
	  // Removing event here
	  $('body').on('click','.btnRemove',function() {
	       $(this).closest('.dts').remove();
	       get_edu_rem_fund();
	  });

	  function get_edu_rem_fund()
	  {
	  	var sum_amount = 0;

	  	var req_amt = $("#goal_edu_req_amt").val();
	  	//var goal_rt_f_amount = $("#goal_rt_f_amount").val();
	  	$('.goal_edu_amount').each(function(){
				sum_amount += +$(this).val();
	     // alert($(this).val());
	      //$('#final_total').html(sum_per_amount);
	     // alert(sum_per_amount);

	     var total = parseInt(req_amt)-parseInt(sum_amount);
	     $('#goal_edu_rem_fund').val(total);
	    })
	  	
	  }

	  //////////////////////////////////-  Marriage -//////////////////////////////////////

	  $('#add_m_observation').click(function(){
	   
	    var length = $('.sl_m_observation').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_m_observation').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_m_observation" value="'+i+'"></div> <div class="form-group row dts_m_observation"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="m_observation[]" placeholder="Enter Observation" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btno_NoteRemove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btno_NoteRemove',function() {
	       $(this).closest('.dts_m_observation').remove()
	  });


	  $('#add_m_analysis').click(function(){
	   
	    var length = $('.sl_m_analysis').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_m_analysis').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_m_analysis" value="'+i+'"></div> <div class="form-group row dts_m_analysis"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="m_analysis[]" placeholder="Enter Analysis" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btn_m_analysis_Remove">-</button></div></div>');
	    
	  });

	 // Removing event here
	  $('body').on('click','.btn_m_analysis_Remove',function() {
	       $(this).closest('.dts_m_analysis').remove()
	  });

	  $('#add_m_analysis2').click(function(){
	 
	    var length = $('.sl_m_analysis2').length;
	    var i   = parseInt(length)+parseInt(1);
	    
	    var newrow = $('#next_m_analysis2').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_m_analysis2" value="'+i+'"></div><td><input type="text" class="form-control" name="goal_m_a_desc[]" id="goal_m_a_desc" /></td><td><input type="number" class="form-control goal_m_amount" name="goal_m_amount[]" id="goal_m_amount_'+i+'" value="0"/></td><td><input type="number" class="form-control goal_m_f_amount" name="goal_m_f_amount[]" id="goal_m_f_amount_'+i+'" value="0"/></td><td><button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
	    });
	  
	  // Removing event here
	  $('body').on('click','.btnRemove',function() {
	       $(this).closest('.dts').remove()
	  });

	  $('#add_m_f_a_t_g').click(function(){
	   
	    var length = $('.sl_m_f_a_t_g').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_m_f_a_t_g').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_m_f_a_t_g" value="'+i+'"></div> <div class="form-group row dts_m_f_a_t_g"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="m_f_a_t_g[]" placeholder="Enter Funding available towards goal" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btn_m_f_a_t_g_Remove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btn_m_f_a_t_g_Remove',function() {
	       $(this).closest('.dts_m_f_a_t_g').remove()
	  });

	  $('#add_m_f_g').click(function(){
	 
	    var length = $('.sl_m_f_g').length;
	    var i   = parseInt(length)+parseInt(1);
	    
	    var newrow = $('#next_m_f_g').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_m_f_g" value="'+i+'"></div><td><input type="text" class="form-control" name="goal_m_f_g_desc[]" id="goal_m_f_g_desc" /></td><td><input type="number" class="form-control goal_m_f_g_amount" name="goal_m_f_g_amount[]" id="goal_m_f_g_amount_'+i+'" value="0" onchange="get_m_rem_fund()"/></td><td><button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
	    });
	  
	  // Removing event here
	  $('body').on('click','.btnRemove',function() {
	       $(this).closest('.dts').remove();
	       get_m_rem_fund();
	  });

	   function get_m_rem_fund()
	  {
	  	var sum_amount = 0;

	  	var req_amt = $("#goal_m_req_amt").val();
	  	//var goal_rt_f_amount = $("#goal_rt_f_amount").val();
	  	$('.goal_m_f_g_amount').each(function(){
				sum_amount += +$(this).val();
	     // alert($(this).val());
	      //$('#final_total').html(sum_per_amount);
	     // alert(sum_per_amount);

	     var total = parseInt(req_amt)-parseInt(sum_amount);
	     $('#goal_m_rem_fund').val(total);
	    })
	  	
	  }
	   //////////////////////////////////- 4th goal -//////////////////////////////////////

	  $('#add_c_gift').click(function(){
	   
	    var length = $('.sl_c_gift').length;
	    var i   = parseInt(length)+parseInt(1);
	    var newrow = $('#next_c_gift').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_c_gift" value="'+i+'"></div> <div class="form-group row dts_c_gift"><div class="col-md-11 col-11"><textarea rows="3" class="form-control" name="c_gift[]" placeholder="Enter Charity & Gifting" /></textarea></div><div class="col-md-1 col-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btno_NoteRemove">-</button></div></div>');
	    
	    });
	  
	  // Removing event here
	  $('body').on('click','.btno_NoteRemove',function() {
	       $(this).closest('.dts_c_gift').remove()
	  });



</script>
<!-- Goal planning end -->

<!-- Funding for goals start -->
<script type="text/javascript">
	$('#add_goals').click(function(){
 
    var length = $('.sl_f_f_goals').length;
     var lastid = $(".sl_f_f_goals:last").attr("id");
	  var split_id = lastid.split("_");
	  var i = Number(split_id[3]) + 1;
    // var i   = parseInt(length)+parseInt(1);
    
    var newrow = $('#next_goals').append('<tr class="sl_f_f_goals" id="dts_fund_goals_'+i+'"><div class="form-group"><input type="hidden" name="serial[]" class="sl_f_f_goals1" value="'+i+'"></div><td><input type="text" class="form-control" name="fund_description[]" id="fund_description" /></td><td><input type="number" class="form-control annual_fund" name="annual_fund[]" id="annual_fund_'+i+'" value="0" readonly/></td><td><input type="number" class="form-control monthly_fund" name="monthly_fund[]" id="monthly_fund_'+i+'" value="0" onchange="get_annual_allocation_fund('+i+')"/></td><td> <button type="button" id="fund_goals_'+i+'" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');
    });
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       // $(this).closest('.dts').remove()
      var id = this.id;
  		var split_id = id.split("_");
  		var deleteindex = split_id[2];
      
        // Remove <div> with id
		  $("#dts_fund_goals_" + deleteindex).remove();

		  get_total_monthly_fund();
		  get_total_annual_fund();
  });

  function get_monthly_income_surplus()
  {
  	var surplus = $("#annual_income_surplus").val();
  	var monthly = parseInt(surplus)/12;
  	$("#monthly_income_surplus").val(monthly);
  	get_access_fund();
  }

  function get_annual_allocation_fund(id)
	{
		var sum_annual=0;
		var length = $('.sl_f_f_goals').length;
		
		var monthly_fund = $('#monthly_fund_'+id).val();

		var count_annual_fund = monthly_fund*12;
		$('#annual_fund_'+id).val(count_annual_fund);
		
		// var current_total_annualy_income = $('#current_total_annualy_income').val(sum_annual);

		var annual_fund = document.querySelectorAll('.annual_fund');
	
    for(var i = 0; i<annual_fund.length; i++){
          // console.log(annualy_income[i].id);
          // console.log(annualy_income[i].value);

          // console.log(per_income[i].id);
       var current_annual_fund = annual_fund[i].value;
			sum_annual = parseInt(sum_annual)+parseInt(current_annual_fund);

    }

		var current_total_annualy_income = $('#total_annual_fund').val(sum_annual);
		get_total_monthly_fund();
		//get_rep_amount();
  }
  function get_total_monthly_fund()
	{
		var sum_amount =0;

		$('.monthly_fund').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
     $('#total_monthly_fund').val(sum_amount);
    })

		get_access_fund();
	}
	function get_total_annual_fund()
	{
		var sum_amount =0;

		$('.annual_fund').each(function(){
			sum_amount += +$(this).val();
     // alert($(this).val());
      //$('#final_total').html(sum_amount);
     // alert(sum_amount);
     $('#total_annual_fund').val(sum_amount);
    })

		get_access_fund();
	}

	function get_access_fund()
	{
		var annual_income_surplus = $('#annual_income_surplus').val();
		var monthly_income_surplus = $('#monthly_income_surplus').val();

		var total_annual_fund = $('#total_annual_fund').val();
		var total_monthly_fund = $('#total_monthly_fund').val();

		var total_access_annual_fund = parseInt(annual_income_surplus) - parseInt(total_annual_fund);
		$('#access_annual_fund').val(total_access_annual_fund);

		var total_access_monthly_fund = parseInt(monthly_income_surplus) - parseInt(total_monthly_fund);
		$('#access_monthly_fund').val(total_access_monthly_fund);
	}
</script>
<!-- funding for goals end -->


<!-- Annexure 1 start -->
<script type="text/javascript">
	$('#add_annexure1').click(function(){
 
    var length = $('.sl_f_f_annexure1').length;
    var i   = parseInt(length)+parseInt(1);
    
    var newrow = $('#next_annexure1').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_f_f_annexure1" value="'+i+'"></div><td><input type="text" class="form-control" name="p_nominee[]" id="p_nominee" /></td><td><input type="number" class="form-control" name="insurer[]" id="insurer"/></td><td><input type="number" class="form-control" name="b_p_type[]" id="b_p_type"/></td><td><input type="number" class="form-control" name="t_ppt[]" id="t_ppt"/></td><td><input type="number" class="form-control" name="s_a_guaranteed[]" id="s_a_guaranteed"/></td><td><input type="number" class="form-control" name="m_of_payment[]" id="m_of_payment"/></td><td><input type="number" class="form-control" name="y_of_maturity[]" id="y_of_maturity"/></td><td> <button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');});
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('.dts').remove()
  });

</script>
<!-- Annexure 1 end -->

<!-- Annexure 2 start -->
<script type="text/javascript">
	$('#add_annexure2').click(function(){
 
    var length = $('.sl_f_f_annexure2').length;
    var i   = parseInt(length)+parseInt(1);
    
    var newrow = $('#next_annexure2').append('<tr class="dts"><div class="form-group"><input type="hidden" name="serial[]" class="sl_f_f_annexure2" value="'+i+'"></div><td><input type="text" class="form-control a_detail" name="a_detail[]" id="a_detail_'+i+'" /></td><td><input type="number" class="form-control a_amount" name="a_amount[]" id="a_amount_'+i+'"/></td><td> <button type="button" name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>-</button></td></tr>');});
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('.dts').remove()
  });


  function get_additional_insurance() 
  {
  	var present_value = $('#present_value').val();
		var less_present_value = $('#less_present_value').val();

		var total= parseInt(present_value)-parseInt(less_present_value);
		$("#additional_insurance").val(total);
  }
</script>
<!-- Annexure 2 end -->