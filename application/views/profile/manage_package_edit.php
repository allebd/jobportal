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
								<li class="active"><?=anchor('profile_admin/manage_package', 'Manage Recruiter Packages');?></li>
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
						<?php echo form_open_multipart('profile_admin/package_edit_update'); ?>
							<h5 class="bottom-line mtm3">Edit Packages
								<span class="pull-right">
									<input type='submit' class='btn btn-gray' value='Save' id='candidate-cert-save' />
									<a href="<?=base_url();?>profile_admin/manage_package" class="btn btn-gray" id='candidate-cert-cancel'>Cancel</a>
								</span>
							</h5>
								<table id='recruiter-desc-general'>
									<tbody>
										<?php foreach($package_edit->result() as $row): ?>
										<tr>
											<?php echo form_hidden('id', $row->package_id); ?>
											<td>Package Plan</td>
											<td><?php echo form_input('package_plan', set_value('package_plan',$row->package_plan), 'id="package_plan" class="form-control"');?></td>
										</tr>	
										<tr>
											<td>Job Postings</td>
											<td><input type="number" name='job_posting' id="job_posting" value="<?=$row->job_posting?>" class="form-control"></td>
										</tr>	
										<tr>
											<td>Premium Upgrade</td>
											<td>
												<select name='premium_upgrade' id="premium_upgrade" class="form-control">
													<?php if($row->premium_upgrade == 0): ?>
													<?php echo "<option value='";?><?=$row->premium_upgrade?><?php echo"' selected='selected' disabled='disabled'>No</option>"; ?>
													<?php endif; ?>
													<?php if($row->premium_upgrade == 1): ?>
													<?php echo "<option value='";?><?=$row->premium_upgrade?><?php echo"' selected='selected' disabled='disabled'>Yes</option>"; ?>
													<?php endif; ?>
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</td>
										</tr>	
										<tr>
											<td>Typical Applications</td>
											<td><input type="number" name='typical_applications' id="typical_applications" value="<?=$row->typical_applications?>" class="form-control"></td>
										</tr>
										<tr>
											<td>Applications Share</td>
											<td><input type="number" name='applications_share' id="applications_share" value="<?=$row->applications_share?>" class="form-control"></td>
										</tr>
										<tr>
											<td>Premium Position</td>
											<td>
												<select name='premium_position' id="premium_position" class="form-control">
													<?php if($row->premium_position == 0): ?>
													<?php echo "<option value='";?><?=$row->premium_position?><?php echo"' selected='selected' disabled='disabled'>No</option>"; ?>
													<?php endif; ?>
													<?php if($row->premium_position == 1): ?>
													<?php echo "<option value='";?><?=$row->premium_position?><?php echo"' selected='selected' disabled='disabled'>Yes</option>"; ?>
													<?php endif; ?>
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>CV Search Access</td>
											<td>
												<select name='cv_search_access' id="cv_search_access" class="form-control">
													<?php if($row->cv_search_access == 0): ?>
													<?php echo "<option value='";?><?=$row->cv_search_access?><?php echo"' selected='selected' disabled='disabled'>No</option>"; ?>
													<?php endif; ?>
													<?php if($row->cv_search_access == 1): ?>
													<?php echo "<option value='";?><?=$row->cv_search_access?><?php echo"' selected='selected' disabled='disabled'>Yes</option>"; ?>
													<?php endif; ?>
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>CV Downloads</td>
											<td><input type="number" name='cv_downloads' id="cv_downloads" value="<?=$row->cv_downloads?>" class="form-control"></td>
										</tr>
										<tr>
											<td>Email Alerts</td>
											<td><input type="number" name='email_alerts' id="email_alerts" value="<?=$row->email_alerts?>" class="form-control"></td>
										</tr>
										<tr>
											<td>Logo in Job Search</td>
											<td>
												<select name='logo_in_job_search' id="logo_in_job_search" class="form-control">
													<?php if($row->logo_in_job_search == 0): ?>
													<?php echo "<option value='";?><?=$row->logo_in_job_search?><?php echo"' selected='selected' disabled='disabled'>No</option>"; ?>
													<?php endif; ?>
													<?php if($row->logo_in_job_search == 1): ?>
													<?php echo "<option value='";?><?=$row->logo_in_job_search?><?php echo"' selected='selected' disabled='disabled'>Yes</option>"; ?>
													<?php endif; ?>
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Logo in Job Adverts</td>
											<td>
												<select name='logo_in_job_adverts' id="logo_in_job_adverts" class="form-control">
													<?php if($row->logo_in_job_adverts == 0): ?>
													<?php echo "<option value='";?><?=$row->logo_in_job_adverts?><?php echo"' selected='selected' disabled='disabled'>No</option>"; ?>
													<?php endif; ?>
													<?php if($row->logo_in_job_adverts == 1): ?>
													<?php echo "<option value='";?><?=$row->logo_in_job_adverts?><?php echo"' selected='selected' disabled='disabled'>Yes</option>"; ?>
													<?php endif; ?>
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Recruiter Directory</td>
											<td>
												<select name='recruiter_directory' id="recruiter_directory" class="form-control">
													<?php if($row->recruiter_directory == 0): ?>
													<?php echo "<option value='";?><?=$row->recruiter_directory?><?php echo"' selected='selected' disabled='disabled'>No</option>"; ?>
													<?php endif; ?>
													<?php if($row->recruiter_directory == 1): ?>
													<?php echo "<option value='";?><?=$row->recruiter_directory?><?php echo"' selected='selected' disabled='disabled'>Yes</option>"; ?>
													<?php endif; ?>
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Package Price</td>
											<td><input type="text" name='prices_package' id="prices_package" value="<?=$row->prices_package?>" class="form-control"></td>
										</tr>
										<?php endforeach; ?>																									
									</tbody>
								</table>
						<?=form_close();?>						
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	