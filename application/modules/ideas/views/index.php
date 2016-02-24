<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php //print_r($list); ?>

<?php if (!empty($list)){ ?>
  <div id="blog-post-full">
  	<?php foreach($list as $item){ ?>
      <div class="card large">
        <div class="card-image">
          <img src="<?php echo base_url() . 'assets/images/areas/' . $item->area_id . '.jpg'; ?>" alt="sample" height="150">
          <a href="<?php echo base_url() . $module . '/show/' . $item->idea_id; ?>">
            <span class="card-title"><?php echo $item->idea_title; ?></span>
          </a>
          <span class="card-title blog-post-full-cat right cyan z-depth-1"><a href="#"><?php echo $list_areas[$item->area_id-1]->area_name; ?></a></span>
        </div>
        <div class="card-content">
          <a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><?php echo $list_users[$item->user_id-1]->user_name; ?></a>
          <p><?php echo $item->idea_description; ?></p>
        </div>

        <div class="card-action">
          <p class="ultra-small"><?php echo date('d/m/Y H:i:s', strtotime($item->created_at)); ?></p>
          <!-- <a href="#" class="right">Read more ></a> -->
          <a class="btn-floating waves-effect waves-light light-blue right" href="<?php echo base_url () . $module . '/edit/' . $item->idea_id; ?>"><i class="fa fa-pencil"></i></a>
          <?php  echo "&nbsp"; ?>
          <a class="btn-floating waves-effect waves-light light-blue right" href="<?php echo base_url () . $module . '/edit/' . $item->idea_id; ?>"><i class="fa fa-pencil"></i></a>
        </div>
      </div>
    <?php } ?>
  </div>
  <!-- for - end-->

<?php }else{ ?>
	<?php	echo $this->lang->line('dont_have_idea'); ?>
<?php } ?>

<br><br><br>
