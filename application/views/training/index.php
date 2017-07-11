	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="mb0">

						<!-- <h4>Overview</h4> -->

						<?php foreach($trainings_overview->result() as $trow): ?>
							<p><?=$trow->trainings_overview?></p>
						<?php endforeach;?>

						<?php if(!isset($error) || $error == '' ): ?>
							<?php echo "";?>
						<?php endif;?>
						<?php if($error != '' )
								{
								echo "<div class='alert alert-error'>
									<h6>$error</h6>
									<a href='#' class='close fa fa-times'></a>
								</div>";
								}
						?>
						<br>
						<!-- <h5>List of Available Trainings</h5> -->

						<?php foreach($trainin->result() as $row): ?>
								<div class="jobs-item with-thumb row">
									<div class='col-md-12'>
										<div class="pull-left">
											<?php if($row->photo == ''):?>
												<div class="partners-item m10">
														<div class="img" >
															<a href="<?=base_url()?>training/selected/<?=$row->t_id?>"><img src="<?=base_url();?>uploads/imagis.jpg" alt=""></a>

															<a href="<?=base_url()?>training/selected/<?=$row->t_id?>">
																<div class="overlay">
																</div>
															</a>
														</div>
												</div>
											<?php endif; ?>
											<?php if($row->photo != ''):?>
												<div class="partners-item m10">
														<div class="img" >
															<a href="<?=base_url()?>training/selected/<?=$row->t_id?>">
																<img src="<?=base_url();?>uploads/<?=$row->photo;?>" alt="">
															</a>

															<a href="<?=base_url()?>training/selected/<?=$row->t_id?>">
																<div class="overlay">
														        </div>
														    </a>
														</div>
												</div>
											<?php endif; ?>
										</div>
										
										<div class="">
											<h4 class="title"><a href="<?=base_url()?>training/selected/<?=$row->t_id?>"><?=$row->title?></a></h4>
											<span class='mt10 mb10'><i><?=date_format(date_create($row->date), 'j F, Y');?></i></span>
											<br>
											<br>
											<p class="description"><?=$row->summary?></p>

											<a href="<?=base_url()?>training/selected/<?=$row->t_id?>">Read More</a>
										</div>
									</div>
								</div>
						<?php endforeach; ?>
					</div>

					<div class="clearfix">
							<?php echo $this->pagination->create_links();?>
					</div>
				</div>
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="row p40">
						<h5 class="mtm30"> Most Recent Trainings</h5>
						<?php foreach($trainings->result() as $row): ?>
							<?php if($row->photo == ''):?>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<div class="partners-item">
												<div class="img" >
													<a href="<?=base_url()?>training/selected/<?=$row->t_id?>"><img src="<?=base_url();?>uploads/imagis.jpg" alt=""></a>

													<a href="<?=base_url()?>training/selected/<?=$row->t_id?>">
														<div class="overlay">
														</div>
													</a>
												</div>

												<div class="meta clearfix">
													<h4><?=$row->title?></h4>
													<span><?=date_format(date_create($row->date), 'j F, Y');?></span>
												</div>
											</div>
										</div>
							<?php endif; ?>
							<?php if($row->photo != ''):?>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="partners-item">
										<div class="img" >
											<a href="<?=base_url()?>training/selected/<?=$row->t_id?>">
												<img src="<?=base_url();?>uploads/<?=$row->photo;?>" alt="">
											</a>

											<a href="<?=base_url()?>training/selected/<?=$row->t_id?>">
												<div class="overlay">
										        </div>
										    </a>
										</div>

										<div class="meta clearfix">
											<h4><?=$row->title?></h4>
											<span><?=date_format(date_create($row->date), 'j F, Y');?></span>
										</div>
									</div>
								</div>
							<?php endif;?>
						<?php endforeach;?>
					</div>
					</aside>
				</div> <!-- end .page-sidebar -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	