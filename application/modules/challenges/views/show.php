<div class="card-panel">

  <!-- navbar - start -->
  <div id="right-aligned-links" class="section">
    <div class="row">
      <div class="col s12 m12 l12">
        <nav class="cyan">
          <div class="nav-wrapper">
            <div class="col s12">
              <a class="brand-logo">Desafio</a>
              <ul class="right hide-on-med-and-down">
                <li><a onclick="share();"><i class="fa fa-share-alt"></i></a></li>
                <li><a onclick="like();"><i id="icon_like" class="fa fa-thumbs-up"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- navbar - end -->

  <h5><?php echo $this->lang->line('user'); ?>:</h5>
  <p class="caption"><?php echo $item->user_id; ?></p>

  <h5><?php echo $this->lang->line('title'); ?></h5>
  <p class="caption"><?php echo $item->challenge_title; ?></p>

  <h5><?php echo $this->lang->line('description'); ?></h5>
  <p class="caption"><?php echo $item->challenge_description; ?></p>

  <p class="caption"><?php echo $this->lang->line('created_at'); ?>: <?php echo date("d/m/Y - H:i", strtotime($item->created_at)); ?></p>
</div>

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
