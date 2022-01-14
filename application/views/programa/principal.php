<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PRUF</title>

  <link rel="stylesheet" href="<?= base_url('asset/programa/vendors/mdi/css/materialdesignicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('asset/programa/vendors/puse-icons-feather/feather.css') ?>">
  <link rel="stylesheet" href="<?= base_url('asset/programa/vendors/css/vendor.bundle.base.css') ?>">
 
  <link rel="stylesheet" href="<?= base_url('asset/programa/css/style.css') ?>">

  <link rel="shortcut icon" href="<?= base_url('asset/programa/images/favicon.png') ?>" />
</head>

<body>
  <div class="container-scroller">

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-elevation-rise"></i>Reporte</a>
          </li>          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-cart"></i>
              <span class="count bg-warning">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails
                </p>
                <span class="badge badge-inverse-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">David Grey
                    <span class="float-right font-weight-light small-text text-gray">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">Tim Cook
                    <span class="float-right font-weight-light small-text text-gray">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1"> Johnson
                    <span class="float-right font-weight-light small-text text-gray">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count bg-success">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-inverse-info float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-inverse-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                  <p class="font-weight-light small-text mb-0">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-inverse-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                  <p class="font-weight-light small-text mb-0">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-inverse-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                  <p class="font-weight-light small-text mb-0">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="mr-3">Hello, Sebastian !</span><img class="img-xs rounded-circle" src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <div class="theme-setting-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
          </div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles pink"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <div class="d-flex align-items-center justify-content-between border-bottom">
          <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        </div>
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">19 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image"><span class="offline"></span></div>
            <div class="info">
              <div class="wrapper d-flex">
                <p>Catherine</p>
              </div>
              <p>Away</p>
            </div>
            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
            <small class="text-muted my-auto">23 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Daniel Russell</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">14 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image"><span class="offline"></span></div>
            <div class="info">
              <p>James Richardson</p>
              <p>Away</p>
            </div>
            <small class="text-muted my-auto">2 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Madeline Kennedy</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">5 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Sarah Graves</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">47 min</small>
          </li>
        </ul>
      </div>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="<?= base_url('asset/programa/images/personas/100x100.png') ?>" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Sebastian Brayden</p>
                <p class="designation">UI/UX Designer</p>
              </div>
              <div class="notification-panel mt-4">
                <span><i class="mdi mdi-settings"></i></span>
                <span class="count-wrapper"><i class="mdi mdi-bell"></i><span class="count top-right bg-warning">4</span></span>
                <span><i class="mdi mdi-email"></i></span>
              </div>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="../../index.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/01.png') ?>" alt="menu icon"> <span class="menu-title">Dashboard</span></a> </li>

          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/23.png') ?>" alt="menu icon"> <span class="menu-title">Mi Balance</span> </a> </li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/25.png') ?>" alt="menu icon"> <span class="menu-title">Mi Billetera</span> </a> </li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/24.png') ?>" alt="menu icon"> <span class="menu-title">Mis Promotores</span> </a> </li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/26.png') ?>" alt="menu icon"> <span class="menu-title">Super Market</span> </a> </li>  

          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/27.png') ?>" alt="menu icon"> <span class="menu-title">Usuarios</span> </a> </li>  
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/28.png') ?>" alt="menu icon"> <span class="menu-title">Ordenes</span> </a> </li>  
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/30.png') ?>" alt="menu icon"> <span class="menu-title">Anuncios</span> </a> </li>  
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/29.png') ?>" alt="menu icon"> <span class="menu-title">Reporte Ventas</span> </a> </li>  
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/31.png') ?>" alt="menu icon"> <span class="menu-title">Valores</span> </a> </li>

          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/32.png') ?>" alt="menu icon"> <span class="menu-title">Eventos PRUF</span> </a> </li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/widgets.html"> <img class="menu-icon" src="<?= base_url('asset/programa/images/menu_icons/33.png') ?>" alt="menu icon"> <span class="menu-title">Plan de Conpensacion</span> </a> </li>
        </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">


        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?=date('Y') ?> <a href="http:/www.geniesolutions.com.ec/" target="_blank">GenieSolutions</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Genie Solutions <i class="mdi mdi-lan-connect text-danger"></i></span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <script src="<?= base_url('asset/programa/vendors/js/vendor.bundle.base.js') ?>"></script>
  <script src="<?= base_url('asset/programa/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') ?>"></script>
  <script src="<?= base_url('asset/programa/vendors/jquery-validation/jquery.validate.min.js') ?>"></script>


  <script src="<?= base_url('asset/programa/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('asset/programa/js/hoverable-collapse.js') ?>"></script>
  <script src="<?= base_url('asset/programa/js/misc.js') ?>"></script>
  <script src="<?= base_url('asset/programa/js/settings.js') ?>"></script>
  <script src="<?= base_url('asset/programa/js/todolist.js') ?>"></script>

  <script src="<?= base_url('asset/programa/js/form-validation.js') ?>"></script>
  <script src="<?= base_url('asset/programa/js/bt-maxLength.js') ?>"></script>

</body>

</html>
