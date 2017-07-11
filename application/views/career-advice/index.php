	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="clearfix mb30">
						<!-- <select class="form-control pull-left">
							<option value="">Sort By</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
						</select> -->

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
											<a href="<?=base_url()?>career_advice/blog/<?=$row->id?>">
												<img src="<?=base_url();?>uploads/<?=$row->cover_photo;?>" alt="">
											</a>

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

					<div class="clearfix">
						<?php echo $this->pagination->create_links();?>
					</div>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	