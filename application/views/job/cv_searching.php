	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-sidebar">
					<?php echo form_open('jobs_recruit/candidate_search'); ?>
						<aside>
							<div class="white-container mb0">
								<div class="widget sidebar-widget jobs-search-widget">
									<h4 class="widget-title">Search for CVs</h4>

									<div class="widget-content">
										<!-- <span>I'm looking for a ...</span> -->
										<input type="text" class="form-control mb10" placeholder="Search by Keywords e.g account" name='areas_of_special'>
										
										<input type="submit" class="btn btn-default" value="Search">
									</div>
								</div>
							</div>
						</aside>
						
					<?php echo form_close(); ?>
				</div> <!-- end .page-sidebar -->
				<div class="col-sm-4 page-sidebar">
						<aside>
								<div class="widget sidebar-widget white-container brown-container links-widget">
									<ul>
										<li class='active'><a href='#'>Search for CVs</a></li>
										<li><a href='<?=base_url();?>jobs_recruit/job_candidates_cv_downloaded'>Downloaded Profile</a></li>
				                    	<li><a href='<?=base_url();?>jobs_recruit/job_candidates_saved_search'>Saved Search</a></li>
				                    </ul>
				                </div>
				        </aside>
				</div>

				<div class="col-sm-8 page-content">
					<div class="title-lines">
						<h4 class="mt0">Candidates</h4>
					</div>

					<div class="clearfix mb30">
						
						
						
						<!-- <ul class="pagination pull-right">
							<li><a href="#" class="fa fa-angle-left"></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="fa fa-angle-right"></a></li>
						</ul> -->
					</div>

					<?php if($candidatesearchingquery->num_rows() > 0): ?>
								<?php foreach($candidatesearchingquery->result() as $row): ?>
					<div class="jobs-item with-thumb row brown-container">
						<div class='col-md-8'>
							<?php if($row->firstname != ''):?>
								<?php $thename = ucwords(substr($row->firstname,0,1)); ?>
							<h6 class="title"><a href="#"><?=ucwords($row->surname);?> <?=$thename;?>.</a></h6>
							<?php endif; ?>						
							<span class="meta"><?=$row->location?></span>

							<ul class="top-btns">
								<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
							</ul>

							<?php 
							  $post = '';
							  $this->db->where('recruiter_username', $this->session->userdata('r_username')); 
							  $getpost = $this->db->get('recruiter_plan');
							  foreach($getpost->result() as $brow){
							  	$post = $brow->downloads;
							  }
							?>
							<?php if(($getpost->num_rows() < 1)): ?>
								<p class="error">Kindly subscribe to a data plan to download CV.</p>
							<?php endif;?>
							<?php if(($post == 0) && ($getpost->num_rows() > 0)): ?>
								<p class="error">You have exhausted your downloads.</p>
							<?php endif;?>

							<ul class="list-unstyled">
									<?php if($row->years_of_exp != ''):?>
									<li><strong>Experience:</strong> <?=$row->years_of_exp?></li>
									<?php endif; ?>
									<?php if($row->area_of_special != ''):?>
									<li><strong>Specialization:</strong> <?=$row->area_of_special?></li>
									<?php endif; ?>
									<?php if($row->highest_education != ''):?>
									<li><strong>Degree:</strong> <?=$row->highest_education?></li>
									<?php endif; ?>
									<?php if($row->relocate != ''):?>
									<li><strong>Relocate:</strong> <?=$row->relocate?></li>
									<?php endif; ?>
									<?php if($row->desired_job_type != ''):?>
									<li><strong>Job Type:</strong> <?=$row->desired_job_type?> </li>
									<?php endif; ?>
									<?php if($row->expected_salary != ''):?>
									<li><strong>Salary Level:</strong> <?=$row->expected_salary?></li>
									<?php endif; ?>
									<?php if($row->gender != ''):?>
									<li><strong>Gender:</strong> <?=$row->gender?></li>
									<?php endif; ?>
									<?php if($row->dob != ''):?>
									<li><strong>Date of Birth:</strong> <?=date_format(date_create($row->dob), 'M j, Y');?></li>
									<?php endif; ?>	
									<?php if($row->language != ''):?>
									<li><strong>Language Spoken:</strong> <?=$row->language?></li>
									<?php endif; ?>		
							</ul>

							<p class="description"><!-- STORY STORY  --><a href="#" class="read-more"> Read More</a></p>

							<div class="clearfix"></div>

							<div class="content">								

								<h5>Skills</h5>

								<ul class="additional-requirements clearfix">
									<?php if($row->skill != ''):?>
										<?php $theskills = explode(',',$row->skill);?>
											<?php foreach ($theskills as $skilrow):?>
											<li><?=$skilrow;?></li>
											<?php endforeach;?>	
									<?php endif; ?>							
								</ul>	

								<h5>Work Experience</h5>

								<?php $this->db->where('username',$row->username);
										$this->db->from('work_experience');
										$experience = $this->db->get(); ?>
										<?php if($experience->num_rows() < 1):?>
										<?php echo "No work experience";?>
										<?php endif; ?>
										<?php if($experience->num_rows() > 0):?>
										<?php foreach($experience->result() as $exprow): ?>
										<ul class="list-unstyled">
											<li><strong>Company name: </strong><?=$exprow->work_name?></li>
											<li><strong>Position Held: </strong><?=$exprow->work_position?></li>
											<li><strong>Job Description: </strong><?=$exprow->work_description?></li>
										</ul>
										<br>
										<?php endforeach; ?>	
										<?php endif;?>					

							</div>
						</div>
						<div class='col-md-4'>
							<?php $savee = false;?>
							<?php foreach($save_search->result() as $saverow): ?>
									<?php if($saverow->candidate_id == $row->user_id): ?>
									<?php $savee = true; ?>
									<?php endif; ?>
							<?php endforeach;?>
							<?php if($savee): ?>
									<a href='#' class='btn btn-default pull-right mb5 mt20'  style='width:80%'>Saved</a>
							<?php endif; ?>
							<?php if(!$savee): ?>
									<a href='<?=base_url();?>jobs_recruit/job_saved_search/<?=$row->user_id?>' class='btn btn-default pull-right mb5 mt20'  style='width:80%'>Keep in view</a>
							<?php endif; ?>
							<?php $invitee = false;?>
							<?php foreach($invited_apply->result() as $inviterow): ?>
									<?php if($inviterow->candidate_id == $row->user_id): ?>
										<?php $invitee = true; ?>
									<?php endif; ?>
							<?php endforeach;?>
							<?php if($invitee): ?>
								<a href='#' class='btn btn-default pull-right mb5' style='width:80%'>Already Invited</a>
							<?php endif; ?>
							<?php if(!$invitee): ?>
								<a href='<?=base_url();?>jobs_recruit/job_invite_apply/<?=$row->user_id?>' class='btn btn-default pull-right mb5'  style='width:80%'>Invite to apply</a>
							<?php endif; ?>
							<?php if(($post != 0) && ($getpost->num_rows() > 0)): ?>
							<?php if($row->cv_upload != ''): ?>							
								<a href='<?=base_url();?>jobs_recruit/job_candidates_cv_download/<?=$row->cv_upload?>/<?=$row->user_id?>' class='btn btn-default pull-right mb5'  style='width:80%'>Download cv</a>
							<?php endif; ?>
							<?php if($row->cv_upload == ''): ?>							
								<a href='#' class='btn btn-default pull-right mb5'  style='width:80%'>cv not uploaded</a>
							<?php endif; ?>
							<?php endif; ?>											
						</div>
					</div>		
								<?php endforeach; ?>							
					<?php endif; ?>
					<?php if($candidatesearchingquery->num_rows() < 1): ?>
						<p>No candidate listed</p>
					<?php endif; ?>	
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

