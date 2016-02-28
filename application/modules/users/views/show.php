<div id="profile-page" class="section">
  <!-- profile-page-header -->
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
        <!-- <div class="col s2 center-align">
          <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
          <p class="medium-small grey-text">Busness Profit</p>
        </div>
        <div class="col s1 right-align">
          <a class="btn-floating activator waves-effect waves-light darken-2 right">
            <i class="mdi-action-perm-identity"></i>
          </a>
        </div> -->
      </div>
    </div>
    <!-- <div class="card-reveal">
      <p>
        <span class="card-title grey-text text-darken-4"><?php echo $item->user_name; ?><i class="mdi-navigation-close right"></i></span>
        <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> <?php echo $this->lang->line($list_jobs[$item->job_id-1]->job_name); ?></span>
      </p>
      <p><i class="mdi-communication-email cyan-text text-darken-2"></i> <?php echo $item->user_email; ?></p>
      <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
      <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
    </div> -->
  </div>
  <!--/ profile-page-header -->

  <!-- profile-page-content -->
  <div id="profile-page-content" class="row">
    <!-- profile-page-sidebar-->
    <div id="profile-page-sidebar" class="col s12 m4">
      <!-- Profile About  -->
      <div class="card light-blue">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $this->lang->line('about_me'); ?></span>
          <p><?php if(isset($item->user_resume)){echo $item->user_resume;}else{echo $this->lang->line('no_resume');} ?></p>
        </div>
      </div>
      <!-- Profile About  -->

      <!-- Profile About Details  -->
      <!-- <ul id="profile-page-about-details" class="collection z-depth-1">
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Project</div>
            <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
            <div class="col s7 grey-text text-darken-4 right-align">HTML, CSS</div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
            <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
          </div>
        </li>
        <li class="collection-item">
          <div class="row">
            <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
            <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
          </div>
        </li>
      </ul> -->
      <!--/ Profile About Details  -->

      <!-- Profile Total sell -->
      <div class="card center-align">
        <div class="card-content purple white-text">
            <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Your Profit</p>
            <h4 class="card-stats-number">$8990.63</h4>
            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
            </p>
        </div>
        <div class="card-action purple darken-2">
            <div id="sales-compositebar"></div>
        </div>
      </div>

    </div>
    <!-- profile-page-sidebar-->

    <!-- profile-page-wall -->
    <div id="profile-page-wall" class="col s12 m8">

      <!-- profile-page-wall-posts -->
      <div id="profile-page-wall-posts"class="row">
        <div class="col s12">
            <!-- medium -->
            <div id="profile-page-wall-post" class="card">
              <div class="card-profile-title">
                <div class="row">
                  <div class="col s1">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-post-uer-image">
                  </div>
                  <div class="col s10">
                    <p class="grey-text text-darken-4 margin">John Doe</p>
                    <span class="grey-text text-darken-1 ultra-small">Shared publicly  -  26 Jun 2015</span>
                  </div>
                  <div class="col s1 right-align">
                    <i class="mdi-navigation-expand-more"></i>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                  </div>
                </div>
              </div>
              <div class="card-image profile-medium">
                <img src="images/gallary/2.jpg" alt="sample" class="responsive-img profile-post-image profile-medium">
                <span class="card-title">Card Title</span>
              </div>
              <!-- <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action row">
                <div class="col s4 card-action-share">
                  <a href="#">Like</a>
                  <a href="#">Share</a>
                </div>

                <div class="input-field col s8 margin">
                  <input id="profile-comments" type="text" class="validate margin">
                  <label for="profile-comments" class="">Comments</label>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!--/ profile-page-wall-posts -->

    </div>
    <!--/ profile-page-wall -->

  </div>
</div>
