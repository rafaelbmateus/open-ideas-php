<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php $this->load->model('Idea'); ?>
<?php $this->load->view('ideas_js'); ?>

<!-- TODO: if page != my_ideas { print button } -->
<a href="<?php echo base_url() . 'ideas/my_ideas'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-diamond"></i> <?php echo $this->lang->line('my_ideas');?></a>

<?php if (!empty($list)) { ?>
	<div class="row">
	<?php foreach($list as $item) { ?>
		<a href="<?php echo base_url() . $module . '/show/' . $item->idea_id; ?>">
		<div class="blog col s4">
			<br>
				<div class="card hoverable medium">
					<div class="card-image waves-light">
						<img class="activator" src="<?php echo base_url() . 'assets/images/areas/' . $item->area_id . '.jpg'; ?>" alt="blog-img" height="300">
					</div>
					<ul class="card-action-buttons">
						<?php if($this->Idea->is_liked($this->session->userdata('user_id'), $item->idea_id)) { ?>
							<li><a id="like<?php echo $item->idea_id; ?>" value="1" class="btn-floating waves-light z-depth-0 cyan lighten-4" onclick="like_manager(<?php echo $item->idea_id; ?>);"><i class="fa fa-thumbs-up"></i></a></li>
						<?php }else{ ?>
							<li><a id="like<?php echo $item->idea_id; ?>" value="0" class="btn-floating waves-light" onclick="like_manager(<?php echo $item->idea_id; ?>);"><i class="fa fa-thumbs-up"></i></a></li>
						<?php } ?>
						<li><a class="btn-floating waves-light" onclick="share();"><i class="mdi-social-share"></i></a></li>
						<!-- <li><a class="btn-floating waves-effect waves-light light-blue" href="<?php echo base_url() . $module . '/show/' . $item->idea_id; ?>"><i class="mdi-action-info activator"></i></a></li> -->
					</ul>

					<div class="card-content">
						<p class="row">
							<span class="left"><a href=""><?php echo $list_areas[$item->area_id-1]->area_name; ?></a></span>
							<span class="right"><?php echo date('d/m/Y H:i:s', strtotime($item->created_at)); ?></span>
						</p>
						<h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4"><?php echo $item->idea_title; ?></a></h4>
						<div class="row">
							<div class="col s2">
								<a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($item->user_email))); ?>" alt="" class="circle responsive-img valign profile-image"></a>
							</div>
							<div class="col s9"><a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><?php echo $item->user_name; ?></a></div>
						</div>
					</div>

				</div>
		</div>
	</a>
	<?php } ?>
	</div>
<?php }else{ ?>
	<?php // echo $this->lang->line('dont_have_idea'); ?>
<?php } ?>

<br><br><br>
