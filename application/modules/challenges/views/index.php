<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php if (!empty($list)) { ?>
	<div class="row">
	<?php foreach($list as $item) { ?>
		<a href="<?php echo base_url() . $module . '/show/' . $item->challenge_id; ?>">
		<div class="blog col s4">
			<br>
				<div class="card hoverable medium">
					<div class="card-image waves-light">
						<!-- <a href="<?php echo base_url() . $module . '/show/' . $item->challenge_id; ?>"><img src="<?php echo base_url(); ?>assets/plugins/materialize/images/img4.jpg" alt="blog-img"></a> -->
						<img class="activator" src="<?php echo base_url() . 'assets/images/areas/' . $item->area_id . '.jpg'; ?>" alt="blog-img" height="300">
					</div>
					<ul class="card-action-buttons">
						<li><a class="btn-floating waves-effect waves-light light-blue" onclick="like();"><i class="fa fa-thumbs-up"></i></a></li>
						<li><a class="btn-floating waves-effect waves-light light-blue" onclick="share();"><i class="mdi-social-share"></i></a></li>
						<!-- <li><a class="btn-floating waves-effect waves-light light-blue" href="<?php echo base_url() . $module . '/show/' . $item->challenge_id; ?>"><i class="mdi-action-info activator"></i></a></li> -->
					</ul>
					<div class="card-content">
						<p class="row">
							<!-- <?php print_r($list_areas); ?> -->
							<span class="left"><a href=""><?php echo $list_areas[$item->area_id-1]->area_name; ?></a></span> <!-- TODO: Fix this, $area->name -->
							<span class="right"><?php echo date('d/m/Y H:i:s', strtotime($item->created_at)); ?></span>
						</p>
						<h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4"><?php echo $item->challenge_title; ?></a></h4>
						<div class="row">
							<div class="col s2">
								<a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($list_users[$item->user_id-1]->user_email))); ?>" alt="" class="circle responsive-img valign profile-image"></a>
							</div>
							<div class="col s9"><a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><?php echo $list_users[$item->user_id-1]->user_name; ?></a></div>
						</div>
					</div>
				</div>
		</div>
	</a>
	<?php } ?>
	</div>
<?php }else{ ?>
	<?php // echo $this->lang->line('dont_have_challenge'); ?>
<?php } ?>

<br><br><br>

<script type="text/javascript">
  function like(){
    Materialize.toast('Gostei desse desafio!', 3000, 'rounded');
    // TODO, alter icon_like
  }

  function unlike(){
    Materialize.toast('Talvez não...', 3000, 'rounded');
    // TODO, alter icon_like
  }
  function share(){
    Materialize.toast('Já está no ctrl+c', 3000, 'rounded');
  }
</script>
