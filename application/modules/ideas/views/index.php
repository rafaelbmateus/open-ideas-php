<!-- <a href="<?php echo base_url() . $module . '/create'; ?>" class="btn cyan waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $this->lang->line('new');?></a> -->

<?php //print_r($list); ?>

<div class="card">
  <div class="card-image waves-effect waves-block waves-light">
    <a href="#"><img src="<?php echo base_url(); ?>assets/plugins/materialize/images/img3.jpg" alt="blog-img"></a>
  </div>
  <ul class="card-action-buttons">
    <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a></li>
    <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a></li>
  </ul>
  <div class="card-content">
	  <p class="row">
	    <span class="left"><a href="">Web Design</a></span>
	    <span class="right">18th June, 2015</span>
	  </p>
	  <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Material Design Card - For Blog Post Article</a></h4>
	  <p class="blog-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	  <div class="row">
	    <div class="col s2">
	    	<img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
	    </div>
	    <div class="col s9"> By <a href="#">John Doe</a></div>
	  </div>
  </div>
  <div class="card-reveal">
	  <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
	  <p>Here is some more information about this blog that is only revealed once clicked on.</p>
  </div>
</div>



<?php if (!empty($list)){ ?>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th width="95%"><?php echo $this->lang->line('title'); ?></th>
				<th width="5%"><?php echo $this->lang->line('edit'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($list as $item){
				echo '<tr>';
				echo '<td>' . $item->idea_title . '</td>';
				echo '<td>';
				echo '<a href="' . base_url () . $module . '/edit/' . $item->idea_id . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-pencil"></i></a>';
				echo '</td>';
				echo '</tr>';
			}
			?>
		</tbody>
	</table>
<?php }else{ ?>
	<?php	echo $this->lang->line('dont_have_idea'); ?>
<?php } ?>
