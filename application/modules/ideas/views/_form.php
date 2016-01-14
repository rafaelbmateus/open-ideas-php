<input hidden="hidden" name="idea_id" type="text" value="<?php if (isset($item)) echo $item->idea_id; ?>" />

<div class="row">
	<div class="col s12 m12 l6">
		<div class="card-panel">
			<h4 class="header2"><?php echo $this->lang->line('new');?></h4>
			<div class="row">
				<div class="input-field col s12">
					<input name="idea_title" type="text" required value="<?php if (isset($item)) echo $item->idea_title; ?>"/>
					<label><?php echo $this->lang->line('title');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea name="idea_description" class="materialize-textarea" required><?php if (isset($item)) echo $item->idea_description; ?></textarea>
					<label><?php echo $this->lang->line('description');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s5">
					<a class="btn cyan waves-effect waves-light" href="<?php echo base_url() . $module; ?>"><?php echo $this->lang->line('cancel');?><i class="fa fa-times left"></i></a>
				</div>
				<div class="input-field col s7">
					<button class="btn cyan waves-effect waves-light right" type="submit"><?php echo $this->lang->line('save'); ?><i class="fa fa-check right"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
