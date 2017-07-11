	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">

						<!-- <h4>Overview</h4> -->

						<p><img src="<?=base_url();?>img/counselone.png" alt="" width="100%"></p>

						<p><?=$counselone?></p>
						<ul>
							<li><strong>Mental-health problems,</strong> including anxiety, depression, Self-Esteem and Thinking Styles, Low Mood and Depression, Stress and Anxiety, Coping and Resilience, and substance abuse.</li>
							<li><strong>Work-related stress and crises</strong> such as conflict, Work-life balance, Bullying, harassment, diversity issues and the illness or death of a co worker.</li>
							<li><strong>Legal and financial</strong> questions about such things as wills, divorce, maltreatment and debt.</li>
							<li><strong>Family issues</strong> involving relationships, parenting, alternative families, Life events and grief.</li>
							<li><strong>Elder-care</strong> adoption, and child-care questions and referral requests.</li>
						</ul>

						<p><strong>Indicators</strong> <?=$counselthree?></p>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li class='active'><?=anchor('career_advice/counsel', 'Overview');?></li>
								<li><?=anchor('career_advice/benefit', 'Benefits of EAP');?></li>
								<li><?=anchor('career_advice/service', 'Our Service Model');?></li>
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
	