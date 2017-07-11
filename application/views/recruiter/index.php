		<div class="header-search-bar">			
		</div> <!-- end .header-search-bar -->

		<div class="header-sidelink">
			<?=anchor('home/index_slider', 'Applicants');?>
		</div>

		<div class="header-banner">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="header-banner-box register">
							<div class="counter-container">
								<ul class="counter clearfix">
									<li class="zero">0</li>
									<li>3</li>
									<li>5</li>
									<li>1</li>
									<li>0</li>
									<li>9</li>
								</ul>

								<div><span>Jobs</span></div>
							</div>

							<a href="<?=base_url();?>recruitlogin/signin" class="btn btn-default">Advertise a Job</a>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="header-banner-box post-job">
							<img src="<?=base_url();?>img/verified.png" alt="">

							<a href="<?=base_url();?>recruitlogin/signin" class="btn btn-red">CV Search</a>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end .header-banner -->
	</header> <!-- end #header -->

	<div id="page-content">
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
									<img src='<?=base_url()?>uploads/<?=$row->photo?>' width='125px' height='125px' class="thumb">
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

		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">					
				</div> <!-- end .page-content -->				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

