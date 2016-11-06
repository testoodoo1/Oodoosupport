
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umega App - Responsive web app kit</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Malihu Scrollbar-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
    <!-- Animo.js-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/animo.js/animate-animo.min.css">
    <!-- Bootstrap Progressbar-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <!-- Summernote-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/summernote/dist/summernote.css">
    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/toastr/toastr.min.css">
    <!-- SpinKit-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/SpinKit/css/spinners/7-three-bounce.css">
    <!-- Jvector Map-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- Morris Chart-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/morris.js/morris.css">
    <!-- DataTables-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/datatables.net-buttons-bs/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/datatables.net-colreorder-bs/css/colReorder.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
    <!-- Weather Icons-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/weather-icons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/weather-icons/css/weather-icons.min.css">
    <!-- FullCalendar-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/fullcalendar/dist/fullcalendar.print.css" media="print">
    <!-- jQuery MiniColors-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/jquery-minicolors/jquery.minicolors.css">
    <!-- Bootstrap Date Range Picker-->
    <link rel="stylesheet" type="text/css" href="http://umega.lethemes.net/1.2/plugins/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="build/css/umega.css">
    <!-- Skins-->
    <link rel="stylesheet" type="text/css" href="build/css/skins.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Main Sidebar start-->
    <aside class="main-sidebar pinned">
      <div class="brand"><a href="index.html" class="logo"><i class="ti-underline"></i>
          <h2>MEGA<span>app</span></h2></a><a href="javascript:;" role="button" class="sidebar-toggle visible-xs-block"><i class="ti-close text-white"></i></a></div>
      <div class="profile">
        <div id="esp-profile" data-percent="65" style="height: 130px; width: 130px; line-height: 100px; padding: 15px;" class="easy-pie-chart"><img src="build/images/users/04.jpg" alt="" class="avatar img-circle"><span class="status bg-success"></span></div>
        <h5 class="text-white mt-15 mb-5">Matthew Gonzalez</h5>
        <div class="text-muted">Designer</div>
      </div>
      <!-- Nav tabs-->
      <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
        <li role="presentation" class="active"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab"><i class="ti-menu"></i></a></li>
        <li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab"><i class="ti-user"></i></a></li>
        <li role="presentation" class="bubble"><a href="#email" aria-controls="email" role="tab" data-toggle="tab"><i class="ti-email"><span class="dot bg-danger"></span></i></a></li>
        <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ti-server"></i></a></li>
      </ul>
      <!-- Tab panes-->
      <div class="tab-content nav-sidebar-content">
        <div id="menu" role="tabpanel" class="tab-pane fade in active">
          <ul class="list-unstyled navigation mb-0">
            <li class="header">Main</li>
            <li><a href="index.html" class="active bubble"><i class="ti-home"></i> Dashboard<span class="badge bg-danger">3</span></a></li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse0" aria-expanded="false" aria-controls="collapse0" class="collapsed"><i class="ti-shopping-cart"></i> E-commerce <span class="label label-success">New</span></a>
              <ul id="collapse0" class="list-unstyled collapse">
                <li><a href="product-list.html">Product list</a></li>
                <li><a href="edit-product.html">Edit product</a></li>
                <li><a href="order-list.html">Order list</a></li>
                <li><a href="edit-order.html">Edit order</a></li>
                <li><a href="customer-list.html">Customer list</a></li>
                <li><a href="edit-customer.html">Edit customer</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed"><i class="ti-paint-bucket"></i> Color system</a>
              <ul id="collapse1" class="list-unstyled collapse">
                <li><a href="green-system.html">Green</a></li>
                <li><a href="blue-system.html">Blue</a></li>
                <li><a href="red-system.html">Red</a></li>
                <li><a href="yellow-system.html">Yellow</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed"><i class="ti-palette"></i> Skins</a>
              <ul id="collapse2" class="list-unstyled collapse">
                <li><a href="green-dashboard.html">Green</a></li>
                <li><a href="blue-dashboard.html">Blue</a></li>
                <li><a href="red-dashboard.html">Red</a></li>
                <li><a href="yellow-dashboard.html">Yellow</a></li>
              </ul>
            </li>
            <li class="header">Components</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed"><i class="ti-receipt"></i> Basic</a>
              <ul id="collapse3" class="list-unstyled collapse">
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="carousels.html">Carousels</a></li>
                <li><a href="containers.html">Containers</a></li>
                <li><a href="dialogs.html">Dialogs</a></li>
                <li><a href="basic-inputs.html">Inputs</a></li>
                <li><a href="navigations.html">Navigations</a></li>
                <li><a href="progress-bars.html">Progress bars</a></li>
                <li><a href="typography.html">Typography</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed"><i class="ti-ruler-pencil"></i> Editors</a>
              <ul id="collapse4" class="list-unstyled collapse">
                <li><a href="summernote.html">Summernote</a></li>
                <li><a href="bootstrap-markdown.html">Bootstrap markdown</a></li>
                <li><a href="code-prettify.html">Code prettify</a></li>
                <li><a href="ckeditor.html">CKEditor</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"><i class="ti-location-arrow"></i> Pickers</a>
              <ul id="collapse5" class="list-unstyled collapse">
                <li><a href="color-picker.html">Color picker</a></li>
                <li><a href="datetime-picker.html">Datetime picker</a></li>
                <li><a href="clock-picker.html">Clock picker</a></li>
                <li><a href="date-range-picker.html">Date range picker</a></li>
                <li><a href="multi-select.html">Multi select</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed"><i class="ti-layers-alt"></i> Forms</a>
              <ul id="collapse6" class="list-unstyled collapse">
                <li><a href="form-layouts.html">Layouts</a></li>
                <li><a href="jquery-validation.html">Validation</a></li>
                <li><a href="jquery-steps.html">Wizard</a></li>
                <li><a href="other-http://umega.lethemes.net/1.2/plugins.html">Other http://umega.lethemes.net/1.2/plugins</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed"><i class="ti-face-smile"></i> Icons</a>
              <ul id="collapse7" class="list-unstyled collapse">
                <li><a href="glyphicons.html">Glyphicons</a></li>
                <li><a href="font-awesome.html">Font awesome</a></li>
                <li><a href="material-design.html">Material design</a></li>
                <li><a href="themify.html">Themify</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed"><i class="ti-layout-grid2"></i> Tables</a>
              <ul id="collapse8" class="list-unstyled collapse">
                <li><a href="basic-tables.html">Basic tables</a></li>
                <li><a href="data-tables.html">Data tables</a></li>
                <li><a href="pricing-tables.html">Pricing tables</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed"><i class="ti-control-forward"></i> Animations</a>
              <ul id="collapse9" class="list-unstyled collapse">
                <li><a href="basic-animations.html">Basic</a></li>
                <li><a href="loading-animations.html">Loading</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed"><i class="ti-upload"></i> File uploads</a>
              <ul id="collapse10" class="list-unstyled collapse">
                <li><a href="dropzone-js.html">Dropzone</a></li>
                <li><a href="bootstrap-file-input.html">Bootstrap file input</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse11" aria-expanded="false" aria-controls="collapse11" class="collapsed"><i class="ti-info-alt"></i> Indicators</a>
              <ul id="collapse11" class="list-unstyled collapse">
                <li><a href="toastr.html">Toastr</a></li>
                <li><a href="sweet-alert.html">Sweet alert</a></li>
              </ul>
            </li>
            <li class="header">Data visualization</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse12" aria-expanded="false" aria-controls="collapse12" class="collapsed"><i class="ti-bar-chart"></i> Charts</a>
              <ul id="collapse12" class="list-unstyled collapse">
                <li><a href="flot-charts.html">Flot charts</a></li>
                <li><a href="morris-charts.html">Morris charts</a></li>
                <li><a href="chart-js.html">Chart.js</a></li>
                <li><a href="other-charts.html">Other charts</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="collapsed"><i class="ti-location-pin"></i> Maps</a>
              <ul id="collapse13" class="list-unstyled collapse">
                <li><a href="vector-maps.html">Vector maps</a></li>
                <li><a href="google-maps.html">Google maps</a></li>
              </ul>
            </li>
            <li class="header">Page kits</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse14" aria-expanded="false" aria-controls="collapse14" class="collapsed"><i class="ti-alert"></i> Error pages</a>
              <ul id="collapse14" class="list-unstyled collapse">
                <li><a href="400.html">400 Bad request</a></li>
                <li><a href="401.html">401 Unauthorized</a></li>
                <li><a href="403.html">403 Forbidden</a></li>
                <li><a href="404.html">404 Not found</a></li>
                <li><a href="500.html">500 Internal server error</a></li>
                <li><a href="503.html">503 Service unavailable</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse15" aria-expanded="false" aria-controls="collapse15" class="collapsed"><i class="ti-user"></i> User pages</a>
              <ul id="collapse15" class="list-unstyled collapse">
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Registration</a></li>
                <li><a href="forgot.html">Forgot password</a></li>
                <li><a href="lock-screen.html">Lock screen</a></li>
                <li><a href="profile.html">Profile</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse16" aria-expanded="false" aria-controls="collapse16" class="collapsed"><i class="ti-panel"></i> Apps</a>
              <ul id="collapse16" class="list-unstyled collapse">
                <li><a href="mailbox.html">Mailbox</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="image-cropper.html">Image cropper</a></li>
              </ul>
            </li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse17" aria-expanded="false" aria-controls="collapse17" class="collapsed"><i class="ti-blackboard"></i> Extra pages</a>
              <ul id="collapse17" class="list-unstyled collapse">
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="search-results.html">Search results</a></li>
                <li><a href="blank-template.html">Blank template</a></li>
              </ul>
            </li>
            <li class="header">Help</li>
            <li><a href="documentation.html"><i class="ti-help-alt"></i> Documentation</a></li>
            <li class="header">Menu Levels</li>
            <li class="panel"><a role="button" data-toggle="collapse" data-parent=".navigation" href="#collapse18" aria-expanded="false" aria-controls="collapse18" class="collapsed"><i class="ti-folder"></i> Menu levels</a>
              <ul id="collapse18" class="list-unstyled collapse">
                <li><a href="#">Menu level 2.1</a></li>
                <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse18" href="#collapse21" aria-expanded="false" aria-controls="collapse21" class="collapsed">Menu level 2.2</a>
                  <ul id="collapse21" class="list-unstyled collapse">
                    <li><a href="#">Menu level 3.1</a></li>
                    <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse21" href="#collapse31" aria-expanded="false" aria-controls="collapse31" class="collapsed">Menu level 3.2</a>
                      <ul id="collapse31" class="list-unstyled collapse">
                        <li><a href="#">Menu level 4.1</a></li>
                        <li class="panel"><a role="button" data-toggle="collapse" data-parent="#collapse31" href="#collapse41" aria-expanded="false" aria-controls="collapse41" class="collapsed">Menu level 4.2</a>
                          <ul id="collapse41" class="list-unstyled collapse">
                            <li><a href="#">Menu level 5.1</a></li>
                            <li><a href="#">Menu level 5.2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <div class="header">Server Status</div>
          <ul class="list-unstyled pl-15 pr-15">
            <li class="mb-20">
              <div class="block clearfix mb-10"><span class="pull-left fs-12 text-muted">CPU Used</span><span class="pull-right label label-outline label-warning">65%</span></div>
              <div class="progress progress-xs mb-0">
                <div role="progressbar" data-transitiongoal="65" class="progress-bar progress-bar-warning"></div>
              </div>
            </li>
            <li class="mb-20">
              <div class="block clearfix mb-10"><span class="pull-left fs-12 text-muted">Bandwidth</span><span class="pull-right label label-outline label-danger">80%</span></div>
              <div class="progress progress-xs mb-0">
                <div role="progressbar" data-transitiongoal="80" class="progress-bar progress-bar-danger"></div>
              </div>
            </li>
          </ul>
        </div>
        <div id="portfolio" role="tabpanel" class="tab-pane fade">
          <div class="header">Rating</div>
          <div class="rating clearfix">
            <div class="pull-left score bg-black fs-24 fw-600 text-center">4.5</div>
            <div class="pull-left">
              <div class="progress">
                <div role="progressbar" data-transitiongoal="100" class="progress-bar five-star"></div>
              </div>
              <div class="progress">
                <div role="progressbar" data-transitiongoal="80" class="progress-bar four-star"></div>
              </div>
              <div class="progress">
                <div role="progressbar" data-transitiongoal="10" class="progress-bar three-star"></div>
              </div>
              <div class="progress">
                <div role="progressbar" data-transitiongoal="25" class="progress-bar two-star"></div>
              </div>
              <div class="progress">
                <div role="progressbar" data-transitiongoal="5" class="progress-bar one-star"></div>
              </div>
            </div>
          </div>
          <p class="text-center fs-12 mt-5 mb-0">average based on 1,056 ratings</p>
          <div class="header">Followers</div>
          <div class="followers"><img src="build/images/users/02.jpg" alt="" class="img-circle"><img src="build/images/users/03.jpg" alt="" class="img-circle"><img src="build/images/users/10.jpg" alt="" class="img-circle"><a href="#" class="more img-circle text-center fs-24 fw-600 text-info">+</a></div>
          <p class="text-center fs-12 mt-5 mb-0">2,590 followers and 8,320 sales</p>
          <div class="header">Visitors</div>
          <div id="sp-visitors"></div>
          <p class="text-center fs-12 mt-5 mb-0">3,320 visitors in last 10 days</p>
          <div class="header">Revenue</div>
          <div id="sp-revenue"></div>
          <p class="text-center fs-12 mt-5 mb-0">8.59k revenue estimate in last 10 days</p>
          <div class="header">Your New Blog Posts</div>
          <ul class="posts media-list">
            <li class="media">
              <div class="media-left"><a href="#" class="inline-block"><img src="build/images/posts/01.jpg" alt="" class="media-object mo-lg"></a></div>
              <div class="media-body media-middle"><a href="#">
                  <h6 class="media-heading text-muted">The first chapter</h6></a>
                <time datetime="2015-09-14T14:28:26+07:00" class="fs-11">September 14, 2015</time>
              </div>
            </li>
            <li class="media">
              <div class="media-left"><a href="#" class="inline-block"><img src="build/images/posts/02.jpg" alt="" class="media-object mo-lg"></a></div>
              <div class="media-body media-middle"><a href="#">
                  <h6 class="media-heading text-muted">A simple image post</h6></a>
                <time datetime="2015-10-10T20:27:48+07:00" class="fs-11">October 10, 2015</time>
              </div>
            </li>
            <li class="media">
              <div class="media-left"><a href="#" class="inline-block"><img src="build/images/posts/03.jpg" alt="" class="media-object mo-lg"></a></div>
              <div class="media-body media-middle"><a href="#">
                  <h6 class="media-heading text-muted">The sweet life</h6></a>
                <time datetime="2015-11-10T20:27:48+07:00" class="fs-11">November 10, 2015</time>
              </div>
            </li>
            <li class="media">
              <div class="media-left"><a href="#" class="inline-block"><img src="build/images/posts/04.jpg" alt="" class="media-object mo-lg"></a></div>
              <div class="media-body media-middle"><a href="#">
                  <h6 class="media-heading text-muted">Enjoy the moment</h6></a>
                <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">December 10, 2015</time>
              </div>
            </li>
          </ul>
        </div>
        <div id="email" role="tabpanel" class="tab-pane fade">
          <button type="button" data-toggle="modal" data-target=".compose-mail-modal" class="btn btn-raised btn-block btn-danger mt-10"><i class="ti-pencil-alt"></i> Compose Mail</button>
          <ul class="list-unstyled navigation mb-0">
            <li class="header">Email</li>
            <li><a href="mailbox.html" class="bubble"><i class="ti-archive"></i> Inbox<span class="badge bg-danger">5</span></a></li>
            <li><a href="mailbox.html"><i class="ti-location-arrow"></i> Sent</a></li>
            <li><a href="mailbox.html"><i class="ti-notepad"></i> Draft</a></li>
            <li><a href="mailbox.html"><i class="ti-trash"></i> Trash</a></li>
            <li><a href="mailbox.html"><i class="ti-flag-alt"></i> Important</a></li>
            <li><a href="mailbox.html"><i class="ti-star"></i> Starred</a></li>
            <li class="header">Folders</li>
            <li><a href="#"><i class="ti-folder"></i> Newsletter</a></li>
            <li><a href="#"><i class="ti-folder"></i> Friend</a></li>
            <li><a href="#"><i class="ti-folder"></i> Company</a></li>
            <li><a href="#"><i class="ti-folder"></i> Downloaded</a></li>
          </ul>
        </div>
        <div id="setting" role="tabpanel" class="tab-pane fade">
          <div class="header">General Settings</div>
          <form class="form-horizontal">
            <div class="clearfix">
              <h6 class="pull-left fs-13">Maintenance Mode</h6>
              <div class="switch pull-right">
                <input id="setting-1" type="checkbox" checked="">
                <label for="setting-1" class="switch-success"></label>
              </div>
            </div>
            <p class="fs-12">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <div class="clearfix">
              <h6 class="pull-left fs-13">Location Services</h6>
              <div class="switch pull-right">
                <input id="setting-2" type="checkbox" checked="">
                <label for="setting-2" class="switch-success"></label>
              </div>
            </div>
            <p class="fs-12">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <div class="clearfix">
              <h6 class="pull-left fs-13">Display Errors</h6>
              <div class="switch pull-right">
                <input id="setting-3" type="checkbox" checked="">
                <label for="setting-3" class="switch-success"></label>
              </div>
            </div>
            <p class="fs-12">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <div class="clearfix">
              <h6 class="pull-left fs-13">Use SEO URLs</h6>
              <div class="switch pull-right">
                <input id="setting-4" type="checkbox" checked="">
                <label for="setting-4" class="switch-success"></label>
              </div>
            </div>
            <p class="fs-12">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <div class="clearfix">
              <h6 class="pull-left fs-13">Enable History</h6>
              <div class="switch pull-right">
                <input id="setting-5" type="checkbox" checked="">
                <label for="setting-5" class="switch-success"></label>
              </div>
            </div>
            <p class="fs-12">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
          </form>
        </div>
      </div>
    </aside>
    <!-- Main Sidebar end-->
    <!-- Header start-->
    <header>
      <div class="search-bar closed">
        <form>
          <div class="input-group input-group-lg">
            <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
          </div>
        </form>
      </div>
      <div class="brand pull-left"><a href="index.html" class="logo"><i class="ti-underline"></i>
          <h2>MEGA<span>app</span></h2></a></div><a href="javascript:;" role="button" class="sidebar-toggle pull-left header-icon"><i class="ti-menu text-muted"></i></a>
      <form class="mt-15 mb-15 pull-left hidden-xs">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputSearchFor" placeholder="Search for..." style="width: 200px" class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputSearchFor" class="sr-only">(default)</span>
        </div>
      </form>
      <ul class="newsticker list-unstyled ml-15 mb-0 pull-left visible-lg">
        <li class="fw-500">You <span class="text-danger">recommended</span> Karen Ortega.</li>
        <li class="fw-500">You <span class="text-info">followed</span> Olivia Williamson.</li>
        <li class="fw-500">New product <span class="text-success">Microsoft Lumia 950XL</span></li>
        <li class="fw-500">New order <span class="text-success">#021930217965</span></li>
      </ul>
      <ul class="notification-bar list-inline pull-right">
        <li class="visible-xs"><a href="javascript:;" role="button" class="header-icon search-bar-toggle"><i class="ti-search text-muted"></i></a></li>
        <li class="visible-lg"><a href="javascript:;" role="button" class="header-icon fullscreen-toggle"><i class="ti-fullscreen text-muted"></i></a></li>
        <li class="dropdown"><a id="dropdownMenu1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-save text-muted"></i><span class="badge bg-danger">3</span></a>
          <div aria-labelledby="dropdownMenu1" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
            <h5 class="dropdown-header">You have 3 file downloads</h5>
            <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
              <li class="media"><a href="javascript:;">
                  <div class="media-left"><i class="ti-music-alt media-object mo-sm img-circle bg-info text-center"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading">Music.mp3</h6>
                    <div class="progress progress-xs mb-5">
                      <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" class="progress-bar progress-bar-info"><span class="sr-only">60% Complete</span></div>
                    </div>
                    <p class="text-muted mb-0">1.3 of 4MB - 685KB/sec - 4 sec</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left"><i class="ti-video-clapper media-object mo-sm img-circle bg-danger text-center"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading">Video.mp4</h6>
                    <div class="progress progress-xs mb-5">
                      <div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar progress-bar-success"><span class="sr-only">100% Complete</span></div>
                    </div>
                    <p class="text-muted mb-0">Completed - 5 minutes ago</p>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left"><i class="ti-zip media-object mo-sm img-circle bg-warning text-center"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading">Copy.zip</h6>
                    <div class="progress progress-xs mb-5">
                      <div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;" class="progress-bar"><span class="sr-only">45% Complete</span></div>
                    </div>
                    <p class="text-muted mb-0">650 of 1451MB - 721KB/sec - 20 min</p>
                  </div></a></li>
            </ul>
            <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all file downloads</a></div>
          </div>
        </li>
        <li class="dropdown"><a id="dropdownMenu2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle bubble header-icon"><i class="ti-world text-muted"></i><span class="badge bg-danger">6</span></a>
          <div aria-labelledby="dropdownMenu2" class="dropdown-menu dropdown-menu-right dm-medium fs-12 animated fadeInDown">
            <h5 class="dropdown-header">You have 6 notifications</h5>
            <ul data-mcs-theme="minimal-dark" class="media-list mCustomScrollbar">
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/17.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">William Carlson</h6>
                    <p class="text-muted mb-0">Commented on your post</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">5 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Barbara Ortega</h6>
                    <p class="text-muted mb-0">Sent you a new email</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">8 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Mark Barnett</h6>
                    <p class="text-muted mb-0">Sent you a new message</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:50:48+07:00" class="fs-11">9 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Alexander Gilbert</h6>
                    <p class="text-muted mb-0">Sent you a new email</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:42:40+07:00" class="fs-11">15 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/12.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Amanda Collins</h6>
                    <p class="text-muted mb-0">You have 8 unread messages</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:35:35+07:00" class="fs-11">22 mins</time>
                  </div></a></li>
              <li class="media"><a href="javascript:;">
                  <div class="media-left avatar"><img src="build/images/users/13.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Christian Lane</h6>
                    <p class="text-muted mb-0">Commented on your post</p>
                  </div>
                  <div class="media-right text-nowrap">
                    <time datetime="2015-12-10T20:27:48+07:00" class="fs-11">30 mins</time>
                  </div></a></li>
            </ul>
            <div class="dropdown-footer text-center p-10"><a href="javascript:;" class="fw-500 text-muted">See all notifications</a></div>
          </div>
        </li>
        <li><a href="javascript:;" role="button" class="right-sidebar-toggle bubble header-icon"><i class="ti-comment-alt text-muted"></i><span class="dot bg-danger"></span></a></li>
        <li><a href="login.html" role="button" class="header-icon"><i class="ti-power-off text-muted"></i></a></li>
      </ul>
    </header>
    <!-- Header end-->
    <!-- Work Here start-->
    <section class="page-container">
      <div class="page-header clearfix">
        <div class="pull-left">
          <h4 class="mt-0 mb-5">Welcome to Umega</h4>
          <p class="text-muted mb-0">Responsive Web App Kit</p>
        </div>
        <div class="pull-right">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-outline"><img src="build/images/flags/us.jpg" alt="" class="flag-icon">English</button>
            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
            <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
              <li><a href="#"><img src="build/images/flags/de.jpg" class="flag-icon">German</a></li>
              <li><a href="#"><img src="build/images/flags/fr.jpg" class="flag-icon">French</a></li>
              <li><a href="#"><img src="build/images/flags/es.jpg" class="flag-icon">Spanish</a></li>
              <li><a href="#"><img src="build/images/flags/it.jpg" class="flag-icon">Italian</a></li>
              <li><a href="#"><img src="build/images/flags/jp.jpg" class="flag-icon">Japanese</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page-content container-fluid">
        <div class="row">
          <div class="col-lg-9">
            <div id="world-map" style="height: 495px" class="mb-30"></div>
          </div>
          <div class="col-lg-3">
            <div class="row">
              <div class="col-lg-12 col-md-4">
                <div class="mb-30">
                  <div class="media">
                    <div class="media-body">
                      <h5 class="media-heading">New Orders <span class="text-success"><i class="ti-arrow-up fs-13"></i> 5.28%</span></h5>
                      <div class="fs-36 fw-600 counter">650</div>
                    </div>
                    <div class="media-right"><i class="fs-30 ti-receipt"></i></div>
                  </div>
                  <div id="flot-order" style="height: 74px"></div>
                </div>
              </div>
              <div class="col-lg-12 col-md-4">
                <div class="mb-30">
                  <div class="media">
                    <div class="media-body">
                      <h5 class="media-heading">Total Revenue <span class="text-danger"><i class="ti-arrow-down fs-13"></i> 1.06%</span></h5>
                      <div class="fs-36 fw-600">$<span class="counter">20,320</span></div>
                    </div>
                    <div class="media-right"><i class="fs-30 ti-money"></i></div>
                  </div>
                  <div id="flot-revenue" style="height: 74px"></div>
                </div>
              </div>
              <div class="col-lg-12 col-md-4">
                <div class="mb-30">
                  <div class="media">
                    <div class="media-body">
                      <h5 class="media-heading">Task Completed <span class="text-danger"><i class="ti-arrow-down fs-13"></i> 3.76%</span></h5>
                      <div class="fs-36 fw-600 counter">278</div>
                    </div>
                    <div class="media-right"><i class="fs-30 ti-check-box"></i></div>
                  </div>
                  <ul class="list-unstyled">
                    <li>
                      <div class="block clearfix mb-5"><span class="pull-left fs-12">Today</span><span class="pull-right label label-outline label-primary">65%</span></div>
                      <div class="progress progress-xs">
                        <div role="progressbar" data-transitiongoal="65" class="progress-bar"></div>
                      </div>
                    </li>
                    <li>
                      <div class="block clearfix mb-5"><span class="pull-left fs-12">Yesterday</span><span class="pull-right label label-outline label-success">80%</span></div>
                      <div class="progress progress-xs">
                        <div role="progressbar" data-transitiongoal="80" class="progress-bar progress-bar-success"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="widget clear">
              <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Site Traffic</h3>
                <ul class="widget-tools pull-right list-inline">
                  <li><a href="javascript:;" class="widget-collapse"><i class="ti-angle-up"></i></a></li>
                  <li><a href="javascript:;" class="widget-reload"><i class="ti-reload"></i></a></li>
                  <li><a href="javascript:;" class="widget-remove"><i class="ti-close"></i></a></li>
                </ul>
              </div>
              <div class="widget-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="clearfix">
                      <div id="flot-visitor-legend" class="pull-left"></div>
                      <div class="pull-right">
                        <div class="btn-toolbar">
                          <button id="daterangepicker" type="button" class="btn btn-raised btn-black"><i class="ti-calendar"> </i><span></span></button>
                        </div>
                      </div>
                    </div>
                    <div id="flot-visitor" style="height: 300px"></div>
                    <div class="row row-0 mt-10 text-center">
                      <div class="col-xs-4">
                        <div class="fs-30 fw-600">45.87M</div>
                        <h5 class="m-0">Overall Visitors <span class="text-danger"><i class="ti-arrow-down fs-13"></i> 2.43%</span></h5>
                      </div>
                      <div class="col-xs-4">
                        <div class="fs-30 fw-600">15:32</div>
                        <h5 class="m-0">Avg. Visit Duration <span class="text-success"><i class="ti-arrow-up fs-13"></i> 12.54%</span></h5>
                      </div>
                      <div class="col-xs-4">
                        <div class="fs-30 fw-600">115.65</div>
                        <h5 class="m-0">Pages/Visit <span class="text-success"><i class="ti-arrow-up fs-13"></i> 5.62%</span></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div id="morris-browser" style="height: 224px"></div>
                    <div class="table-responsive">
                      <table class="table table-hover mb-0">
                        <thead>
                          <tr>
                            <th style="width:10%">#</th>
                            <th style="width:40%">Browser</th>
                            <th style="width:25%">Sessions</th>
                            <th style="width:25%">Up/Down</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Chrome</td>
                            <td>4325</td>
                            <td class="text-success">+3.26% </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Firefox</td>
                            <td>3257</td>
                            <td class="text-danger">-2.14% </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>IE</td>
                            <td>2314</td>
                            <td class="text-success">+2.92% </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="widget text-center">
              <div class="widget-body">
                <div class="clearfix">
                  <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                  <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                </div>
                <h5 class="mb-5">New Comments</h5>
                <div class="fs-36 fw-600 mb-20 counter">1,206</div>
                <div id="esp-comment" data-percent="75" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-comment-alt text-muted"></i></div>
                <div class="clearfix mt-20">
                  <div class="pull-left">
                    <div class="fs-12">Today</div>
                    <div class="text-success">+2.43%</div>
                  </div>
                  <div class="pull-right">
                    <div class="fs-12">Yesterday</div>
                    <div class="text-danger">-1.02%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widget text-center">
              <div class="widget-body">
                <div class="clearfix">
                  <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                  <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                </div>
                <h5 class="mb-5">New Photos</h5>
                <div class="fs-36 fw-600 mb-20 counter">350</div>
                <div id="esp-photo" data-percent="55" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-image text-muted"></i></div>
                <div class="clearfix mt-20">
                  <div class="pull-left">
                    <div class="fs-12">Today</div>
                    <div class="text-danger">-0.23%</div>
                  </div>
                  <div class="pull-right">
                    <div class="fs-12">Yesterday</div>
                    <div class="text-success">+1.02%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widget text-center">
              <div class="widget-body">
                <div class="clearfix">
                  <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                  <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                </div>
                <h5 class="mb-5">New Users</h5>
                <div class="fs-36 fw-600 mb-20 counter">890</div>
                <div id="esp-user" data-percent="30" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-user text-muted"></i></div>
                <div class="clearfix mt-20">
                  <div class="pull-left">
                    <div class="fs-12">Today</div>
                    <div class="text-success">+0.09%</div>
                  </div>
                  <div class="pull-right">
                    <div class="fs-12">Yesterday</div>
                    <div class="text-danger">-0.02%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widget text-center">
              <div class="widget-body">
                <div class="clearfix">
                  <div class="pull-left"><a href="javascript:;" class="widget-reload"><i class="ti-control-record text-muted"></i></a></div>
                  <div class="pull-right"><a href="javascript:;" class="widget-remove"><i class="ti-trash text-muted"></i></a></div>
                </div>
                <h5 class="mb-5">New Feedbacks</h5>
                <div class="fs-36 fw-600 mb-20 counter">1,609</div>
                <div id="esp-feedback" data-percent="20" style="height: 140px; width: 140px; line-height: 120px; padding: 10px;" class="easy-pie-chart fs-36"><i class="ti-receipt text-muted"></i></div>
                <div class="clearfix mt-20">
                  <div class="pull-left">
                    <div class="fs-12">Today</div>
                    <div class="text-success">+3.29%</div>
                  </div>
                  <div class="pull-right">
                    <div class="fs-12">Yesterday</div>
                    <div class="text-success">+2.32%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border">
              <div style="height: 200px" class="overlay bg-black"><img src="build/images/backgrounds/01.jpg" alt="" class="img-main img-responsive"><a href="javascript:void(0)" style="position: absolute; top: 50%; left: 50%; margin-top: -50px; margin-left: -50px; display: inline-block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="build/images/users/06.jpg" width="100" alt="" class="img-circle"></a></div>
              <div class="text-center p-20 bd-l bd-r">
                <h4 class="mt-0 mb-5 text-primary">Steven Cook</h4>
                <p>Cretive Director</p>
                <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
              <div class="row row-0 p-15 text-center bg-black">
                <div class="col-xs-4">
                  <div class="fs-20 fw-500">208</div>
                  <div class="text-muted">Following</div>
                </div>
                <div class="col-xs-4">
                  <div class="fs-20 fw-500">560</div>
                  <div class="text-muted">Likes</div>
                </div>
                <div class="col-xs-4">
                  <div class="fs-20 fw-500">95</div>
                  <div class="text-muted">Photos</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border">
              <table id="order-table" cellspacing="0" width="100%" class="table table-hover mb-0 dt-responsive nowrap">
                <thead>
                  <tr>
                    <th style="width:16%">Order ID</th>
                    <th style="width:37%">Customer</th>
                    <th style="width:20%">Date Added</th>
                    <th style="width:12%">Total</th>
                    <th style="width:15%">Completed</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#6546</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">Philip Fernandez</h5>
                          <p class="text-muted mb-0">489 Rhapsody Street</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$140.00</td>
                    <td class="text-center text-success"><i class="ti-check"></i></td>
                  </tr>
                  <tr>
                    <td>#6941</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">Mary Carr</h5>
                          <p class="text-muted mb-0">3611 West Fork Drive</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$120.00</td>
                    <td class="text-center text-danger"><i class="ti-close"></i></td>
                  </tr>
                  <tr>
                    <td>#3202</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">Joseph Salazar</h5>
                          <p class="text-muted mb-0">4489 Hart Ridge Road</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$590.00</td>
                    <td class="text-center text-success"><i class="ti-check"></i></td>
                  </tr>
                  <tr>
                    <td>#8302</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">John Cruz</h5>
                          <p class="text-muted mb-0">3274 Lyndon Street</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$940.00</td>
                    <td class="text-center text-danger"><i class="ti-close"></i></td>
                  </tr>
                  <tr>
                    <td>#8943</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">Jacqueline Rios</h5>
                          <p class="text-muted mb-0">559 Holly Street</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$490.00</td>
                    <td class="text-center text-success"><i class="ti-check"></i></td>
                  </tr>
                  <tr>
                    <td>#8943</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">Samuel Hayes</h5>
                          <p class="text-muted mb-0">716 Riverwood Drive</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$230.00</td>
                    <td class="text-center text-success"><i class="ti-check"></i></td>
                  </tr>
                  <tr>
                    <td>#2357</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/15.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">Tyler Hamilton</h5>
                          <p class="text-muted mb-0">1979 Monroe Street</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$319.00</td>
                    <td class="text-center text-success"><i class="ti-check"></i></td>
                  </tr>
                  <tr>
                    <td>#5784</td>
                    <td>
                      <div class="media">
                        <div class="media-left avatar"><img src="build/images/users/16.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                          <h5 class="media-heading">Lawrence Castillo</h5>
                          <p class="text-muted mb-0">1704 Saints Alley</p>
                        </div>
                      </div>
                    </td>
                    <td>20 Feb 2016</td>
                    <td>$860.00</td>
                    <td class="text-center text-success"><i class="ti-check"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="widget no-border">
              <div class="p-30 overlay bg-black"><img src="build/images/backgrounds/06.jpg" alt="" class="img-main img-responsive">
                <div class="clearfix">
                  <div class="pull-left"><i class="fs-60 wi wi-day-cloudy-gusts"></i>
                    <h3>Mostly Cloudy</h3>
                    <h4 class="fw-400">New York</h4>
                  </div>
                  <div class="pull-right text-right">
                    <div class="fs-20">January 30, 2016</div>
                    <div class="fs-100 fw-700"><span class="counter">76</span><sup style="top: 0">o</sup></div>
                  </div>
                </div>
                <div id="flot-weather" style="height: 100px"></div>
                <div class="row row-0 text-center">
                  <div class="col-sm-2 col-xs-4 mt-10">
                    <div class="fs-18 fw-500">77<sup>o</sup></div>
                    <div class="fs-12">6 AM</div>
                  </div>
                  <div class="col-sm-2 col-xs-4 mt-10">
                    <div class="fs-18 fw-500">62<sup>o</sup></div>
                    <div class="fs-12">10 AM</div>
                  </div>
                  <div class="col-sm-2 col-xs-4 mt-10">
                    <div class="fs-18 fw-500">74<sup>o</sup></div>
                    <div class="fs-12">2 PM</div>
                  </div>
                  <div class="col-sm-2 col-xs-4 mt-10">
                    <div class="fs-18 fw-500">76<sup>o</sup></div>
                    <div class="fs-12">6 PM</div>
                  </div>
                  <div class="col-sm-2 col-xs-4 mt-10">
                    <div class="fs-18 fw-500">78<sup>o</sup></div>
                    <div class="fs-12">10 PM</div>
                  </div>
                  <div class="col-sm-2 col-xs-4 mt-10">
                    <div class="fs-18 fw-500">60<sup>o</sup></div>
                    <div class="fs-12">2 AM</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget no-border">
              <ul class="activities list-unstyled mb-0">
                <li class="activity-info">
                  <div class="media">
                    <div class="media-left">
                      <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">08:20<span class="fs-14 text-muted">PM</span></time>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Added</h5>
                      <p class="text-muted">Morris charts page</p>
                    </div>
                  </div>
                </li>
                <li class="activity-danger">
                  <div class="media">
                    <div class="media-left">
                      <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">07:30<span class="fs-14 text-muted">PM</span></time>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Fixed</h5>
                      <p class="text-muted">White header version & example pages</p>
                    </div>
                  </div>
                </li>
                <li class="activity-warning">
                  <div class="media">
                    <div class="media-left">
                      <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">03:15<span class="fs-14 text-muted">PM</span></time>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Updated</h5>
                      <p class="text-muted">Visual composer 4.92 </p>
                    </div>
                  </div>
                </li>
                <li class="activity-success">
                  <div class="media">
                    <div class="media-left">
                      <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">10:50<span class="fs-14 text-muted">AM</span></time>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Create workflow</h5>
                      <p class="text-muted">Team member</p>
                      <ul class="list-inline">
                        <li>
                          <div class="avatar"><img src="build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        </li>
                        <li>
                          <div class="avatar"><img src="build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        </li>
                        <li>
                          <div class="avatar"><img src="build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                        </li>
                        <li>
                          <div class="avatar"><img src="build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        </li>
                        <li>
                          <div class="avatar"><img src="build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="activity-primary">
                  <div class="media">
                    <div class="media-left">
                      <time datetime="2015-12-10T20:50:48+07:00" class="fs-30 fw-500">09:20<span class="fs-14 text-muted">AM</span></time>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">Fixed</h5>
                      <p class="text-muted">Performance improvement</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="widget clear">
              <div class="widget-heading clearfix">
                <h3 class="widget-title pull-left">Upcoming Events</h3>
                <ul class="widget-tools pull-right list-inline">
                  <li><a href="javascript:;" class="widget-collapse"><i class="ti-angle-up"></i></a></li>
                  <li><a href="javascript:;" class="widget-reload"><i class="ti-reload"></i></a></li>
                  <li><a href="javascript:;" class="widget-remove"><i class="ti-close"></i></a></li>
                </ul>
              </div>
              <div class="widget-body">
                <div class="row row-0 bg-primary">
                  <div class="col-md-3">
                    <div class="events-header"><i class="ti-move"></i> Draggable Events</div>
                    <div class="p-20">
                      <ul class="list-unstyled draggable">
                        <li>Start with design project</li>
                        <li>Lunch with family</li>
                        <li>Birthday party</li>
                        <li>Read a book</li>
                        <li>Drink with Jessica</li>
                        <li>Pay internet bills online</li>
                        <li>Search for a job</li>
                        <li>Meeting with dropbox</li>
                      </ul>
                      <div class="checkbox-custom">
                        <input id="drop-remove" type="checkbox" value="remove" checked="">
                        <label for="drop-remove">Remove after drop</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div id="fullcalendar"></div>
                  </div>
                </div>
                <div id="addNewEvent" tabindex="-1" role="dialog" aria-labelledby="ModalEventLabel" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-black">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        <h4 id="ModalEventLabel" class="modal-title">Add New Event</h4>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <input id="inputTitleEvent" type="text" placeholder="Event Name" class="form-control">
                          </div>
                          <div class="form-group">
                            <input id="inputBackgroundEvent" type="text" value="#34495e" class="form-control">
                          </div>
                          <input id="start" type="hidden">
                          <input id="end" type="hidden">
                          <input id="allDay" type="hidden">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-raised btn-default">Cancel</button>
                        <button id="btnAddNewEvent" type="submit" class="btn btn-raised btn-black">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Work Here end-->
    <!-- Right Sidebar start-->
    <aside class="right-sidebar closed">
      <h5 class="text-center m-0 p-20 fs-16">Chat List<a href="javascript:;" role="button" class="right-sidebar-toggle pull-right fs-14"><i class="ti-close text-muted"></i></a></h5>
      <form class="mb-10 pl-20 pr-20">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
        </div>
      </form>
      <ul data-mcs-theme="minimal-dark" class="chat-list mb-0 fs-12 media-list mCustomScrollbar">
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Jane Curtis</h6>
              <p class="text-muted mb-0">Where are you from?</p>
            </div>
            <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Edward Garcia</h6>
              <p class="text-muted mb-0">Nice to meet you.</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Bruce Olson</h6>
              <p class="text-muted mb-0">What do you want to do?</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Martha Rodriguez</h6>
              <p class="text-muted mb-0">I'm hungry.</p>
            </div>
            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Hannah Williamson</h6>
              <p class="text-muted mb-0">Do you know the address?</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Anthony Mills</h6>
              <p class="text-muted mb-0">No problem.</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Ethan Stanley</h6>
              <p class="text-muted mb-0">Hello?</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Jonathan Castro</h6>
              <p class="text-muted mb-0">OK. Thanks.</p>
            </div>
            <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Denise Rose</h6>
              <p class="text-muted mb-0">Bye bye.</p>
            </div></a></li>
        <li class="media"><a href="javascript:;" class="conversation-toggle">
            <div class="media-left avatar"><img src="build/images/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
            <div class="media-body">
              <h6 class="media-heading">Eugene Meyer</h6>
              <p class="text-muted mb-0">How are you?</p>
            </div></a></li>
      </ul>
    </aside>
    <aside class="conversation closed">
      <h5 class="text-center m-0 p-20">Edward Garcia<a href="javascript:;" class="conversation-toggle pull-left"><i class="ti-arrow-left text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ti-pencil text-muted"></i></a></h5>
      <ul data-mcs-theme="minimal-dark" class="media-list chat-content fs-12 pl-20 pr-20 mCustomScrollbar">
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Hello.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:45 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>Hi.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:46 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>How are you?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:47 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>I'm good. How are you?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:50 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Good. Do you speak English?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:55 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>A little. Are you American?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:56 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Yes.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:00 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>Where are you from?</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:01 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>I'm from California.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:03 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
        <li class="media other">
          <div class="media-body">
            <p>Nice to meet you.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:04 PM <i class="ti-check text-success"></i></time>
          </div>
          <div class="media-right avatar"><img src="build/images/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
          <div class="media-left avatar"><img src="build/images/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
          <div class="media-body">
            <p>Nice to meet you too.</p>
            <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:05 PM <i class="ti-check text-success"></i></time>
          </div>
        </li>
      </ul>
      <form class="pl-20 pr-20">
        <div class="form-group has-feedback mb-0">
          <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ti-pencil-alt form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
        </div>
      </form>
    </aside>
    <!-- Right Sidebar end-->
    <!-- Demo Settings start-->
    <div class="setting closed"><a href="javascript:;" class="setting-toggle fs-16"><i class="ti-settings text-muted"></i></a>
      <h4 class="fs-16 mt-0 mb-15">Demo settings</h4>
      <form class="form-horizontal">
        <div class="clearfix">
          <h6 class="pull-left fs-13 fw-400">Fixed Header</h6>
          <div class="switch pull-right">
            <input id="fixed-header" type="checkbox">
            <label for="fixed-header" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix">
          <h6 class="pull-left fs-13 fw-400">Fixed Sidebar</h6>
          <div class="switch pull-right">
            <input id="fixed-sidebar" type="checkbox">
            <label for="fixed-sidebar" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix hidden-xs">
          <h6 class="pull-left fs-13 fw-400">Pinned Sidebar</h6>
          <div class="switch pull-right">
            <input id="pinned-sidebar" type="checkbox">
            <label for="pinned-sidebar" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix hidden-xs">
          <h6 class="pull-left fs-13 fw-400">Closed Sidebar</h6>
          <div class="switch pull-right">
            <input id="closed-sidebar" type="checkbox">
            <label for="closed-sidebar" class="switch-success"></label>
          </div>
        </div>
        <div class="clearfix">
          <h6 class="pull-left fs-13 fw-400">Native Scrollbar</h6>
          <div class="switch pull-right">
            <input id="native-scrollbar" type="checkbox">
            <label for="native-scrollbar" class="switch-success"></label>
          </div>
        </div>
      </form>
    </div>
    <!-- Demo Settings end-->
    <div tabindex="-1" role="dialog" aria-labelledby="composeMail" class="modal fade compose-mail-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-black">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            <h4 id="composeMail" class="modal-title">Compose Message</h4>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input id="exampleInputEmail" type="text" placeholder="To" class="form-control">
              </div>
              <div class="form-group">
                <input id="exampleInputSubject" type="text" placeholder="Subject" class="form-control">
              </div>
              <textarea id="compose-mail"></textarea>
              <div class="text-right">
                <button type="button" data-dismiss="modal" class="btn btn-raised btn-default">Close</button>
                <button type="button" class="btn btn-raised btn-black">Send Mail</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Cookie-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jquery.cookie/jquery.cookie.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- jQuery Advanced News Ticker-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jquery-advanced-news-ticker/js/newsTicker.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Animo.js-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/animo.js/animo.min.js"></script>
    <!-- Bootstrap Progressbar-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery Easy Pie Chart-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Sparkline-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/kapusta-jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Summernote-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/summernote/dist/summernote.min.js"></script>
    <!-- Toastr-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/toastr/toastr.min.js"></script>
    <!-- MomentJS-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/moment/min/moment.min.js"></script>
    <!-- jQuery BlockUI-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/blockUI/jquery.blockUI.js"></script>
    <!-- jQuery Counter Up-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jquery-waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/Counter-Up/jquery.counterup.min.js"></script>
    <!-- Jvector Map-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jvectormap/maps/jquery-jvectormap-world-mill.js"></script>
    <!-- Flot Charts--><!--[if lte IE 8]>
    <script type="text/javascript" src="https://raw.githubusercontent.com/flot/flot/master/excanvas.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/flot.curvedlines/curvedLines.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!-- Morris Chart-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/raphael/raphael-min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/morris.js/morris.min.js"></script>
    <!-- DataTables-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jszip/dist/jszip.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/pdfmake/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <!-- jQuery UI-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- FullCalendar-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- jQuery MiniColors-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/jquery-minicolors/jquery.minicolors.min.js"></script>
    <!-- Bootstrap Date Range Picker-->
    <script type="text/javascript" src="http://umega.lethemes.net/1.2/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/app.js"></script>
    <script type="text/javascript" src="build/js/demo.js"></script>
    <script type="text/javascript" src="build/js/pages/index.js"></script>
  </body>
</html>