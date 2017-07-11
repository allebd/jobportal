	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="our-recruiter-dashboard">
									<a href='<?=base_url();?>jobs_recruit/post_a_job'><div class="img">
										<div class="advertisejob">
										</div>
									</div></a>

									<h4>Advertise a Job</h4>
									<span>Setup and publish your job vacancies</span>
								</div>
							</div>

							<div class="col-sm-6 col-md-6">
								<div class="our-recruiter-dashboard">
									<a href='<?=base_url();?>jobs_recruit'><div class="img">
										<div class="managejobs">
										</div>										
									</div></a>

									<h4>Manage Jobs</h4>
									<span>Manage your job vacancies and candidate applications</span>
								</div>
							</div>		

							<div class="col-sm-6 col-md-6">
								<div class="our-recruiter-dashboard">
									<a href='<?=base_url();?>jobs_recruit/job_cv_search'><div class="img">
										<div class="cvsearch">
										</div>
									</div></a>
									
									<h4>CV Search</h4>
									<span>Find all the right candidates Download CVs <strong>(Premium Package)</strong></span>
								</div>
							</div>

							<div class="col-sm-6 col-md-6">
								<div class="our-recruiter-dashboard">
									<a href='<?=base_url();?>profile_recruit/recruiters'><div class="img">		
										<div class="myaccount">
										</div>								
									</div></a>

									<h4>My Account</h4>
									<span>Manage profile and user account settings</span>
								</div>
							</div>			
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<div class='alert alert-error'>
							<h6>Payment not Successful</h6>
							<a href='#' class='close fa fa-times'></a>
					</div>
					<aside>
						<?php if($package_type->num_rows() < 1): ?>
						<div class="widget sidebar-widget white-container brown-container links-widget">							
							<ul>
								<li>
									<div class='package p15'>							
										<div class='text-left'>
											<b class='text-left'>No Data Plan</b>
											<p>Kindly select a plan</p>
										</div>
										<div class='text-right'>
											<a class='text-right btn btn-default' href="<?=base_url()?>packages">SELECT PLAN</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<?php endif;?>
						
						<?php if($package_type->num_rows() > 0): ?>
							<?php foreach($package_type->result() as $rows): ?>
								<?php $valid = $rows->valid_date.' '.$rows->valid_time; ?>
									<?php 	date_default_timezone_set("Africa/Lagos"); ?>
									<?php	if(strtotime('now') > strtotime($valid)):?>
									<?php 
											$this->db->where('recruiter_username', $this->session->userdata('r_username'));
											$this->db->delete('recruiter_plan');									
									?>
								    <?php endif;?>
								    <div class="widget sidebar-widget white-container brown-container links-widget">
										<ul>
											<li>
												<div class='package p15'>							
													<div class='text-left'>
														<b class='text-left'><?=$rows->recruiter_plan?></b>
														<p>Valid till <?=date_format(date_create($rows->valid_date), 'M j, Y');?>, <?=$rows->valid_time?></p>
														<p>(<?php $valid = date_create($rows->valid_date);
																   $today = date_create(date('Y-m-d'));
															       $diff = date_diff($valid, $today);
															       echo $diff->format("%a days left");
															      ?>)</p>
													</div>
													<div class='text-right'>
														<a class='text-right btn btn-default' href="<?=base_url()?>profile_recruit/recruiters_optout">OPT OUT</a>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="widget sidebar-widget white-container brown-container links-widget">
										<ul>
											<li><a href="#">CV Downloads <span class='pull-right'><strong><?=$rows->downloads?></strong></span></a></li>
										</ul>
									</div>
							<?php endforeach; ?>
						<?php endif;?>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->