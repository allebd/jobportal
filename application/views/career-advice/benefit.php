	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						<h4>Benefits of EAP</h4><br>

						<p><img src="<?=base_url();?>img/counseltwo.png" alt="" width="100%"></p>

						

						<p>MPS offers Employee Assistance Programmes that supports your human resource management goals to improve employee work performance, attendance, productivity, and work satisfaction. The specific objectives are to:</p>
						
						<ul>
							<li>Reduce costs related to turnover, burnouts, absenteeism, accident-related disability and behavioural risks in the workplace.</li>
							<li>Help play the role of a business partner to manage behavioural problems caused by organizational changes.</li>
							<li>Help guide people in managing themselves, team building, diverse culture, cultural change and thus enhancing Personal growth.</li>
							<li>Assist the organization and its managers address performance, productivity and behaviour issues..</li>
							<li>To assist employees in identifying and resolving personal concerns, including, but not limited to health, marriage, family, financial, alcohol, drugs, stress, emotional, legal or other personal issues that may affect work performance..</li>
							<li>Encourage appropriate use of medical and mental health benefits.</li>
							<li>Help organizations create an environment that values employees as an important asset in the success of the organization.</li>
							<li>Help manage critical incidents in the workplace.</li>
						</ul>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li><?=anchor('career_advice/counsel', 'Overview');?></li>
								<li class='active'><?=anchor('career_advice/benefit', 'Benefits of EAP');?></li>
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
	