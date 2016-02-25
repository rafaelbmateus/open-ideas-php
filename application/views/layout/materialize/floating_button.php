<?php if($this->session->userdata('user_job')=='corporate'){ ?>
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large mdi-content-add"></i>
    </a>
    <ul>
      <li><a href="<?php echo base_url() . 'challenges/create'; ?>" class="btn-floating red"><i class="large fa fa-bullseye"></i></a></li>
      <li><a href="<?php echo base_url() . 'ideas/create'; ?>" class="btn-floating red"><i class="large fa fa-lightbulb-o"></i></a></li>
    </ul>
  </div>
<?php }else{ ?>
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="<?php echo base_url() . 'ideas/create'; ?>" class="btn-floating btn-large red"><i class="large fa fa-lightbulb-o"></i></a>
  </div>
<?php } ?>
