<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Metropolitan Professional Support (MPS) is a functionality Consultancy firm that operates on solution management of Human Capital for organizations." />
	<meta name="author" content="Motionsmithdigital(http://www.motionsmithdigital.com), Allebmedia(http://www.allebmedia.com), Bella Oyedele" />
	<meta name="keywords" content="human resource management, employee reward management, workforce outsourcing, training, counseling, counselling, career advice, jobs in Nigeria, nigerian jobs, vacancies, recruitment nigeria, mpsconsults.com" />
	
	<title><?=$title;?></title>

	<link rel="shortcut icon" href="<?=base_url();?>favicon.ico" type="image/x-icon" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url();?>css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>css/flexslider.css">
	<link rel="stylesheet" href="<?=base_url();?>css/style.css">
	<link rel="stylesheet" href="<?=base_url();?>css/responsive.css">


	<!-- Textext -->
	<link rel="stylesheet" href="<?=base_url();?>textext/css/textext.core.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>textext/css/textext.plugin.tags.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>textext/css/textext.plugin.autocomplete.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>textext/css/textext.plugin.prompt.css" type="text/css" />
	<link rel="stylesheet" href="<?=base_url();?>textext/css/textext.plugin.arrow.css" type="text/css" />
	
         
        <!-- Scripts -->

        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){
        z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='//v2.zopim.com/?2HD2sYvggg7aBK8rmyV7P6v7HI9l0ak8';z.t=+new Date;$.
        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
        </script>
        <!--End of Zopim Live Chat Script-->

		<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?=base_url();?>js/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="<?=base_url();?>js/maplace.min.js"></script>
        <script src="<?=base_url();?>js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>js/jquery.ba-outside-events.min.js"></script>
        <script src="<?=base_url();?>js/jquery.responsive-tabs.js"></script>
        <script src="<?=base_url();?>js/jquery.flexslider-min.js"></script>
        <script src="<?=base_url();?>js/jquery.fitvids.js"></script>
        <script src="<?=base_url();?>js/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="<?=base_url();?>js/jquery.inview.min.js"></script>		


        <script src="<?=base_url();?>textext/js/textext.core.js" type="text/javascript"></script>
	<script src="<?=base_url();?>textext/js/textext.plugin.tags.js" type="text/javascript"></script>
	<script src="<?=base_url();?>textext/js/textext.plugin.autocomplete.js" type="text/javascript"></script>
	<script src="<?=base_url();?>textext/js/textext.plugin.suggestions.js" type="text/javascript"></script>
	<script src="<?=base_url();?>textext/js/textext.plugin.filter.js" type="text/javascript"></script>
	<script src="<?=base_url();?>textext/js/textext.plugin.prompt.js" type="text/javascript"></script>
	<script src="<?=base_url();?>textext/js/textext.plugin.ajax.js" type="text/javascript"></script>
	<script src="<?=base_url();?>textext/js/textext.plugin.arrow.js" type="text/javascript"></script>


	<!--[if IE 9]>
		<script src="js/media.match.min.js"></script>
	<![endif]-->
	<script src="<?=base_url();?>ckeditor/ckeditor.js"></script>

</head>

<body>
<!-- <div id="main-wrapper" class='notbodyclass'>
	<h5 style='text-align:center;'>Device not Compatible.</h5>
</div> -->
<!-- <div id="main-wrapper" class='bodyclass'> -->
<div id="main-wrapper">
	<header id="header" class="header-style-1">
	<?php if(!isset($admin) && (!isset($is_adminlogged_in) || ($is_adminlogged_in != true))){
		echo ""; } 
	if(isset($admin) && (!isset($is_adminlogged_in) || ($is_adminlogged_in != true)))
	{
		echo ""; } else if(isset($admin) && (isset($is_adminlogged_in) || ($is_adminlogged_in == true)))
	{
	 echo  "<div class='header-top-bar'>
				<div class='container'>
					<div class='header-register'>";?>
						<?=form_open('mpsconsults_admin/logout');?>
						<?php foreach($query->result() as $row): ?>
						<?=$row->admin_username?>
						<?php endforeach; ?>
						<?php echo "|"; ?> 
						<?php echo "<input type='submit'  class='btn btn-gray' value='Logout' />"?>
						<?php echo form_close(); ?>
					<?php echo "</div>
				</div> <!-- end .container -->
			</div>
			<div class='header-nav-bar'>
				<div class='container'>

					<!-- Logo -->
					<div class='css-table logo'>
						<div class='css-table-cell'>
						<a href='";?><?=base_url();?><?php echo "profile_admin/admin_area'>
								<img src='";?><?=base_url();?><?php echo "img/header-logo.png' alt='' >
						</a>
							
						</div>
					</div>
					<div class='motto'>
						<h1>"; ?><?=$page_title;?><?php echo"</h1>
					</div>
				</div>
			</div>"; 
	}?> <!-- end .header-top-bar -->
	<?php if(!isset($admin)):?>
		<div class="header-top-bar">
			<div class="container">

				<!-- Header Language -->
				<div class="header-language clearfix">
					<!-- Mobile Menu Toggle -->
					
					<!-- Primary Nav -->
					<nav>
						<ul class="primary-nav">
							<?php if(isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)) { 
								echo "<li>";?>
								<?=anchor('home', 'Home'); } else { 
									if(isset($recruit) && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true)) { 
								echo "<li>";?>
								<?=anchor('profile_recruit/recruiters_area', 'Dashboard'); } }?>

								<?php if(!isset($recruit) && (!isset($is_logged_in) || $is_logged_in != true)) {  
									echo "<li>";?>
						
								<?=anchor('home', 'Home');?>
								
								<?php echo "</li>"; } else { 
										if(!isset($recruit) && (isset($is_logged_in) || $is_logged_in == true)) {  
									echo "<li>";?>
								<?=anchor('profile/candidates_area', 'My Profile');?>
							<?php echo "</li>"; } }  ?>
							

							<?php if(isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)){
								echo "";
							} else if(isset($recruit) && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true)){  
									 echo "<li class='has-submenu'>";?>
								<?=anchor('jobs_recruit', 'Jobs'); ?>
								<ul>
									<li><?=anchor('jobs_recruit', 'My Jobs');?></li>
									<li><?=anchor('jobs_recruit/post_a_job', 'Advertise a Job');?></li>
								</ul>
							<?php echo "</li>"; } ?>							

							<?php if(isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)){
								echo "";
							} else if(isset($recruit) && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true)){  
									 echo "<li>";?>
								<?=anchor('jobs_recruit/job_cv_search', 'CV Search'); ?>								
							<?php echo "</li>"; } ?>							
						

							<?php if(!isset($is_logged_in) || $is_logged_in != true){  
									echo "";?>
								<?php } else { echo "<li class='has-submenu'>";?>
								<?=anchor('jobs', 'Jobs');?>
								<ul>
									<li><?=anchor('jobs', 'Job Search');?></li>
									<li><?=anchor('jobs/application', 'My Job Applications');?></li>
								</ul>
							<?php echo "</li>"; } ?>
							

							<?php if(!isset($is_logged_in) || $is_logged_in != true){  
									echo "";?>
								<?php } else { echo "<li class='has-submenu'>";?>
								<?=anchor('applicant/createcv', 'Applicant Services');?>
								<ul>
									<li><?=anchor('applicant/createcv', 'Create a CV');?></li>
									<li><?=anchor('applicant/interview', 'Interview Prepping');?></li>
								</ul>
							<?php echo "</li>"; } ?>
							
				
							
							<?php if(isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)){
								echo "";
							} else if(isset($recruit) && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true)){
							echo "<li>"; ?>							
								<?=anchor('packages', 'Pricing');?>								
							<?php echo "</li>";
							}?>

							<?php if(($page_title != 'Applicants') && ((!isset($is_logged_in) || $is_logged_in != true))):?>									
							<li class="has-submenu">							
								<?=anchor('about', 'About Us');?>
								<ul>
									<li><?=anchor('about', 'Who we are');?></li>
									<li><?=anchor('about/our_team', 'Our Team');?></li>
									<li><?=anchor('about/board_of_directors', 'Board Of Directors');?></li>
								</ul>
							</li>
							<li class="has-submenu">
								<?=anchor('services', 'Services');?>
								<ul>
									<li><?=anchor('services', 'Overview');?></li>
									<li><?=anchor('services/strategic_human_resource_management', 'Strategic Human Resource Management');?></li>
									<li><?=anchor('services/staffing_solutions', 'Staffing Solutions');?></li>
									<li><?=anchor('services/training_and_development', 'Training and Development');?></li>								
									<li><?=anchor('services/employee_reward_management_system', 'Employee Reward Management System');?></li>
									<li><?=anchor('services/contingency_workforce_outsourcing', 'Contingency Workforce Outsourcing');?></li>
								</ul>
							</li>
							<?php endif; ?>
							<?php if(!isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)): ?>
							<li>
								<?=anchor('career_advice', 'Career Hub');?>								
							</li>
							<?php endif; ?>	
							<?php if(($page_title != 'Applicants') && ((!isset($is_logged_in) || $is_logged_in != true))):?>
							<li class="has-submenu">
								<?=anchor('career_advice/counsel', 'Counseling');?>	
								<ul>
									<li><?=anchor('career_advice/counsel', 'Overview');?></li>
									<li><?=anchor('career_advice/benefit', 'Benefits of EAP');?></li>
									<li><?=anchor('career_advice/service', 'Our Service Model');?></li>
									<li><?=anchor('career_advice/eligibility', 'Eligibility of EAP');?></li>
								</ul>							
							</li>
							<?php endif; ?>

							<?php if((!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)){
								echo ""; ?>
								<?php } else {
								echo "<li>"; ?>
								<?=anchor('training', 'Trainings');?>
							<?php echo "</li>";
							} ?>

							<?php if(((!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)) && (!isset($is_logged_in) || $is_logged_in != true)): ?>
							<li>
								<?=anchor('trainings', 'Trainings');?>	
							</li>
							<?php endif; ?>

							<?php if(!isset($is_logged_in) || $is_logged_in != true){  
									echo "";?>
								<?php } else {
								  echo "<li>"; ?>
								<?=anchor('trainings', 'Trainings');?>
							<?php echo "</li>";
							} ?>	

							<?php if(!isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)): ?>
							<li>
								<?=anchor('contact', 'Contact Us');?>
							</li>
							<?php endif; ?>
						</ul>
					</nav>
					
				</div> <!-- end .header-language -->

				<!-- Bookmarks -->
				<!-- <a class="btn btn-link bookmarks">Bookmarks</a> -->


				<?php 
				if(!isset($recruit)){
					echo "";
				}else
				if(isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true))
					{
						if($page_title == 'Recruiters'){
							echo "";
						}else if($page_title != 'Recruiters'){
				echo"<!-- Header Register -->
				<div class='bookmarks'>"; ?>
					<?=anchor('recruitlogin/register', 'Recruiters', "class='btn btn-link'");?>
					<?php echo"</div>"; }?> 
					<!-- end .header-register -->

				<!-- Header Login -->
				<?php if($page_title == 'Applicants'){
							echo "";
						}else if($page_title != 'Applicants'){
				 echo "<div class='bookmarks'>"; ?>
					<?=anchor('login/register', 'Applicants', "class='btn btn-link'");?>
					<?php echo"</div>";} ?>
					<!-- end .header-login -->

				<?php 	}

						else

						{
							echo "<div class='header-register'>";?>
							<?=form_open('recruitlogin/logout');?>
							<?php foreach($query->result() as $row): ?>
							<?=$row->org_name?>
							<?php endforeach; ?>
							<?php echo " | ";?>
							<?php echo "<input type='submit'  class='btn btn-gray' value='Logout' />";?>
							<?php echo form_close(); ?>
							<?php echo "</div>";
						}
				?>

				<?php 
				if(isset($recruit)){
					echo "";
				}else
				if(!isset($is_logged_in) || $is_logged_in != true)
					{
				if($page_title == 'Recruiters'){
							echo "";
						}else if($page_title != 'Recruiters'){
				echo"<!-- Header Register -->
				<div class='bookmarks'>"; ?>
					<?=anchor('recruitlogin/register', 'Recruiters', "class='btn btn-link'");?>
					<?php echo"</div>"; }?> 
					<!-- end .header-register -->

				<!-- Header Login -->
				<?php if($page_title == 'Applicants'){
							echo "";
						}else if($page_title != 'Applicants'){
				 echo "<div class='bookmarks'>"; ?>
					<?=anchor('login/register', 'Applicants', "class='btn btn-link'");?>
					<?php echo"</div>";} ?>
					<!-- end .header-login -->

				<?php 	}

						else

						{
							echo "<div class='header-register'>";?>
							<?=form_open('login/logout');?>
							<?php foreach($query->result() as $row): ?>
							<?=$row->surname?>
							<?=$row->firstname?>
							<?php endforeach; ?>
							<?php echo " | ";?>
							<?php echo "<input type='submit'  class='btn btn-gray' value='Logout' />";?>
							<?php echo form_close(); ?>
							<?php echo "</div>";
						}
				?>

			</div> <!-- end .container -->
		</div> <!-- end .header-top-bar -->
		<div class="header-nav-bar">
			<div class="container">

				<!-- Logo -->
				<div class="css-table logo">
					<div class="css-table-cell">
						<?php if(isset($recruit) && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true)){ 
								echo "<a href='";?><?=base_url();?><?php echo "'>
							<img src='";?><?=base_url();?><?php echo "img/header-logo.png' alt=''>
						</a>"; ?>
						<?php } else if(isset($recruit) && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true)){ 
								echo "<a href='";?><?=base_url();?><?php echo "profile_recruit/recruiters_area'>
							<img src='";?><?=base_url();?><?php echo "img/header-logo.png' alt=''>
						</a>"; ?>
						<?php } else if(!isset($is_logged_in) || $is_logged_in != true){ 
							echo "<a href='";?><?=base_url();?> <?php echo "'>
							<img src='";?><?=base_url();?><?php echo "img/header-logo.png' alt=''>
						</a>";}else{
							echo "<a href='";?><?=base_url();?><?php echo "profile/candidates_area'>
							<img src='";?><?=base_url();?><?php echo "img/header-logo.png' alt=''>
						</a>";}
							?> <!-- end .logo -->

						<a id="mobile-menu-toggle"><span></span></a>
						
					</div>
				</div>

				<?php if((isset($recruit)) && ($page_title == '') && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true))
				{	
					echo "<div class='motto'>
					<h1>";
					if($query != ''):					
					foreach($query->result() as $row): ?>
						<?php echo "Welcome";?>
							<?=$row->org_rep_firstname?>
							<?php endforeach; ?>
					<?php endif; 
					echo "</h1>
					</div>";
				}
				if((isset($recruit)) && ($page_title == '') && (!isset($is_recruitlogged_in) || $is_recruitlogged_in != true))
				{ 
					echo "<div class='motto'>
					<h1>Core functionality at its best.</h1>
				</div>"; 
				}else if((isset($recruit)) && ($page_title != '') && (isset($is_recruitlogged_in) || $is_recruitlogged_in == true)){
					echo "<div class='motto'>
					<h1>";?> <?=$page_title;?> <?php echo "</h1>
				</div>";}?>


				<?php if((!isset($recruit)) && ($page_title == '') && (isset($is_logged_in) || $is_logged_in == true))
				{	
					echo "<div class='motto'>
					<h1>";
					if($query != ''):					
					foreach($query->result() as $row): ?>
						<?php echo "Welcome";?>
							<?=$row->firstname?>
							<?php endforeach; ?>
					<?php endif; 
					echo "</h1>
					</div>";
				}
				if((!isset($recruit)) && ($page_title == '') && (!isset($is_logged_in) || $is_logged_in != true))
				{ 
					echo "<div class='motto'>
					<h1>Core functionality at its best.</h1>
				</div>"; 
				}else if((!isset($recruit)) && ($page_title != '') && (isset($is_logged_in) || $is_logged_in == true)){
					echo "<div class='motto'>
					<h1>";?> <?=$page_title;?> <?php echo "</h1>
				</div>";}?>
			</div> <!-- end .container -->

			<div id="mobile-menu-container" class="container">
				<div class="login-register"></div>
				<div class="menu"></div>
			</div>
		</div> <!-- end .header-nav-bar -->	
	<?php endif;?>