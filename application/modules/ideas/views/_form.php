<!-- id -->
<input hidden="hidden" name="idea_id" type="text" value="<?php if (isset($item)) echo $item->idea_id; ?>" />

<!-- is public -->
<div class="row">
	<div class="col s3 offset-s9">
		<div class="switch">
			<?php echo $this->lang->line('public_idea');?>:
			<label>
				<?php //echo $this->lang->line('no');?>
				<input name="idea_is_public" type="checkbox" <?php if (!isset($item)){echo 'checked';}else{if ($item->idea_is_public) echo 'checked';} ?>>
				<span class="lever"></span> <?php echo $this->lang->line('yes');?>
			</label>
		</div>
	</div>
</div>
<br><br>

<!-- title -->
<div class="row">
	<div class="input-field col s12">
		<input name="idea_title" type="text" length="80" maxlength="80" value="<?php if (isset($item)) echo $item->idea_title; ?>" required/>
		<label><?php echo $this->lang->line('title');?></label>
	</div>
</div>

<!-- description -->
<div class="row">
	<div class="input-field col s12">
		<textarea name="idea_description" class="materialize-textarea" length="1200" maxlength="1200" required><?php if (isset($item)) echo $item->idea_description; ?></textarea>
		<label><?php echo $this->lang->line('description');?></label>
	</div>
</div>
<br>

<!-- solution -->
<div class="row">
	<div class="input-field col s12">
		<textarea name="idea_solution" class="materialize-textarea" length="1200" maxlength="1200" required><?php if (isset($item)) echo $item->idea_solution; ?></textarea>
		<label><?php echo $this->lang->line('solution');?></label>
	</div>
</div>
<br>

<!-- differential -->
<div class="row">
	<div class="input-field col s12">
		<textarea name="idea_differential" class="materialize-textarea" length="1200" maxlength="1200" required><?php if (isset($item)) echo $item->idea_differential; ?></textarea>
		<label><?php echo $this->lang->line('differential');?></label>
	</div>
</div>
<br>

<!-- necessary_skills -->
<div class="row">
	<div class="input-field col s12">
		<textarea name="idea_necessary_skills" class="materialize-textarea" length="500" maxlength="500" required><?php if (isset($item)) echo $item->idea_necessary_skills; ?></textarea>
		<label><?php echo $this->lang->line('necessary_skills');?></label>
	</div>
</div>
<br>

<!-- target_group -->
<div class="row">
	<div class="input-field col s12">
		<input name="idea_target_group" type="text" length="80" maxlength="80" value="<?php if (isset($item)) echo $item->idea_target_group; ?>" required/>
		<label><?php echo $this->lang->line('target_group');?></label>
	</div>
</div>
<br>

<!-- area -->
<div class="row">
	<div class="input-field col s6">
		<select name="area_id">
			s
			<?php if (isset($innovation_areas)){ ?>
				<?php foreach ($innovation_areas as $area){ ?>
					<?php if($area->innovation_area_id == $item->area_id) { ?>
						<option selected value="<?php echo $area->innovation_area_id; ?>"><?php echo $area->area_name; ?></option>
					<?php }else{ ?>
						<option value="<?php echo $area->innovation_area_id; ?>"><?php echo $area->area_name; ?></option>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</select>
		<label><?php echo $this->lang->line('innovation_area'); ?></label>
	</div>
</div>

<!-- attachment -->
<!-- <div class="row">
	<div class="file-field input-field col s6">
		<input class="file-path" type="text" readonly />
		<div class="btn">
			<span><?php echo $this->lang->line('attachment');?></span>
			<input name="idea_attachment" type="file" />
		</div>
	</div>
</div> -->

<br><br>

<!-- buttons confirm -->
<div class="row">
	<div class="input-field">
		<button class="btn cyan waves-effect waves-light col l12" type="submit"><?php echo $this->lang->line('save'); ?> <i class="fa fa-check"></i></button>
	</div>
</div>
