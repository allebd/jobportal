		<div class="notbodyclass">
			<div class="header-search-bar">
				<div class="container">
					<?php echo form_open('jobs/job_search'); ?>
						<div class="basic-form clearfix">
							<a href="#" class="toggle"><span></span></a>

							<div class="hsb-input-1">
								<input type="text" class="form-control" placeholder="Search for a job e.g Web Developer" name='areas_of_special'>
							</div>

							<div class="hsb-text-1">in</div>

							<div class="hsb-container">
								<div class="hsb-input-2">
									<select name='job_location' class='form-control'>
										<option value='' disabled='disabled' selected='selected'>Location</option>
										<?php foreach($location->result() as $row): ?>																
										<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
										<?php endforeach; ?>
									</select>										
								</div>

								<div class="hsb-select">
									<select name='work_exp' class='form-control'>
										<option value='' disabled='disabled' selected='selected'>Years of Experience</option>
										<?php foreach($year_experience->result() as $row): ?>																
										<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
										<?php endforeach; ?>
									</select>															
								</div>
							</div>

							<div class="hsb-submit">
								<input type="submit" class="btn btn-gray btn-block" value="Search">
							</div>
						</div>

						<div class="advanced-form bodyclass">
							<div class="container">
								<div class="row">
									<label class="col-md-3">Salary</label>

									<div class="col-md-9">
										<select name='salary_level' class='form-control' >
											<option value='' disabled='disabled' selected='selected'>Salary</option>
											<?php foreach($salary->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>									
									</div>
								</div>

								<div class="row">
									<label class="col-md-3">Job type</label>

									<div class="col-md-9">
										<select name='engagement_type' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Job Type</option>
											<?php foreach($job_type->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>	
									</div>
								</div>

								<div class="row">
									<label class="col-md-3">Industry</label>

									<div class="col-md-9">
										<select name='company_industry' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Industry</option>
											<?php foreach($industry->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>

								<div class="row">
									<label class="col-md-3">Qualification</label>

									<div class="col-md-9">
										<select name='education_qualification' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Qualification</option>
											<?php foreach($highest_education->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
						</div>

						<h5 class='notbodyclass'>Browse by</h5>
						<div class="notbodyclass">
							<div class="container">
								<div class="row">
									<div class="col-md-9">
										<select name='job_location' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Location</option>
											<?php foreach($location->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>									
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-9">
										<select name='work_exp' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Years of Experience</option>
											<?php foreach($year_experience->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>									
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-9">
										<select name='salary_level' class='form-control' >
											<option value='' disabled='disabled' selected='selected'>Salary</option>
											<?php foreach($salary->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>									
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-9">
										<select name='engagement_type' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Job Type</option>
											<?php foreach($job_type->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>	
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-9">
										<select name='company_industry' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Industry</option>
											<?php foreach($industry->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div><br>

								<div class="row">
									<div class="col-md-9">
										<select name='education_qualification' class='form-control'>
											<option value='' disabled='disabled' selected='selected'>Qualification</option>
											<?php foreach($highest_education->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div><br>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div> <!-- end .header-search-bar -->
		</div>
	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar bodyclass">
					<?php echo form_open('jobs/job_search'); ?>
						<aside>
							<div class="white-container brown-container mb0">
								<div class="widget sidebar-widget jobs-search-widget">
									<h5 class="widget-title">Search</h5>

									<div class="widget-content">
										<span>I'm looking for a ...</span>
										<input type="text" class="form-control mt10 mb10" placeholder="Job" name='areas_of_special'>
										
										<span>in</span>

										<select name='job_location' class='form-control mt10'>
											<option value='' disabled='disabled' selected='selected'>-- Location --</option>
											<?php foreach($location->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>	

										<select name='work_exp' class='form-control mt15 mb15'>
											<option value='' disabled='disabled' selected='selected'>-- Years of Experience --</option>
											<?php foreach($year_experience->result() as $row): ?>																
											<option value = '<?=$row->name;?>' ><?=$row->name;?></option>
											<?php endforeach; ?>
										</select>

										<input type="submit" class="btn btn-default" value="Search">
									</div>
								</div>

								<div class="widget sidebar-widget jobs-filter-widget">
									<h5 class="widget-title">Filter Results</h5>

									<div class="widget-content">
										<h6>By Industry</h6>

										<div>
											<ul class="filter-list">
												<li>
													<select name='company_industry' class='form-control mb20' >
														<option value='' disabled='disabled' selected='selected'>-- Industry --</option>
															<?php foreach($industry->result() as $row): ?>																
																<option value = '<?=$row->name;?>' ><?=$row->name;?> 
																	<span><?php 
																				$this->db->where('company_industry', $row->name);
																				$this->db->where('suspend', 0);
																				$this->db->where('job_end_date_conv >', strtotime('now'));
																				$this->db->from('job');
																				echo "(".$this->db->count_all_results().")";
																			?>
																	</span>
																</option>
															<?php endforeach; ?>															
													</select>		
												</li>									
											</ul>
											
											<a href="#" class="toggle"></a>
										</div>

										<h6>By Specialization</h6>

										<div>
											<ul class="filter-list">
												<li>
													<select name='area_of_special' class='form-control mb20' >
														<option value='' disabled='disabled' selected='selected'>-- Specialization --</option>
															<?php foreach($specialization->result() as $row): ?>																
																<option value = '<?=$row->name;?>' ><?=$row->name;?> 
																	<span><?php 
																				$this->db->where('area_of_special', $row->name);
																				$this->db->where('suspend', 0);
																				$this->db->where('job_end_date_conv >', strtotime('now'));
																				$this->db->from('job');
																				echo "(".$this->db->count_all_results().")";
																			?>
																	</span>
																</option>
															<?php endforeach; ?>															
													</select>		
												</li>									
											</ul>											

											<a href="#" class="toggle"></a>
										</div>

										<h6>By Salary Level </h6>

										<div>
											<ul class="filter-list">
												<li>
													<select name='salary_level' class='form-control mb20' >
														<option value='' disabled='disabled' selected='selected'>-- Salary Level --</option>
															<?php foreach($salary->result() as $row): ?>																
																<option value = '<?=$row->name;?>' ><?=$row->name;?> 
																	<span><?php 
																				$this->db->where('salary_level', $row->name);
																				$this->db->where('suspend', 0);
																				$this->db->where('job_end_date_conv >', strtotime('now'));
																				$this->db->from('job');
																				echo "(".$this->db->count_all_results().")";
																			?>
																	</span>
																</option>
															<?php endforeach; ?>															
													</select>		
												</li>									
											</ul>

											<a href="#" class="toggle"></a>
										</div>

										<h6>Work Type</h6>

										<div>
											<ul class="filter-list">
												<li>
													<select name='job_type' class='form-control mb20' >
														<option value='' disabled='disabled' selected='selected'>-- Work Type --</option>
															<?php foreach($job_type->result() as $row): ?>																
																<option value = '<?=$row->name;?>' ><?=$row->name;?> 
																	<span><?php 
																				$this->db->where('job_type', $row->name);
																				$this->db->where('suspend', 0);
																				$this->db->where('job_end_date_conv >', strtotime('now'));
																				$this->db->from('job');
																				echo "(".$this->db->count_all_results().")";
																			?>
																	</span>
																</option>
															<?php endforeach; ?>															
													</select>		
												</li>									
											</ul>

											<a href="#" class="toggle"></a>
										</div>

										<input type="submit" class="btn btn-default mt30" value="Filter">
									</div>
								</div>
							</div>
						</aside>
					<?php echo form_close(); ?>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content">
					<!-- <div class="title-lines">
						<h3 class="mt0">Available Jobs</h3>
					</div> -->

					<div class="clearfix mb30">
						
					
					</div>

					<?php if($jobviewquery->num_rows() > 0): ?>
								<?php foreach($jobviewquery->result() as $row): ?>
					<div class="jobs-item with-thumb">
						<?php if($row->anonymous == 1):?>
						<div class="thumb"><img src="<?=base_url()?>uploads/imagis.jpg" alt="Company Logo" title="Company Logo"></div>
						<?php endif;?>
						<?php if($row->anonymous == 0):?>
						<?php if($row->company_logo == ''):?>
						<div class="thumb"><img src="<?=base_url()?>uploads/imagis.jpg" alt="Company Logo" title="Company Logo"></div>
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


						<?php if($is_logged_in == true):?>
							<?php foreach($candidatejobquery->result() as $jobrow): ?>
								<?php if($jobrow->job_id == $row->job_id):?>
									<?=$applied=true;?>
								<?php endif?>
							<?php endforeach;?>
							<?php if(!$applied): ?>
								<div class="clearfix">
									<a href="<?=base_url();?>jobs/apply/<?=$row->job_id?>" class="btn btn-default pull-right">Apply for this job</a>								
								</div>
							<?php endif; ?>
							<?php if($applied): ?>
								<div class="clearfix">
									<a href="#" class="btn btn-default pull-right">Already Applied for this job</a>								
								</div>
							<?php endif; ?>						
						<?php endif?>
						<?php if($is_logged_in != true): ?>
							<div class="clearfix">
								<a href="<?=base_url();?>login/signin" class="btn btn-default pull-right">Apply for this job</a>								
							</div>
						<?php endif; ?>										
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
                                                        <p class="description"><?=$row->job_desc?> </p>
							
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

					<div class="clearfix">
						<?php echo $this->pagination->create_links();?>
					</div>
				</div> <!-- end .page-content -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
