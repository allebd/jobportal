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
								<li class="active"><?=anchor('profile_admin/manage_recruiters', 'Manage Recruiters');?></li>
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
											
							<h5 class="bottom-line mtm3">Manage Recruiters
									<span class="pull-right">
										<?php echo form_open('profile_admin/recruiter_search'); ?>
										<input type='search' name='search' placeholder='Search...'/>
										<?php echo form_close(); ?>					
									</span>
							</h5>
							<?php if($recruitersearchquery->num_rows() > 0): ?>
									<?php foreach($recruitersearchquery->result() as $row): ?>
										<div class="jobs-item with-thumb">
											
											<?php if($row->org_rep_firstname != ''):?>
											<h6 class="title"><a href="<?=base_url();?>profile_admin/recruiter_profile/<?=$row->employer_id;?>" title='View profile'><?=ucwords($row->org_rep_surname);?> <?=ucwords($row->org_rep_firstname);?></a></h6>
											<?php endif; ?>						
											<span class="meta"><?=$row->org_name?></span>
											<?php $this->db->where('recruiter_username', $row->r_username);
											  $plan = $this->db->get('recruiter_plan');											  
											?>
											
											<?php if($plan->num_rows() > 0): ?>
												<?php foreach($plan->result() as $planrow): ?>
												<p><?=$planrow->recruiter_plan?></p>
												<?php endforeach; ?>
											<?php endif; ?>
											<?php if($row->status == 'N'):?>
											<p><a href="<?=base_url();?>profile_admin/recruiter_verify/<?=$row->employer_id;?>" class="btn btn-gray">Approve</a></p>
										    <?php endif; ?>
											<?php if($plan->num_rows() < 1): ?>
											<p><a href="<?=base_url();?>profile_admin/recruiter_plan/<?=$row->employer_id;?>" class="btn btn-gray" >Set Package Plan</a></p>
											<?php endif; ?>

											<ul class="top-btns">
												<li><a href="<?=base_url();?>profile_admin/recruiter_delete/<?=$row->employer_id;?>" class="btn btn-gray fa fa-trash-o" title='Delete'></a></li>
											</ul>

											
											<!-- <p class="description">STORY STORY </p> -->

											<div class="clearfix"></div>										
										</div>		
									<?php endforeach; ?>							
							<?php endif; ?>
							<?php if($recruitersearchquery->num_rows() < 1): ?>
								<p>No recruiter listed</p>
							<?php endif; ?>
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	