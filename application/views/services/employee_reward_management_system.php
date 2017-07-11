	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						
						<h4>Employee Reward Management System</h4><br>

						<p><img src="<?=base_url();?>img/service-reward.jpg" alt="" width="100%"></p><br>
						
						<p><strong><i>MPS helps to align the goals of the organization and employees... </i></strong></p>

						<p>Our reward scheme solution is designed to assist the organization's objectives. At the ultimate level, the reward scheme is dependable on the organizations strategy and functions. </p>
					
						<p>Our Broad-based efficiency and Reward solutions include:</p>

						<ul>
							<li>Compensation techniques, control, design and strategy (including incentive plans and reward program control)</li>
							<li>MPS's Total Rewards technique and analytical tools that consider staff's pay structure, benefits and career opportunities</li>
							<li>Work statistic and pay administration</li>	
							<li>Sales effectiveness and sales returns settlement design and management co-sourcing</li>
						</ul><br>

						<p><strong><i>Business reality and purpose of a reward scheme... </i></strong></p>
						
						<p>What do organizations hope to accomplish from a reward scheme? The following are among the most essential objectives:</p>

						<ol>
							<li>To aid the goal of the business by aligning the objectives of employees with these.</li>
							<li>To guarantee that the business is able to engage and retain adequate number of employees with the right skills and knowledge.</li>
							<li>To motivate employees that in turn increases loyalty.</li>	
							<li>To comply with legal regulations.</li>
							<li>To be ethical.</li>	
							<li>To be affordable and simple to administer.</li>
						</ol>
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
								<li class="training"><?=anchor('services/training_and_development', 'Training and Development');?></li>								
								<li class="reward active"><?=anchor('services/employee_reward_management_system', 'Employee Reward Management System');?></li>
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
	