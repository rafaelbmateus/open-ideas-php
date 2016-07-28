<!-- data-tables -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/bs-3.3.5/jq-2.1.4,pdfmake-0.1.18,dt-1.10.10,af-2.1.0,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,fc-3.2.0,fh-3.1.0,kt-2.1.0,r-2.0.0,rr-1.1.0,sc-1.4.0,se-1.1.0/datatables.min.css"/> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/s/bs-3.3.5/jq-2.1.4,pdfmake-0.1.18,dt-1.10.10,af-2.1.0,b-1.1.0,b-colvis-1.1.0,b-flash-1.1.0,b-html5-1.1.0,b-print-1.1.0,cr-1.3.0,fc-3.2.0,fh-3.1.0,kt-2.1.0,r-2.0.0,rr-1.1.0,sc-1.4.0,se-1.1.0/datatables.min.js"></script> -->

<a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a>

<table id="datatable" class="table table-bordered responsive-table display">
	<thead>
		<tr>
			<th width="5%">#</th>
			<th width="90%"><?php echo $this->lang->line('name');?></th>
			<th width="5%"><?php echo $this->lang->line('edit');?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		if (isset ( $list )) {
			foreach ( $list as $item ) {
				echo '<tr>';
				echo '<td>' . $item->innovation_area_id . '</td>';
				echo '<td>' . $item->area_name . '</td>';
				echo '<td>';
				echo '<a href="' . base_url () . $module . '/edit/' . $item->innovation_area_id . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-pencil"></i></a>';
				echo '</td>';
				echo '</tr>';
			}
		}
		?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#datatable').DataTable();
	} );
</script>
