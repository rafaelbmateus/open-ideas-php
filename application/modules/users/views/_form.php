<input hidden="hidden" name="user_id" type="text" value="<?php if (isset($item->user_id)) echo $item->user_id; ?>" />

<div class="row">
	<div class="col s12 m12 l6">
		<div class="card-panel">
			<h4 class="header2"><?php echo $this->lang->line('new');?></h4>
			<div class="row">
				<div class="input-field col s12">
					<input name="name" type="text" required
						value="<?php if (isset($item)) echo $item->user_name; ?>"/>
					<label><?php echo $this->lang->line('name');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input name="job_id" type="text" required
						value="<?php if (isset($item)) echo $item->job_id; ?>"/>
					<label><?php echo $this->lang->line('job');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input name="email" type="text" required
						value="<?php if (isset($item)) echo $item->user_email; ?>"/>
					<label><?php echo $this->lang->line('email');?></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input name="password" type="password" required
						value="<?php if (isset($item)) echo $item->user_password; ?>"/>
					<label><?php echo $this->lang->line('password');?></label>
				</div>

				<div class="input-field col s6">
					<input name="password-again" type="password" required
						value="<?php if (isset($item)) echo $item->user_password; ?>"/>
					<label><?php echo $this->lang->line('password_again');?></label>
				</div>
			</div>
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
