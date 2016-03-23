<?php if($item){ ?>
  <div id="profile-page" class="section">

    <!-- profile header - start -->
    <div id="profile-page-header" class="card">
      <div class="card-image waves-effect">
        <img src="<?php echo base_url(); ?>assets/plugins/materialize/images/user-profile-bg.jpg" alt="user background">
      </div>
      <figure class="card-profile-image">
        <img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($item->user_email))); ?>" alt="profile image" class="circle z-depth-2 responsive-img activator">
      </figure>
      <div class="card-content">
        <div class="row">
          <div class="col s3 offset-s2">
            <h4 class="card-title grey-text text-darken-4"><?php echo $item->user_name; ?></h4>
            <p class="medium-small grey-text"><?php echo $this->lang->line($list_jobs[$item->job_id-1]->job_name); ?></p>
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
    <!-- profile header - end -->

    <!-- profile content - start -->
    <div id="profile-page-content" class="row">

      <!-- profile sidebar - start -->
      <div id="profile-page-sidebar" class="col s12 m4">

        <!-- profile about - start -->
        <div class="card light-blue">
          <div class="card-content white-text">
            <span class="card-title"><?php echo $this->lang->line('about_me'); ?></span>
            <p><?php if(isset($item->user_resume)){echo $item->user_resume;}else{echo $this->lang->line('no_resume');} ?></p>
          </div>
        </div>
        <!-- profile about - end -->

        <!-- total points - start TODO: -->
        <!-- <div class="card center-align">
          <div class="card-content purple white-text">
              <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Your Profit</p>
              <h4 class="card-stats-number">$8990.63</h4>
              <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
              </p>
          </div>
          <div class="card-action purple darken-2">
              <div id="sales-compositebar"></div>
          </div>
        </div> -->
        <!-- total points - end -->

      </div>
      <!-- profile sidebar - end -->

      <!-- list challenges - start -->
      <?php if (!empty($list_challenges)) { ?>
        <!-- <h4 class="header center"><?php echo $this->lang->line('challenges'); ?></h4> -->
      	<?php foreach($list_challenges as $challenge) { ?>
          <div id="profile-page-wall" class="col s12 m8 right">
            <div id="profile-page-wall-posts"class="row">
              <div class="col s12">
                  <div id="profile-page-wall-post" class="card">
                    <div class="card-profile-title">
                      <div class="row">
                        <div class="col s1">
                          <img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($item->user_email))); ?>" alt="profile image" class="circle z-depth-1 responsive-img activator">
                        </div>
                        <div class="col s10">
                          <p class="grey-text text-darken-4 margin"><?php echo $item->user_name; ?></p>
                          <span class="grey-text text-darken-1 ultra-small"><?php echo $this->lang->line('published_in'); ?> -  <?php echo date('d/m/Y H:i:s', strtotime($challenge->created_at)); ?></span>
                        </div>
                        <div class="col s1 right-align">
                          <i class="mdi-navigation-expand-more"></i>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <p><b><?php echo $challenge->challenge_title; ?></b></p>
                          <p><?php echo $challenge->challenge_description; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php } ?>
      <?php } ?>
      <!-- list challenges - end -->

      <!-- <div class="divider"></div> -->

      <!-- list ideas - start -->
      <?php if (!empty($list_ideas)) { ?>
        <br>
        <!-- <h4 class="header"><?php echo $this->lang->line('ideas'); ?></h4> -->
        <!-- <div class="divider"></div> -->
      	<?php foreach($list_ideas as $idea) { ?>
          <div id="profile-page-wall" class="col m8 right">
            <div id="profile-page-wall-posts"class="row">
              <div class="col s12">
                  <div id="profile-page-wall-post" class="card">
                    <div class="card-profile-title">
                      <div class="row">
                        <div class="col s1">
                          <img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($item->user_email))); ?>" alt="profile image" class="circle z-depth-1 responsive-img activator">
                        </div>
                        <div class="col s10">
                          <p class="grey-text text-darken-4 margin"><?php echo $item->user_name; ?></p>
                          <span class="grey-text text-darken-1 ultra-small"><?php echo $this->lang->line('published_in'); ?> -  <?php echo date('d/m/Y H:i:s', strtotime($idea->created_at)); ?></span>
                        </div>
                        <div class="col s1 right-align">
                          <i class="mdi-navigation-expand-more"></i>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <p><b><?php echo $idea->idea_title; ?></b></p>
                          <p><?php echo $idea->idea_description; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php } ?>
      <?php } ?>
      <!-- list ideas - end -->

    </div>
    <!-- profile content - end -->

  </div>
<?php } ?>

<br><br><br>
