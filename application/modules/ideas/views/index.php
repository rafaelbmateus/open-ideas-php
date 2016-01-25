<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th width="95%"><?php echo $this->lang->line('title');?></th>
			<th width="5%"><?php echo $this->lang->line('edit');?></th>
		</tr>
	</thead>
	<?php
	if (isset ( $list )) {
		foreach ( $list as $item ) {
			echo '<tr>';
			echo '<td>' . $item->idea_title . '</td>';
			echo '<td>';
			echo '<a href="' . base_url () . $module . '/edit/' . $item->idea_id . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-pencil"></i></a>';
			echo '</td>';
			echo '</tr>';
		}
	}
	?>
</table>
