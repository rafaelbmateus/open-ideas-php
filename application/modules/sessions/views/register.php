<link href="<?php echo base_url(); ?>assets/plugins/materialize/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
<?php $this->load->view($this->config->item('app_layout').'header'); ?>

<body class="cyan">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="<?php echo base_url() . $module . '/add';?>" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url(); ?>assets/images/app/icons/oi/oi-xxxhdpi.png" alt="Open Idea" class="circle responsive-img valign profile-image-login">
            <p class="center"><?php echo $this->lang->line('join_us'); ?></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person prefix"></i>
            <input id="name" name="name" type="text">
            <label for="name" class="center-align"><?php echo $this->lang->line('name'); ?></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s2">
            <i class="mdi-action-perm-contact-cal prefix"></i>
          </div>
          <div class="input-field col s10">
            <select id="job_id" name="job_id" onchange="job()" required>
              <option value="" disabled selected><?php echo $this->lang->line('choice_job'); ?></option>
              <?php if (isset ($jobs)) { ?>
            		<?php foreach ( $jobs as $job ) { ?>
                  <option value="<?php echo $job->job_id; ?>"><?php echo $this->lang->line($job->job_name); ?></option>
                <?php } ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i id="cnpj_icon" class="mdi-action-assignment-ind prefix" hidden></i> -->
            <input id="cnpj_input" name="cnpj" type="text" hidden>
            <label id="cnpj_label" for="cnpj" class="center-align active" hidden><?php echo $this->lang->line('cnpj'); ?></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input name="email" type="email">
            <label for="email" class="center-align"><?php echo $this->lang->line('email'); ?></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-https prefix"></i>
            <input name="password" type="password">
            <label for="password"><?php echo $this->lang->line('password'); ?></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light cyan col s12"><?php echo $this->lang->line('register'); ?></button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up"><?php echo $this->lang->line('have_account'); ?> <a href="<?php echo base_url() . $module;?>"><?php echo $this->lang->line('login'); ?></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

<!-- ---------------------------------------- functions - start ---------------------------------------- -->
<script type="text/javascript">
  function job(){
    if(document.getElementById("job_id").value==1){
      document.getElementById('cnpj_input').style.display = 'block';
      document.getElementById('cnpj_label').style.display = 'block';
      document.getElementById('cnpj_icon').style.display = 'block';
      document.getElementById("cnpj_input").required = true;
      // TODO, required field cnpj

    }else{
      document.getElementById('cnpj_input').style.display = 'none';
      document.getElementById('cnpj_label').style.display = 'none';
      document.getElementById('cnpj_icon').style.display = 'none';
      document.getElementById("cnpj_input").required = false;
      // TODO, not required field cnpj
    }
  }
</script>

<script type="text/javascript">
  window.onload = function(){
    // focus in name
    document.getElementById('name').focus();

    // formatter cnpj
    $('#cnpj_input').formatter({
      'pattern': '{{99}}.{{999}}.{{999}}/{{9999}}-{{99}}',
      'persistent': true
    });

    // hidden field cnpj
    job(0);
  }
</script>
<!-- ---------------------------------------- functions - end ---------------------------------------- -->

<?php $this->load->view($this->config->item('app_layout').'footer');?>
