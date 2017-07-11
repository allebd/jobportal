	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li class="active"><?=anchor('profile_admin/admin_area', 'My Account');?></li>
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


					<div class="jobs-item jobs-single-item">
						<?php echo form_open_multipart('profile_admin/admin_account_insert'); ?>
							<h5 class="bottom-line mtm3">Account Information
									<span class="pull-right">
										<a href="#" class="btn btn-gray" id='recruiter-desc-edit'>Edit</a>
										<input type='submit' class='btn btn-gray' id='recruiter-desc-save' value='Save' />
										<a href="#" class="btn btn-gray" id='recruiter-desc-cancel'>Cancel</a>									
									</span>
							</h5>

							<?php foreach($query->result() as $row): ?>
								<table id='recruiter-desc-general'>
									<tbody>
										<tr>
											<td>Surname</td>
											<td><?=$row->admin_surname?></td>
										</tr>
										<tr>
											<td>Firstname</td>
											<td><?=$row->admin_firstname?></td>
										</tr>																												
									</tbody>
								</table>
								<table id='recruiter-desc-editing'>
									<tbody>
										<tr>
											<td>Surname</td>
											<td><?php echo form_input('admin_surname', set_value('admin_surname', $row->admin_surname), 'id="admin_surname" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Firstname</td>
											<td><?php echo form_input('admin_firstname', set_value('admin_firstname', $row->admin_firstname), 'id="admin_firstname" class="form-control"');?></td>
										</tr>																												
									</tbody>
								</table>
							<?php endforeach; ?>
						<?=form_close();?>
						<?php foreach($query->result() as $row): ?>
								<?php echo form_open('profile_admin/admin_password_insert'); ?>															
								<h5 class="bottom-line mtm3">Change Password<span class="pull-right">
									<input type='submit' class='btn btn-gray' value='Save' id='recruiter-contact-save'/>
									<a href="#" id='recruiter-contact-cancel' class="btn btn-gray">Cancel</a></span></h5>

								<table id='recruiter-contact-normal'>
									<tbody>
										<tr>
											<td>Password</td>											
											<td><?php echo form_error('admin_password', '<p class="error">', '</p>'); ?>
												<?php echo form_error('admin_password2', '<p class="error">', '</p>'); ?>
												<a href="#" id='recruiter-contact-edit' class="btn btn-gray">Change password</a></td>
										</tr>																										
									</tbody>
								</table>

								<table id='recruiter-contact-editing'>
									<tbody>
										<tr>
											<td>New password</td>
											<td><?php echo form_password('admin_password', set_value('admin_password'), 'id="admin_password" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Confirm password</td>
											<td><?php echo form_password('admin_password2', set_value('admin_password2'), 'id="admin_password2" class="form-control"');?></td>
										</tr>																												
									</tbody>
								</table>
								<?php echo form_close(); ?>							
						<?php endforeach; ?>
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	