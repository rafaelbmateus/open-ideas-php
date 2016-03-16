<div class="card-panel">
  <!-- profile header - start -->
  <div id="profile-page" class="section">
    <div id="profile-page-header" class="card">
      <div class="card-image waves-effect">
        <img src="<?php echo base_url(); ?>assets/plugins/materialize/images/user-profile-bg.jpg" alt="user background">
      </div>
      <figure class="card-profile-image">
        <a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($list_users[$item->user_id-1]->user_email))); ?>" alt="profile image" class="circle z-depth-2 responsive-img activator"></a>
      </figure>
      <div class="card-content">
        <div class="row">
          <div class="col s3 offset-s2">
            <h4 class="card-title grey-text text-darken-4"><a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><?php echo $list_users[$item->user_id-1]->user_name; ?></a></h4>
            <!-- <p class="medium-small grey-text"><?php echo $list_users[$item->user_id-1]->job_id; ?></p> -->
          </div>
          <div class="col s2 center-align">
            <h4 class="card-title grey-text text-darken-4"><?php echo $num_ideas; ?></h4>
            <p class="medium-small grey-text"><?php echo $this->lang->line('ideas'); ?></p>
          </div>
          <div class="col s2 center-align">
            <h4 class="card-title grey-text text-darken-4"><?php echo $num_challenges; ?></h4>
            <p class="medium-small grey-text"><?php echo $this->lang->line('challenges'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- profile header - end -->

  <div id="flow-text-demo" class="card-panel">
    <p class="flow-text"><b><?php echo $item->challenge_title; ?></b></p>
    <!-- TODO: tirar a gambi! -->
    <p class="flow-text"><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $item->challenge_description; ?></p>

    <p class="caption"><?php echo $this->lang->line('created_at'); ?>: <?php echo date("d/m/Y - H:i", strtotime($item->created_at)); ?></p>
  </div>

  <br>

  <div id="flow-text-demo" class="card-panel">
    <!-- list comments -->
    <div>
      <!-- <?php print_r($list_comments); ?> -->
      <table id="datatable" class="table table-bordered responsive-table display">
      	<thead>
      		<tr>
      			<th width="8%"></th>
            <th width="20%"></th>
      			<th width="70%"></th>
      			<th width="5%"></th>
      		</tr>
      	</thead>
      	<tbody>
      		<?php if (isset ( $list_comments )) { ?>
      			<?php foreach ( $list_comments as $comment ) { ?>
              <tr>
                <td rowspan="2">
                  <a href="<?php echo base_url() . 'users' . '/show/' . $comment->user_id; ?>"><img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($list_users[$item->user_id-1]->user_email))); ?>" alt="profile image" class="circle z-depth-2 responsive-img activator"></a>
                </td>
                <td colspan="2">
                  <?php echo $list_users[$comment->user_id-1]->user_name; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <?php echo date('d/m/Y', strtotime($comment->created_at)); ?>
                  às
                  <?php echo date('H:i:s', strtotime($comment->created_at)); ?>
                </td>
                <td colspan="2">
                  <?php echo $comment->comment_description; ?>
                </td>
                <!-- <td>
                  <a href="' . base_url () . $module . '/delete/' . $comment->$comment_id . '" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-pencil"></i></a>
                </td> -->
              </tr>
            <?php } ?>
          <?php } ?>
      	</tbody>
      </table>
    </div>

    <div class="input-field col s12">
      <form class="" action="<?php echo base_url() . $module . '/comment';?>" method="post">
        <input hidden="hidden" name="challenge_id" value="<?php echo $item->challenge_id; ?>">
        <textarea name="comment_description" class="materialize-textarea" rows="8" cols="40"></textarea>
        <label><?php echo $this->lang->line('comment');?></label>
        <button class="btn cyan waves-effect waves-light" type="submit"><?php echo $this->lang->line('send');?><i class="fa fa-check right"></i></button>
      </form>
    </div>

  </div>
</div>

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
