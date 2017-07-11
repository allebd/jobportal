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
								<li><?=anchor('profile_admin/manage_trainings', 'Trainings');?></li>
								<li><?=anchor('profile_admin/manage_articles', 'Career Hub Articles');?></li>
								<li><?=anchor('profile_admin/manage_testimonies', 'Testimonies');?></li>
								<li class="active"><?=anchor('profile_admin/manage_slide', 'Slide Show');?></li>
								<li><?=anchor('profile_admin/manage_contact', 'Contact Info');?></li>
								<li><?=anchor('profile_admin/welcome_message', 'Welcome Message');?></li>
								<li><?=anchor('profile_admin/password_reset', 'Password Reset Message');?></li>
								<li><?=anchor('profile_admin/privacyandterms', 'Privacy, Terms & Conditions');?></li>
							</ul>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<div class="jobs-item">
						<?php echo form_open_multipart('profile_admin/slide_edit_update'); ?>
							<h5 class="bottom-line mtm3">Edit Slide Show
								<span class="pull-right">
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-cert-save' />
									<a href="<?=base_url();?>profile_admin/manage_slide" class="btn btn-gray" id='candidate-cert-cancel'>Cancel</a>
								</span>
							</h5>
								<table id='recruiter-desc-general'>
									<tbody>
										<?php foreach($slide_edit->result() as $row): ?>
										<tr>
											<?php echo form_hidden('slide_id', $row->slide_id); ?>
											<td>Name</td>
											<td><?php echo form_input('name', set_value('name',$row->name), 'id="name" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Main Header</td>
											<td><?php echo form_textarea('main_header', set_value('main_header',$row->main_header), 'id="main_header" class="form-control"');?>
												<script>
												    CKEDITOR.replace('main_header');
												</script>
											</td>
										</tr>
										<tr>
											<td>Sub Header</td>
											<td><?php echo form_textarea('sub_header', set_value('sub_header',$row->sub_header), 'id="sub_header" class="form-control"');?>
												<script>
												    CKEDITOR.replace('sub_header');
												</script>
											</td>
										</tr>
										<tr>
											<td>Learn More (url)</td>
											<td><?=base_url()?><?php echo form_input('url', set_value('url',$row->url), 'id="url" class="form-control"');?></td>
										</tr>
											<td>Picture <br>(Width and Height <br>must be 1400px and<br> 500px respectively)</td>
										<?php if($row->picture != ''):?>
											<td>
												<?php echo form_hidden('picture', $row->picture); ?>
												<p><img src='<?=base_url()?>uploads/<?=$row->picture?>' width='250' height='250'></p>
												<p>
													<a class="btn btn-gray" id='chng_logo'>Change</a>
												</p>
												<p id='showchng_logo'>
												<?php echo $error; ?>
												<input type="file" name="userfile" />
												</p>
											</td>
											<?php endif; ?>	
											<?php if($row->picture == ''):?>												
											<td>
												<?php echo $error; ?><input type="file" name="userfile" /></td>
											<?php endif; ?>	
										<?php endforeach; ?>																									
									</tbody>
								</table>
						<?=form_close();?>						
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	