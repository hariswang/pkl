<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
  <base href="../../">
  <meta charset="utf-8" />
  <title>Admin | MoniTA</title>
  <meta name="description" content="Page with empty content" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Page Vendors Styles(used by this page)-->
  <link href="<?= base_url('assets/'); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Page Vendors Styles-->
  <!--begin::Global Theme Styles(used by all pages)-->
  <link href="<?= base_url('assets/'); ?>/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Theme Styles-->
  <!--begin::Layout Themes(used by all pages)-->
  <link href="<?= base_url('assets/'); ?>/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url('assets/'); ?>/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
  <!--end::Layout Themes-->
  <link rel="shortcut icon" href="<?= base_url('assets/'); ?>/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  <!--begin::Main-->
  <!--begin::Header Mobile-->
  <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="index.html">
      <img alt="Logo" href="<?= base_url('assets/'); ?>/media/logos/logo-light.png" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
      <!--begin::Aside Mobile Toggle-->
      <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
        <span></span>
      </button>
      <!--end::Aside Mobile Toggle-->
      <!--begin::Topbar Mobile Toggle-->
      <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
        <span class="svg-icon svg-icon-xl">
          <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24" />
              <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
              <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
            </g>
          </svg>
          <!--end::Svg Icon-->
        </span>
      </button>
      <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
  </div>
  <!--end::Header Mobile-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
      <!--begin::Aside-->
      <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
        <!--begin::Brand-->
        <div class="brand flex-column-auto" id="kt_brand">
          <!--begin::Logo-->
          <a href="#" class="brand-logo">
            <img alt="Logo" src="<?= base_url('assets/'); ?>/media/logos/logo-light.png" />
          </a>
          <!--end::Logo-->
          <!--begin::Toggle-->
          <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
              <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24" />
                  <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                  <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </button>
          <!--end::Toolbar-->
        </div>
        <!--end::Brand-->
        <!--begin::Aside Menu-->
        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
          <!--begin::Menu Container-->
          <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
              <li class="menu-item" aria-haspopup="true">
                <a href="<?= base_url('admin/index'); ?>" class="menu-link">
                  <i class="menu-icon flaticon-doc"></i>
                  <span class="menu-text">Registrasi</span>
                </a>
              </li>
              <li class="menu-item" aria-haspopup="true">
                <a href="<?= base_url('admin/kelulusan'); ?>" class="menu-link">
                  <i class="menu-icon flaticon-tabs"></i>
                  <span class="menu-text">Set Kelulusan</span>
                </a>
              </li>
              <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                  <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                  <span class="menu-text">Menu Pengelola</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                  <i class="menu-arrow"></i>
                  <ul class="menu-subnav">
                    <li class="menu-item menu-item-parent" aria-haspopup="true">
                      <span class="menu-link">
                        <span class="menu-text">Menu Pengelola</span>
                      </span>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="<?= base_url('admin/dosen'); ?>" class="menu-link">
                        <i class="menu-bullet menu-bullet-line">
                          <span></span>
                        </i>
                        <span class="menu-text">Dosen</span>
                        <i class="menu-arrow"></i>
                      </a>
                    </li>
                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                      <a href="<?= base_url('admin/mahasiswa'); ?>" class="menu-link">
                        <i class="menu-bullet menu-bullet-line">
                          <span></span>
                        </i>
                        <span class="menu-text">mahasiswa</span>
                        <i class="menu-arrow"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <!--end::Menu Container-->
        </div>
        <!--end::Aside Menu-->
      </div>
      <!--end::Aside-->
      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" class="header header-fixed">
          <!--begin::Container-->
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
              <!--begin::Header Menu-->
              <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class="topbar">
              <!--begin::Search-->
              <div class="dropdown" id="kt_quick_search_toggle">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                  <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                  <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                    <!--begin:Form-->
                    <form method="get" class="quick-search-form">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <span class="svg-icon svg-icon-lg">
                              <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24" />
                                  <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                  <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                              </svg>
                              <!--end::Svg Icon-->
                            </span>
                          </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search..." />
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                          </span>
                        </div>
                      </div>
                    </form>
                    <!--end::Form-->
                    <!--begin::Scroll-->
                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                    <!--end::Scroll-->
                  </div>
                </div>
                <!--end::Dropdown-->
              </div>
              <!--end::Search-->
              <!--begin::User-->
              <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                  <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                  <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?= $user['nama'];  ?></span>
                  <span class="symbol symbol-35 symbol-light-success">
                    <img class="img-profile rounded-circel" src="<?= base_url('assets/img/profile/') . $user['image'];  ?>">
                  </span>
                </div>
              </div>
              <!--end::User-->
            </div>
            <!--end::Topbar-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <!--begin::Entry-->
          <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

              <!-- Content Header (Page header) -->
              <section class="content">
                <form class="form" method="post" action="<?= base_url('admin/aktivasi') ?>">
                  <!-- Default box -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Daftar Mahasiswa Yang Melakukan Registrasi</h3>
                    </div>
                    <div class="card-body">

                      <!--begin::Entry-->
                      <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                          <!--begin::Notice-->
                          <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                            <div class="alert-icon">
                              <span class="svg-icon svg-icon-primary svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                    <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                  </g>
                                </svg>
                                <!--end::Svg Icon-->
                              </span>
                            </div>
                            <div class="alert-text">Menu pengelolanan data mahaiswa yang mendaftar Monitoring Tugas Akhir.
                              <br />Info lebih lanjut kunjungi
                              <a class="font-weight-bold" href="www.mischooxl.id" target="_blank">mischool.id</a></div>
                          </div>
                          <!--end::Notice-->
                          <!--begin::Card-->
                          <div class="card card-custom gutter-b">
                            <div class="table-responsive">
                              <div class="card-body">
                                <!--begin: Datatable-->
                                <table class="table table-bordered table-checkable" id="kt_datatable">
                                  <thead>
                                    <tr>
                                      <th>No.</th>
                                      <th>NIM</th>
                                      <th>Nama</th>
                                      <th>Email</th>
                                      <th>Berkas</th>
                                      <th>Aksi</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php $i = 1; ?>
                                    <?php foreach ($mahasiswa as $mhs) : ?>
                                      <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $mhs->no_induk; ?></td>
                                        <td><?= $mhs->nama; ?></td>
                                        <td><?= $mhs->email; ?></td>
                                        <td>
                                          <!-- Button trigger modal-->
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $i ?>">
                                            Cek Bukti
                                          </button>

                                          <!-- Modal-->
                                          <div class="modal fade" id="exampleModal<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel<?= $i ?>">Foto bukti pembayaran</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                  </button>
                                                </div>
                                                <div style="margin-left: 20px"></div>
                                                <div class="modal-body">
                                                  <img src="<?php echo base_url(); ?>assets/img/<?php echo $mhs->berkas; ?>" style="max-width:80%;">
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <a href="<?php echo site_url(); ?>admin/aktivasi/<?= $mhs->id; ?>" class=" btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Terima</a>
                                          <a href="<?php echo site_url(); ?>/admin/hapus/<?= $mhs->id; ?>" class=" btn btn-sm btn-light-danger font-weight-bolder py-2 px-5">Tolak</a>
                                        </td>
                                      </tr>
                                      <?php $i++; ?>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>
                                <!--end: Datatable-->
                              </div>
                            </div>
                          </div>
                          <!--end::Card-->
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </form>

              </section>
              <!-- /.content -->

            </div>
            <!--end::Container-->
          </div>
          <!--end::Entry-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
          <!--begin::Container-->
          <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
              <span class="text-muted font-weight-bold mr-2">2020©</span>
              <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">mischool.id</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Nav-->
            <div class="nav nav-dark">
              <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
              <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
              <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
            </div>
            <!--end::Nav-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Main-->
  <!-- begin::User Panel-->
  <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
      <h3 class="font-weight-bold m-0">Admin Profile
        <small class="text-muted font-size-sm ml-2">12 messages</small></h3>
      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
        <i class="ki ki-close icon-xs text-muted"></i>
      </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
      <!--begin::Header-->
      <div class="d-flex align-items-center mt-5">
        <div class="symbol symbol-100 mr-5">
          <img class="img-profile rounded-circel" src="<?= base_url('assets/img/profile/') . $user['image'];  ?>">
          <i class="symbol-badge bg-success"></i>
        </div>
        <div class="d-flex flex-column">
          <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?= $user['nama']; ?></a>
          <div class="text-muted mt-1">Admin</div>
          <div class="navi mt-2">
            <a href="#" class="navi-item">
              <span class="navi-link p-0 pb-2">
                <span class="navi-icon mr-1">
                  <span class="svg-icon svg-icon-lg svg-icon-primary">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                        <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="navi-text text-muted text-hover-primary"><?= $user['email']; ?></span>
              </span>
            </a>
            <a href="<?php echo site_url(); ?>/Auth/logout"" class=" btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Log Out</a>
          </div>
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Separator-->
      <div class="separator separator-dashed mt-8 mb-5"></div>
      <!--end::Separator-->
    </div>
    <!--end::Content-->
  </div>
  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
      <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <polygon points="0 0 24 0 24 24 0 24" />
          <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
          <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
        </g>
      </svg>
      <!--end::Svg Icon-->
    </span>
  </div>
  <!--end::Scrolltop-->

  <script>
    var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
  </script>
  <!--begin::Global Config(global config for global JS scripts)-->
  <script>
    var KTAppSettings = {
      "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
      },
      "colors": {
        "theme": {
          "base": {
            "white": "#ffffff",
            "primary": "#6993FF",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#F3F6F9",
            "dark": "#212121"
          },
          "light": {
            "white": "#ffffff",
            "primary": "#E1E9FF",
            "secondary": "#ECF0F3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
          },
          "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#212121",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
          }
        },
        "gray": {
          "gray-100": "#F3F6F9",
          "gray-200": "#ECF0F3",
          "gray-300": "#E5EAEE",
          "gray-400": "#D6D6E0",
          "gray-500": "#B5B5C3",
          "gray-600": "#80808F",
          "gray-700": "#464E5F",
          "gray-800": "#1B283F",
          "gray-900": "#212121"
        }
      },
      "font-family": "Poppins"
    };
  </script>
  <!--end::Global Config-->
  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="<?= base_url('assets/'); ?>/plugins/global/plugins.bundle.js"></script>
  <script src="<?= base_url('assets/'); ?>/plugins/custom/prismjs/prismjs.bundle.js"></script>
  <script src="<?= base_url('assets/'); ?>/js/scripts.bundle.js"></script>
  <!--end::Global Theme Bundle-->
  <!--begin::Page Vendors(used by this page)-->
  <script src="<?= base_url('assets/'); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
  <script src="<?= base_url('assets/'); ?>/plugins/custom/gmaps/gmaps.js"></script>
  <!--end::Page Vendors-->
  <!--begin::Page Scripts(used by this page)-->
  <script src="<?= base_url('assets/'); ?>/js/pages/widgets.js"></script>
  <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>