
<input hidden="hidden" name="sample_id" type="text" value="<?php if (isset($item[0]->sample_id)) echo $item[0]->sample_id; ?>" />
<?php print_r($item); ?>
<div class="row">
	<div class="col-md-4">
		<label class="control-label">Nome</label>
    <input name="sample_name" type="text" class="form-control" placeholder="Nome..." maxlength="255" required
			value="<?php if (isset($item)) echo $item[0]->sample_name; ?>"/>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-1">
		<a class="btn btn-danger" href="<?php echo base_url() . $module; ?>">Cancel</a>
	</div>
	<div class="col-md-1">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>
</div>
