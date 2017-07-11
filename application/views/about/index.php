	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">

						<h4>Who we are</h4>
						
						<p><?=$overview;?></p>

						<h5>Vision</h5>
						<p><?=$vision;?></p>

						<h5>Mission</h5>
						<p><?=$mission;?></p>

						<h5>Principle</h5>
						<p><?=$principle;?></p>

						<h5>Core Values</h5>
						<p><?=$corevalues;?></p>
						
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li class="active"><?=anchor('about/index', 'Who we are');?></li>
								<li><?=anchor('about/our_team', 'Our Team');?></li>
								<li><?=anchor('about/board_of_directors', 'Board Of Directors');?></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	