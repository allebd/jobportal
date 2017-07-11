	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="title-lines">
						<h3 class="mt0">Edit Job</h3>
					</div>

					<div class="candidates-item">
						<?php foreach($jobeditquery->result() as $row): ?>
							<?php echo form_open_multipart('jobs_recruit/job_edit_update'); ?>
								<table class='mtm3'>
									<tbody>
										<tr>
											<?=form_hidden('j_id', $row->job_id);?>
											<td>Company Logo</td>
											<?php if($row->company_logo != ''):?>
											<?php echo form_hidden('company_logo', $row->company_logo); ?>
											<td><img src='<?=base_url();?>uploads/<?=$row->company_logo?>' alt='' width='100px' height='100px' class="p10">
												<p>
													<a class="btn btn-gray" id='chng_logo'>Change</a>
												</p>
												<p id='showchng_logo'>
												<?php echo $error; ?>
												<input type="file" name="userfile" />
												</p>
											</td>
											<?php endif; ?>	
											<?php if($row->company_logo == ''):?>												
											<td>
												<?php echo $error; ?><input type="file" name="userfile" /></td>
											<?php endif; ?>	
										</tr>
										<tr>
											<td>Company Name</td>
											<td><?php echo form_input('c_name', set_value('c_name', $row->company_name), 'id="c_name" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Company Industry</td>
											<td><?php echo form_dropdown('c_industry', $industry_options, set_value('c_industry', $row->company_industry), 'id="c_industry" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Job Position</td>
											<td><?php echo form_input('j_position', set_value('j_position', $row->job_position), 'id="j_position" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Job Description</td>
											<td><?php echo form_textarea('j_desc', set_value('j_desc', $row->job_desc), 'id="j_desc" class="form-control"'); ?>
												<script>
												    CKEDITOR.replace('j_desc');
												</script>
											</td>
										</tr>
										<tr>
											<td>Years of Experience</td>
											<td><?php echo form_dropdown('w_exp', $year_options, set_value('w_exp', $row->work_exp), 'id="w_exp" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Specialization</td>
											<td><?php echo form_dropdown('area_of_spec', $specialization_options, set_value('area_of_spec', $row->area_of_special), 'id="area_of_spec" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Skills</td>
											<td><input type='text' name='j_skills' id="j_skills" value='<?=$row->job_skills?>' class="form-control" data-suggestions="<?php foreach($skills->result() as $skillrow): ?><?=$skillrow->name?>,<?php endforeach; ?>">
											</td>
										</tr>
										<tr>
											<td>Job Type</td>
											<td><?php echo form_dropdown('j_type', $job_options, set_value('j_type', $row->job_type), 'id="j_type" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Highest Qualification</td>
											<td><?php echo form_dropdown('e_qualification', $qualification_options, set_value('e_qualification', $row->education_qualification), 'id="e_qualification" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td><?php echo form_dropdown('j_gender', $gender_options, set_value('j_gender', $row->job_gender), 'id="j_gender" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Salary level <br><sup><strong>(Monthly salary to be paid)</strong></sup></td>
											<td><?php echo form_dropdown('s_level', $salary_options, set_value('s_level', $row->salary_level), 'id="s_level" class="form-control"'); ?></td>
										</tr>
										<tr>
											<td>Location</td>											
											<td><?php echo form_dropdown('j_location', $location_options, set_value('j_location', $row->job_location), 'id="j_location" class="form-control"'); ?></td>											
										</tr>
										<tr>
											<td>Nationality</td>
											<td><?php echo form_dropdown('j_country', $country_options, set_value('j_country', $row->job_country), 'id="j_country" class="form-control"'); ?></td>
										</tr>	
										<tr>
											<td>Number of Slots</td>
											<td><input type='number' name='no_f_slot' id="no_f_slot" class="form-control" value='<?=$row->no_f_slot?>'></td>
										</tr>
										<tr>
											<td>Application Starts</td>
											<td><input type='date' name='j_start_date' id="j_start_date" class="form-control" value='<?=$row->job_start_date?>'></td>
										</tr>
										<tr>
											<td>Application Ends</td>
											<td><input type='date' name='j_end_date' id="j_end_date" class="form-control" value='<?=$row->job_end_date?>'></td>
										</tr>		
										<tr>
											<td>Post Job Anonymously</td>
											<td>
												<?php echo form_checkbox('anonymous', 'accept', $row->anonymous); ?>
											</td>
										</tr>																	
									</tbody>
								</table>
								<div class="text-center">	
									<input type="submit" class="btn btn-default mtm30" value="Update">
									<a href="<?=base_url()?>jobs_recruit/index" class="btn btn-default mtm30">Cancel</a>
								</div>
							<?php echo form_close(); ?>		
						<?php endforeach; ?>				
					</div>				
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="<?=base_url();?>img/content/sidebar-ad.png" alt=""></a>
						</div>

						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="<?=base_url();?>img/content/sidebar-ad.png" alt=""></a>
						</div>

						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="<?=base_url();?>img/content/sidebar-ad.png" alt=""></a>
						</div>

						<div class="widget sidebar-widget text-center">
							<a href="#"><img src="<?=base_url();?>img/content/sidebar-ad.png" alt=""></a>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	