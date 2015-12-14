
<input hidden="hidden" name="sample_id" type="text" value="<?php if (isset($item[0]->sample_id)) echo $item[0]->sample_id; ?>" />
<?php print_r($item); ?>
<div class="row">
	<div class="col-md-4">
		<label class="control-label"><?php echo $this->lang->line('name');?></label>
    <input name="sample_name" type="text" class="form-control" maxlength="255" required
			value="<?php if (isset($item)) echo $item[0]->sample_name; ?>"/>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-4">
		<a class="btn btn-danger" href="<?php echo base_url() . $module; ?>"><?php echo $this->lang->line('cancel');?></a>
	</div>
	<div class="col-md-4">
		<button type="submit" class="btn btn-primary"><?php echo $this->lang->line('save');?></button>
	</div>
</div>
