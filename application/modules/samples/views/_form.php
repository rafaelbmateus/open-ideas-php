<input hidden="hidden" name="sample_id" type="text" value="<?php if (isset($item[0]->sample_id)) echo $item[0]->sample_id; ?>" />


<div class="row">
	<div class="col s12 m12 l6">
		<div class="card-panel">
			<h4 class="header2">Basic Form</h4>
			<div class="row">
				<div class="input-field col s12">
					<input name="sample_name" type="text" required
						value="<?php if (isset($item)) echo $item[0]->sample_name; ?>"/>
					<label><?php echo $this->lang->line('name');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s5">
					<button class="btn cyan waves-effect waves-light left" href="<?php echo base_url() . $module; ?>"><?php echo $this->lang->line('cancel');?>
						<i class="mdi-content-send right"></i>
					</button>
				</div>
				<div class="input-field col s7">
					<button class="btn cyan waves-effect waves-light right" type="submit" name="action"><?php echo $this->lang->line('save');?>
						<i class="mdi-content-send right"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
