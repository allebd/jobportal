	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="white-container mb0">
						
						<h4>Contingency Workforce Outsourcing </h4><br>

						<p><img src="<?=base_url();?>img/service-outsourcing.jpg" alt="" width="100%"></p><br>

						<p><?=$servicefive?></p>

						<p>MPS team will style a program that meets your company's needs for qualified employees.</p>

						<ul>
							<li>Contingent workforce management strategy development</li>
							<li>Custom strategic vendor management technology</li>
							<li>Risk mitigation methods (worker classification, Independent Contractor compliance, overtime compliance and management) </li>			
							<li>Employment compliance management</li>
							<li>Efficient, standard processes and workflow</li>
							<li>Staffing vendor selection and management</li>
							<li>Workforce utilization trends</li>
							<li>In-depth program reporting and analytics</li>
							<li>Statement of Work (SOW) project management strategies</li>
						</ul>	
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
								<li class="reward"><?=anchor('services/employee_reward_management_system', 'Employee Reward Management System');?></li>
								<li class="outsourcing active"><?=anchor('services/contingency_workforce_outsourcing', 'Contingency Workforce Outsourcing');?></li>
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
	