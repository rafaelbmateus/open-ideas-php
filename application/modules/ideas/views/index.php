<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php //print_r($list); ?>

<?php if (!empty($list)){ ?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th width="95%"><?php echo $this->lang->line('title'); ?></th>
				<th width="5%"><?php echo $this->lang->line('edit'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($list as $item){
				echo '<tr>';
				echo '<td>' . $item->idea_title . '</td>';
				echo '<td>';
				echo '<a href="' . base_url () . $module . '/edit/' . $item->idea_id . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-pencil"></i></a>';
				echo '</td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
<?php }else{ ?>
	<?php	echo $this->lang->line('dont_have_idea'); ?>
<?php } ?>
