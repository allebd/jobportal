	</header> <!-- end #header -->

	<div id="page-content">
		<div>
			<div class='notbodyclass'> 
									<div class='slideregister col-sm-12'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Registration</h5>

												<div class="widget-content">
													<?php
													if($reg_success != '')
													{
													echo "<div class='alert alert-success'>
														<h6>$reg_success</h6>
														<a href='#' class='close fa fa-times'></a>
													</div>";
													}
													?>
													<?php echo form_open('recruitlogin/register'); ?>
														<div class="form-group">
															<?php echo form_error('org_rep_firstname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Representative First Name' name='org_rep_firstname' value='<?php echo set_value('org_rep_firstname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('org_rep_surname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Representative Last Name' name='org_rep_surname' value='<?php echo set_value('org_rep_surname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('org_name', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Company Name' name='org_name' value='<?php echo set_value('org_name'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('employer_type', '<div class="error">', '</div>'); ?>
															<select name='employer_type' class='form-control' value=''>
																	<option value='' selected='selected' disabled='disabled'>Company Type</option>												
																	<option value='Recruitment Agency'>Recruitment Agency</option>
																	<option value='Direct Employer'>Direct Employer</option>
																	<option value='Charity Organization'>Charity Organization</option>
															</select>
														</div>

														<div class="form-group">
															<?php echo form_error('email', '<div class="error">', '</div>'); ?>
															<input type='email' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('r_username', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Username' name='r_username' value='<?php echo set_value('r_username'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('password', '<div class="error">', '</div>'); ?>
															<input type='password' class='form-control' placeholder='Password' name='password' value='<?php echo set_value('password'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('password2', '<div class="error">', '</div>'); ?>
															<input type='password' class='form-control' placeholder='Confirm Password' name='password2' value='<?php echo set_value('password2'); ?>'>
														</div>

														<div class="form-group">
															<?php foreach($terms->result() as $termrows):?>
															<input type='checkbox' name='terms' value=''><span class='m5'></span><span style='color:white'><a style='color:white' href='<?=base_url();?>recruiter/terms_download/<?=$termrows->upload?>'>Terms &amp Conditions</a></span>
															<?php endforeach;?>
														</div>

														<div class="text-center">
															<button type="submit" class="btn btn-default">Register</button>
														</div>
															<br>
															<p class="text-center" style='color:white'>Already have an account?</p>
															<h5 class="text-center"><a href='<?=base_url()?>recruitlogin/signin'>Sign In</a></h5>

													<?php echo form_close(); ?>
												</div>
											</div>
										</aside>
									</div><br>
			</div>
			<div class="header bodyclass">
				<div class="header-banner">
					<div class="flexslider header-slider">
						<ul class="slides">
							<li>
								
								<div class='headermsg headermgr headerwhite'>
									<div class='col-sm-8 text-left'>
										<h3>RECRUITERS
											<span class='fa fa-angle-right'><span class='fa fa-angle-right'><span class='fa fa-angle-right'></span></span></span>
										</h3>
										<h4 id="fourshow">Advertise Jobs <br>for FREEE!!!</h4>
										<h5 id="fiveshow">Powerful recruitment tools<br> at affordable packages</h5>
										<h4 id="fourhide">Power CV Search from our database</h4>
										<h5 id="fivehide">Find the right candidates by engaging our versatile cv matching and qualification tools.</h5>
									</div>
									<div class='slideregister col-sm-4 reghide'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Sign In</h5>

												<div class="widget-content">
													<?php echo form_open('recruitlogin/validate_credentials'); ?>
														<div class="form-group">
															<input type='text' class='form-control' placeholder='Username or Email' name='r_username' value='<?php echo set_value('email'); ?>'/>
														</div>

														<div class="form-group">
															<input type='password' class='form-control' placeholder='Password' name='password' />
														</div>
														<div class="text-center">
															<button type="submit" class="btn btn-default">Sign In</button>
														</div>
															<p class='mt20 text-center'><a href='<?=base_url()?>recruitlogin/forgotpassword'>Forgot Password?</a></p>
															<p class="text-center">Don't have an account yet? What are you waiting for?</p>
															<h5 class="text-center"><a href='#' class='dhide'>Register Here</a></h5>

													<?php echo form_close(); ?>
												</div>
											</div>
										</aside>
									</div>
									<div class='slideregister col-sm-4 regshow'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Registration</h5>

												<div class="widget-content">
													<?php
													if($reg_success != '')
													{
													echo "<div class='alert alert-success'>
														<h6>$reg_success</h6>
														<a href='#' class='close fa fa-times'></a>
													</div>";
													}
													?>
													<?php echo form_open('recruitlogin/register'); ?>
														<div class="form-group">
															<?php echo form_error('org_rep_firstname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Representative First Name' name='org_rep_firstname' value='<?php echo set_value('org_rep_firstname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('org_rep_surname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Representative Last Name' name='org_rep_surname' value='<?php echo set_value('org_rep_surname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('org_name', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Company Name' name='org_name' value='<?php echo set_value('org_name'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('employer_type', '<div class="error">', '</div>'); ?>
															<select name='employer_type' class='form-control' value=''>
																	<option value='' selected='selected' disabled='disabled'>Company Type</option>												
																	<option value='Recruitment Agency'>Recruitment Agency</option>
																	<option value='Direct Employer'>Direct Employer</option>
																	<option value='Charity Organization'>Charity Organization</option>
															</select>
														</div>

														<div class="form-group">
															<?php echo form_error('email', '<div class="error">', '</div>'); ?>
															<input type='email' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('r_username', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Username' name='r_username' value='<?php echo set_value('r_username'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('password', '<div class="error">', '</div>'); ?>
															<input type='password' class='form-control' placeholder='Password' name='password' value='<?php echo set_value('password'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('password2', '<div class="error">', '</div>'); ?>
															<input type='password' class='form-control' placeholder='Confirm Password' name='password2' value='<?php echo set_value('password2'); ?>'>
														</div>

														<?php foreach($terms->result() as $terrows):?>
														<div class="form-group">
															<input type='checkbox' id='checkme' name='terms' value=''><span class='m5'></span><span><a href='<?=base_url();?>recruiter/terms_download/<?=$terrows->upload?>'>Terms &amp Conditions</a></span>
														</div>
														<?php endforeach;?>

														<div class="text-center">
															<button type="submit" class="btn btn-default" id='registeracct' disabled='disabled'>Register</button>
														</div>
															<br>
															<p class="text-center">Already have an account?</p>
															<h5 class="text-center"><a href='#' class='dshow'>Sign In</a></h5>

													<?php echo form_close(); ?>
												</div>
											</div>
										</aside>
									</div>
									
								</div>
								<div data-image="<?=base_url();?>img/content/recruiters-landing.jpg"></div>
							</li>
						</ul>
					</div>
				</div> <!-- end .header-banner -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	<div id="page-content" class='bodyclass'>
		<?php if($toprecruit->num_rows() < 1):?>
		<?php echo ""; ?>
		<?php endif; ?>
		<?php if($toprecruit->num_rows() > 0):?>					
		<div class="success-stories-section">
			<div class="container">
				<h5 class="mt90">Our Top Recruiters</h5>

				<div>
					<div class="flexslider">
						<ul class="slides">
							<?php foreach($toprecruit->result() as $row): ?>
							<?php if($row->photo == ''):?>
							<?php echo ""; ?>
							<?php endif;?>
							<?php if($row->photo != ''):?>
							<li>
								<a href="#">
									<img src='<?=base_url()?>uploads/<?=$row->photo?>' width='125px' height='125px' class="thumb">
									<!-- <p>200 jobs</p> -->
								</a>
							</li>
							<?php endif;?>
							<?php endforeach;?>
						</ul>
					</div>
					<a href="<?=base_url();?>recruiter/all" class="btn btn-default pull-right mt40 mb40">See All Recruiters </a>
				</div>
			</div>
		</div>
		<?php endif;?>
	</div> <!-- end #page-content -->
