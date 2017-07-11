	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">

						<h4>Board of Directors</h4>						

						<?php foreach($board_overview->result() as $row): ?>
							<p><?=$row->board_overview?></p>
						<?php endforeach;?>

						<?php foreach($board->result() as $row): ?>
							<div class="jobs-item with-thumb row">
									<div class="col-md-2">
										<img src="<?=base_url();?>uploads/<?=$row->board_photo?>" alt="">
									</div>
									<div class="clearfix visible-xs"></div>
									<div class="col-md-10">
										<h6 class="title"><a href="#"><?=$row->name?></a></h6>
										<span class="meta"><?=$row->position?></span>

										<p class="description"><?=$row->about?></p>
									</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('about/index', 'Who we are');?></li>
								<li><?=anchor('about/our_team', 'Our Team');?></li>
								<li class="active"><?=anchor('about/board_of_directors', 'Board Of Directors');?></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	