<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>LEHO</title>
  <!-- Favicon -->
  <link href="<?= BASEURL;?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= BASEURL;?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?= BASEURL;?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= BASEURL;?>/assets/css/argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="<?= BASEURL;?>/assets/css/docs.min.css" rel="stylesheet">
  <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/4.12/video.js"></script>
  <style type="text/css">
    .vjs-default-skin .vjs-control-bar,
    .vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,0.9) }
    .vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.3) }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-default">
        <div class="container">
          <a class="navbar-brand mr-lg-5" href="<?= BASEURL; ?>/index.html">
            <img src="<?= BASEURL; ?>/assets/img/brand/leho.png">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img src="<?= BASEURL; ?>/assets/img/brand/lehodef.png">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?= BASEURL; ?>/kelas/myclass">MyClass</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/forum">Forum</a>
              </li>
              
            </ul>
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2"><?= $_SESSION['login']['username']; ?></span> 
                  <img src="<?= BASEURL; ?>/img/profile-default.png" class="rounded-circle" width="30px">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                  <a class="dropdown-item" href="<?= BASEURL; ?>/home/profile">Profile</a>
                  <?php if ($_SESSION['login']['username']='fikri'): ?>
                    <a class="dropdown-item" href="<?= BASEURL; ?>/kelas_settings">Settings</a>
                  <?php else: ?>
                    <a class="dropdown-item" href="<?= BASEURL; ?>/kelas/myclass">My Class</a>
                  <?php endif ?>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= BASEURL; ?>/auth/logout">Log Out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <main>