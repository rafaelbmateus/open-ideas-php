<?php $this->load->view($this->config->item('app_layout').'floating_button');?>

<!-- header nav - start -->
<header id="header" class="page-topbar">
  <div class="navbar-fixed">
    <nav class="cyan">
      <div class="nav-wrapper">
        <!-- <h1 class="logo-wrapper"><a href="<?php echo base_url(); ?>" class="brand-logo darken-1"><img width="1" height="1" src="<?php echo base_url(); ?>assets/images/app/icons/o/o-xxxhdpi.png" alt="materialize logo">pen <img width="12" height="33" src="<?php echo base_url(); ?>assets/images/app/icons/i/i-xxxhdpi.png" alt="materialize logo">dea</a></h1> -->
        <h1 class="logo-wrapper"><a href="<?php echo base_url(); ?>" class="brand-logo darken-1">Open Idea</a></h1>
        <div class="header-search-wrapper hide-on-med-and-down">
            <i class="mdi-action-search"></i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="<?php echo $this->lang->line('search_bar'); ?>"/>
        </div>
        <ul class="right hide-on-med-and-down">
          <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="<?php echo base_url(); ?>assets/images/app/flags/Brazil.png" alt="USA" /></a></li>
          <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i></a></li>
          <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a></li>
          <!-- Dropdown Trigger -->
          <!--<li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a></li>-->
        </ul>

        <!-- translation-dropdown - start -->
        <ul id="translation-dropdown" class="dropdown-content">
          <li><a href="#!"><img src="<?php echo base_url(); ?>assets/images/app/flags/Brazil.png" alt="Português"/><span class="language-select"> Português</span></a></li>
          <li><a href="#!"><img src="<?php echo base_url(); ?>assets/images/app/flags/United-States.png" alt="English"/><span class="language-select"> English</span></a></li>
        </ul>
        <!-- translation-dropdown - end -->

        <!-- notifications-dropdown - start -->
        <ul id="notifications-dropdown" class="dropdown-content">
          <li>
            <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
          </li>
          <li>
            <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
          </li>
          <li>
            <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
          </li>
          <li>
            <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
          </li>
          <li>
            <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
          </li>
        </ul>
        <!-- notifications-dropdown - end -->

      </div>
    </nav>
  </div>
</header>
<!-- header nav - end-->

<!-- start main -->
<div id="main">
  <!-- START WRAPPER -->
  <div class="wrapper">

    <!-- START LEFT SIDEBAR NAV-->
    <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col s4 m4 l4">
                        <img src="<?php echo "http://www.gravatar.com/avatar/" . md5(strtolower(trim($this->session->userdata('user_email')))); ?>" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i><?php echo $this->lang->line('profile'); ?></a></li>
                            <!-- <li><a href="#"><i class="mdi-action-settings"></i><?php echo $this->lang->line('config'); ?></a></li> -->
                            <li><a href="#"><i class="mdi-communication-live-help"></i><?php echo $this->lang->line('help'); ?></a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>sessions/lock"><i class="mdi-action-lock-outline"></i><?php echo $this->lang->line('lock');?></a></li>
                            <li><a href="<?php echo base_url();?>sessions/logout"><i class="mdi-hardware-keyboard-tab"></i><?php echo $this->lang->line('logout');?></a></li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $this->session->userdata('user_name'); ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal"><?php echo $this->lang->line($this->session->userdata('user_job')); ?></p>
                    </div>
                </div>
            </li>
            <li class="bold <?php if(isset($menu_challenges)) echo 'active'; ?>"><a href="<?php echo base_url(); ?>" class="waves-effect waves-cyan"><i class="fa fa-bullseye"></i><?php echo $this->lang->line('challenges');?></a></li>
            <li class="bold <?php if(isset($menu_ideas)) echo 'active'; ?>"><a href="<?php echo base_url() . 'ideas'; ?>" class="waves-effect waves-cyan"><i class="fa fa-lightbulb-o"></i><?php echo $this->lang->line('ideas');?></a></li>
            <li class="bold <?php if(isset($menu_my_ideas)) echo 'active'; ?>"><a href="<?php echo base_url() . 'ideas/my_ideas'; ?>" class="waves-effect waves-cyan"><i class="fa fa-diamond"></i><?php echo $this->lang->line('my_ideas');?></a></li>
            <li class="bold <?php if(isset($menu_incubators)) echo 'active'; ?>"><a href="<?php echo base_url() . 'incubators'; ?>" class="waves-effect waves-cyan"><i class="fa fa-building"></i><?php echo $this->lang->line('incubators');?></a></li>
            <?php if($this->session->userdata('user_type')=='admin'){ ?>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                      <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="fa fa-cog"></i><?php echo $this->lang->line('configuration');?></a>
                          <div class="collapsible-body">
                              <ul>
                                  <li><a href="<?php echo base_url() . 'users'; ?>"><?php echo $this->lang->line('users'); ?></a></li>
                                  <li><a href="<?php echo base_url() . 'user_types'; ?>"><?php echo $this->lang->line('user_types'); ?></a></li>
                                  <li><a href="<?php echo base_url() . 'jobs'; ?>"><?php echo $this->lang->line('jobs'); ?></a></li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </li>
            <?php } ?>
            <!--
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="sample-chart-wrapper">
                            <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                        </div>
                    </div>
                </div>
            </li>
          -->
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
    </aside>
    <!-- END LEFT SIDEBAR NAV-->

    <!-- START CONTENT -->
    <section id="content">
      <div class="container">
        <div class="section">
          <?php if(isset($view)){ $this->load->view($view); } ?>
        </div>
      </div>
    </section>
    <!-- END CONTENT -->

  </div>
  <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- START FOOTER -->
<footer class="page-footer">
  <div class="footer-copyright">
    <div class="container">
      <span><?php echo $this->config->item('app_footer'); ?></span>
      <span class="right"><?php echo $this->config->item('app_footer_right'); ?></span>
      </div>
  </div>
</footer>
<!-- END FOOTER -->
