	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="title-lines">
						<h3 class="mt0">Job Candidates</h3>
					</div>

					<div class="clearfix mb30">							
							<a href="<?=base_url();?>jobs_recruit/job_shortlisted/<?=$this->uri->segment(3);?>" class="btn btn-gray">View Shortlisted Candidates</a>
					</div>
					<?php if($jobcandidatequery->num_rows() < 1): ?>
						<p>No candidate listed.</p>
					<?php endif; ?>
					<?php if($jobcandidatequery->num_rows() > 0): ?>
								<?php foreach($jobcandidatequery->result() as $row): ?>
					<div class="candidates-item">						
						<!-- company_logo -->
						<div class="thumb"><img src="<?=base_url()?>uploads/profile-pic.jpg" alt="Company Logo" title="Company Logo"></div>
						<h6 class="title"><a href="#"><?=$row->surname?> <?=$row->firstname?></a></h6>
						<span class="meta"><?=$row->location?></span>

						<ul class="top-btns">						
							<li><a href="#" class="btn btn-gray fa fa-plus toggle" title="Read More"></a></li>
						<?php if($row->choose == 0):?>
							<li><a href="<?=base_url();?>jobs_recruit/job_shortlist/<?=$row->application_id?>" class="btn btn-gray fa fa-check" title="Select Candidate"></a></li>
						<?php endif;?>
						</ul>

						<?php if($row->cv_upload != ''): ?>
							<div class="clearfix">
									<a href="<?=base_url();?>jobs_recruit/job_candidates_cv_download/<?=$row->cv_upload?>" class="btn btn-default pull-right">Download CV</a>								
							</div>
						<?php endif; ?>						
						<br>
						<p class="description"><a href="#" class="read-more"> Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">					
							<ul class="list-unstyled">
								<li><strong>Experience:</strong> <?=$row->years_of_exp?></li>
								<li><strong>Specialization:</strong> <?=$row->area_of_special?></li>
								<li><strong>Degree:</strong> <?=$row->highest_education?></li>
								<li><strong>Relocate:</strong> <?=$row->relocate?></li>
								<li><strong>Job Type:</strong> <?=$row->desired_job_type?></li>
								<li><strong>Salary Level:</strong> <?=$row->expected_salary?></li>
								<li><strong>Gender:</strong> <?=$row->gender?></li>	
								<li><strong>Phone:</strong> <?=$row->mobile_number?></li>
								<li><strong>Address:</strong> <?=$row->contact_address?></li>	
							</ul>
							<h5>Skills</h5>

							<ul class="additional-requirements clearfix">
								<?php if($row->skill != ''):?>
									<?php $theskills = explode(',',$row->skill);?>
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

					<div class="clearfix">
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
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	