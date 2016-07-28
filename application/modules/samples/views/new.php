<div class="card-panel">
	<!-- navbar - start -->
  <div id="right-aligned-links" class="section">
    <div class="row">
      <nav class="cyan">
        <div class="nav-wrapper">
          <div class="col s12">
            <a class="brand-logo"><?php echo $this->lang->line('new');?></a>
            <!--
            <ul class="right hide-on-med-and-down">
              <li><a href="#">Sass</a></li>
            </ul>
            -->
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- navbar - end -->

	<br>

	<!-- form -->
	<form action="<?php echo base_url() . $module . '/add';?>" method="post">
		<?php $this->load->view('_form'); ?>
	</form>
</div>

<br><br><br>
