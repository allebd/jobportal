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
								<li class="active"><?=anchor('profile_admin/manage_social', 'Manage Social Media Links');?></li>
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
							<h5 class="bottom-line mtm3">Manage Social Media Links</h5>
								<table id='recruiter-desc-general'>
									<tbody>
										<tr>
											<th>Name</th>
											<th>Link</th>
											<th>Edit</th>
										</tr>	
										<tr>
											<td>Facebook</td>									
										<?php foreach($facebook->result() as $row): ?>
											<td><?=$row->link?></td>
											<td><a href="<?=base_url();?>profile_admin/facebook_edit/<?=$row->id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>										
										<?php endforeach; ?>	
										</tr>
										<tr>
											<td>Twitter</td>									
										<?php foreach($twitter->result() as $row): ?>
											<td><?=$row->link?></td>
											<td><a href="<?=base_url();?>profile_admin/twitter_edit/<?=$row->id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>										
										<?php endforeach; ?>	
										</tr>	
										<tr>
											<td>Google Plus</td>									
										<?php foreach($google->result() as $row): ?>
											<td><?=$row->link?></td>
											<td><a href="<?=base_url();?>profile_admin/google_edit/<?=$row->id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>										
										<?php endforeach; ?>	
										</tr>
										<tr>
											<td>LinkedIn</td>									
										<?php foreach($linkedin->result() as $row): ?>
											<td><?=$row->link?></td>
											<td><a href="<?=base_url();?>profile_admin/linkedin_edit/<?=$row->id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>										
										<?php endforeach; ?>	
										</tr>
										<tr>
											<td>Skype</td>									
										<?php foreach($skype->result() as $row): ?>
											<td><?=$row->link?></td>
											<td><a href="<?=base_url();?>profile_admin/skype_edit/<?=$row->id?>" class="btn btn-gray fa fa-edit" title='Edit'></a></td>										
										<?php endforeach; ?>	
										</tr>																							
									</tbody>
								</table>						
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	