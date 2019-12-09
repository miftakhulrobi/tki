<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $this->auths->app()['website'] ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url('admin') ?>/assets/file/LOGOTK.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url('admin') ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url('admin') ?>/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('admin') ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('admin') ?>/assets/css/atlantis.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url('admin') ?>/assets/css/demo.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
        .card-table-data {
            box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, .15);
        }

        .btn-hover:hover {
            transform: scale(1.04);
            box-shadow: 0px 10px 8px -5px rgba(0, 0, 0, .50);
        }

        .input-box {
            border: 1px solid lime;
        }

        .input-box-warning {
            border: 1px solid salmon;
        }

        .input-box-grey {
            border: 1px solid #c6c8c7;
        }

        .data-catatan {
            padding: 20px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
            background-color: #04f9c2;
        }

        .fa-power-off {
            animation: powerOff 5s ease 2s infinite;
        }

        .avatar-rotate {
            animation: avatarRotate 6s ease 2s infinite;
        }

        .avatar-hover:hover {
            transform: scale(1.1) rotate(30deg);
            transition: 1s;
        }

        @keyframes powerOff {
            0% {
                color: white;
            }

            20% {
                color: white;
            }

            40% {
                color: white;
            }

            60% {
                color: white;
            }

            80% {
                color: white;
            }

            100% {
                color: orange;
            }
        }

        @keyframes avatarRotate {
            0% {
                opacity: 1;
            }

            100% {
                transform: rotateY(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="#" class="logo">
                    <img src="<?= base_url('admin') ?>/assets/file/logoheader.png" alt="navbar brand" class="navbar-brand img-responsive" width="170">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3" action="<?= base_url('siswa/search') ?>">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" name="keyword" placeholder="Cari Nama Siswa / No. Induk" class="form-control" required>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                                <i class="fas fa-power-off"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm avatar-hover">
                                    <img src="<?= base_url('admin') ?>/assets/file/admin.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="<?= base_url('admin') ?>/assets/file/admin.jpg" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4><?= $this->auths->user()->nama ?></h4>
                                                <p class="text-muted">Pengampu: <?= $this->auths->user()->pengampu ?></p><a href="<?= base_url('master/profile') ?>" class="btn btn-xs btn-secondary btn-sm">Profile Saya</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">

            <div class="sidebar-wrapper scrollbar scrollbar-inner card-table-data">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2 avatar-rotate">
                            <img src="<?= base_url('admin') ?>/assets/file/admin.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?= $this->auths->user()->nama ?>
                                    <span class="user-level">Pengampu: <?= $this->auths->user()->pengampu ?></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="<?= base_url('master/profile') ?>">
                                            <span class="link-collapse">Profile Saya</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('auth/logout') ?>">
                                            <span class="link-collapse">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="<?= base_url('home') ?>">
                                <i class="fas fa-home text-success"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section text-warning">Components</h4>
                        </li>
                        <li class="nav-item active data-collapse-dropdown">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-desktop"></i>
                                <p>Master</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?= base_url('master/tahunajaran') ?>">
                                            <span class="sub-item">Tahun Ajaran</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('guru') ?>">
                                            <span class="sub-item">Data Guru</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('siswa') ?>">
                                <i class="fas fa-users text-success"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('nilai') ?>">
                                <i class="fas fa-file text-success"></i>
                                <p>Input Nilai</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-panel">