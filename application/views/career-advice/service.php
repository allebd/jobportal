	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">

						<h4>Our Service Model</h4><br>	

						<p><img src="<?=base_url();?>img/counselthree.png" alt="" width="100%"></p>

						<p><?=$counselfour?></p>

						<p><?=$counselfive?></p>

						<p><?=$counselsix?></p>

					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('career_advice/counsel', 'Overview');?></li>
								<li><?=anchor('career_advice/benefit', 'Benefits of EAP');?></li>
								<li class='active'><?=anchor('career_advice/service', 'Our Service Model');?></li>
								<li><?=anchor('career_advice/eligibility', 'Eligibility of EAP');?></li>
							</ul>									
						</div>
					</aside>
					<aside>
						<div class="widget sidebar-widget white-container brown-container contact-form-widget mt50">
							<h5 class="widget-title">Request a Quote</h5>

							<div class="widget-content">
								<?php
								if($msg_success != '')
								{
								echo "<div class='alert alert-success'>
									<h6>$msg_success</h6>
									<a href='#' class='close fa fa-times'></a>
								</div>";
								}
								?>
								<?php echo form_open('career_advice/send_email') ?>
									<div class="form-group">
										<?php echo form_error('name','<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='name' placeholder="Full Name" >
									</div>

									<div class="form-group">
										<?php echo form_error('phone', '<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='phone' placeholder="Phone Number" >
									</div>
									
									<div class="form-group">
										<?php echo form_error('email', '<p class="error">', '</p>'); ?>
										<input type="email" class="form-control" name='email' placeholder="Email Address" >
									</div>
									<button type="submit" class="btn btn-default">REQUEST NOW</button>
								<?php echo form_close(); ?>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	