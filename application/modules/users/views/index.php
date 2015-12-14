<a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a>

<table id="table" class="responsive-table display" cellspacing="0">
	<thead>
		<tr>
			<th width="5%">#</th>
			<th width="90%"><?php echo $this->lang->line('name');?></th>
			<th width="5%"><?php echo $this->lang->line('edit');?></th>
		</tr>
	</thead>
	<tbody>
	<?php if (isset($list)){ ?>
		<?php foreach($list as $item){ ?>
			<?php echo '<tr>';?>
			<?php echo '<td>' . $item->user_id . '</td>';?>
			<?php echo '<td>' . $item->user_name . '</td>';?>
			<?php echo '<td>';?>
			<?php echo '<a href="' . base_url() . $module . '/edit/' . $item->user_id . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-pencil"></i></a>';?>
			<?php echo '</td>';?>
			<?php echo '</tr>';?>
		<?php } ?>
	<?php } ?>
	</tbody>
</table>

<!-- scripts DataTables - start -->
<script type="text/javascript">
$(document).ready(function(){
  $('#table').DataTable( {
    "order": [[ 0, "asc" ]],
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 2 ] } ],  //disable in column 2
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
    "language": {
      "url": "<?php echo base_url();?>assets/plugins/datatables/language/pt-br.json"
    },
    "dom": 'Blfrtip',
    "buttons": [
      {
        extend: 'excelHtml5',
        title: 'Relatório excel'
      },
      {
        extend: 'pdfHtml5',
        title: 'Relatório pdf'
      }
    ]
  });
});
</script>
<!-- scripts table - end -->
