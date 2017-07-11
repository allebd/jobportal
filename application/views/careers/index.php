	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						
						<p><?=$careerone?></p>
												
						<p><?=$careertwo?></p>

						<p><?=$careerthree?></p>

						<h5>Do you want to be a part of our success?</h5>

						<p>Why not get going on your way to the top by taking advantage of wonderful career opportunities here at MPS for:</p>
						
						<ul>
							<li>Students and</li>
							<li>Experienced Professionals</li>
						</ul>

						<br>

						<div class="row">
							<div class="col-sm-6">
								<img src="<?=base_url();?>img/careers1.jpg" alt="">
							</div>
							<div class="col-sm-6">
								<img src="<?=base_url();?>img/careers2.jpg" alt="">
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<h5>Current Job Openings</h5>
						<?php if(!isset($msg_success)): ?>
							<?php echo "";?>
						<?php endif;?>
						<?php
								if(isset($msg_success))
								{
								echo "<div class='alert alert-success'>
									<h6>$msg_success</h6>
									<a href='#' class='close fa fa-times'></a>
								</div>";
								}
						?>	
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
						<?php if($mpscareers->num_rows() > 0):?>
						<?php foreach($mpscareers->result() as $row): ?>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li>
									<div class="jobs-item brown-container">
						
											<b class='text-left'><?=$row->name?></b>
											<p><a href="#" class="read-more">See More</a></p>

											<ul class="top-btns top-btn">
												<li><a href="<?=base_url();?>careers/apply/<?=$row->id?>" class="btn btn-default pull-right">APPLY NOW</a></li>
											</ul>

											<div class="clearfix"></div>

											<div class="content">

											<ul class="top-btns dtop-btns">
												<li><a href="#" class="btn btn-gray fa fa-plus toggle"></a></li>
											</ul>

											<p><?=$row->summary?></p>

											<?php if($row->qualification == ''): ?>
											<?php echo ""; ?>
											<?php endif;?>
											<?php if($row->qualification != ''): ?>
											<p><strong>Qualifications:</strong></p>
												<?=$row->qualification?>
											<?php endif;?>
											</div>
									</div>
								</li>
							</ul>
						</div>
						<?php endforeach;?>
						<?php endif;?>
						<?php if($mpscareers->num_rows() < 1):?>
							<div class="widget sidebar-widget white-container brown-container links-widget">
								<ul>
									<li>
										<div class="jobs-item brown-container">
											<p>No Job Postings Available</p>
										</div>
									</li>
								</ul>
							</div>
						<?php endif; ?>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	