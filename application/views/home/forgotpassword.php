	</header> <!-- end #header -->

	<div id="page-content">
		<div>
			<div class='notbodyclass'>
									<div class='slideregister col-sm-12'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Reset Password</h5>

												<div class="widget-content">
													<?php if($incorrect_login != '')
													{
													echo "<div class='alert alert-error'>
														<h6>$incorrect_login</h6>
														<a href='#' class='close fa fa-times'></a>
													</div>";
													}else
														if($reg_success != '')
													{
													echo "<div class='alert alert-success'>
														<h6>$reg_success</h6>
														<a href='#' class='close fa fa-times'></a>
													</div>";
													}
													?>
													<?php echo form_open('login/validate_password'); ?>
														<div class="form-group">
															<input type='text' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'>
														</div>
														<div class="text-center">
															<button type="submit" class="btn btn-default">Reset</button>
														</div>
															<br>
															<p class="text-center" style='color:white'>I remember now</p>
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
									<div class='slideregister col-sm-4 regshow'>
										<aside>
											<div class="widget sidebar-widget white-container black-container">
												<h5 class="mb20">Reset Password</h5>

												<div class="widget-content">
													<?php if($incorrect_login != '')
													{
													echo "<div class='alert alert-error'>
														<h6>$incorrect_login</h6>
														<a href='#' class='close fa fa-times'></a>
													</div>";
													}else
														if($reg_success != '')
													{
													echo "<div class='alert alert-success'>
														<h6>$reg_success</h6>
														<a href='#' class='close fa fa-times'></a>
													</div>";
													}
													?>
													<?php echo form_open('login/validate_password'); ?>
														<div class="form-group">
															<input type='text' class='form-control' placeholder='Email' name='email' value='<?php echo set_value('email'); ?>'>
														</div>
														<div class="text-center">
															<button type="submit" class="btn btn-default">Reset</button>
														</div>
															<br>
															<p class="text-center" style='color:white'>I remember now</p>
															<h5 class="text-center"><a href='<?=base_url()?>login/signin'>Sign In</a></h5>

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