<div class="card-panel">
	<h4 class="header2"><?php echo $this->lang->line('edit');?></h4>

	<!-- form -->
	<form action="<?php echo base_url() . $module . '/update';?>" method="post">
		<?php $this->load->view('_form'); ?>
	</form>

	<!-- button delete -->
	<a class="btn-floating waves-effect waves-light modal-trigger red" href="#modal-delete"><i class="fa fa-trash"></i></a>
</div>

<!-- modal delete - start -->
<div id="modal-delete" class="modal bottom-sheet">
	<div class="modal-content">
		<form action="<?php echo base_url() . $module . '/delete'; ?>" method="post">
			<!-- TODO, replace field name -->
			<input type="hidden" name="id" value="<?php if (isset($item->idea_id)) echo $item->idea_id; ?>"/>
			<div class="row">
				<div class="input-field col s4"></div>
				<div class="input-field col s8">
					<h5><?php echo $this->lang->line('you_are_sure'); ?></h5>
					<button class="btn-floating waves-effect waves-light red" type="submit"><i class="fa fa-check"></i></button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- modal delete - end -->
