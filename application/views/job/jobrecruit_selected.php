	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="title-lines">
						<h3 class="mt0">My Job</h3>
					</div>

					<div class="clearfix mb30">							
							<a href="<?=base_url();?>jobs_recruit" class="btn btn-gray">View all Jobs</a>
					</div>
					<?php if($jobrecruitselectquery->num_rows() < 1): ?>
						<p>No jobs posted</p>
					<?php endif; ?>
					<?php if($jobrecruitselectquery->num_rows() > 0): ?>
								<?php foreach($jobrecruitselectquery->result() as $row): ?>
					<div class="candidates-item">
						<!-- company_logo -->
						<?php if($row->company_logo == ''):?>
						<div class="thumb"><img src="<?=base_url()?>uploads/imagis.jpg" alt="Company Logo" title="Company Logo"></div>
						<?php endif; ?>
						<?php if($row->company_logo != ''):?>
						<div class="thumb"><img src="<?=base_url()?>uploads/<?=$row->company_logo?>" alt="Company Logo" title="Company Logo"></div>
						<?php endif;?>

						<h6 class="title"><a href="#"><?=$row->job_position?></a></h6>
						<span class="meta"><?=$row->company_name?>, <?=$row->job_location?>, <?=$row->job_country?></span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle" title='Read More'></a></li>
							<li><a href="<?=base_url();?>jobs_recruit/job_edit/<?=$row->job_id?>" class="btn btn-gray fa fa-edit" title='Edit Job'></a></li>
							<li><a href="<?=base_url();?>jobs_recruit/job_suspend/<?=$row->job_id?>" class="btn btn-gray fa fa-exclamation" title='Suspend Job'></a></li>
							<li><a href="<?=base_url();?>jobs_recruit/job_delete/<?=$row->job_id?>" class="btn btn-gray fa fa-trash-o" title='Delete Job'></a></li>
						</ul>

						<div class="clearfix">
								<a href="<?=base_url();?>jobs_recruit/job_candidates/<?=$row->job_id?>" class="btn btn-default pull-right">View Candidates
														<?php 
															$this->db->select('*');		
															$this->db->from('application');
															$this->db->where('job_id', $this->uri->segment(3));
															$this->db->join('users', 'users.username = application.candidate_username');															
															echo "(".$this->db->count_all_results().")";
														?>
								</a>								
						</div>
						<br>
						<ul class="list-unstyled">
								<?php if($row->work_exp != ''):?>
								<li><strong>Experience:</strong> <?=$row->work_exp?></li>
                                                                <?php endif;?>
                                                                <?php if($row->area_of_special != ''):?>
								<li><strong>Specialization:</strong> <?=$row->area_of_special?></li>
                                                                <?php endif;?>
                                                                <?php if($row->education_qualification != ''):?>
								<li><strong>Degree:</strong> <?=$row->education_qualification?></li>
                                                                <?php endif;?>
                                                                <?php if($row->job_type != ''):?>
								<li><strong>Job Type:</strong> <?=$row->job_type?> </li>
                                                                <?php endif;?>
                                                                <?php if($row->job_gender != ''):?>
								<li><strong>Gender:</strong> <?=$row->job_gender?></li>
                                                                <?php endif;?>
                                                                <?php if($row->no_of_slot != '' && $row->no_of_slot != 0):?>
								<li><strong>No of Slots:</strong> <?=$row->no_of_slot?></li>
                                                                <?php endif;?>
                                                                <?php if($row->salary_level != ''):?>																
								<li><strong>Salary Level:</strong> <?=$row->salary_level?></li>
                                                                <?php endif;?>
                                                                <?php if($row->job_end_date != ''):?>
								<li><strong>Application Closes:</strong> <?=date_format(date_create($row->job_end_date), 'M j, Y');?></li>
                                                                <?php endif;?>
							</ul>
							
						<p class="description"><a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
                                                         <p class="description"><?=$row->job_desc?></p>
							
                                                        <?php if($row->job_skills != ''):?>
							<h5>Skills</h5>

							<ul class="additional-requirements clearfix">
								<?php if($row->job_skills != ''):?>
									<?php $theskills = explode(',',$row->job_skills);?>
										<?php foreach ($theskills as $skilrow):?>
										<li><?=$skilrow;?></li>
										<?php endforeach;?>	
								<?php endif; ?>							
							</ul>							
                                                        <?php endif; ?>
							<hr>
							
						</div>
					</div>
								<?php endforeach; ?>							
					<?php endif; ?>					

				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	