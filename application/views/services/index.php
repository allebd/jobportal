	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						
						<h4>Overview</h4>
						
						<p><img src="<?=base_url();?>img/service-overview.jpg" alt="" width="100%"></p><br>

						<p><?=$overviewone;?></p>

						<h5>Discover our sections of expertise:</h5>						
						<ul>
							<li>Sales / Marketing & Communications</li>
							<li>Logistics / Supply Chain & Procurement</li>
							<li>Accounting & Finance </li>
							<li>Banking & Financial Services </li>
							<li>Contact Centre</li>
							<li>Graduate </li>
							<li>International graduates</li>
							<li>Consultancy </li>
							<li>Customer Service </li>
							<li>Engineering </li>
							<li>Environmental, Security, Health and Safety</li>
							<li>Human Resource & Training</li>
							<li>IT</li>
							<li>Legal </li>
							<li>Oil & Gas</li>
						</ul>						
						
						<h5>Our Process</h5>

						<p><?=$process_overview;?></p>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul class='service'>
								<li><a href='#'>Our Services</a></li>
								<li class="overview active"><?=anchor('services/index', 'Overview');?></li>
								<li class="strategic"><?=anchor('services/strategic_human_resource_management', 'Strategic Human Resource Management');?></li>
								<li class="staffing"><?=anchor('services/staffing_solutions', 'Staffing Solutions');?></li>
								<li class="training"><?=anchor('services/training_and_development', 'Training and Development');?></li>								
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
	