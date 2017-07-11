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
													<?php echo form_open('login/register'); ?>
														<div class="form-group">
															<?php echo form_error('firstname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='First Name' name='firstname' value='<?php echo set_value('firstname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('surname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Last Name' name='surname' value='<?php echo set_value('surname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('email', '<div class="error">', '</div>'); ?>
															<input type='email' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('username', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Username' name='username' value='<?php echo set_value('username'); ?>'>
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
															<input type='checkbox' id='checkme' name='terms' value=''><span class='m5'></span><span><a href='<?=base_url();?>home/terms_download/<?=$terrows->upload?>'>Terms &amp Conditions</a></span>
														</div>
														<?php endforeach;?>

														<div class="text-center">
															<button type="submit" class="btn btn-default" id='registeracct' disabled='disabled'>Register</button>
														</div>
															<p class="text-center" style='color:white'>Already have an account?</p>
															<h5 class="text-center"><a href='<?=base_url()?>login/signin'>Sign In</a></h5>						
														
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
								
								<div class='headermsg headermgr'>
									<div class='col-sm-8 text-left'>
										<h4>Find and apply for top jobs today!</h4>
										<h5>Discover amazing career and employment opportunities</h5>
									</div>
									<div class='slideregister col-sm-4 reghide'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Sign In</h5>

												<div class="widget-content">
													<?php echo form_open('login/validate_credentials'); ?>
														<div class="form-group">
															<input type='text' class='form-control' placeholder='Username or Email' name='username' value='<?php echo set_value('email'); ?>'>
														</div>

														<div class="form-group">
															<input type='password' class='form-control' placeholder='Password' name='password' >
														</div>
														<div class="text-center">
															<button type="submit" class="btn btn-default">SIGN IN</button>
														</div>
															<p class='mt20 text-center'><a href='<?=base_url()?>login/forgotpassword'>Forgot Password?</a></p>
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
													<?php echo form_open('login/register'); ?>
														<div class="form-group">
															<?php echo form_error('firstname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='First Name' name='firstname' value='<?php echo set_value('firstname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('surname', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Last Name' name='surname' value='<?php echo set_value('surname'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('email', '<div class="error">', '</div>'); ?>
															<input type='email' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('username', '<div class="error">', '</div>'); ?>
															<input type='text' class='form-control' placeholder='Username' name='username' value='<?php echo set_value('username'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('password', '<div class="error">', '</div>'); ?>
															<input type='password' class='form-control' placeholder='Password' name='password' value='<?php echo set_value('password'); ?>'>
														</div>

														<div class="form-group">
															<?php echo form_error('password2', '<div class="error">', '</div>'); ?>
															<input type='password' class='form-control' placeholder='Confirm Password' name='password2' value='<?php echo set_value('password2'); ?>'>
														</div>

														<?php foreach($terms->result() as $termrows):?>
														<div class="form-group">
															<input type='checkbox' id='checkmes' name='terms'><span class='m5'></span><span><a href='<?=base_url();?>home/terms_download/<?=$termrows->upload?>'>Terms &amp Conditions</a></span>
														</div>
														<?php endforeach;?>

														<div class="text-center">
															<button type="submit" class="btn btn-default" id='registeraccts' disabled>REGISTER</button>
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
								<div data-image="<?=base_url();?>img/content/applicants-landing.jpg"></div>
							</li>
						</ul>
					</div>
				</div> <!-- end .header-banner -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	<div id="header" class='bodyclass'>
		<div class="header-search-bar">
			<div class="container  pt50 pb50">
				<?php echo form_open('jobs/job_search'); ?>
					<div class="basic-form clearfix">
						<a href="#" class="toggle"><span></span></a>

						<div class="hsb-input-1">
							<input type="text" class="form-control" placeholder="Search for a job e.g Web Developer" name='areas_of_special'>
						</div>

						<div class="hsb-text-1">in</div>

						<div class="hsb-container">
							<div class="hsb-input-2">
								<select name='job_location' class='form-control'>
									<option value='' disabled='disabled' selected='selected'>Location</option>
									<?php foreach($location->result() as $row): ?>																
									<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
									<?php endforeach; ?>
								</select>										
							</div>

							<div class="hsb-select">
								<select name='work_exp' class='form-control'>
									<option value='' disabled='disabled' selected='selected'>Years of Experience</option>
									<?php foreach($year_experience->result() as $row): ?>																
									<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
									<?php endforeach; ?>
								</select>															
							</div>
						</div>

						<div class="hsb-submit">
							<input type="submit" class="btn btn-gray btn-block" value="Search">
						</div>
					</div>

					<div class="advanced-form">
						<div class="container">
							<div class="row">
								<label class="col-md-3">Salary</label>

								<div class="col-md-9">
									<select name='salary_level' class='form-control' >
										<option value='' disabled='disabled' selected='selected'>Salary</option>
										<?php foreach($salary->result() as $row): ?>																
										<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
										<?php endforeach; ?>
									</select>									
								</div>
							</div>

							<div class="row">
								<label class="col-md-3">Job type</label>

								<div class="col-md-9">
									<select name='engagement_type' class='form-control'>
										<option value='' disabled='disabled' selected='selected'>Job Type</option>
										<?php foreach($job_type->result() as $row): ?>																
										<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
										<?php endforeach; ?>
									</select>	
								</div>
							</div>

							<div class="row">
								<label class="col-md-3">Industry</label>

								<div class="col-md-9">
									<select name='company_industry' class='form-control'>
										<option value='' disabled='disabled' selected='selected'>Industry</option>
										<?php foreach($industry->result() as $row): ?>																
										<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="row">
								<label class="col-md-3">Qualification</label>

								<div class="col-md-9">
									<select name='education_qualification' class='form-control'>
										<option value='' disabled='disabled' selected='selected'>Qualification</option>
										<?php foreach($highest_education->result() as $row): ?>																
										<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div> <!-- end .header-search-bar -->
	</div>