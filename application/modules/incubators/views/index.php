<?php if($this->session->userdata('user_type')=='admin'){ ?>
	<a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a>
<?php } ?>

<table id="datatable" class="table table-bordered responsive-table display">
	<thead>
		<tr>
			<th width="10%"><?php echo $this->lang->line('name'); ?></th>
			<th width="70%"><?php echo $this->lang->line('description'); ?></th>
			<!-- <th width="5%"><?php echo $this->lang->line('phone'); ?></th> -->
			<th width="15%"><?php echo $this->lang->line('city'); ?></th>
			<th width="5%"><?php echo $this->lang->line('site'); ?></th>
			<?php if($this->session->userdata('user_type')=='admin'){ ?>
				<th width="5%"><?php echo $this->lang->line('edit'); ?></th>
			<?php } ?>
		</tr>
	</thead>
	<tbody>
		<?php
		if (isset ( $list )) {
			foreach ( $list as $item ) {
				echo '<tr>';
				echo '<td>' . $item->incubator_name . '</td>';
				echo '<td>' . $item->incubator_description . '</td>';
				// echo '<td>' . $item->incubator_phone . '</td>';
				echo '<td>' . $item->incubator_city . '-' . $item->incubator_state . '</td>';
				echo '<td><a target="_blank" href="' . $item->incubator_url . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-external-link"></i></a></td>';
				if($this->session->userdata('user_type')=='admin'){
					echo '<td><a href="' . base_url () . $module . '/edit/' . $item->incubator_id . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-pencil"></i></a></td>';
				}
				echo '</tr>';
			}
		}
		?>
	</tbody>
</table>

<br><br><br>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#datatable').DataTable();
	} );
</script>
