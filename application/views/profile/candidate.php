	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content">
								<div class="row">
									<?php foreach($query->result() as $row): ?>
									<?php if($row->profile_photo != ''):?>
											<div class='col-sm-6'><p><img src='<?=base_url()?>uploads/<?=$row->profile_photo?>' width='125px' height='125px'></p></div> 
											<div class='col-sm-6'><a class="btn btn-gray" id='candidate-pic'>Change</a></div>
									<?php endif; ?>	
									<?php endforeach?>
									<br>
									<div id='candidate-pic-change' class='col-sm-12'>
										<?php echo $error; ?>
										<?php echo form_open_multipart('upload/do_upload_pic');?>

										<input type="file" name="userfile" />
										<br>
										<input type='submit' class='btn btn-gray pull-left' value='Upload Picture' />
										<?=form_close();?>	
									</div>
								</div>
							</div>
						</div>
						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content mtm30">
								<?php foreach($query->result() as $row): ?>
								<?php echo form_open('profile/candidates_contact_insert'); ?>															
								<h5 class="bottom-line bottomwhite-line">Contact <span class="pull-right"><a href="#" id='candidate-contact-edit' class="btn btn-gray">Edit</a>
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-contact-save'/>
									<a href="#" id='candidate-contact-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='candidate-contact-normal'>
									<tbody>
										<tr>
											<td>E-mail</td>
											<td><a href="mailto:<?=$row->email?>"><?=$row->email?></a></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?=$row->mobile_number?></td>
										</tr>
										<tr>
											<td>Date Of Birth</td>
											<td><?=date_format(date_create($row->dob), 'M j, Y');?></td>
										</tr>

										<tr>
											<td>Address</td>
											<td><?=$row->contact_address?></td>
										</tr>

										<tr>
											<td>Location</td>
											<td><?=$row->location?></td>
										</tr>

										<tr>
											<td>Gender</td>
											<td><?=$row->gender?></td>
										</tr>

										<tr>
											<td>Language Spoken</td>
											<td><?=$row->language?></td>
										</tr>
										
									</tbody>
								</table>

								<table id='candidate-contact-editing'>
									<tbody>
										<tr>
											<td>Surname</td>
											<td><?php echo form_input('surname', set_value('surname', $row->surname), 'id="surname" class="form-control"');?></td>
										</tr>
										<tr>
											<td>First name</td>
											<td><?php echo form_input('firstname', set_value('firstname', $row->firstname), 'id="firstname" class="form-control"');?></td>
										</tr>
										<tr>
											<td>E-mail</td>
											<td><input type='email' class='form-control' name='email' value= '<?=$row->email?>' /></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?php echo form_input('mobile_number', set_value('mobile_number', $row->mobile_number), 'id="mobile_number" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td><input type='date' name='dob' id="dob" class="form-control" value='<?=$row->dob?>'></td>
										</tr>

										<tr>
											<td>Address</td>
											<td><?php echo form_input('contact_address', set_value('contact_address', $row->contact_address), 'id="contact_address" class="form-control"');?></td>
										</tr>

										<tr>
											<td>Location</td>											
											<td><?php echo form_dropdown('location', $location_options, set_value('location',$row->location), 'id="location" class="form-control"'); ?></td>											
										</tr>

										<tr>
											<td>Gender</td>
											<td><?php echo form_dropdown('gender', $gender_options, set_value('gender',$row->gender), 'id="gender" class="form-control"'); ?></td>
										</tr>

										<tr>
											<td>Language Spoken</td>
											<td><?php echo form_input('language', set_value('language', $row->language), 'id="language" class="form-control"');?></td>
										</tr>
										
									</tbody>
								</table>
								<?php echo form_close(); ?>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content mtm30">
								<?php if($testquery->num_rows() < 1):?>
								<?php echo form_open('profile/candidates_test_insert'); ?>
									<h5 class="bottom-line bottomwhite-line">Testimony <span class="pull-right"><a href="#" id='candidate-test-edit' class="btn btn-gray">Add</a>
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-test-save'/>
									<a href="#" id='candidate-test-cancel' class="btn btn-gray">Cancel</a></span></h5>
									<table id='candidate-test-editing'>
									<tbody>
										<tr>
											<td>Company</td>
											<td><?php echo form_input('company_name', set_value('company_name'), 'id="company_name" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Testimony</td>
											<td><?php echo form_textarea('body', set_value('body'), 'id="body" class="form-control"');?></td>
										</tr>										
									</tbody>
								</table>
								<?php echo form_close(); ?>
								<?php endif;?>
								<?php if($testquery->num_rows() > 0):?>
								<?php foreach($testquery->result() as $trow): ?>
								<?php echo form_open('profile/candidates_test_update'); ?>															
								<h5 class="bottom-line bottomwhite-line">Testimony <span class="pull-right"><a href="#" id='candidate-test-edit' class="btn btn-gray">Edit</a>
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-test-save'/>
									<a href="#" id='candidate-test-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='candidate-test-normal'>
									<tbody>
										<tr>
											<td>Company</td>
											<td><?=$trow->company_name?></a></td>
										</tr>
										<tr>
											<td>Testimony</td>
											<td><?=$trow->body?></td>
										</tr>
									</tbody>
								</table>

								<table id='candidate-test-editing'>
									<tbody>
										<tr>
											<td>Company</td>
											<td><?php echo form_input('company_name', set_value('company_name', $trow->company_name), 'id="company_name" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Testimony</td>
											<td><?php echo form_textarea('body', set_value('body', $trow->body), 'id="body" class="form-control"');?></td>
										</tr>										
									</tbody>
								</table>
								<?php echo form_close(); ?>
								<?php endforeach; ?>
								<?php endif;?>
							</div>
						</div>
						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content mtm30">
								<?php foreach($query->result() as $row): ?>
									<?php echo form_open('profile/password_insert'); ?>															
										<h5 class="bottom-line bottomwhite-line">Password<span class="pull-right">
											<input type='submit' class='btn btn-gray' value='Save' id='recruiter-contact-save'/>
											<a href="#" id='recruiter-contact-cancel' class="btn btn-gray">Cancel</a></span></h5>

										<table id='recruiter-contact-normal'>
											<tbody>
												<tr>
													<td>Password</td>											
													<td><?php echo form_error('password', '<p class="error">', '</p>'); ?>
														<?php echo form_error('password2', '<p class="error">', '</p>'); ?>
														<a href="#" id='recruiter-contact-edit' class="btn btn-gray">Change password</a></td>
												</tr>																										
											</tbody>
										</table>

										<table id='recruiter-contact-editing'>
											<tbody>
												<tr>
													<td>New password</td>
													<td><?php echo form_password('password', set_value('password'), 'id="password" class="form-control"');?></td>
												</tr>
												<tr>
													<td>Confirm password</td>
													<td><?php echo form_password('password2', set_value('password2'), 'id="password2" class="form-control"');?></td>
												</tr>																												
											</tbody>
										</table>
									<?php echo form_close(); ?>							
								<?php endforeach; ?>							
							</div>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class="candidates-item candidates-single-item">
								<h4 class="bottom-line mtm3">Career Details <span class="pull-right"><a href="<?=base_url()?>profile/candidates_career_edit" class="btn btn-gray">Edit</a></span></h4>

								<table class='mtm3'>
									<tbody>
										<tr>
											<td>Desire Job Type</td>
											<td><?=$row->desired_job_type?></td>
										</tr>
										<tr>
											<td>Experience</td>
											<td><?=$row->years_of_exp?></td>
										</tr>
										<tr>
											<td>Specialization</td>
											<td><?=$row->area_of_special?></td>
										</tr>
										<tr>
											<td>Willing to Relocate</td>
											<td><?=$row->relocate?></td>
										</tr>
										<tr>
											<td>Current Industry</td>
											<td><?=$row->c_work_industry?></td>
										</tr>
										<tr>
											<td>Recent Employer</td>
											<td><?=$row->most_r_employer?></td>
										</tr>									

										<tr>
											<td>Highest Education</td>
											<td><?=$row->highest_education?></td>
										</tr>
										<tr>
											<td>Skills</td>
											<td><?=$row->skill?></td>
										</tr>

										<tr>
											<td>Expected Salary</td>
											<td><?=$row->expected_salary?></td>
										</tr>
										
									</tbody>
								</table>

								<hr>
								<hr>
						<?php echo form_open('profile/candidates_work_record_insert'); ?>
							<h4 class="bottom-line mt30">Work Experience 
								<span class="pull-right">
									<a href="#" class="btn btn-gray" id='candidate-work-add'>Add Record</a>
									<input type='submit' class='btn btn-gray' id='candidate-work-save-record' value='Save' />
									<a href="#" class="btn btn-gray" id='candidate-work-cancel-record'>Cancel</a>									
								</span>
							</h4>
							<div id="candidate-work-general">
							<?php if($workquery->num_rows() > 0):?>
								<?php foreach($workquery->result() as $row): ?>
									<div id="candidate-work-individual">
										<h6 class="title"><a href="#"><?=$row->work_name?></a></h6>
										<span class="meta"><?=$row->work_industry?></span>
										
										<ul class="social-icons pull-right clearfix">
											<li><a href="<?=base_url();?>profile/candidates_work_edit/<?=$row->work_id?>" class="btn btn-gray fa fa-edit" id='candidate-work-edit' title="Edit"></a></li>
											<li><a href="<?=base_url();?>profile/candidates_work_delete/<?=$row->work_id?>" class="btn btn-gray fa fa-trash-o" title="Delete" id='candidate-work-delete'></a></li>
										</ul>

										<p><?=$row->work_description?></p>

										<ul class="list-unstyled">
											<li><strong>Duration:</strong> <?=$row->work_from?> to <?=$row->work_to?></li>
											<li><strong>Position Held:</strong> <?=$row->work_position?></li>
											<li><strong>Job Type:</strong> <?=$row->work_type?></li>
										</ul>
									</div>

									<hr>
								<?php endforeach; ?>							
							<?php endif; ?>
							</div>

							<div id="candidate-work-general-add">
								<p><?php echo form_label('Company Name', 'company');?>
									<?php echo form_error('work_name'); ?>
								<?php echo form_input('work_name', set_value('work_name'), 'id="company" class="form-control"');?></p>

								<p><?php echo form_label('Company Industry', 'industry');?>
								<?php echo form_dropdown('work_industry', $industry_options, set_value('work_industry'), 'id="work_industry" class="form-control"'); ?></p>

								<p><?php echo form_label('Date Started (e.g April 2000)', 'date_s');?>
								<?php echo form_input('work_from', set_value('work_from'), 'id="date_s" class="form-control"');?></p>		
								
								<p><?php echo form_label('Date Ended (e.g April 2000 or Till date)', 'date_f');?>
								<?php echo form_input('work_to', set_value('work_to'), 'id="date_f" class="form-control"');?></p>
								
								<p><?php echo form_label('Job Title/ Positon held', 'work_position');?>
								<?php echo form_input('work_position', set_value('work_position'), 'id="job_title" class="form-control"');?></p>	
								
								<p><?php echo form_label('Job Type', 'job_type');?>
								<?php echo form_dropdown('work_type', $job_options, set_value('work_type'), 'id="work_type" class="form-control"'); ?></p>	
								
								<p><?php echo form_label('Job Description', 'job_desc');?>
								<?php echo form_textarea('work_description', set_value('work_description'), 'id="job_title" class="form-control"');?></p>	
							</div>
						<?=form_close();?>
						<hr>					

						<?php echo form_open('profile/candidates_edu_record_insert'); ?>
							<h4 class="bottom-line mt30">Education History 
								<span class="pull-right">
									<a href="#" class="btn btn-gray" id='candidate-edu-add'>Add Record</a>
									<input type='submit' class='btn btn-gray' id='candidate-edu-save-record' value='Save' />
									<a href="#" class="btn btn-gray" id='candidate-edu-cancel-record'>Cancel</a>									
								</span>
							</h4>
							<div id="candidate-edu-general">
							<?php if($eduquery->num_rows() > 0):?>
								<?php foreach($eduquery->result() as $row): ?>
									<div id="candidate-edu-individual">
										<h6 class="title"><a href="#"><?=$row->education_name?></a></h6>
										<span class="meta"><?=$row->education_type?></span>
										
										<ul class="social-icons pull-right clearfix">
											<li><a href="<?=base_url();?>profile/candidates_edu_edit/<?=$row->education_id?>" class="btn btn-gray fa fa-edit" id='candidate-edu-edit' title="Edit"></a></li>
											<li><a href="<?=base_url();?>profile/candidates_edu_delete/<?=$row->education_id?>" class="btn btn-gray fa fa-trash-o" title="Delete" id='candidate-edu-delete'></a></li>
										</ul>

										<ul class="list-unstyled">
											<li><strong>Duration:</strong> <?=$row->degree_from?> to <?=$row->degree_to?></li>
											<li><strong>Degree Obtained:</strong> <?=$row->degree_obtained?></li>
											<li><strong>Classification:</strong> <?=$row->degree_class?></li>
										</ul>
									</div>

									<hr>
								<?php endforeach; ?>							
							<?php endif; ?>
							</div>

							<div id="candidate-edu-general-add">
								<p><?php echo form_label('Institution', 'institution');?>
									<?php echo form_error('education_name'); ?>
								<?php echo form_input('education_name', set_value('education_name'), 'id="education_name" class="form-control"');?></p>

								<p><?php echo form_label('Type of Institution', 'institution_type');?>
								<?php echo form_input('education_type', set_value('education_type'), 'id="education_type" class="form-control"'); ?></p>

								<p><?php echo form_label('Date Started (e.g 2000)', 'degree_from');?>
								<?php echo form_input('degree_from', set_value('degree_from'), 'id="degree_from" class="form-control"');?></p>		
								
								<p><?php echo form_label('Date Ended (e.g 2000 or Till date)', 'degree_to');?>
								<?php echo form_input('degree_to', set_value('degree_to'), 'id="degree_to" class="form-control"');?></p>
								
								<p><?php echo form_label('Degree Obtained', 'degree_obtained');?>
								<?php echo form_input('degree_obtained', set_value('degree_obtained'), 'id="degree_obtained" class="form-control"');?></p>	
								
								<!-- <p><?php echo form_label('Job Type', 'job_type');?>
								<?php echo form_dropdown('work_type', $job_options, set_value('work_type'), 'id="work_type" class="form-control"'); ?></p>	
								 -->
								<p><?php echo form_label('Classification', 'degree_class');?>
								<?php echo form_input('degree_class', set_value('degree_class'), 'id="degree_class" class="form-control"');?></p>	
							</div>
						<?=form_close();?>
						<hr>

						<?php echo form_open('profile/candidates_cert_record_insert'); ?>
							<h4 class="bottom-line mt30">Certifications 
								<span class="pull-right">
									<a href="#" class="btn btn-gray" id='candidate-cert-add'>Add Record</a>
									<input type='submit' class='btn btn-gray' id='candidate-cert-save-record' value='Save' />
									<a href="#" class="btn btn-gray" id='candidate-cert-cancel-record'>Cancel</a>									
								</span>
							</h4>
							<div id="candidate-cert-general">
							<?php if($certquery->num_rows() > 0):?>
								<?php foreach($certquery->result() as $row): ?>
									<div id="candidate-cert-individual">
										<h6 class="title"><a href="#"><?=$row->certificate_title?></a></h6>
										<span class="meta"><?=$row->certificate_date?></span>
										
										<ul class="social-icons pull-right clearfix">
											<li><a href="<?=base_url();?>profile/candidates_cert_edit/<?=$row->certificate_id?>" class="btn btn-gray fa fa-edit" id='candidate-cert-edit' title="Edit"></a></li>
											<li><a href="<?=base_url();?>profile/candidates_cert_delete/<?=$row->certificate_id?>" class="btn btn-gray fa fa-trash-o" title="Delete" id='candidate-cert-delete'></a></li>
										</ul>
										
									</div>

									<hr>
								<?php endforeach; ?>							
							<?php endif; ?>
							</div>

							<div id="candidate-cert-general-add">
								<p><?php echo form_label('Certificate Title', 'certificate_title');?>
									<?php echo form_error('certificate_title'); ?>
								<?php echo form_input('certificate_title', set_value('certificate_title'), 'id="certificate_title" class="form-control"');?></p>

								<p><?php echo form_label('Certificate Date', 'certificate_date');?>
								<?php echo form_input('certificate_date', set_value('certificate_date'), 'id="certificate_date" class="form-control"'); ?></p>

								<!-- <p><?php echo form_label('Job Type', 'job_type');?>
								<?php echo form_dropdown('work_type', $job_options, set_value('work_type'), 'id="work_type" class="form-control"'); ?></p>	
								 -->								
							</div>
							<?=form_close();?>	
							
							<hr>

							<div class="clearfix">
								<h4 class="bottom-line mt30">Upload your CV </h4>
								<?php foreach($query->result() as $row): ?>
								<?php if($row->cv_upload != ''):?>
										<p><?=$row->cv_upload?> (<?=$row->cv_upload_time?>)</p> 
										<p><a href="<?=base_url();?>profile/candidates_cv_download/<?=$row->cv_upload?>" class="btn btn-gray" >Download</a> <a class="btn btn-gray" id='candidate-cv'>Change</a></p>
										<br>
								<?php endif; ?>	
								<?php endforeach?>
								<?php if($row->cv_upload == ''):?>
									<?php echo $error; ?>
									<?php echo form_open_multipart('upload/do_upload');?>

									<input type="file" name="userfile" />
									<br />
									<input type='submit' class='btn btn-gray pull-left' value='Upload CV' />
									<?=form_close();?>	
								<?php endif; ?>	
								<div id='candidate-cv-change'>
									<?php echo $error; ?>
									<?php echo form_open_multipart('upload/do_upload');?>

									<input type="file" name="userfile" />
									<br />
									<input type='submit' class='btn btn-gray pull-left' value='Upload CV' />
									<?=form_close();?>	
								</div>
							</div> 													
						<hr>
					</div>					
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	