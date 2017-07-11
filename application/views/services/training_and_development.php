	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						<h4>Training and Development</h4><br>
						
						<p><img src="<?=base_url();?>img/service-training.jpg" alt="" width="100%"></p><br>

						<p><strong><i><?=$servicethreea;?></i></strong></p>
						<p><?=$servicethreeb;?></p>
						<p><?=$servicethreec;?></p>

						<ul>
							<li>Government Parastatals</li>
							<li>Manufacturing</li>
							<li>Non-Profit Organisations  </li>
							<li>Hotels And Restaurants</li>
							<li>Banking And Insurance </li>
							<li>Hospitals </li>
							<li>Oil And Gas</li>
							<li>Finance Houses </li>
							<li>Customer Service </li>
							<li>Telecommunications</li>
							<li>Mechanical, Electrical And Construction Companies</li>							
						</ul>	

						<p>We offer an unrivalled range of training and development services, the training we offer can be split into the following categories::</p>

						<ul>
							<li>You come to us (Open training or Basic training)</li>
							<li>We come to you (in-house management training or Job Specific Training)</li>
							<li>Advanced training</li>				
						</ul>	

						<p><img src="<?=base_url();?>img/training.png" alt=""></p>
							
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul class='service'>
								<li><a href='#'>Our Services</a></li>
								<li class="overview"><?=anchor('services/index', 'Overview');?></li>
								<li class="strategic"><?=anchor('services/strategic_human_resource_management', 'Strategic Human Resource Management');?></li>
								<li class="staffing"><?=anchor('services/staffing_solutions', 'Staffing Solutions');?></li>
								<li class="training active"><?=anchor('services/training_and_development', 'Training and Development');?></li>								
								<li class="reward"><?=anchor('services/employee_reward_management_system', 'Employee Reward Management System');?></li>
								<li class="outsourcing"><?=anchor('services/contingency_workforce_outsourcing', 'Contingency Workforce Outsourcing');?></li>
							</ul>									
						</div>
						<div class="widget sidebar-widget white-container links-widget">
							<ul class='contact'>
								<li><a href='#'>Contact us today:</a></li>
								<li class="mail"><a href='mailto:info@mpsconsults.com'>Send us a mail<p><span>info@mpsconsults.com</span></p></a></li>
								<li class="call"><a href='#'>Or call us on 
									<span><?php $this->db->where('name','local_phone');
										$local = $this->db->get('contact'); 
										foreach($local->result() as $localrow) 
											{
												echo $localrow->description;
											}
											?>
									</span><p>to book an appointment.</p></a></li>
							</ul>									
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->
	