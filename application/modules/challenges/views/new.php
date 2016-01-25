<div class="card-panel">
	<!-- navbar - start -->
  <div id="right-aligned-links" class="section">
    <div class="row">
      <div class="col s12 m12 l12">
        <nav class="red">
          <div class="nav-wrapper">
            <div class="col s12">
              <a href="#!" class="brand-logo">Desafio</a>
              <ul class="right hide-on-med-and-down">
                <li><a href="#">Sass</a></li>
                <li><a href="#">Components</a></li>
                <li><a href="#">JavaScript</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- navbar - end -->
	
	<h4 class="header2"><?php echo $this->lang->line('new_challenge');?></h4>

	<!-- form -->
	<form action="<?php echo base_url() . $module . '/add';?>" method="post">
		<?php $this->load->view('_form'); ?>
	</form>
</div>

<br><br><br>
