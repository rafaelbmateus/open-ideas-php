<form action="<?php echo base_url() . $module . '/update';?>" method="post">
	<?php $this->load->view('_form'); ?>
</form>

<!-- modal delete -->
<div id="modal-delete" class="modal fade bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form action="<?php echo base_url() . $module . '/delete'; ?>" method="post" autocomplete="off">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
					<h5 id="myModalLabel"><i class="fa fa-trash"></i>&nbsp;Excluir</h5>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id_modal" name="id" />
					<h5 style="text-align: center"><i class="fa fa-exclamation-triangle"></i>&nbsp;Deseja realmente excluir esse registro?</h5>
					<input id="confirmDelete" name="confirmDelete" class="form-control" type="text"
						placeholder="Digíte CONFIRM para excluir o registro..." onkeyup="confirm(event)" />
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i>&nbsp;Cancelar</button>
					<button id="btn-confirm" class="btn btn-danger"><i class="fa fa-trash-o"></i>&nbsp;Excluir</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- modal delete end -->
