	</header> <!-- end #header -->


	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container links-widget">
							<ul>
								<li class='active'><?=anchor('applicant/createcv', 'Create a CV');?></li>
								<li><?=anchor('applicant/interview', 'Interview Prepping');?></li>
							</ul>
						</div>
					</aside>
				</div> <!-- end .page-sidebar -->

				<div class="col-sm-8 page-content mt30">
					<div class='alert alert-success mb50'>
							<h6>Payment Successful</h6>
							<a href='#' class='close fa fa-times'></a>
					</div>
					<h4>Payment Options</h4>
						<h6>ONLINE PAYMENT</h6>

						<p>To pay online, Click <strong>"Simple Pay"</strong> below</p>

						<!-- SimplePay  PAYMENT FORM -->
						<form method=post action=https://simplepay4u.com/process.php>
							<input type=hidden name=member value="eniolabello@mpsconsults.com">
							<input type=hidden name=escrow value="N">
							<input type=hidden name=action value="payment">
							<?php foreach($createcv->result() as $row): ?>
							<input type=hidden name=price value="<?=$row->price?>">
							<?php endforeach;?>
							<input type=hidden name=quantity value="1">
							<input type=hidden name=ureturn value="<?=base_url();?>applicant/createcv_success">
							<!-- <input type=hidden name=unotify value="http://www.mydomain.com/notify.php"> -->
							<input type=hidden name=ucancel value="<?=base_url();?>applicant/createcv_failure">
							<input type=hidden name=comments value="Payment Received to Create CV">
							<input type=hidden name=customid value="<?=$this->session->userdata('username')?>">
							<input type=hidden name=freeclient value="N">
							<input type=hidden name=chargeforcard value="Y">
							<!-- <input type=hidden name=CMAccountid value="11221313"> -->
							<input type=hidden name=site_logo value="<?=base_url();?>img/header-logo.png">
							<input type=image src="https://simplepay4u.com/clients/simplepaylogo.gif">
						</form>

						<h6>DIRECT BANK DEPOSIT</h6>
					<div class="jobs-item jobs-single-item">
						<?php foreach($createcv->result() as $row): ?>
						<p>Pay <strong>N<?=$row->price?></strong> into the nearest GTBank in the account below. <br> 
						 <strong>Please remember to always use your MPS
						 username as the Depositor's Name on the Deposit Teller.</strong></p>

						 <p><strong>Account Name: MPSconsults<br>			
						 Account Number: 0123765351<br>
   						 Bank: GTB </strong></p>

   						 <p>After making your deposit please SMS the following to 08100373148 or via email: info@mpsconsults.com</p>

						 <p>Bank Branch <br>

							Create CV (Amount Deposited) <br>

							Teller Number <br>

							Name of Depositor (i.e MPS Login Username) <br>

							Your MPS email address
						 </p>

						 <p>Make sure your profile is updated to the best of your knowledge. <br>
						 	Your CV will be created and emailed to you immediately your payment reflects.</p>
						 <?php endforeach; ?>
					</div>
				</div>				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	