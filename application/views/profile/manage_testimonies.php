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
								<li class="active"><?=anchor('profile_admin/manage_testimonies', 'Testimonies');?></li>
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
						
						<?php echo form_open_multipart('profile_admin/testimony_insert'); ?>
							<h5 class="bottom-line mtm3">Manage Testimonies
									<span class="pull-right">
										<a href="#" class="btn btn-gray" id='recruiter-desc-edit'>Add Testimonies</a>
										<input type='submit' class='btn btn-gray' id='recruiter-desc-save' value='Save' />
										<a href="#" class="btn btn-gray" id='recruiter-desc-cancel'>Cancel</a>									
									</span>
							</h5>
								<table id='recruiter-desc-general'>
									<tbody>
										<tr>
											<th>Name</th>
											<th>Company</th>
											<th>Display on <br> homepage</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>										
										<?php foreach($testimony->result() as $row): ?>
										<tr>
											<td><?=$row->name?></td>
											<td><?=$row->company_name?></td>
											<td><?php if($row->homedisplay == 0)
												{
													echo "No";
												}else{
													echo "Yes";
												}
												?>
											</td>
											<td><a href="<?=base_url();?>profile_admin/testimony_edit/<?=$row->id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>
											<td><a href="<?=base_url();?>profile_admin/testimony_delete/<?=$row->id?>" class="btn btn-gray fa fa-trash-o" title='Delete'></a></td>
										</tr>
										<?php endforeach; ?>																									
									</tbody>
								</table>
								<table id='recruiter-desc-editing'>
									<tbody>
										<tr>
											<td>Name</td>
											<td><?php echo form_input('name', set_value('name'), 'id="name" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Company</td>
											<td><?php echo form_input('company', set_value('company'), 'id="company" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Testimony</td>
											<td><?php echo form_textarea('testimony', set_value('testimony'), 'id="testimony" class="form-control"');?></td>
										</tr>
										<tr>
											<td>Display on homepage</td>
											<td><?php echo form_checkbox('homedisplay', 'accept', FALSE); ?>
											</td>
										</tr>
										<tr>
											<td>Picture</td>
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

	