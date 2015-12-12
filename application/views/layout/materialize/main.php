<!-- start main -->
<div id="main">
  <!-- START WRAPPER -->
  <div class="wrapper">

    <!-- START LEFT SIDEBAR NAV-->
    <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                      <!-- TODO, alterar imagem do avatar -->
                        <img src="<?php echo base_url(); ?>assets/plugins/materialize/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Config</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Ajuda</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>sessions/lock"><i class="mdi-action-lock-outline"></i> Lock</a>
                            </li>
                            <li><a href="<?php echo base_url();?>sessions/logout"><i class="mdi-hardware-keyboard-tab"></i> Sair</a>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <!-- TODO, pegar o perfil do usuário -->
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
            <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
            </li>
            <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> CSS</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="css-typography.html">Typography</a>
                                </li>
                                <li><a href="css-icons.html">Icons</a>
                                </li>
                                <li><a href="css-shadow.html">Shadow</a>
                                </li>
                                <li><a href="css-media.html">Media</a>
                                </li>
                                <li><a href="css-sass.html">Sass</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li><a href="ui-badges.html">Badges</a>
                                </li>
                                <li><a href="ui-cards.html">Cards</a>
                                </li>
                                <li><a href="ui-collections.html">Collections</a>
                                </li>
                                <li><a href="ui-accordions.html">Accordian</a>
                                </li>
                                <li><a href="ui-navbar.html">Navbar</a>
                                </li>
                                <li><a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li><a href="ui-preloader.html">Preloader</a>
                                </li>
                                <li><a href="ui-modals.html">Modals</a>
                                </li>
                                <li><a href="ui-media.html">Media</a>
                                </li>
                                <li><a href="ui-toasts.html">Toasts</a>
                                </li>
                                <li><a href="ui-tooltip.html">Tooltip</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets <span class="new badge"></span></a>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="table-basic.html">Basic Tables</a>
                                </li>
                                <li><a href="table-data.html">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-layouts.html">Form Layouts</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="page-login.html">Login</a>
                                </li>
                                <li><a href="page-register.html">Register</a>
                                </li>
                                <li><a href="page-lock-screen.html">Lock Screen</a>
                                </li>
                                <li><a href="page-invoice.html">Invoice</a>
                                </li>
                                <li><a href="page-404.html">404</a>
                                </li>
                                <li><a href="page-500.html">500</a>
                                </li>
                                <li><a href="page-blank.html">Blank</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="charts-chartjs.html">Chart JS</a>
                                </li>
                                <li><a href="charts-chartist.html">Chartist</a>
                                </li>
                                <li><a href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li><a href="charts-xcharts.html">xCharts</a>
                                </li>
                                <li><a href="charts-flotcharts.html">Flot Charts</a>
                                </li>
                                <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
            <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
            </li>
            <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
            </li>
            <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
            </li>
            <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
            </li>
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
            <li class="li-hover">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="sample-chart-wrapper">
                            <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
    </aside>
    <!-- END LEFT SIDEBAR NAV-->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START CONTENT -->
    <section id="content">
      <!-- TODO, Rafael Mateus -->
      <div class="container">
        <div class="section">
          <?php if(isset($view)){ $this->load->view($view); } ?>
        </div>
      </div>

    </section>
    <!-- END CONTENT -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START RIGHT SIDEBAR NAV-->
    <aside id="right-sidebar-nav">
      <ul id="chat-out" class="side-nav rightside-navigation">
          <li class="li-hover">
          <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
          <div id="right-search" class="row">
              <form class="col s12">
                  <div class="input-field">
                      <i class="mdi-action-search prefix"></i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Search</label>
                  </div>
              </form>
          </div>
          </li>
          <li class="li-hover">
              <ul class="chat-collapsible" data-collapsible="expandable">
              <li>
                  <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                  <div class="collapsible-body recent-activity">
                      <div class="recent-activity-list chat-out-list row">
                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                          </div>
                          <div class="col s9 recent-activity-list-text">
                              <a href="#">just now</a>
                              <p>Jim Doe Purchased new equipments for zonal office.</p>
                          </div>
                      </div>
                      <div class="recent-activity-list chat-out-list row">
                          <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                          </div>
                          <div class="col s9 recent-activity-list-text">
                              <a href="#">Yesterday</a>
                              <p>Your Next flight for USA will be on 15th August 2015.</p>
                          </div>
                      </div>
                      <div class="recent-activity-list chat-out-list row">
                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                          </div>
                          <div class="col s9 recent-activity-list-text">
                              <a href="#">5 Days Ago</a>
                              <p>Natalya Parker Send you a voice mail for next conference.</p>
                          </div>
                      </div>
                      <div class="recent-activity-list chat-out-list row">
                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                          </div>
                          <div class="col s9 recent-activity-list-text">
                              <a href="#">Last Week</a>
                              <p>Jessy Jay open a new store at S.G Road.</p>
                          </div>
                      </div>
                      <div class="recent-activity-list chat-out-list row">
                          <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                          </div>
                          <div class="col s9 recent-activity-list-text">
                              <a href="#">5 Days Ago</a>
                              <p>Natalya Parker Send you a voice mail for next conference.</p>
                          </div>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                  <div class="collapsible-body sales-repoart">
                      <div class="sales-repoart-list  chat-out-list row">
                          <div class="col s8">Target Salse</div>
                          <div class="col s4"><span id="sales-line-1"></span>
                          </div>
                      </div>
                      <div class="sales-repoart-list chat-out-list row">
                          <div class="col s8">Payment Due</div>
                          <div class="col s4"><span id="sales-bar-1"></span>
                          </div>
                      </div>
                      <div class="sales-repoart-list chat-out-list row">
                          <div class="col s8">Total Delivery</div>
                          <div class="col s4"><span id="sales-line-2"></span>
                          </div>
                      </div>
                      <div class="sales-repoart-list chat-out-list row">
                          <div class="col s8">Total Progress</div>
                          <div class="col s4"><span id="sales-bar-2"></span>
                          </div>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                  <div class="collapsible-body favorite-associates">
                      <div class="favorite-associate-list chat-out-list row">
                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                          </div>
                          <div class="col s8">
                              <p>Eileen Sideways</p>
                              <p class="place">Los Angeles, CA</p>
                          </div>
                      </div>
                      <div class="favorite-associate-list chat-out-list row">
                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                          </div>
                          <div class="col s8">
                              <p>Zaham Sindil</p>
                              <p class="place">San Francisco, CA</p>
                          </div>
                      </div>
                      <div class="favorite-associate-list chat-out-list row">
                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                          </div>
                          <div class="col s8">
                              <p>Renov Leongal</p>
                              <p class="place">Cebu City, Philippines</p>
                          </div>
                      </div>
                      <div class="favorite-associate-list chat-out-list row">
                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                          </div>
                          <div class="col s8">
                              <p>Weno Carasbong</p>
                              <p>Tokyo, Japan</p>
                          </div>
                      </div>
                      <div class="favorite-associate-list chat-out-list row">
                          <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                          </div>
                          <div class="col s8">
                              <p>Nusja Nawancali</p>
                              <p class="place">Bangkok, Thailand</p>
                          </div>
                      </div>
                  </div>
              </li>
              </ul>
          </li>
      </ul>
    </aside>
    <!-- LEFT RIGHT SIDEBAR NAV-->

  </div>
  <!-- END WRAPPER -->

</div>
<!-- END MAIN -->
