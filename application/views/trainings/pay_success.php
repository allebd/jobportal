	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						<div class='alert alert-success'>
							<h6>Payment Successful</h6>
							<a href='#' class='close fa fa-times'></a>
						</div>
						<?php if($trainings->num_rows() > 0): ?>
								<?php foreach($trainings->result() as $row): ?>
								<div class="jobs-item">
									<h5 class="title"><?=$row->title?></h5>
									<span class="meta mt5"><?=date_format(date_create($row->date), 'M j, Y');?></span>
									<ul class="top-btns">
										<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
									</ul>

									<?php if($row->photo == ''):?>
										<?php echo "";?>
									<?php endif;?>
									<?php if($row->photo != ''):?>
										<p class="text-center"><img src='<?=base_url()?>uploads/<?=$row->photo?>'></p>
									<?php endif;?>
									<p class="description"><a href="#" class="read-more">Read More</a></p>

						            <div class="clearfix"></div>
									<div class="content">										
										<p><?=$row->details?></p>
										<?php if($row->docone != ''): ?>
										<a href="<?=base_url();?>trainings/download/<?=$row->docone?>" class="btn btn-default" >Download DOCUMENT / BROCHURE</a>
										<?php endif; ?>
										<a href="<?=base_url();?>trainings/apply/<?=$row->t_id?>" class="btn btn-default">REGISTER NOW</a>					
									</div>
								</div>		
								<?php endforeach; ?>							
						<?php endif; ?>	
						
					</div>
				</div>

				<!-- <div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li class="active"><?=anchor('about/index', 'Who we are');?></li>
								<li><?=anchor('about/our_team', 'Our Team');?></li>
							</ul>
						</div>
					</aside>
				</div> -->
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	