<!-- profile header - start -->
<div class="card-panel">
  <div id="profile-page" class="section">
    <div id="profile-page-header" class="card">
      <div class="card-image waves-effect">
        <img src="<?php echo base_url(); ?>assets/plugins/materialize/images/user-profile-bg.jpg" alt="user background">
      </div>
      <figure class="card-profile-image">
        <a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($item->user_email))); ?>" alt="profile image" class="circle z-depth-2 responsive-img activator"></a>
      </figure>
      <div class="card-content">
        <div class="row">
          <div class="col s3 offset-s2">
            <h4 class="card-title grey-text text-darken-4"><a href="<?php echo base_url() . 'users' . '/show/' . $item->user_id; ?>"><?php echo $item->user_name; ?></a></h4>
            <!-- <p class="medium-small grey-text"><?php echo $item->job_id; ?></p> -->
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
    <?php if ($item->user_id == $this->session->userdata('user_id')){ ?>
      <a class="btn-floating waves-effect waves-light light-blue right" href="<?php echo base_url () . $module . '/edit/' . $item->idea_id; ?>"><i class="fa fa-pencil"></i></a>
    <?php } ?>
    <!-- title -->
    <p class="flow-text center"><b><?php echo $item->idea_title; ?></b></p>
    <!-- description -->
    <!-- TODO: tirar a gambi! -->
    <p class="caption"><b><?php echo $this->lang->line('description');?>: </b>
      <br><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $item->idea_description; ?>
    </p>
    <!-- solution -->
    <p class="caption"><b><?php echo $this->lang->line('solution');?>: </b>
      <br><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $item->idea_solution; ?>
    </p>
    <!-- differential -->
    <p class="caption"><b><?php echo $this->lang->line('differential');?>: </b>
      <br><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $item->idea_differential; ?>
    </p>
    <!-- necessary_skills -->
    <p class="caption"><b><?php echo $this->lang->line('necessary_skills');?>: </b>
      <br><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $item->idea_necessary_skills; ?>
    </p>
    <!-- target_group -->
    <p class="caption"><b><?php echo $this->lang->line('target_group');?>: </b>
      <br><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $item->idea_target_group; ?>
    </p>
    <!-- area -->
    <p class="caption"><b><?php echo $this->lang->line('innovation_area');?>: </b>
      <br><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $list_areas[$item->area_id-1]->area_name; ?>
    </p>
    <!-- timestamps -->
    <p class="caption"><?php echo $this->lang->line('created_at'); ?>: <?php echo date("d/m/Y - H:i", strtotime($item->created_at)); ?></p>
  </div>

  <br>

  <!-- card comment - end -->
  <div id="flow-text-demo" class="card-panel">
    <!-- list comments - start -->
    <div>
      <table id="datatable" class="table bordered display">
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
              <tr style="border: none;">
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
                <?php if ($comment->user_id == $this->session->userdata('user_id')){ ?>
                  <td>
                    <a href="<?php echo base_url() . $module . '/comment_delete/' . $comment->comment_id; ?>" class="btn-floating waves-effect waves-light cyan"><i class="fa fa-trash"></i></a>
                  </td>
                <?php } ?>
              </tr>
            <?php } ?>
          <?php } ?>
      	</tbody>
      </table>
    </div>
    <!-- list comments - end -->

    <br><br>

    <!-- input comment - start -->
    <div class="input-field col s12">
      <!--  TODO: fix method name -->
      <form class="" action="<?php echo base_url() . $module . '/comment';?>" method="post">
        <input hidden="hidden" name="idea_id" value="<?php echo $item->idea_id; ?>">
        <textarea name="comment_description" class="materialize-textarea" rows="8" cols="40"></textarea>
        <label><?php echo $this->lang->line('comment');?></label>
        <button class="btn cyan waves-effect waves-light" type="submit"><?php echo $this->lang->line('send');?><i class="fa fa-check right"></i></button>
      </form>
    </div>
    <!-- input comment - end -->

  </div>
  <!-- card comment - end -->
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
