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

		<!-- <div class='notbodyclass'>
		</div> -->

		<div class="header-sidelink">
			<?=anchor('recruitlogin/signin', 'Recruiters');?>
		</div>

		<div class="header-banner bodyclass">
			<div class="flexslider header-slider">
				<ul class="slides">
					<?php $this->db->where('slide_id',1);
					$slideone = $this->db->get('slide'); 
					foreach($slideone->result() as $onerow) :?>
					<li>
						<div class='headermsg'>		
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-findjob.png" alt="">
							</div>
							<div class='col-sm-8 text-left'>

								<h4><?=$onerow->main_header?></h4>
								<h5><?=$onerow->sub_header?></h5>
								<a href="<?=base_url();?><?=$onerow->url?>" class="btn btn-default">REGISTER HERE</a>
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$onerow->picture?>"></div>
					</li>
					<?php endforeach; ?>
					

					
					<?php $this->db->where('slide_id',2);
					$slidetwo = $this->db->get('slide'); 
					foreach($slidetwo->result() as $tworow) :?>
					<li>
						<div class='headermsg'>	
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-recruiter.png" alt="">
							</div>
							<div class='col-sm-8 text-left'>
								<h3><span class='fa fa-angle-right'><span class='fa fa-angle-right'><span class='fa fa-angle-right'></span></span></span>
									RECRUITERS
								</h3>
								<h4><?=$tworow->main_header?></h4>
								<h5><?=$tworow->sub_header?></h5>
								<a href="<?=base_url();?><?=$tworow->url?>" class="btn btn-default">START HERE</a>
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$tworow->picture?>"></div>
					</li>
					<?php endforeach; ?>
					

					
					<?php $this->db->where('slide_id',3);
					$slidethree = $this->db->get('slide'); 
					foreach($slidethree->result() as $threerow) :?>
					<li>
						<div class='headermsg'>	
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-strategic.png" alt="">
							</div>
							<div class='col-sm-8 text-left'>
								<h4><?=$threerow->main_header?></h4>
								<h5><?=$threerow->sub_header?></h5>
								<a href="<?=base_url();?><?=$threerow->url?>" class="btn btn-default">LEARN MORE</a>
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$threerow->picture?>"></div>
					</li>
					<?php endforeach; ?>				

					
					<?php $this->db->where('slide_id',4);
					$slidefour = $this->db->get('slide'); 
					foreach($slidefour->result() as $fourrow) :?>
					<li>
						<div class='headermsg'>							
							<div class='col-sm-8 text-right'>
								<h4><?=$fourrow->main_header?></h4>
								<h5><?=$fourrow->sub_header?></h5>
								<a href="<?=base_url();?><?=$fourrow->url?>" class="btn btn-default">LEARN MORE</a>
							</div>
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-staffing.png" alt="">
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$fourrow->picture?>"></div>
					</li>
					<?php endforeach; ?>
					
					
					<?php $this->db->where('slide_id',5);
					$slidefive = $this->db->get('slide'); 
					foreach($slidefive->result() as $fiverow) :?>
					<li>
						<div class='headermsg'>
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-training.png" alt="">
							</div>
							<div class='col-sm-8 text-left'>
								<h4><?=$fiverow->main_header?></h4>
								<h5><?=$fiverow->sub_header?></h5>
								<a href="<?=base_url();?><?=$fiverow->url?>" class="btn btn-default">LEARN MORE</a>
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$fiverow->picture?>"></div>
					</li>
					<?php endforeach; ?>
					
					
					<?php $this->db->where('slide_id',6);
					$slidesix = $this->db->get('slide'); 
					foreach($slidesix->result() as $sixrow) :?>
                    <li>
						<div class='headermsg'>	
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-reward.png" alt="">
							</div>
							<div class='col-sm-8 text-left'>
								<h4><?=$sixrow->main_header?></h4>
								<h5><?=$sixrow->sub_header?></h5>
								<a href="<?=base_url();?><?=$sixrow->url?>" class="btn btn-default">LEARN MORE</a>
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$sixrow->picture?>"></div>
					</li>
					<?php endforeach; ?>
					
					
					<?php $this->db->where('slide_id',7);
					$slideseven = $this->db->get('slide'); 
					foreach($slideseven->result() as $sevenrow) :?>
					<li>
						<div class='headermsg'>	
							<div class='col-sm-8 text-right'>
								<h4><?=$sevenrow->main_header?></h4>
								<h5><?=$sevenrow->sub_header?></h5>
								<a href="<?=base_url();?><?=$sevenrow->url?>" class="btn btn-default">LEARN MORE</a>
							</div>
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-outsourcing.png" alt="">
							</div>							
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$sevenrow->picture?>"></div>						
					</li>
					<?php endforeach; ?>
					
					<?php $this->db->where('slide_id',8);
					$slideeight = $this->db->get('slide'); 
					foreach($slideeight->result() as $eightrow) :?>
					<li>
						<div class='headermsg'>							
							<div class='col-sm-8 text-right'>
								<h4><?=$eightrow->main_header?></h4>
								<h5><?=$eightrow->sub_header?></h5>
								<a href="<?=base_url();?><?=$eightrow->url?>" class="btn btn-default">LEARN MORE</a>
							</div>
							<div class='slideicon col-sm-4'>
								<img src="<?=base_url();?>img/slide-icons/icon-candidate.png" alt="">
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$eightrow->picture?>"></div>
					</li>
					<?php endforeach; ?>


					<?php 
					$slidenine = $this->db->get('slide',10,8); 
					foreach($slidenine->result() as $ninerow) :?>
					<li>
						<div class='headermsg'>							
							<div class='col-sm-8 text-right'>
								<h4><?=$ninerow->main_header?></h4>
								<h5><?=$ninerow->sub_header?></h5>
								<a href="<?=base_url();?><?=$ninerow->url?>" class="btn btn-default">LEARN MORE</a>
							</div>
							<div class='slideicon col-sm-4'>
							</div>
						</div>
						<div data-image="<?=base_url();?>uploads/<?=$ninerow->picture?>"></div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div> <!-- end .header-banner -->
	</header> <!-- end #header -->

	<div class="lightbrown-container bodyclass">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="title-lines">
						<h3 class="mt0">Browse Jobs by</h3>
					</div>

					<div class="find-job-tabs responsive-tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#find-job-tabs-industry">Specialization</a></li>
							<li><a href="#find-job-tabs-role">Industry</a></li>
							<li><a href="#find-job-tabs-country">Location</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="find-job-tabs-industry">
								<div class="row p40">
									<div class="col-sm-4">

										<ul class="filter-list">
											<?php foreach($specializationone->result() as $row): ?>
											<li><a href="<?=base_url();?>jobs/job_search_by_specialization/<?=$row->id?>"><?=$row->name?> 
												<span><?php 
															$this->db->where('area_of_special', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
											<?php endforeach; ?>
										</ul>
										
									</div>

									<div class="col-sm-4">
										
										<ul class="filter-list">
											<?php foreach($specializationtwo->result() as $row): ?>
											<li><a href="<?=base_url();?>jobs/job_search_by_specialization/<?=$row->id?>"><?=$row->name?> 
												<span><?php 
															$this->db->where('area_of_special', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
											<?php endforeach; ?>											
										</ul>
										
									</div>

									<div class="col-sm-4">
										
										<ul class="filter-list">
											<?php foreach($specializationthree->result() as $row): ?>
											<li><a href="<?=base_url();?>jobs/job_search_by_specialization/<?=$row->id?>"><?=$row->name?>
											<span><?php 
															$this->db->where('area_of_special', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
											<?php endforeach; ?>
										</ul>
										
									</div>
								</div>
							</div>

							<div class="tab-pane" id="find-job-tabs-role">
								<div class="p40">
									<div class="row">
										<div class="col-sm-3">
											<ul class="filter-list">
												<?php foreach($industryone->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_industry/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('company_industry', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
												<?php endforeach; ?>											
											</ul>
										</div>

										<div class="col-sm-3">
											<ul class="filter-list">
												<?php foreach($industrytwo->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_industry/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('company_industry', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
												<?php endforeach; ?>												
											</ul>
										</div>

										<div class="col-sm-3">
											<ul class="filter-list">												
												<?php foreach($industrythree->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_industry/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('company_industry', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
												<?php endforeach; ?>											
											</ul>
										</div>

										<div class="col-sm-3">
											<ul class="filter-list">												
												<?php foreach($industryfour->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_industry/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('company_industry', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
												<?php endforeach; ?>											
											</ul>
										</div>
									</div>
								</div>
							</div>

							<!-- states-tabs -->
							<div class="tab-pane" id="find-job-tabs-country">
								<div class="row p40">
									<div class="col-sm-3">
										<!-- 	states-list -->
										<ul class="filter-list">												
											<?php foreach($locationone->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_location/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('job_location', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
											<?php endforeach; ?>											
										</ul>
									</div>

									<div class="col-sm-3">
										<!-- 	states-list -->
										<ul class="filter-list">												
											<?php foreach($locationtwo->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_location/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('job_location', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
											<?php endforeach; ?>											
										</ul>
									</div>

									<div class="col-sm-3">
										<!-- 	states-list -->
										<ul class="filter-list">												
											<?php foreach($locationthree->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_location/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('job_location', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
											<?php endforeach; ?>											
										</ul>
									</div>

									<div class="col-sm-3">
										<!-- 	states-list -->
										<ul class="filter-list">												
											<?php foreach($locationfour->result() as $row): ?>
												<li><a href="<?=base_url();?>jobs/job_search_by_location/<?=$row->id?>"><?=$row->name?>
												<span><?php 
															$this->db->where('job_location', $row->name);
															$this->db->where('suspend', 0);
															$this->db->where('job_end_date_conv >', strtotime('now'));
															$this->db->from('job');
															echo "(".$this->db->count_all_results().")";
														?></span></a></li>
											<?php endforeach; ?>											
										</ul>
									</div>
								</div>
                  			</div>
						</div>
					</div> <!-- end .find-job-tabs -->								
				</div> 
			</div>
	</div> <!-- end .container -->
	<div id="page-content" class='bodyclass'>
		<?php if($toprecruit->num_rows() < 1):?>
		<?php echo ""; ?>
		<?php endif; ?>
		<?php if($toprecruit->num_rows() > 0):?>					
		<div class="success-stories-section">
			<div class="container">
				<h5 class="mt40">Our Top Recruiters</h5>

				<div>
					<div class="flexslider">
						<ul class="slides">
							<?php foreach($toprecruit->result() as $row): ?>
							<?php if($row->photo == ''):?>
							<?php echo ""; ?>
							<?php endif;?>
							<?php if($row->photo != ''):?>
							<li>
								<a href="#">
									<img src='<?=base_url()?>uploads/<?=$row->photo?>' width='125' height='125' class="thumb" alt="<?=$row->photo?>">
									<!-- <p>200 jobs</p> -->
								</a>
							</li>
							<?php endif;?>
							<?php endforeach;?>
						</ul>
					</div>
					<a href="<?=base_url();?>recruiter/all" class="btn btn-default pull-right mt40 mb40">See All Recruiters </a>
				</div>
			</div>
		</div>
		<?php endif;?>

		<?php if($f_jobs->num_rows() < 1):?>
		<?php echo ""; ?>
		<?php endif; ?>
		<?php if($f_jobs->num_rows() > 0):?>
		<div class='jobcolor-container'>
			<div class="title-lines">
				<h3>Featured Jobs</h3>
			</div>

			<div class="latest-jobs-section white-container noback-container">
							<div class="flexslider clearfix">
								<ul class="slides">
									<?php foreach($f_jobs->result() as $row): ?>
									<li>
										<?php if($row->anonymous == 1):?>
										<div class="image">
											<img src="<?=base_url()?>uploads/imagis.jpg" alt="" title="Apply">
											<a href="<?=base_url()?>login/signin" class="btn btn-default fa fa-envelope" title="Apply"></a>
										</div>
										<?php endif;?>
										<?php if($row->anonymous == 0):?>
										<?php if($row->company_logo == ''):?>
										<div class="image">
											<img src="<?=base_url()?>uploads/imagis.jpg" alt="" title="Apply">
											<a href="<?=base_url()?>login/signin" class="btn btn-default fa fa-envelope" title="Apply"></a>
										</div>
										<?php endif; ?>
										<?php if($row->company_logo != ''):?>
										<div class="image">
											<a href="<?=base_url()?>jobs/job_selected/<?=$row->job_id;?>"><img src="<?=base_url()?>uploads/<?=$row->company_logo?>" alt="" title="Apply"></a>
											<a href="<?=base_url()?>login/signin" class="btn btn-default fa fa-envelope" title="Apply"></a>
										</div>
										<?php endif; ?>
										<?php endif; ?>

										<div class="content">
											<h6><a href="<?=base_url()?>jobs/job_selected/<?=$row->job_id;?>"><?=$row->job_position?></a></h6>
											<span class="location"><?php if($row->anonymous == 0):?><?=$row->company_name.','?> <?php endif;?><?php if($row->job_location != ''):?><?=$row->job_location.','?><?php endif;?> <?php if($row->job_country != ''):?><?=$row->job_country?><?php endif;?></span>
											 <?php if($row->job_skills != ''):?>
							                                           <p><strong>Skills Required </strong><br>
                                                                                                        <?php if($row->job_skills != ''):?>
									                                          <?php $theskills = explode(',',$row->job_skills);?>
										                                            <?php foreach ($theskills as $skilrow):?>
										                                                      <?=$skilrow;?>,
										                                            <?php endforeach;?>	
								                                        <?php endif; ?>
                                                                                                  </p>			
                                                                                        <?php endif; ?>
										</div>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
			</div>
		</div> <!-- end .latest-jobs-section -->
		<?php endif; ?>		

		<?php if($article->num_rows() < 1):?>
		<?php echo ""; ?>
		<?php endif; ?>
		<?php if($article->num_rows() > 0):?>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="title-lines">
						<h3 class="mt0">Career Hub</h3>
					</div>

					<div class="find-job-tabs responsive-tabs">
						<ul class="nav nav-tabs">
							<!-- <li class="active"><a href="#find-job-tabs-map">Map</a></li> -->
							<li class="active"><a href="#latest-posts">Latest Posts</a></li>
							<li><a href="#popular">Popular</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active" id="latest-posts">
									<div class="row p40">
										<?php foreach($article->result() as $row): ?>
										<?php if($row->cover_photo == ''):?>
										<div class="col-sm-6 col-md-4 col-lg-3">
											<div class="partners-item">
												<div class="img" >
													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>"><img src="<?=base_url();?>uploads/imagis.jpg" alt=""></a>

													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>">
														<div class="overlay">
														</div>
													</a>
												</div>

												<div class="meta clearfix">
													<h4><?=$row->title?></h4>
													
													<span><?=date_format(date_create($row->date), 'j F, Y');?> by <?=$row->author?></span>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php if($row->cover_photo != ''):?>
										<div class="col-sm-6 col-md-4 col-lg-3">
											<div class="partners-item">
												<div class="img" >
													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>"><img src="<?=base_url();?>uploads/<?=$row->cover_photo;?>" alt=""></a>

													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>">
														<div class="overlay">
														</div>
													</a>
												</div>

												<div class="meta clearfix">
													<h4><?=$row->title?></h4>
													
													<span><?=date_format(date_create($row->date), 'j F, Y');?> by <?=$row->author?></span>
												</div>
											</div>
										</div>
										<?php endif;?>
										<?php endforeach;?>
									</div>
							</div>

							<div class="tab-pane" id="popular">
									<div class="row p40">
										<?php foreach($darticle->result() as $row): ?>
										<?php if($row->cover_photo == ''):?>
										<div class="col-sm-6 col-md-4 col-lg-3">
											<div class="partners-item">
												<div class="img" >
													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>"><img src="<?=base_url();?>uploads/imagis.jpg" alt=""></a>

													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>">
														<div class="overlay">
														</div>
													</a>
												</div>

												<div class="meta clearfix">
													<h4><?=$row->title?></h4>
													
													<span><?=date_format(date_create($row->date), 'j F, Y');?> by <?=$row->author?></span>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php if($row->cover_photo != ''):?>
										<div class="col-sm-6 col-md-4 col-lg-3">
											<div class="partners-item">
												<div class="img" >
													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>"><img src="<?=base_url();?>uploads/<?=$row->cover_photo;?>" alt=""></a>

													<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>">
														<div class="overlay">
														</div>
													</a>
												</div>

												<div class="meta clearfix">
													<h4><?=$row->title?></h4>
													
													<span><?=date_format(date_create($row->date), 'j F, Y');?> by <?=$row->author?></span>
												</div>
											</div>
										</div>
										<?php endif;?>
										<?php endforeach;?>
									</div>
							</div>
						</div>
						<a href="<?=base_url();?>career_advice/index" class="btn btn-default pull-right mtm30">See All Posts</a>
					</div> <!-- end .find-job-tabs -->

					<!-- end .latest-jobs-section -->

					
				</div> <!-- end .page-content -->				
			</div>
		</div>
		<?php endif; ?>
		<!-- end .container -->
		<?php if($testimony->num_rows() < 1):?>
		<?php echo ""; ?>
		<?php endif; ?>
		<?php if($testimony->num_rows() > 0):?>
		<div class='lightbrown-container pb15'>
			<div class="title-lines">
				<h3>Testimonials</h3>
			</div>

			<div class="latest-jobs-section white-container noback-container">
				<div class="flexslider clearfix">
					<ul class="slides">
						<?php foreach($testimony->result() as $row): ?>
									<li>
										<?php if($row->photo == ''):?>
										<?php echo ""; ?>
										<?php endif; ?>
										<?php if($row->photo != ''):?>
										<div class="image">
											<img src="<?=base_url();?>uploads/<?=$row->photo;?>" alt="">
										</div>
										<?php endif; ?>

										<div class="content">
											<h6><?=$row->name?></h6>
											<span class="location"><?=$row->company_name?></span>
											<p>"<?=$row->body?>"</p>
										</div>
									</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div> <!-- end .latest-jobs-section -->
		<?php endif; ?>
	</div> <!-- end #page-content -->
