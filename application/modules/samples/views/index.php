<a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="5%">#</th>
			<th width="70%">Nome</th>
			<th width="2%">Editar</th>
		</tr>
	</thead>
	<?php
	if (isset ( $list )) {
		foreach ( $list as $item ) {
			echo '<tr>';
			echo '<td>' . $item->sample_id . '</td>';
			echo '<td>' . $item->sample_name . '</td>';
			echo '<td>';
			echo '<a href="' . base_url () . $module . '/edit/' . $item->sample_id . '" class="btn cyan waves-effect waves-light" title="Edit"><i class="fa fa-pencil"></i></a>';
			echo '</td>';
			echo '</tr>';
		}
	}
	?>
</table>
<!-- list users end -->

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

<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click', 'a', function(event) {
        var rs = $(this).attr('register');
        $('#id_modal').val(rs);
    });
});

window.onload = function(){
	document.getElementById("btn-confirm").disabled = true;
}

function confirm(evt){
	if(document.getElementById('confirmDelete').value== 'CONFIRM'){
		document.getElementById("btn-confirm").disabled = false;
 	}else{
 		document.getElementById("btn-confirm").disabled = true;
 	}
}
</script>
