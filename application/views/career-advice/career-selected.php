</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content blog">
					<?php foreach($article->result() as $row): ?>
						<h4 class="mt0"><?=$row->title?></h4>
						<span><i><?=date_format(date_create($row->date), 'j F, Y');?> by <?=$row->author?></i></span>

						<hr>

						<div class="clearfix mb30">
							
						</div>
                                                
                                                <?php if($row->cover_photo != ''):?>
						<p class="text-center"><img src="<?=base_url();?>uploads/<?=$row->cover_photo;?>" alt=""></p>
                                                <?php endif; ?>

						<p><?=$row->body?></p>	

						<h6>Comment</h6>
						<?php if ($mycomment->num_rows() > 0):?>

							<?php foreach($mycomment->result() as $crow): ?>

							<span><strong><?=$crow->comment_author?></strong></span>
							<p><?=$crow->comment_body?></p>	
							<hr>
							<?php endforeach; ?>

						<?php endif; ?>

						<!-- form open -->
						<?=form_open('career_advice/comment_insert');?>

						<?=form_hidden('blog_id', $this->uri->segment(3));?>
						<?=form_hidden('title', $row->title);?>

						<p><input type='text' name='comment_author' placeholder='Name'/></p>
						<?php echo form_error('comment_body', '<div class="error">', '</div>'); ?>
						<p><textarea name='comment_body' rows='5' placeholder='Type your comment....'></textarea></p>
						<p><input type='submit' value='Comment'/></p>

						<?=form_close();?>
						<!-- form close -->
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
						<h5 class="mtm30"> Most Recent Articles</h5>
						<?php foreach($articled->result() as $row): ?>
							<?php if($row->cover_photo == ''):?>
										<div class="col-sm-12 col-md-12 col-lg-12">
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
													<p><?=$row->body?></p>
													<span><?=date_format(date_create($row->date), 'j F, Y');?> by <?=$row->author?></span>
												</div>
											</div>
										</div>
							<?php endif; ?>
							<?php if($row->cover_photo != ''):?>
								<div class="col-sm-12 col-md-12 col-lg-12">
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
											<p><?=$row->summary?></p>
											<span><?=date_format(date_create($row->date), 'j F, Y');?> by <?=$row->author?></span>
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

	