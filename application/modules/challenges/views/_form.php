<input hidden="hidden" name="challenge_id" type="text" value="<?php if (isset($item->challenge_id)) echo $item->challenge_id; ?>" />

<div class="row">
	<div class="col s12">
		<div class="card-panel">
			<h4 class="header2"><?php echo $this->lang->line('new_challenge');?></h4>
			<div class="row">
				<div class="input-field col s6">
					<select>
						<option value="" disabled selected><?php //echo $this->lang->line('choose'); ?></option>
						<?php if (isset($innovation_areas)){ ?>
							<?php foreach ($innovation_areas as $area){ ?>
								<option value="<?php echo $area->innovation_area_id; ?>"><?php echo $area->area_name; ?></option>
							<?php } ?>
						<?php } ?>
					</select>
					<label><?php echo $this->lang->line('innovation_area'); ?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s8">
					<input name="challenge_title" type="text" length="60" maxlength="60" required
						value="<?php if (isset($item)) echo $item->challenge_title; ?>"/>
					<label><?php echo $this->lang->line('title'); ?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea name="challenge_description" class="materialize-textarea" length="255" maxlength="255" required><?php if (isset($item)) echo $item->challenge_description; ?></textarea>
					<label><?php echo $this->lang->line('description'); ?></label>
				</div>
			</div>
			<div class="row">
				<div class="col s4">
					<input name="challenge_deadline" type="date" class="datepicker" placeholder="<?php echo $this->lang->line('deadline'); ?>" required>
				</div>
			</div>
			<div class="row">
				<div class="file-field input-field col s12">
					<input class="file-path" type="text" readonly/>
					<div class="btn">
						<span><?php echo $this->lang->line('attachment'); ?></span>
						<input name="idea_attachment" type="file"/>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="input-field col s5">
					<a class="btn cyan waves-effect waves-light" href="<?php echo base_url() . $module;?>"><?=$this->lang->line('cancel');?><i class="fa fa-times left"></i></a>
				</div>
				<div class="input-field col s7">
					<button class="btn cyan waves-effect waves-light right" type="submit"><?php echo $this->lang->line('save');?><i class="fa fa-check right"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
