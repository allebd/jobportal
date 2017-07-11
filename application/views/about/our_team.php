	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">

						<h4>Our Team</h4>						

						<p><?=$team;?></p>

						<p><i>MPS consultants understand there are no shortcuts to experience...</i></p>
						
						<div class="row">
							<?php foreach($members->result() as $row): ?>
							<div class="col-sm-6 col-md-4">
								<div class="our-team-item">
									<div class="img">
										<img src="<?=base_url();?>uploads/<?=$row->team_picture?>" alt="">
									</div>

									<h6><?=$row->name?><span><?=$row->position?></span></h6>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('about/index', 'Who we are');?></li>
								<li class="active"><?=anchor('about/our_team', 'Our Team');?></li>
								<li><?=anchor('about/board_of_directors', 'Board Of Directors');?></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	