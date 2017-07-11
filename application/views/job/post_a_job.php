	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="title-lines">
						<h3 class="mt0">Advertise a Job</h3>
					</div>

					<?php 
						  $post = '';
						  $this->db->where('recruiter_username', $this->session->userdata('r_username')); 
						  $getpost = $this->db->get('recruiter_plan');
						  foreach($getpost->result() as $row){
						  	$post = $row->posting;
						  }
					?>
					<div class="candidates-item">
							<?php echo form_open_multipart('jobs_recruit/job_insert'); ?>
								<table class='mtm3'>
									<tbody>
										<tr>
											<td>Company Logo</td>
											<?php foreach($query->result() as $brow): ?>
											<?php if($brow->org_logo != ''):?>
											<?php echo form_hidden('company_logo', $brow->org_logo); ?>
											<td><img src='<?=base_url();?>uploads/<?=$brow->org_logo?>' alt='' width='100' height='100' class="p10">
												<!-- <p>
													<a class="btn btn-gray" id='chng_logo'>Change</a>
												</p> -->
												<!-- <p id='showchng_logo'>
												
												<input type="file" name="userfile" />
												</p> -->
											</td>
											<?php endif; ?>	
											<?php if($brow->org_logo == ''):?>												
											<td>
												<?php echo $error; ?><input type="file" name="userfile" /></td>
											<?php endif; ?>											
										</tr>
										<tr>
											<td>Company Name </td>
											<?php echo form_hidden('company_name', $brow->org_name); ?>
											<td><?=$brow->org_name;?></td>
										</tr>
										<?php endforeach; ?>
										<tr>
											<td>Company Industry</td>
											<td><?php echo form_dropdown('company_industry', $industry_options, set_value('company_industry'), 'id="company_industry" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Job Position <sup class='error'>*</sup></td>
											<td><?php echo form_error('job_position', '<div class="error">', '</div>'); ?>
												<?php echo form_input('job_position', set_value('job_position'), 'id="job_position" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Job Description  <sup class='error'>*</sup></td>
											<td><?php echo form_error('job_desc', '<div class="error">', '</div>'); ?>
												<?php echo form_textarea('job_desc', set_value('job_desc'), 'id="job_desc" class="form-control"'); ?>
												<script>
												    CKEDITOR.replace('job_desc');
												</script>
											</td>
										</tr>
										<tr>
											<td>Years of Experience</td>
											<td><?php echo form_dropdown('work_exp', $year_options, set_value('work_exp'), 'id="work_exp" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Specialization</td>
											<td><?php echo form_dropdown('area_of_special', $specialization_options, set_value('area_of_special'), 'id="area_of_special" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Skills</td>
											<td><input type='text' value='' name='job_skills' id="job_skills" class="form-control" data-suggestions="<?php foreach($skills->result() as $row):?><?=$row->name?>,<?php endforeach; ?>"></td>
										</tr>
										<tr>
											<td>Job Type</td>
											<td><?php echo form_dropdown('job_type', $job_options, set_value('job_type'), 'id="job_type" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Highest Qualification</td>
											<td><?php echo form_dropdown('education_qualification', $qualification_options, set_value('education_qualification'), 'id="education_qualification" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td><?php echo form_dropdown('job_gender', $gender_options, set_value('job_gender'), 'id="job_gender" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Salary level <br><sup><strong>(Monthly salary to be paid)</strong></sup></td>
											<td><?php echo form_dropdown('salary_level', $salary_options, set_value('salary_level'), 'id="salary_level" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Location</td>											
											<td><?php echo form_dropdown('job_location', $location_options, set_value('job_location'), 'id="job_location" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Nationality</td>
											<td><?php echo form_dropdown('job_country', $country_options, set_value('job_country'), 'id="job_country" class="form-control"'); ?></td>
										</tr>	
										<tr>
											<td>Number of Slots</td>
											<td><input type='number' name='no_f_slot' id="no_f_slot" class="form-control" ></td>
										</tr>
										<tr>
											<td>Application Starts</td>
											<td><input type='date' name='job_start_date' id="job_start_date" class="form-control" value='<?php echo set_value('job_start_date'); ?>'></td>
										</tr>
										<tr>
											<td>Application Ends <sup class='error'>*</sup></td>
											<td><?php echo form_error('job_end_date', '<div class="error">', '</div>'); ?>
												<input type='date' name='job_end_date' id="job_end_date" class="form-control" value='<?php echo set_value('job_end_date'); ?>'></td>
										</tr>			
										<tr>
											<td>Post Job Anonymously</td>
											<td><?php echo form_checkbox('anonymous', 'accept', FALSE); ?>
											</td>
										</tr>																	
									</tbody>
								</table>	
								<div class="text-center">					
									<input type="submit" class="btn btn-default mtm30" value="Advertise">
								</div>
							<?php echo form_close(); ?>						
					</div>				
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="<?=base_url();?>img/content/sidebar-ad4.png" alt=""></a>
						</div>

						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="<?=base_url();?>img/content/sidebar-ad1.jpg" alt=""></a>
						</div>

						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="<?=base_url();?>img/content/sidebar-ad3.jpg" alt=""></a>
						</div>
						
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	