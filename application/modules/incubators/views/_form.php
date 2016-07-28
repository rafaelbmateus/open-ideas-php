<!-- id -->
<input hidden="hidden" name="incubator_id" type="text" value="<?php if (isset($item->incubator_id)) echo $item->incubator_id; ?>" />

<!-- name -->
<div class="row">
	<div class="input-field col s12">
		<input name="incubator_name" type="text" length="255" maxlength="255" required
			value="<?php if (isset($item)) echo $item->incubator_name; ?>"/>
		<label><?php echo $this->lang->line('name');?></label>
	</div>
</div>

<!-- description -->
<div class="row">
	<div class="input-field col s12">
		<textarea name="incubator_description" class="materialize-textarea" length="1200" maxlength="1200"><?php if (isset($item)) echo $item->incubator_description; ?></textarea>
		<label><?php echo $this->lang->line('description');?></label>
	</div>
</div>
<br>

<!-- url -->
<div class="row">
	<div class="input-field col s12">
		<input name="incubator_url" type="text" length="255" maxlength="255" required
			value="<?php if (isset($item)) echo $item->incubator_url; ?>"/>
		<label><?php echo $this->lang->line('url');?></label>
	</div>
</div>

<!-- phone -->
<div class="row">
	<div class="input-field col s12">
		<input name="incubator_phone" type="text" length="255" maxlength="255"
			value="<?php if (isset($item)) echo $item->incubator_phone; ?>"/>
		<label><?php echo $this->lang->line('phone');?></label>
	</div>
</div>

<!-- state -->
<div class="row">
	<div class="input-field col s12">
		<input name="incubator_state" type="text" length="2" maxlength="2"
			value="<?php if (isset($item)) echo $item->incubator_state; ?>"/>
		<label><?php echo $this->lang->line('state');?></label>
	</div>
</div>

<!-- city -->
<div class="row">
	<div class="input-field col s12">
		<input name="incubator_city" type="text" length="255" maxlength="255"
			value="<?php if (isset($item)) echo $item->incubator_city; ?>"/>
		<label><?php echo $this->lang->line('city');?></label>
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
