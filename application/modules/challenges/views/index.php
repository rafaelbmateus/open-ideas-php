<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php if (!empty($list)) { ?>
	<?php foreach($list as $item) { ?>
		<div class="col s12 m7 l7">
			<a href="<?php echo base_url() . $module . '/show/' . $item->challenge_id; ?>">
				<div class="card medium">
					<div class="card-image">
						<img src="<?php echo base_url(); ?>assets/images/areas/nanotecnologia.jpg">
						<span class="card-title"><?php echo $item->challenge_title; ?></span>
					</div>
					<div class="card-content">
						<p><?php echo $item->challenge_description; ?></p>
					</div>
					<div class="card-action">
						<a href="#like"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
						<!-- <a href="#"><i class="fa fa-comment-o fa-2x"></i></a> -->
					</div>
				</div>
			</a>
		</div>
	<?php } ?>
<?php }else{ ?>
	<?php echo $this->lang->line('dont_have_challenge'); ?>
<?php } ?>

<br><br><br>
