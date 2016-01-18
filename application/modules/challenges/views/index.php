<a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a>

<?php if (isset($list)) { ?>
	<?php foreach($list as $item) { ?>
		<div class="col s12 m7 l7">
			<div class="card medium">
				<div class="card-image">
					<img src="<?php echo base_url(); ?>assets/images/areas/nanotecnologia.jpg">
					<span class="card-title"><?php echo $item->challenge_title; ?></span>
				</div>
				<div class="card-content">
					<p><?php echo $item->challenge_description; ?></p>
				</div>
				<div class="card-action">
					<a href="#">This is a link</a>
					<a href="#">This is a link</a>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } ?>

<br><br>
