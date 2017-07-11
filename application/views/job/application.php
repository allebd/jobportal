	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="title-lines">
						<h3 class="mt0">My Job Applications</h3>
					</div>

					<div class="clearfix mb30">
						<!-- <select class="form-control pull-left">
							<option value="">Sort By</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
						</select>

						<ul class="pagination pull-right">
							<li><a href="#" class="fa fa-angle-left"></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="fa fa-angle-right"></a></li>
						</ul> -->
					</div>

					<?php if($jobapplyquery->num_rows() > 0): ?>
								<?php foreach($jobapplyquery->result() as $row): ?>
					<div class="jobs-item with-thumb">
						<div class="thumb"><img src="<?=base_url()?>uploads/<?=$row->company_logo?>" alt="Company Logo" title="Company Logo"></div>

						<h6 class="title"><a href="#"><?=$row->job_position?></a></h6>
						<span class="meta"><?=$row->company_name?>, <?=$row->job_location?>, <?=$row->job_country?></span>

						<ul class="top-btns">
							<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
						</ul>

						<p class="description"><a href="#" class="read-more">Read More</a></p>

						<div class="clearfix"></div>

						<div class="content">
                                                        <p class="description"><?=$row->job_desc?></p>
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
					<?php if($jobapplyquery->num_rows() < 1): ?>
						<p>No Job Application</p>
					<?php endif; ?>			

					<div class="clearfix">
						<ul class="pagination pull-right">
							<li><a href="#" class="fa fa-angle-left"></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="fa fa-angle-right"></a></li>
						</ul>
					</div>
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

