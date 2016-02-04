<?php $this->load->view($this->config->item('app_layout').'header'); ?>

<div id="login-page" class="row">
  <div class="col s12 z-depth-4 card-panel">
    <form class="login-form" action="<?php echo base_url() . $module .'/login';?>" method="post">
      <div class="row">
        <div class="input-field col s12 center">
          <img src="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png" alt="Open Idea" class="circle responsive-img valign profile-image-login">
          <p class="center login-form-text"><?php echo $this->lang->line('community');?> Open Idea</p>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-social-person prefix"></i>
          <input id="email" name="email" type="email" required="required" class="validate">
          <!-- <label for="email" data-error="<?php echo $this->lang->line('email_invalid');?>" data-success="<?php echo $this->lang->line('email_valid');?>" class="center-align"><?php echo $this->lang->line('email');?></label> -->
          <label for="email" data-error="<?php echo $this->lang->line('email_invalid');?>" class="center-align"><?php echo $this->lang->line('email');?></label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-action-https prefix"></i>
          <input id="password" name="password" type="password" required="required">
          <label for="password"><?php echo $this->lang->line('password');?></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12  login-text">
          <input id="remember-me" name="remember" type="checkbox"/>
          <label for="remember-me"><?php echo $this->lang->line('remember');?></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light cyan col s12"><?php echo $this->lang->line('login');?></button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="<?php echo base_url();?>sessions/register"><?php echo $this->lang->line('register_now');?></a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="#"><?php echo $this->lang->line('forgot_password');?></a></p>
        </div>
      </div>
    </form>
  </div>
</div>

<?php $this->load->view($this->config->item('app_layout').'footer');?>
