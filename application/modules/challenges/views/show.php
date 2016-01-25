<div class="card-panel">

  <!-- navbar - start -->
  <div id="right-aligned-links" class="section">
    <div class="row">
      <div class="col s12 m12 l12">
        <nav class="red">
          <div class="nav-wrapper">
            <div class="col s12">
              <a class="brand-logo">Desafio</a>
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

  <p class="caption"><?php echo $item->user_id; ?></p>

  <h5><?php echo $this->lang->line('title'); ?></h5>
  <p class="caption"><?php echo $item->challenge_title; ?></p>
  <h5><?php echo $this->lang->line('description'); ?></h5>
  <p class="caption"><?php echo $item->challenge_description; ?></p>

  <p class="caption"><?php echo $item->created_at; ?></p>


  <?php echo 'show challenge'; ?>
</div>
