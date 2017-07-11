	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="title-lines">
						<h3 class="mt0">Available Jobs</h3>
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

					<?php if($jobviewquery->num_rows() > 0): ?>
								<?php foreach($jobviewquery->result() as $row): ?>
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
						</ul>

						<?=$applied=false;?>

						<?php if(isset($candidatejobquery)):?>
							<?php foreach($candidatejobquery->result() as $jobrow): ?>
								<?php if($jobrow->job_id == $row->job_id):?>
									<?php $applied=true;?>
								<?php endif?>
							<?php endforeach;?>
							<?php if(!$applied && (isset($is_logged_in))): ?>
								<div class="clearfix">
									<a href="<?=base_url();?>jobs/apply/<?=$row->job_id?>" class="btn btn-default pull-right">Apply for this job</a>								
								</div>
							<?php endif; ?>						
						<?php endif?>
						<?php if(!isset($candidatejobquery)): ?>
							<div class="clearfix">
								<a href="<?=base_url();?>login/signin" class="btn btn-default pull-right">Apply for this job</a>								
							</div>
						<?php endif; ?>
												
						<br>

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

						<p class="description"><a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
							<p class="description"><?=$row->job_desc?> </p>

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
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

