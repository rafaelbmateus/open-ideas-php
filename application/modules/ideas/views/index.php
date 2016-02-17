<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php //print_r($list); ?>

<?php if (!empty($list)){ ?>
	<?php foreach($list as $item){ ?>

    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <a><img class="activator" src="<?php echo base_url(); ?>assets/plugins/materialize/images/img3.jpg" alt="blog-img"></a>
      </div>
      <ul class="card-action-buttons">
        <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a></li>
        <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a></li>
        <li><a class="btn-floating waves-effect waves-light light-blue" href="<?php echo base_url () . $module . '/edit/' . $item->idea_id; ?>"><i class="fa fa-pencil"></i></a></li>
      </ul>
      <div class="card-content">
    	  <p class="row">
    	    <span class="left"><a href="">Web Design</a></span>
    	    <span class="right">18th June, 2015</span>
    	  </p>
    	  <h4 class="card-title grey-text text-darken-4"><a class="grey-text text-darken-4"><?php echo $item->idea_title; ?></a></h4>
    	  <p class="blog-post-content"><?php echo $item->idea_description; ?></p>
    	  <div class="row">
    	    <div class="col s2">
    	    	<img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
    	    </div>
    	    <div class="col s9"> By <a href="#">John Doe</a></div>
    	  </div>
      </div>
      <div class="card-reveal">
    	  <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> <?php echo $item->idea_title; ?></span>
    	  <p><?php echo $item->idea_description; ?></p>
      </div>
    </div>

  <?php } ?>
  <!-- for - end-->

<?php }else{ ?>
	<?php	echo $this->lang->line('dont_have_idea'); ?>
<?php } ?>

<br><br><br>
