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
								<li class="active"><?=anchor('profile_admin/manage_jobs', 'Manage jobs');?></li>
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
							<div class="clearfix mb30">
							
							<a href="<?=base_url();?>profile_admin/manage_Jobs" class="btn btn-gray">View all Jobs</a>
							
							</div>
						
							<h5 class="bottom-line mtm3">Manage Jobs
									<span class="pull-right">
										<?php echo form_open('profile_admin/job_search'); ?>
										<input type='search' name='search' placeholder='Search...'/>
										<?php echo form_close(); ?>					
									</span>
							</h5>
								<?php if($jobsearchingquery->num_rows() > 0): ?>
									<?php foreach($jobsearchingquery->result() as $row): ?>
									<div class="jobs-item with-thumb">
										<?php if($row->anonymous == 1):?>
										<?php echo "";?>
										<?php endif;?>
										<?php if($row->anonymous == 0):?>
										<?php if($row->company_logo == ''):?>
										<?php echo ""; ?>
										<?php endif; ?>
										<?php if($row->company_logo != ''):?>
										<div class="thumb"><img src="<?=base_url()?>uploads/<?=$row->company_logo?>" alt="Company Logo" title="Company Logo"></div>
										<?php endif;?>
										<?php endif;?>

										<h6 class="title"><a href="#"><?=$row->job_position?></a></h6>
										<span class="meta"><?php if($row->anonymous == 0):?><?=$row->company_name?>,<?php endif;?> <?=$row->job_location?>, <?=$row->job_country?></span>

										<ul class="top-btns">
											<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
											<li><a href="<?=base_url();?>profile_admin/job_delete/<?=$row->job_id;?>" class="btn btn-gray fa fa-trash-o" title='Delete'></a></li>
										</ul>

																								
										<br>

										<p class="description"><?=$row->job_desc?> <a href="#" class="read-more">Read More</a></p>

										<div class="clearfix"></div>

										<div class="content">
											<ul class="list-unstyled">
												<li><strong>Experience:</strong> <?=$row->work_exp?></li>
												<li><strong>Specialization:</strong> <?=$row->area_of_special?></li>
												<li><strong>Degree:</strong> <?=$row->education_qualification?></li>
												<li><strong>Job Type:</strong> <?=$row->job_type?> </li>
												<li><strong>Gender:</strong> <?=$row->job_gender?></li>
												<li><strong>No of Slots:</strong> <?=$row->no_of_slot?></li>																
												<li><strong>Salary Level:</strong> <?=$row->salary_level?></li>
												<li><strong>Application Closes:</strong> <?=date_format(date_create($row->job_end_date), 'M j, Y');?></li>
											</ul>

											<h5>Skills</h5>

											<ul class="additional-requirements clearfix">
												<?php if($row->job_skills != ''):?>
													<?php $theskills = explode(',',$row->job_skills);?>
														<?php foreach ($theskills as $skilrow):?>
														<li><?=$skilrow;?></li>
														<?php endforeach;?>	
												<?php endif; ?>							
											</ul>							

											<hr>
											
										</div>
									</div>		
									<?php endforeach; ?>							
							<?php endif; ?>
							<?php if($jobsearchingquery->num_rows() < 1): ?>
								<p>No job listed</p>
							<?php endif; ?>
					</div>


				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	