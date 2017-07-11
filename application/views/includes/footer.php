<?php if(!isset($admin)):?>
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-8">
					<h5 class="widget-title">MPS Consults | Core functionality at its best.</h5>
					<?php if(!isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)): ?>
					<div class="col-sm-4 col-md-4">
						<div class="widget">
							<h6 class="widget-title">CANDIDATES</h6>

							<div class="widget-content">
								<ul class="footer-links">											
									<li><?=anchor('jobs', 'Find a Job');?></li>
									<li><?=anchor('jobs', 'Browse Job by Category');?></li>
									<li><?=anchor('recruiter/all', 'Browse Recruiters');?></li>
								</ul>									
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php if(!isset($is_logged_in) || $is_logged_in != true): ?>
					<?php if(!isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)): ?>
					<div class="col-sm-4 col-md-4">
						<div class="widget">
							<h6 class="widget-title">RECRUITERS</h6>

							<div class="widget-content">
								<ul class="footer-links">
									<li><?=anchor('recruitlogin/signin', 'Advertise Jobs');?></li>
									<li><?=anchor('recruitlogin/signin', 'CV search');?></li>
									<li><?=anchor('recruitlogin/signin', 'Recruiter Packages');?></li>										
								</ul>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endif; ?>
					<?php if(isset($recruit) && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true)): ?>
					<div class="col-sm-4 col-md-4">
						<div class="widget">
							<h6 class="widget-title">RECRUITERS</h6>

							<div class="widget-content">
								<ul class="footer-links">
									<li><?=anchor('jobs_recruit/post_a_job', 'Advertise Jobs');?></li>
									<li><?=anchor('jobs_recruit/job_cv_search', 'CV search');?></li>
									<li><?=anchor('packages', 'Recruiter Packages');?></li>										
								</ul>
							</div>
						</div>
					</div>
					<?php endif; ?>

					<div class="col-sm-4 col-md-4">
						<div class="widget">
							<h6 class="widget-title">MPS CONSULTS</h6>

							<div class="widget-content">
								<ul class="footer-links">
									<?php if(!isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)): ?>
									<li><?=anchor('careers', 'Careers at MPS');?></li>
									<?php endif; ?>
									<?php 	
											$this->db->where('name','Privacy');
											$mps_extra = $this->db->get('mps_extra');
										  foreach($mps_extra->result() as $extrarow):
									 ?>
									<?php if(!isset($recruit)):?>
									<li><a href='<?=base_url();?>home/terms_download/<?=$extrarow->upload?>'>Privacy Policy</a></li>
									<?php endif;?>
									<?php if(isset($recruit)):?>
									<li><a href='<?=base_url();?>recruiter/terms_download/<?=$extrarow->upload?>'>Privacy Policy</a></li>
									<?php endif;?>
									<?php endforeach;?>
									<?php 	
											$this->db->where('name','Terms');
											$mps_extra = $this->db->get('mps_extra');
										  foreach($mps_extra->result() as $extrarows):
									 ?>
									<?php if(!isset($recruit)):?>
									<li><a href='<?=base_url();?>home/terms_download/<?=$extrarows->upload?>'>Terms &amp Conditions</a></li>
									<?php endif;?>
									<?php if(isset($recruit)):?>
									<li><a href='<?=base_url();?>recruiter/terms_download/<?=$extrarows->upload?>'>Terms &amp Conditions</a></li>
									<?php endif;?>
									<?php endforeach;?>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class='footer-nav'>
						<?php if(!isset($is_logged_in) || $is_logged_in != true): ?>
						<?=anchor('about', 'About Us');?> | 
						<?=anchor('services', 'Services');?> | 
						<?php endif; ?>
						<?php if(!isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)): ?>
						<?=anchor('career_advice', 'Career Hub');?> |
						<?php endif ?> 
						<?php if(!isset($is_logged_in) || $is_logged_in != true): ?>
						<?=anchor('career_advice/counsel', 'Counseling');?> |
						<?php endif; ?>
						<?php if(((!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)) && (!isset($is_logged_in) || $is_logged_in != true)): ?>
						<?=anchor('trainings', 'Trainings');?>	 | 
						<?php endif; ?>			
						<?php if(!isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)): ?>
						<?=anchor('contact', 'Contact Us');?>
						<?php endif ?>						
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-4">
					<h1 class="widget-title pull-right">We're social. </h1><h1 class="widget-title pull-right"> Connect with us.</h1>
					
					<ul class="footer-social pull-right">
						<?php $this->db->where('name','facebook');
							$facebook = $this->db->get('social'); 
							foreach($facebook->result() as $frow) 
								{
								echo "<li><a href='http://".$frow->link."' class='fa fa-facebook'></a></li>";	
								} 
								?>
						<?php $this->db->where('name','twitter');
							$twitter = $this->db->get('social'); 
							foreach($twitter->result() as $trow) 
								{
								echo "<li><a href='http://".$trow->link."' class='fa fa-twitter'></a></li>";	
								} 
								?>
						<?php $this->db->where('name','google');
							$google = $this->db->get('social'); 
							foreach($google->result() as $grow) 
								{
								echo "<li><a href='http://".$grow->link."' class='fa fa-google-plus'></a></li>";	
								} 
								?>
						<?php $this->db->where('name','linkedin');
							$linkedin = $this->db->get('social'); 
							foreach($linkedin->result() as $lrow) 
								{
								echo "<li><a href='http://".$lrow->link."' class='fa fa-linkedin'></a></li>";	
								} 
								?>
						<?php $this->db->where('name','skype');
							$skype = $this->db->get('social'); 
							foreach($skype->result() as $lrow) 
								{
								echo "<li><a href='http://".$lrow->link."' class='fa fa-skype'></a></li>";	
								} 
								?>
					</ul>
					<div class="widget">						
						<div class="widget-content">
							<?php $this->db->where('name','address');
							$add = $this->db->get('contact'); 
							foreach($add->result() as $addrow) 
								{
									echo "<p class='pull-right text-right'>".$addrow->description."<span class='fa fa-map-marker'></span></p>";
								}
								?>
							<p class='pull-right text-right'>
								<?php $this->db->where('name','local_phone');
							$local = $this->db->get('contact'); 
							foreach($local->result() as $localrow) 
								{
									echo $localrow->description.",";
								}
								?>
							<?php $this->db->where('name','inter_phone');
							$inter = $this->db->get('contact'); 
							foreach($inter->result() as $interrow) 
								{
									echo $interrow->description;
								}
								?>
							<span class='fa fa-phone'></span></p>
							<p class='pull-right text-right'>info@mpsconsults.com <span class='fa fa-envelope'></span></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<p>&copy; Copyright <?=date('Y');?> <a href="#">MPS Consults </a> | All Rights Reserved | Powered by <a href="http://www.motionsmithdigital.com">Motionsmith Digital</a></p>
			</div>
		</div>
	</footer> <!-- end #footer -->
<?php endif;?>
</div> <!-- end #main-wrapper -->

        <!-- Scripts -->
        <script src="<?=base_url();?>js/script.js"></script>
</body>
</html>