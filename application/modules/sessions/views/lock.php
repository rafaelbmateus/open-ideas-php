<link href="<?php echo base_url(); ?>assets/plugins/materialize/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
<?php $this->load->view($this->config->item('app_layout').'header'); ?>

<body class="cyan">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="<?php echo base_url() . $module .'/login';?>" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <input name="email" type="text" hidden
              value="<?php if(isset($user->user_email)) echo $user->user_email; ?>"/>
            <img src="<?php if(isset($user->user_id)) echo base_url() . 'assets/images/users/' . $user->user_id . '.jpg'; ?>" alt="" class="circle responsive-img valign profile-image-login">
            <h4 class="header"><?php if(isset($user->user_name)) echo $user->user_name;?></h4>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password"><?php echo $this->lang->line('password');?></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12"><?php echo $this->lang->line('login');?></button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <!-- <p class="margin medium-small"><a href="<?php echo base_url();?>sessions/register"><?php echo $this->lang->line('register_now');?></a></p> -->
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="#"><?php echo $this->lang->line('forgot_password');?></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

<?php $this->load->view($this->config->item('app_layout').'footer');?>
