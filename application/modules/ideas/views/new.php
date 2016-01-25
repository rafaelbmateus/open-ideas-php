<div class="card-panel">
	<h4 class="header2"><?php echo $this->lang->line('new');?></h4>

	<!-- form -->
	<form action="<?php echo base_url() . $module . '/add';?>" method="post">
		<?php $this->load->view('_form'); ?>
	</form>
</div>

<br><br><br>
