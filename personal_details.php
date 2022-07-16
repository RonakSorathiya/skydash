<?php include 'header.php'; ?>      
<div class="content-wrapper">
  <div class="row">
  	<div class="col-md-12">
	 		<div class="card">
	      <div class="card-body">
	        <div class="container mt-3">
						<!-- <h2>Toggleable Tabs</h2> -->
						<!-- <br> -->
						  <!-- Nav tabs -->
						<ul class="nav nav-tabs">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
						    </li>
						</ul>

						  <!-- Tab panes -->
						<div class="tab-content">
						    <div id="home" class="container tab-pane active"><br>
						      <!-- <h3>HOME</h3>
						      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
					
			                  	<!-- <h4 class="card-title">Horizontal Two column</h4> -->
				                <form class="form-sample" method="post">
				                    <p class="card-description">
				                      Personal info
				                    </p>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Self Name</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" name="s_name"/>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Self Age</label>
				                          <div class="col-sm-9">
				                            <input type="number" class="form-control" name="s_age"/>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Self Pan</label>
				                          <div class="col-sm-9">
				                           <input type="text" class="form-control" name="s_pan"/>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Self Occupation</label>
				                          <div class="col-sm-9">
				                           <input type="text" class="form-control" name="s_occ"/>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Spouse Name</label>
				                          <div class="col-sm-9">
				                           <input type="text" class="form-control" name="sp_name">
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Spouse Age</label>
				                         	<div class="col-sm-9">
	                            				<input type="number" class="form-control" name="sp_age">                            
	                          				</div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Spouse Pan</label>
				                          <div class="col-sm-9">
				                           <input type="text" class="form-control" name="sp_pan">
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Spouse Occupation</label>
				                         	<div class="col-sm-9">
	                            				<input type="number" class="form-control" name="sp_occ">                            
	                          				</div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
					                    <div class="col-md-6">
					                        <div class="form-group row">
					                          <label class="col-sm-3 col-form-label">Personal Contact</label>
					                          <div class="col-sm-9">
					                           <input type="text" class="form-control" name="p_contact">
					                          </div>
					                        </div>
					                    </div>
					                    <div class="col-md-6">
					                        <div class="form-group row">
					                          <label class="col-sm-3 col-form-label">Personal Email</label>
					                         	<div class="col-sm-9">
		                            				<input type="number" class="form-control" name="p_email">                     
		                          				</div>
					                        </div>
					                    </div>
				                    </div>
				                    <div class="row">
					                    <div class="col-md-6">
					                        <div class="form-group row">
					                          <label class="col-sm-3 col-form-label">Personal Address</label>
					                          <div class="col-sm-9">
					                            <textarea rows="4" class="form-control" name="p_add"/> </textarea> 
					                          </div>
					                        </div>
					                    </div>
				                    </div>

				                    <p class="card-description">
				                      Family Details
				                    </p>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Name</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" name="f_name"/>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Relationship</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" name="f_rel"/>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Age</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" name="f_age"/>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Dependant</label>
				                          <div class="col-sm-9">
				                            <select class="form-control" name="f_dpn">
				                              <option>Yes</option>
				                              <option>No</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <!-- <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">City</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Country</label>
				                          <div class="col-sm-9">
				                            <select class="form-control">
				                              <option>America</option>
				                              <option>Italy</option>
				                              <option>Russia</option>
				                              <option>Britain</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                    </div> -->
				                    <button type="submit" class="btn btn-primary mb-2" name="save_personal_details">Submit</button>
		              			</form>
						    </div>

						    <div id="menu1" class="container tab-pane fade"><br>
						    <!--   <h3>Menu 1</h3>
						      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						      <h4 class="card-title">Horizontal Two column</h4> -->
				                <form class="form-sample" method="post">
				                    <p class="card-description">
				                      Financial Goal
				                    </p>
				                    <div class="form-group row">
					                    <div class="col-md-2">
					                      <label for="exampleInputEmail1">Description</label>
					                      <input type="text"  class="form-control" name="g_dsc[]" id="g_dsc" placeholder="Enter Description" autofocus="" tabindex="1">
					                    </div>
					                    <div class="col-md-2">
					                        <label for="exampleInputPassword1">Frequency</label>
					                        <input type="number" class="form-control"  name="g_freq[]" id="g_freq" placeholder="Enter Frequency" tabindex="2">
					                    </div>
					                    <div class="col-md-2">
					                        <label for="exampleInputPassword1">Goal Rs</label>
					                        <input type="text" class="form-control" name="g_value[]" id="g_value" placeholder="Enter Goal Rs." tabindex="4">
					                    </div>
					                    <div class="col-md-2">
					                        <label for="exampleInputPassword1">Inflation Rate</label>
					                        <input type="number" class="form-control" name="g_Inflation[]" id="g_Inflation" placeholder="Enter Inflation Rate" tabindex="4">
					                    </div>
					                    <div class="col-md-2">
					                        <label for="exampleInputPassword1">Start Year</label>
					                        <input type="text" class="form-control" name="g_st_year[]" id="g_st_year" placeholder="Enter Start Year" tabindex="4">
					                    </div>
					                    <div class="col-md-2">
					                        <label for="exampleInputPassword1">End Year</label>
					                        <input type="text" class="form-control" name="g_end_year[]" id="g_end_year" placeholder="Enter End Year" tabindex="4">
					                    </div>
					                    <div class="col-md-2">
					                        <label for="exampleInputPassword1">Priority</label>
					                        <input type="text" class="form-control" name="g_priority[]" id="g_priority" placeholder="Enter Priority" tabindex="4">
					                    </div>
					                    <div class="col-md-2">
					                          <label for="exampleInputPassword1"><br></label><br>
					                           <button type="button" id="add_financial_goal"  name="addmore" class="btn btn-primary btn-sm" style="float: center;">Add</button>
					                    </div>
					                </div>

					                <input type="hidden" name="serial[]" class="sl_financial_goal" id="hd" value="1">
					                <div id="next_financial_goal"></div>

					                <div class="form-group row">
					                	<div class="col-md-8">
					                      <label for="exampleInputEmail1">Note</label>
					                      <textarea rows="3" class="form-control" name="note[]" placeholder="Enter Note" /></textarea>
					                    </div>
					                    <div class="col-md-1">
					                          <label for="exampleInputPassword1"><br></label><br>
					                          <button type="button" id="add_note"  name="addmore" class="btn btn-primary btn-sm">Add</button>
					                    </div>
					                </div>
					                <input type="hidden" name="serial[]" class="sl_note" id="hd" value="1">
					                <div id="next_note"></div>

					                <div class="form-group row">
					                	<div class="col-md-8">
					                      <label for="exampleInputEmail1">Assumption</label>
					                      <textarea rows="3" class="form-control" name="a_description[]" placeholder="Enter Assumption" /></textarea>
					                    </div>
					                    <div class="col-md-1">
					                       	<label for="exampleInputPassword1"><br></label><br>
					                        <button type="button" id="add_assumption"  name="addmore" class="btn btn-primary btn-sm">Add</button>
					                    </div>
					                </div>
					                <input type="hidden" name="serial[]" class="sl_assumption" id="hd" value="1">
					                <div id="next_assumption"></div>

					                 <div class="form-group row">
					                	<div class="col-md-8">
					                      <label for="exampleInputEmail1">Risk Level</label>
					                      <textarea rows="3" class="form-control" name="risk_level" placeholder="Enter Risk Level" /></textarea>
					                    </div>
					                </div>
					                <button type="submit" class="btn btn-primary mb-2" name="save_financial_goal">Submit</button>
				                   <!--  <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">First Name</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Last Name</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Gender</label>
				                          <div class="col-sm-9">
				                            <select class="form-control">
				                              <option>Male</option>
				                              <option>Female</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Date of Birth</label>
				                          <div class="col-sm-9">
				                            <input class="form-control" placeholder="dd/mm/yyyy"/>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Category</label>
				                          <div class="col-sm-9">
				                            <select class="form-control">
				                              <option>Category1</option>
				                              <option>Category2</option>
				                              <option>Category3</option>
				                              <option>Category4</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Membership</label>
				                          <div class="col-sm-4">
				                            <div class="form-check">
				                              <label class="form-check-label">
				                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
				                                Free
				                              </label>
				                            </div>
				                          </div>
				                          <div class="col-sm-5">
				                            <div class="form-check">
				                              <label class="form-check-label">
				                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
				                                Professional
				                              </label>
				                            </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <p class="card-description">
				                      Address
				                    </p>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Address 1</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">State</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Address 2</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Postcode</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">City</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Country</label>
				                          <div class="col-sm-9">
				                            <select class="form-control">
				                              <option>America</option>
				                              <option>Italy</option>
				                              <option>Russia</option>
				                              <option>Britain</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                    </div> -->
		              			</form>
						    </div>

						    <div id="menu2" class="container tab-pane fade"><br>
						      <h3>Menu 2</h3>
						      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

						      <h4 class="card-title">Horizontal Two column</h4>
				                <form class="form-sample">
				                    <p class="card-description">
				                      Personal info
				                    </p>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">First Name</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Last Name</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Gender</label>
				                          <div class="col-sm-9">
				                            <select class="form-control">
				                              <option>Male</option>
				                              <option>Female</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Date of Birth</label>
				                          <div class="col-sm-9">
				                            <input class="form-control" placeholder="dd/mm/yyyy"/>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Category</label>
				                          <div class="col-sm-9">
				                            <select class="form-control">
				                              <option>Category1</option>
				                              <option>Category2</option>
				                              <option>Category3</option>
				                              <option>Category4</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Membership</label>
				                          <div class="col-sm-4">
				                            <div class="form-check">
				                              <label class="form-check-label">
				                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
				                                Free
				                              </label>
				                            </div>
				                          </div>
				                          <div class="col-sm-5">
				                            <div class="form-check">
				                              <label class="form-check-label">
				                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
				                                Professional
				                              </label>
				                            </div>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <p class="card-description">
				                      Address
				                    </p>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Address 1</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">State</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Address 2</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Postcode</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                    <div class="row">
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">City</label>
				                          <div class="col-sm-9">
				                            <input type="text" class="form-control" />
				                          </div>
				                        </div>
				                      </div>
				                      <div class="col-md-6">
				                        <div class="form-group row">
				                          <label class="col-sm-3 col-form-label">Country</label>
				                          <div class="col-sm-9">
				                            <select class="form-control">
				                              <option>America</option>
				                              <option>Italy</option>
				                              <option>Russia</option>
				                              <option>Britain</option>
				                            </select>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
		              			</form>
						    </div>
						</div>
					</div>
	    		</div>
	    	</div>
			</div>
		</div>
