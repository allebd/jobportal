	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">

						<!-- <h4>Eligibility of EAP</h4> -->			

						<img src="<?=base_url();?>img/counselfive.jpg" alt="" class="pull-left p20">

						<h5>Who is eligible?</h5>	

						<p><?=$counselseven?></p>

						<h5>Who staffs the EAP?</h5>	

						<p><?=$counseleight?></p>

						<h5>What about privacy?</h5>	

						<p><?=$counselnine?></p>

						<p><strong>Our Services are available 24 hours a day.</strong> Counselors take calls from 8:30 a.m. to 7 p.m., Monday through Thursday, and from 8:30 a.m. to 5 p.m. on Friday.<strong> The guidelines are available in other languages.</strong> Bilingual and bicultural counselors are available by phone and in person; special counselors in sign Language are also available (only on request).</p>
						
						<p><strong>Help is available anywhere.</strong> Our EAP can connect with a broad network of counselors and other providers for face-to-face and telephone consultation in local communities in Nigeria and other countries.</p>
					
						<p><img src="<?=base_url();?>img/counselfour.png" alt="" width="100%"></p>

						<p><strong><?=$counselten?></strong></p>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('career_advice/counsel', 'Overview');?></li>
								<li><?=anchor('career_advice/benefit', 'Benefits of EAP');?></li>
								<li><?=anchor('career_advice/service', 'Our Service Model');?></li>
								<li class='active'><?=anchor('career_advice/eligibility', 'Eligibility of EAP');?></li>
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
	