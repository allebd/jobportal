	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('profile_admin/admin_area', 'My Account');?></li>
								<?php foreach($query->result() as $row): ?>
									<?php if($row->admin_username == 'super admin'): ?>
										<li><?=anchor('profile_admin/manage_admins', 'Manage Admins');?></li>
									<?php endif; ?>
								<?php endforeach; ?>
								<li><?=anchor('profile_admin/manage_presets', 'Presets');?></li>
								<li><?=anchor('profile_admin/manage_candidates', 'Manage Applicants');?></li>
								<li><?=anchor('profile_admin/manage_recruiters', 'Manage Recruiters');?></li>
								<li><?=anchor('profile_admin/manage_package', 'Manage Recruiter Packages');?></li>
								<li><?=anchor('profile_admin/manage_toprecruit', 'Manage Top Recruiters');?></li>
								<li><?=anchor('profile_admin/manage_jobs', 'Manage jobs');?></li>
								<li><?=anchor('profile_admin/manage_social', 'Manage Social Media Links');?></li>
								<li><?=anchor('profile_admin/manage_applicantservices', 'Applicants Services');?></li>
								<li><?=anchor('profile_admin/manage_interviewprep', 'Interview Prepping Applicants');?></li>
								<li><?=anchor('profile_admin/manage_stats', 'Statistics');?></li>
								<li><?=anchor('profile_admin/manage_team', 'About Team');?></li>
								<li><?=anchor('profile_admin/manage_board', 'Board of directors');?></li>
								<li><?=anchor('profile_admin/manage_careers', 'MPS Careers');?></li>
								<li class="active"><?=anchor('profile_admin/manage_trainings', 'Trainings');?></li>
								<li><?=anchor('profile_admin/manage_articles', 'Career Hub Articles');?></li>
								<li><?=anchor('profile_admin/manage_testimonies', 'Testimonies');?></li>
								<li><?=anchor('profile_admin/manage_slide', 'Slide Show');?></li>
								<li><?=anchor('profile_admin/manage_contact', 'Contact Info');?></li>
								<li><?=anchor('profile_admin/welcome_message', 'Welcome Message');?></li>
								<li><?=anchor('profile_admin/password_reset', 'Password Reset Message');?></li>
								<li><?=anchor('profile_admin/privacyandterms', 'Privacy, Terms & Conditions');?></li>
							</ul>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
								<?php echo form_open('profile_admin/trainings_overview_insert'); ?>															
								<h5 class="bottom-line mtm3">Change Trainings Overview<span class="pull-right">
									<input type='submit' class='btn btn-gray' value='Save' id='recruiter-contact-save'/>
									<a href="#" id='recruiter-contact-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='recruiter-contact-normal'>
									<tbody>
										<tr>
											<td>Trainings Overview</td>											
											<td><a href="#" id='recruiter-contact-edit' class="btn btn-gray">Change overview</a></td>
										</tr>																										
									</tbody>
								</table>

								<table id='recruiter-contact-editing'>
									<tbody>
										<tr>
											<td>Trainings Overview</td>	
											<?php foreach ($trainings_overview->result() as $row): ?>
											<td><?php echo form_hidden('t_id',$row->t_id);?>
												<?php echo form_textarea('trainings_overview', set_value('trainings_overview',$row->trainings_overview), 'id="trainings_overview" class="form-control"');?>
												<script>
												    CKEDITOR.replace('trainings_overview');
												</script>
											</td>
											<?php endforeach; ?>
										</tr>																												
									</tbody>
								</table>
								<?php echo form_close(); ?>
					<div class="jobs-item">
						<?php echo form_open_multipart('profile_admin/trainings_insert'); ?>
							<h5 class="bottom-line mtm3">Manage Trainings
									<span class="pull-right">
										<a href="#" class="btn btn-gray" id='recruiter-desc-edit'>Add Trainings</a>
										<input type='submit' class='btn btn-gray' id='recruiter-desc-save' value='Save' />
										<a href="#" class="btn btn-gray" id='recruiter-desc-cancel'>Cancel</a>									
									</span>
							</h5>
								<table id='recruiter-desc-general'>
									<tbody>
										<tr>
											<th>Topic</th>
											<th>Date</th>
											<th>Documents/<br>Brochures</th>
											<th>Applicants</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>										
										<?php foreach($trainings->result() as $row): ?>
										<tr>
											<td><?=$row->title?></td>
											<td><?=date_format(date_create($row->date), 'M j, Y');?></td>
											<td><a href="<?=base_url();?>profile_admin/training_download/<?=$row->t_id?>" class="btn btn-gray">Set Download</a></td>
											<td><a href="<?=base_url();?>profile_admin/training_applicants/<?=$row->t_id?>" class="btn btn-gray">View</a></td>
											<td><a href="<?=base_url();?>profile_admin/trainings_edit/<?=$row->t_id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>
											<td><a href="<?=base_url();?>profile_admin/trainings_delete/<?=$row->t_id?>" class="btn btn-gray fa fa-trash-o" title='Delete'></a></td>
										</tr>
										<?php endforeach; ?>																									
									</tbody>
								</table>
								<table id='recruiter-desc-editing'>
									<tbody>
										<tr>
											<td>Topic</td>
											<td><?php echo form_input('title', set_value('title'), 'id="title" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Date</td>
											<td><input type='date' name='date' id="date" class="form-control" value='<?php echo set_value('date'); ?>'></td>
										</tr>
										<tr>
											<td>Price</td>
											<td><?php echo form_input('price', set_value('price'), 'id="price" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Summary</td>
											<td><?php echo form_textarea('summary', set_value('summary'), 'id="summary" class="form-control"');?>
												<script>
												    CKEDITOR.replace('summary');
												</script>
											</td>
										</tr>
										<tr>
											<td>Details</td>
											<td><?php echo form_textarea('details', set_value('details'), 'id="details" class="form-control"');?>
												<script>
												    CKEDITOR.replace('details');
												</script>
											</td>
										</tr>
										<tr>
											<td>Picture/Flier</td>
											<td><?php echo $error; ?><input type="file" name="userfile" /></td>
										</tr>																						
									</tbody>
								</table>
						<?=form_close();?>						
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	