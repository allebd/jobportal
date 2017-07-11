	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 page-content">
					<div class="widget sidebar-widget white-container brown-container contact-form-widget">
							<h5 class="widget-title">Register Now!</h5>

							<div class="widget-content">
								<p>Please complete the following details.</p>
														
								<?php echo form_open_multipart('training/pay') ?>
									<?php foreach($apply->result() as $row): ?>
										<?php echo form_hidden('id',$row->t_id);?>
										<?php echo form_hidden('title',$row->title);?>
									<div class="form-group">
										<h6><?=$row->title?></h6>										
									</div>
									<?php endforeach; ?>

									<div class="form-group">
										<?php echo form_error('name','<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='name' placeholder="Full Name" >
									</div>

									<div class="form-group">
										<?php echo form_error('email', '<p class="error">', '</p>'); ?>
										<input type="email" class="form-control" name='email' placeholder="Email" >
									</div>

									<div class="form-group">
										<?php echo form_error('phone', '<p class="error">', '</p>'); ?>
										<input type="text" class="form-control" name='phone' placeholder="Contact Number" >
									</div>
									<div class="text-center">
									<button type="submit" class="btn btn-default"> PAY</button>
									</div>
								<?php echo form_close(); ?>
							</div>
						</div>			
				</div>

				<div class="col-sm-4 page-sidebar">
					<aside>
						<div class="widget sidebar-widget white-container links-widget">
							<ul>
								<li>
									<div class="jobs-item">

									<?php foreach($apply->result() as $row): ?>
										<h4 class='mt0'><?=$row->title?></h4>
										<span class="meta mb10"><?=date_format(date_create($row->date), 'M j, Y');?></span>
										<?php if($row->photo != ''):?>
										<?php echo "";?>
										<?php endif;?>
										<?php if($row->photo != ''):?>
										<p class="text-center"><img src='<?=base_url()?>uploads/<?=$row->photo?>'></p>
										<?php endif;?>
										<p><?=$row->details?></p>
									<?php endforeach; ?>
									</div>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->

	