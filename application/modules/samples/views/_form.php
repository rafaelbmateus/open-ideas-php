<!-- id -->
<input hidden="hidden" name="sample_id" type="text" value="<?php if (isset($item->sample_id)) echo $item->sample_id; ?>" />

<!-- name -->
<div class="row">
	<div class="input-field col s12">
		<input name="sample_name" type="text" required
			value="<?php if (isset($item)) echo $item->sample_name; ?>"/>
		<label><?php echo $this->lang->line('name');?></label>
	</div>
</div>

<!-- buttons confirm/cancel -->
<div class="row">
	<div class="input-field col s5">
		<a class="btn cyan waves-effect waves-light" href="<?php echo base_url() . $module;?>"><?php echo $this->lang->line('cancel');?><i class="fa fa-times left"></i></a>
	</div>
	<div class="input-field col s7">
		<button class="btn cyan waves-effect waves-light right" type="submit"><?php echo $this->lang->line('save');?><i class="fa fa-check right"></i></button>
	</div>
</div>
