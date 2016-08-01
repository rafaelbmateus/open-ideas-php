<table id="table" class="responsive-table display" cellspacing="0">
	<thead>
		<tr>
			<th width="6%"></th>
			<th width="80%"><?php echo $this->lang->line('name');?></th>
			<th width="10%"></th>
		</tr>
	</thead>
	<tbody>
	<?php echo $list; ?>
	<!-- <?php if (isset($list)){ ?>
		<?php foreach($list as $item){ ?>
			<?php echo '<tr>';?>
				<td><a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($item->user_email))); ?>" alt="" class="circle responsive-img valign profile-image"></a></td>
				<td><a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><?php echo $item->user_name;?></a></td>
			<?php echo '</tr>';?>
		<?php } ?>
	<?php } ?> -->
	</tbody>
</table>

<br><br><br>
