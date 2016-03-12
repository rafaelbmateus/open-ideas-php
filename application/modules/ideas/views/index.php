<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php //print_r($list); ?>

<?php if (!empty($list)){ ?>
  <div id="blog-post-full">
  	<?php foreach($list as $item){ ?>
      <div class="card medium">
        <div class="card-image">
          <!-- <img src="<?php echo base_url() . 'assets/images/areas/' . $item->area_id . '.jpg'; ?>" alt="sample" height="150"> -->
          <img src="<?php echo base_url() . 'assets/images/ideas/' . 'header_card' . '.jpg'; ?>" alt="sample" height="90">
          <a href="<?php echo base_url() . $module . '/show/' . $item->idea_id; ?>">
            <span class="card-title"><?php echo $item->idea_title; ?></span>
          </a>
          <span class="card-title blog-post-full-cat right cyan z-depth-1"><a href="#"><?php echo $list_areas[$item->area_id-1]->area_name; ?></a></span>
        </div>
        <div class="card-content">
          <?php if($item->user_id==$this->session->userdata('user_id')){ ?>
            <a class="btn-floating waves-effect waves-light light-blue right" href="<?php echo base_url () . $module . '/edit/' . $item->idea_id; ?>"><i class="fa fa-pencil"></i></a>
          <?php } ?>
          <a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><img width="50" src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($list_users[$item->user_id-1]->user_email))); ?>" alt="" class="circle responsive-img valign profile-image"> <?php echo $list_users[$item->user_id-1]->user_name; ?></a>
          <br><br>
          <p><b>Decrição:</b></p>
          <p><?php echo $item->idea_description; ?></p>
        </div>

        <div class="card-action">
          <div class="row">
            <div class="col s10">
              <p class="ultra-small"><?php echo date('d/m/Y H:i:s', strtotime($item->created_at)); ?></p>
            </div>
            <div class="col m2">
              <a class="btn-floating waves-effect waves-light light-blue" onclick="share();"><i class="mdi-social-share"></i></a>
              <a class="btn-floating waves-effect waves-light light-blue" onclick="like();"><i class="fa fa-thumbs-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

<?php }else{ ?>
	<?php	// echo $this->lang->line('dont_have_idea'); ?>
<?php } ?>

<br><br><br>
