<input hidden="hidden" name="type_id" type="text" value="<?php if (isset($item->type_id)) echo $item->type_id; ?>" />

<div class="row">
	<div class="col s12 m12 l6">
		<div class="card-panel">
			<h4 class="header2"><?php echo $this->lang->line('new');?></h4>
			<div class="row">
				<div class="input-field col s12">
					<input name="type_name" type="text" required
						value="<?php if (isset($item)) echo $item->type_name; ?>"/>
					<label><?php echo $this->lang->line('name');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s5">
					<a class="btn cyan waves-effect waves-light" href="<?php echo base_url() . $module;?>"><?php echo $this->lang->line('cancel');?><i class="fa fa-times left"></i></a>
				</div>
				<div class="input-field col s7">
					<button class="btn cyan waves-effect waves-light right" type="submit"><?php echo $this->lang->line('save');?><i class="fa fa-check right"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
