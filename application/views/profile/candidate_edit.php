	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container candidates-single-widget">
							<div class="widget-content mtm30">
								<?php foreach($query->result() as $row): ?>
								<?php echo form_open('profile/candidates_contact_insert'); ?>															
								<h5 class="bottom-line bottomwhite-line">Contact Details <span class="pull-right"><a href="#" id='candidate-contact-edit' class="btn btn-gray">Edit</a>
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-contact-save'/>
									<a href="#" id='candidate-contact-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='candidate-contact-normal'>
									<tbody>
										<tr>
											<td>E-mail</td>
											<td><a href="mailto:example@example.com"><?=$row->email?></a></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?=$row->mobile_number?></td>
										</tr>
										<tr>
											<td>DOB</td>
											<td><?=$row->dob?></td>
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
											<td><input type='email' class='form-control' name='email' value= <?=$row->email?> /></td>
										</tr>
										<tr>
											<td>Phone</td>
											<td><?php echo form_input('mobile_number', set_value('mobile_number', $row->mobile_number), 'id="mobile_number" class="form-control"');?></td>
										</tr>
										<tr>
											<td>DOB</td>
											<td><?php echo form_input('dob', set_value('dob', $row->dob), 'id="dob" class="form-control"');?></td>
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
										
									</tbody>
								</table>
								<?php echo form_close(); ?>
								<?php echo form_open('profile/candidates_career_insert'); ?>
								<h5 class="bottom-line bottomwhite-line">Career Details <span class="pull-right"><a href="#" id='candidate-career-edit' class="btn btn-gray">Edit</a>
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-career-save'/>
									<a href="#" id='candidate-career-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='candidate-career-normal'>
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

								<table id='candidate-career-editing'>
									<tbody>
										<tr>
											<td>Desire Job Type</td>
											<td><?php echo form_dropdown('desired_job_type', $job_options, set_value('desired_job_type',$row->desired_job_type), 'id="desired_job_type" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Experience</td>
											<td><?php echo form_dropdown('years_of_exp', $year_options, set_value('years_of_exp',$row->years_of_exp), 'id="years_of_exp" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Specialization</td>
											<td><?php echo form_dropdown('area_of_special', $specialization_options, set_value('area_of_special',$row->area_of_special), 'id="area_of_special" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Willing to Relocate</td>
											<td><?php echo form_dropdown('relocate', $relocate_options, set_value('relocate',$row->relocate), 'id="relocate" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Current Industry</td>
											<td><?php echo form_dropdown('c_work_industry', $industry_options, set_value('c_work_industry',$row->c_work_industry), 'id="c_work_industry" class="form-control"'); ?></td>											
										</tr>

										<tr>
											<td>Recent Employer</td>
											<td><?php echo form_input('most_r_employer', set_value('most_r_employer', $row->most_r_employer), 'id="contact_address" class="form-control"');?></td>
										</tr>

										<tr>
											<td>Highest Education</td>											
											<td><?php echo form_dropdown('highest_education', $qualification_options, set_value('highest_education',$row->highest_education), 'id="highest_education" class="form-control"'); ?></td>											
										</tr>

										<tr>
											<td>skills</td>
											<td><?php echo form_dropdown('skill', $skill_options, set_value('skill',$row->skill), 'id="skill" class="form-control"'); ?></td>
										</tr>
										
										<tr>
											<td>Expected Salary</td>
											<td><?php echo form_dropdown('expected_salary', $salary_options, set_value('expected_salary',$row->expected_salary), 'id="expected_salary" class="form-control"'); ?></td>
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
						<?php echo form_open('profile/candidates_work_edit_update'); ?>
							<h5 class="bottom-line mtm3">Work Experience 
								<span class="pull-right">
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-work-save' />
									<a href="<?=base_url();?>profile/candidates_area" class="btn btn-gray" id='candidate-work-cancel'>Cancel</a>
								</span>
							</h5>
							<div id="candidate-work-general">
								<?php foreach($workeditquery->result() as $row): ?>
									<div id="candidate-work-individual-edit">
										<?=form_hidden('work_id', $row->work_id);?>
										<p><?php echo form_label('Company Name', 'company');?>
										<?php echo form_input('wname', set_value('wname', $row->work_name), 'id="work_name" class="form-control"');?></p>

										<p><?php echo form_label('Company Industry', 'industry');?>
										<?php echo form_dropdown('w_industry', $industry_options, set_value('w_industry',$row->work_industry), 'id="work_industry" class="form-control"'); ?></p>

										<p><?php echo form_label('Date Started (e.g April 2000)', 'date_s');?>
										<?php echo form_input('w_from', set_value('w_from',$row->work_from), 'id="work_from" class="form-control"');?></p>		
										
										<p><?php echo form_label('Date Ended (e.g April 2000 or Till date)', 'date_f');?>
										<?php echo form_input('w_to', set_value('w_to',$row->work_to), 'id="work_to" class="form-control"');?></p>
										
										<p><?php echo form_label('Job Title/ Positon held', 'work_position');?>
										<?php echo form_input('w_position', set_value('w_position',$row->work_position), 'id="work_position" class="form-control"');?></p>	
										
										<p><?php echo form_label('Job Type', 'job_type');?>
										<?php echo form_dropdown('w_type', $job_options, set_value('w_type',$row->work_type), 'id="work_type" class="form-control"'); ?></p>	
										
										<p><?php echo form_label('Job Description', 'job_desc');?>
										<?php echo form_textarea('w_description', set_value('w_description',$row->work_description), 'id="work_description" class="form-control"');?></p>	
									</div>

									<hr>
								<?php endforeach; ?>							
							
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

						<h5 class="bottom-line">Education History <span class="pull-right"><a href="#" class="btn btn-gray">Add Record</a></span></h5>

						<h6 class="title"><a href="#">Covenant University</a></h6>
						<span class="meta">Tertiary</span>

						<!-- <span class="pull-right"><input type='submit' class='btn btn-gray' value='Save' />
							<a href="#" class="btn btn-gray">Cancel</a></span> -->

						<ul class="social-icons pull-right clearfix">
							<li><a href="#" class="btn btn-gray fa fa-edit" title="Edit"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-trash-o" title="Delete"></a></li>
						</ul>

						<ul class="list-unstyled">
							<li><strong>Duration:</strong> 5 Years</li>
							<li><strong>Degree Obtained:</strong> Waiter</li>
							<li><strong>Classification:</strong> second class upper</li>
							<li><strong>Certificate:</strong>B. Sc. Computer Science</li>
						</ul>

						<hr><hr>

						<h5 class="bottom-line">Certifications<span class="pull-right"><a href="#" class="btn btn-gray">Add Record</a></span></h5>

						<h6 class="title"><a href="#">Covenant University</a></h6>
						<span class="meta">2012</span>

						<!-- <span class="pull-right"><input type='submit' class='btn btn-gray' value='Save' />
							<a href="#" class="btn btn-gray">Cancel</a></span> -->

						<ul class="social-icons pull-right clearfix">
							<li><a href="#" class="btn btn-gray fa fa-edit" title="Edit"></a></li>
							<li><a href="#" class="btn btn-gray fa fa-trash-o" title="Delete"></a></li>
						</ul>
						<hr>
					</div>					
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	