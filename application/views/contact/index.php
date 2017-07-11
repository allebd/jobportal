	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div id="contact-page-map" class="white-container"></div>
					<div class="white-container mb0">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="bottom-line mt10">Headquarters</h5>

								<address>
									<?php $this->db->where('name','address');
									$add = $this->db->get('contact'); 
									foreach($add->result() as $addrow) 
										{
											echo $addrow->description;
										}
									?>
								</address>

								<p>
									Telephone 1:  
									<?php $this->db->where('name','local_phone');
									$local = $this->db->get('contact'); 
									foreach($local->result() as $localrow) 
										{
										echo  "<a href='#'>".$localrow->description."</a> <br>";
										}
									?>
									Telephone 2: 
									<?php $this->db->where('name','inter_phone');
									$inter = $this->db->get('contact'); 
									foreach($inter->result() as $interrow) 
										{
											echo  "<a href='#'>".$interrow->description."</a> <br>";
										}
										?> 
									Email: <a href="mailto:info@mpsconsults.com">info@mpsconsults.com</a>
								</p>
							</div>

							<!-- <div class="col-sm-6">
								<h5 class="bottom-line mt10">Secondary Office</h5>

								<address>
									12 Abibu-Oki street, <br>
									A&G towers, 6th floor, <br>
									Marina, Lagos, <br>
									Nigeria
								</address>

								<p>
									Phone: <a href="tel:+2348100373148 ">+234 810-037-3148 </a> <br>
									Email: <a href="mailto:info@mpsconsults.com">info@mpsconsults.com</a>
								</p>
							</div> -->
						</div>
					</div>
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container brown-container contact-form-widget">
							<h5 class="widget-title">Send Us a Message</h5>

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
								<?php echo form_open('contact/send_email') ?>
									<div class="form-group">
										<?php echo form_error('name','<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='name' placeholder="Name" >
									</div>

									<div class="form-group">
										<?php echo form_error('email', '<p class="error">', '</p>'); ?>
										<input type="email" class="form-control" name='email' placeholder="Email" >
									</div>

									<div class="form-group">
										<?php echo form_error('subject', '<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='subject' placeholder="Subject" >
									</div>

									<div class="form-group">
										<?php echo form_error('message', '<p class="error">', '</p>'); ?>
										<textarea class="form-control" rows="5" name='message' placeholder="How can we help you?" ></textarea>
									</div>

									<button type="submit" class="btn btn-default">Send Message</button>
								<?php echo form_close(); ?>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->