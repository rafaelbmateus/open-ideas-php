<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->



<?php if (!empty($list)) { ?>
	<?php foreach($list as $item) { ?>
		<div class="blog">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="<?php echo base_url() . $module . '/show/' . $item->challenge_id; ?>"><img src="<?php echo base_url(); ?>assets/plugins/materialize/images/img4.jpg" alt="blog-img"></a>
				</div>
				<ul class="card-action-buttons">
					<li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a></li>
					<li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a></li>
				</ul>
				<div class="card-content">
					<p class="row">
						<span class="left"><a href=""><?php echo $item->area_id; ?></a></span>
						<span class="right"><?php echo $item->created_at; ?></span>
					</p>
					<h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4"><?php echo $item->challenge_title; ?></a></h4>
					<p class="blog-post-content"><?php echo $item->challenge_description; ?></p>
					<div class="row">
						<div class="col s2">
							<img src="<?php echo base_url(); ?>assets/plugins/materialize/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
						</div>
						<div class="col s9"><a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><?php echo $item->user_id; ?></a></div>
					</div>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
					<p>Here is some more information about this blog that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>
	<?php } ?>
<?php }else{ ?>
	<?php echo $this->lang->line('dont_have_challenge'); ?>
<?php } ?>

<br><br><br>
