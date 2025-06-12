<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sparkz Hotelo - Hotel Management System</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/datepicker3.css" rel="stylesheet">
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
 <style>
    /* 1. Navbar Scroll Effect (will work with JS but has fallback) */
.navbar-custom {
    transition: all 0.4s ease;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

/* 2. Logo Hover Animation */
.navbar-brand img {
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.navbar-brand:hover img {
    transform: scale(1.05);
    filter: brightness(1.1);
}

/* 3. Smooth Dropdown Menu */
.dropdown-menu {
    display: block;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    transform: translateY(15px);
}

.navbar-right > li:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* 4. Hamburger Menu Animation */
.navbar-toggle .icon-bar {
    transition: all 0.3s ease;
}

.navbar-toggle:not(.collapsed) .icon-bar:nth-child(1) {
    transform: rotate(45deg) translate(4px, 4px);
}

.navbar-toggle:not(.collapsed) .icon-bar:nth-child(2) {
    opacity: 0;
}

.navbar-toggle:not(.collapsed) .icon-bar:nth-child(3) {
    transform: rotate(-45deg) translate(4px, -4px);
}

/* 5. Menu Item Hover Effects */
.navbar-top-links li > a {
    position: relative;
}

.navbar-top-links li > a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: white;
    transition: width 0.3s ease;
}

.navbar-top-links li:hover > a::after {
    width: 100%;
}

/* 6. Profile Icon Animation */
.navbar-top-links .fa-user {
    transition: all 0.3s ease;
}

.navbar-top-links li:hover .fa-user {
    transform: scale(1.2);
    color: #fff;
}
/* ===== 3D HEADER ANIMATIONS ===== */
/* 1. 3D Navbar Container */
.navbar-custom {
  transform-style: preserve-3d;
  transition: transform 0.5s ease, box-shadow 0.3s ease;
  box-shadow: 0 2px 15px rgba(0,0,0,0.1);
}

/* 2. Logo with 3D Flip + Glow */
.navbar-brand {
  perspective: 1000px;
}

.navbar-brand img {
  transition: transform 0.6s cubic-bezier(0.25, 0.45, 0.45, 0.95), 
              filter 0.3s ease;
  transform-style: preserve-3d;
}

.navbar-brand:hover img {
  transform: rotateY(10deg) scale(1.05);
  filter: drop-shadow(0 0 8px rgba(255,255,255,0.4));
}

/* 3. User Icon with 3D Rotation */
.navbar-top-links .fa-user {
  transition: transform 0.4s ease, color 0.2s linear;
  display: inline-block;
  transform-style: preserve-3d;
}

.navbar-top-links li:hover .fa-user {
  transform: rotateY(180deg) translateZ(5px);
  color: #fff;
}

/* 4. 3D Dropdown Menu */
.dropdown-menu {
  transform: perspective(800px) rotateX(-10deg);
  transform-origin: top center;
  transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  opacity: 0;
  backface-visibility: hidden;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.navbar-right > li:hover .dropdown-menu {
  transform: perspective(800px) rotateX(0);
  opacity: 1;
}

/* 5. Hamburger Menu 3D Transform */
.navbar-toggle {
  perspective: 500px;
}

.navbar-toggle .icon-bar {
  transition: all 0.4s cubic-bezier(0.77, 0, 0.175, 1);
  transform-origin: center;
  backface-visibility: hidden;
}

.navbar-toggle:not(.collapsed) .icon-bar:nth-child(1) {
  transform: translateY(6px) rotate(45deg) translateZ(3px);
}

.navbar-toggle:not(.collapsed) .icon-bar:nth-child(2) {
  opacity: 0;
  transform: scaleX(0) translateZ(3px);
}

.navbar-toggle:not(.collapsed) .icon-bar:nth-child(3) {
  transform: translateY(-6px) rotate(-45deg) translateZ(3px);
}

/* 6. 3D Hover Effect for Nav Items */
.navbar-top-links li > a {
  position: relative;
  transform-style: preserve-3d;
}

.navbar-top-links li > a::before {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 100%;
  height: 2px;
  background: white;
  transform: scaleX(0) translateZ(0);
  transform-origin: right;
  transition: transform 0.3s ease;
}

.navbar-top-links li:hover > a::before {
  transform: scaleX(1) translateZ(2px);
  transform-origin: left;
}
 </style>
</head>
<body>
<div id="page"></div>
<div id="loading"></div>
<nav class="navbar navbar-custom navbar-fixed-top bg-info" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?dashboard"><img src="assets/img/logo.png" width="250px"></a>

            <ul class="nav navbar-top-links navbar-right">
        <li class="pull-left"><div id="google_translate_element"></div></li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-user"></em>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <div class="">
                        
        <div class="clear"></div>
    </div>
                          <li><a href="#"><i class="icon-line-awesome-user"></i>
                                Profile
                            </a></li>
                              <li><a href="#"><i class="icon-material-outline-lock-open"></i>
                                Change Password
                            </a></li>
                        <li><a href="logout.php"><i class="icon-line-awesome-power-off"></i>
                                Logout
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>