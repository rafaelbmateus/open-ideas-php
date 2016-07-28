<div class="card-panel">

	<!-- navbar - start -->
  <nav>
    <div class="nav-wrapper">
      <div class="col s12">
        <a class="brand-logo center"><?php echo $this->lang->line('new_idea');?></a>
      </div>
    </div>
  </nav>
  <!-- navbar - end -->

	<br>

	<!-- form -->
	<form action="<?php echo base_url() . $module . '/add';?>" method="post">
		<?php $this->load->view('_form'); ?>
	</form>
</div>

<br><br><br>
