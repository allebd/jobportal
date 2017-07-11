</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content blog">
					<?php foreach($training->result() as $row): ?>
						<h4 class="mt0"><?=$row->title?></h4>
						<span><i><?=date_format(date_create($row->date), 'j F, Y');?></i></span>

						<hr>

						<div class="clearfix mb30">
							
						</div>
                                                
                                                <?php if($row->photo != ''):?>
						<p class="text-center"><img src="<?=base_url();?>uploads/<?=$row->photo;?>" alt=""></p>
                                                <?php endif; ?>

						<p><?=$row->details?></p>	

						<?php if($row->docone != ''): ?>
							<a href="<?=base_url();?>trainings/download/<?=$row->docone?>" class="btn btn-default" >Download DOCUMENT / BROCHURE</a>
						<?php endif; ?>
						<a href="<?=base_url();?>trainings/apply/<?=$row->t_id?>" class="btn btn-default">REGISTER NOW</a>
						
					<?php endforeach; ?>				
				</div> <!-- end .page-content -->

				<div class="col-sm-4 page-sidebar">
					<aside>
						<!--<div class="widget sidebar-widget white-container social-widget">
							<h5 class="widget-title">Share</h5>

							<div class="widget-content">
								<div class="row row-p5">
									<div class="col-xs-6 col-md-3 share-box facebook">
										<div class="count">86</div>
										<a href="#">Facebook</a>
									</div>

									<div class="col-xs-6 col-md-3 share-box twitter">
										<div class="count">2.2k</div>
										<a href="#">Twitter</a>
									</div>

									<div class="col-xs-6 col-md-3 share-box google">
										<div class="count">324</div>
										<a href="#">Google +</a>
									</div>

									<div class="col-xs-6 col-md-3 share-box linkedin">
										<div class="count">1.5k</div>
										<a href="#">LinkedIn</a>
									</div>
								</div>
							</div>
						</div> -->

						<div class="row p40">
						<h5 class="mtm30"> Most Recent Trainings</h5>
						<?php foreach($trained->result() as $row): ?>
							<?php if($row->photo == ''):?>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<div class="partners-item">
												<div class="img" >
													<a href="<?=base_url()?>trainings/selected/<?=$row->t_id?>"><img src="<?=base_url();?>uploads/imagis.jpg" alt=""></a>

													<a href="<?=base_url()?>trainings/selected/<?=$row->t_id?>">
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
											<a href="<?=base_url()?>trainings/selected/<?=$row->t_id?>">
												<img src="<?=base_url();?>uploads/<?=$row->photo;?>" alt="">
											</a>

											<a href="<?=base_url()?>trainings/selected/<?=$row->t_id?>">
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

	