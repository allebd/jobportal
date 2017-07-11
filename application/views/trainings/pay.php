	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">
					<div class="white-container mb0">
						<h4>Payment Options</h4>
						<h6>ONLINE PAYMENT</h6>

						<p>To pay online, Click <strong>"Simple Pay"</strong> below</p>

						<!-- SimplePay  PAYMENT FORM -->
						<form method=post action=https://simplepay4u.com/process.php>
							<input type=hidden name=member value="eniolabello@mpsconsults.com">
							<input type=hidden name=escrow value="N">
							<input type=hidden name=action value="payment">
							<?php foreach($apply->result() as $row): ?>
							<input type=hidden name=price value="<?=$row->price?>">
							<?php endforeach;?>
							<input type=hidden name=quantity value="1">
							<input type=hidden name=ureturn value="<?=base_url();?>trainings/pay_success">
							<!-- <input type=hidden name=unotify value="http://www.mydomain.com/notify.php"> -->
							<input type=hidden name=ucancel value="<?=base_url();?>trainings/pay_failure">
							<input type=hidden name=comments value="Payment Received for training">
							<?php foreach($train->result() as $trainrow): ?>
							<input type=hidden name=customid value="<?=$trainrow->email?>">
							<?php endforeach;?>
							<input type=hidden name=freeclient value="N">
							<input type=hidden name=chargeforcard value="Y">
							<!-- <input type=hidden name=CMAccountid value="11221313"> -->
							<input type=hidden name=site_logo value="<?=base_url();?>img/header-logo.png">
							<input type=image src="https://simplepay4u.com/clients/simplepaylogo.gif">
						</form>

						<h6>DIRECT BANK DEPOSIT</h6>
						<?php foreach($apply->result() as $row): ?>
						<p>Pay <strong>N<?=$row->price?></strong> into the nearest GTBank in the account below. <br> 
						 <strong>Please remember to always use your MPS
						 username as the Depositor's Name on the Deposit Teller.</strong></p>

						 <p><strong>Account Name: MPSconsults<br>			
						 Account Number: 0123765351<br>
   						 Bank: GTB </strong></p>

   						 <p>After making your deposit please SMS the following to 08100373148 or via email: info@mpsconsults.com</p>

						 <p>Bank Branch <br>

							Training (Amount Deposited) <br>

							Teller Number <br>

							Name of Depositor (i.e MPS Login Username) <br>

							Your MPS email address
						 </p>

						 <p>Your will be sent a mail, immediately your payment reflects.</p>
						 <?php endforeach; ?>
   					</div>
				</div> 
			</div>
		</div> <!-- end .container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12 page-content">					
				</div> <!-- end .page-content -->				
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