</div>


<script
  src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script>
$('#add_financial_goal').click(function(){
   
    var length = $('.sl_financial_goal').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_financial_goal').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_financial_goal" value="'+i+'"></div><div class="form-group row dts"><div class="col-md-2"><label for="exampleInputEmail1">Description</label><input type="text"  class="form-control" name="g_dsc[]" id="g_dsc" placeholder="Enter Description" autofocus="" tabindex="1"></div><div class="col-md-2"><label for="exampleInputPassword1">Frequency</label><input type="number" class="form-control"  name="g_freq[]" id="g_freq" placeholder="Enter Frequency" tabindex="2"></div><div class="col-md-2"><label for="exampleInputPassword1">Goal Rs</label><input type="text" class="form-control" name="g_value[]" id="g_value" placeholder="Enter Goal Rs." tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Inflation Rate</label><input type="number" class="form-control" name="g_Inflation[]" id="g_Inflation" placeholder="Enter Inflation Rate" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Start Year</label><input type="text" class="form-control" name="g_st_year[]" id="g_st_year" placeholder="Enter Start Year" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">End Year</label><input type="text" class="form-control" name="g_end_year[]" id="g_end_year" placeholder="Enter End Year" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1">Priority</label><input type="text" class="form-control" name="g_priority[]" id="g_priority" placeholder="Enter Priority" tabindex="4"></div><div class="col-md-2"><label for="exampleInputPassword1"><br></label><br><button type="button"   name="addmore" class="btn btn-danger btn-sm btnRemove" style="float: center;"><i class="fa fa-plus"></i>Remove</button></div></div>');
    
    });
  
  // Removing event here
  $('body').on('click','.btnRemove',function() {
       $(this).closest('.dts').remove()
  });

  
  $('#add_note').click(function(){
   
    var length = $('.sl_note').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_note').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_note" value="'+i+'"></div> <div class="form-group row dts_note"><div class="col-md-8"><label for="exampleInputEmail1">Note</label><textarea rows="3" class="form-control" name="note[]" placeholder="Enter Note" /></textarea></div><div class="col-md-1"><label for="exampleInputPassword1"><br></label><br><button type="button" name="addmore" class="btn btn-danger btn-sm btnNoteRemove">Remove</button></div></div>');
    
    });
  
  // Removing event here
  $('body').on('click','.btnNoteRemove',function() {
       $(this).closest('.dts_note').remove()
  });

   $('#add_assumption').click(function(){
   
    var length = $('.sl_assumption').length;
    var i   = parseInt(length)+parseInt(1);
    var newrow = $('#next_assumption').append('<div class="form-group"><input type="hidden" name="serial[]" class="sl_assumption" value="'+i+'"></div> <div class="form-group row dts_assumption"><div class="col-md-8"><label for="exampleInputEmail1">Assumption</label><textarea rows="3" class="form-control" name="a_description[]" placeholder="Enter Assumption" /></textarea></div><div class="col-md-1"><label for="exampleInputPassword1"><br></label><br><button type="button"  name="addmore" class="btn btn-danger btn-sm btnAssumptionRemove">Remove</button></div></div>');
    
    });
  
  // Removing event here
  $('body').on('click','.btnAssumptionRemove',function() {
       $(this).closest('.dts_assumption').remove()
  });
</script>
<?php include 'footer.php'; ?>