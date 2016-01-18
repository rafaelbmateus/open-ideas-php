<input hidden="hidden" name="challenge_id" type="text" value="<?php if (isset($item->challenge_id)) echo $item->challenge_id; ?>" />

<div class="row">
	<div class="col s12 m12 l6">
		<div class="card-panel">
			<h4 class="header2"><?php echo $this->lang->line('new');?></h4>
			<div class="row">
				<div class="input-field col s12">
					<input name="challenge_title" type="text" required
						value="<?php if (isset($item)) echo $item->challenge_title; ?>"/>
					<label><?php echo $this->lang->line('title');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea name="challenge_description" class="materialize-textarea" required><?php if (isset($item)) echo $item->challenge_description; ?></textarea>
					<label><?php echo $this->lang->line('description');?></label>
				</div>
			</div>
			<br>
			<div class="file-field input-field col s12">
				<input class="file-path" type="text" readonly />
				<div class="btn">
					<span><?php echo $this->lang->line('attachment');?></span>
					<input name="idea_attachment" type="file" />
				</div>
			</div>
			<br><br>
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
