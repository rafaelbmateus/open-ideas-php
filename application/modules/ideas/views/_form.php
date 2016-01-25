<!-- id -->
<input hidden="hidden" name="idea_id" type="text" value="<?php if (isset($item)) echo $item->idea_id; ?>" />

<!-- is public -->
<div class="row">
	<div class="input-field col s12">
		<div class="switch">
			<label>
				<?php echo $this->lang->line('public_idea');?>:
				<?php echo $this->lang->line('no');?>
				<input name="idea_is_public" type="checkbox" checked>
				<span class="lever"></span> <?php echo $this->lang->line('yes');?>
			</label>
		</div>
	</div>
</div>
<br><br>

<!-- title -->
<div class="row">
	<div class="input-field col s12">
		<input name="idea_title" type="text" length="60" maxlength="60" value="<?php if (isset($item)) echo $item->idea_title; ?>" required/>
		<label><?php echo $this->lang->line('title');?></label>
	</div>
</div>

<!-- description -->
<div class="row">
	<div class="input-field col s12">
		<textarea name="idea_description" class="materialize-textarea" length="255" maxlength="255" required><?php if (isset($item)) echo $item->idea_description; ?></textarea>
		<label><?php echo $this->lang->line('description');?></label>
	</div>
</div>
<br>

<!-- attachment -->
<div class="file-field input-field col s12">
	<input class="file-path" type="text" readonly />
	<div class="btn">
		<span><?php echo $this->lang->line('attachment');?></span>
		<input name="idea_attachment" type="file" />
	</div>
</div>
<br><br>

<!-- buttons confirm/cancel -->
<div class="row">
	<div class="input-field col s5">
		<a class="btn cyan waves-effect waves-light" href="<?php echo base_url() . $module; ?>"><?php echo $this->lang->line('cancel');?><i class="fa fa-times left"></i></a>
	</div>
	<div class="input-field col s7">
		<button class="btn cyan waves-effect waves-light right" type="submit"><?php echo $this->lang->line('save'); ?><i class="fa fa-check right"></i></button>
	</div>
</div>
