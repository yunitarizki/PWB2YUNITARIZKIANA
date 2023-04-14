<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AhliPercetakan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo2.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="home"><img src="assets/images/logo2.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="home"><img src="assets/images/logo2.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-img">
                    <img src="../../assets/images/foto profil.jpg" alt="image" width="30">
                  </div>
                  <div class="nav-profile-text">
                    <p class="mb-1 text-black">Yunita Rizkiana</p>
                  </div>
                </a>
                <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                  <div class="p-3 text-center bg-primary">
                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="../../assets/images/faces/face28.png" alt="">
                  </div>
                  <div class="p-2">
                    <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                      <span>Inbox</span>
                      <span class="p-0">
                        <span class="badge badge-primary">3</span>
                        <i class="mdi mdi-email-open-outline ml-1"></i>
                      </span>
                    </a>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                      <span>Profile</span>
                      <span class="p-0">
                        <span class="badge badge-success">1</span>
                        <i class="mdi mdi-account-outline ml-1"></i>
                      </span>
                    </a>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                      <span>Settings</span>
                      <i class="mdi mdi-settings"></i>
                    </a>
                    <div role="separator" class="dropdown-divider"></div>
                    <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                      <span>Lock Account</span>
                      <i class="mdi mdi-lock ml-1"></i>
                    </a>
                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                      <span>Log Out</span>
                      <i class="mdi mdi-logout ml-1"></i>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <!-- <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count-symbol bg-success"></span>
                </a> -->
           
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count-symbol bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="mdi mdi-calendar"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                      <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="mdi mdi-settings"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                      <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="mdi mdi-link-variant"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                      <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:../../partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-category">Main</li>
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                  <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="tambahdaftar">
                  <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                  <span class="menu-title">Forms</span>
                </a>
              </li>
               {{-- <li class="nav-item">
                <a class="nav-link" href="../../pages/charts/chartjs.html">
                  <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                  <span class="menu-title">Charts</span>
                </a>
              </li> --}}
              <li class="nav-item">
                <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                   <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                   <span class="menu-title">Tables</span>
                   <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/daftar">Daftar Percetakan</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/bobot">Pembobotan Kriteria</a></li>
                        {{-- <li class="nav-item"> <a class="nav-link" href="../pages/tables/basic-table kriteria.html">Data Kriteria</a></li> --}}
                      </ul>
                 </div>
               </li>

               <li class="nav-item sidebar-user-actions">
                <div class="user-details">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div class="d-flex align-items-center">
                        <div class="sidebar-profile-img">
                          <img src="../../assets/images/foto profil.jpg" alt="image" width="30">
                        </div>
                        <div class="sidebar-profile-text">
                          <p class="mb-1">Yunita Rizkiana</p>
                        </div>
                      </div>
                    </div>
                    <div class="badge badge-danger">3</div>
                  </div>
                </div>
              </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">  
    @extends('layouts/layout/aplikasi')
    @section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
<h2>DAFTAR PERCETAKAN</h2>
<br>
<a href="/tambahdaftar" class="btn btn-success">Tambah +</a>
<br><br>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Percetakan</th>
                <th>Alamat</th>
                <th>Reting</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_percetakan}}</td>
                    <td>{{ $item->alamat}}</td>
                    <td>{{ $item->reting}}</td>
                    {{-- <td><a class='btn btn-secondary btn-sm' href='{{ url('/daftar/'.$item->id)}}'>Detail</a></td> --}}
                  <td>
                    <a href="/tampilkandata/{{$item->id}}" class="btn btn-warning">Ubah </a>
                    <a href="/delete/{{$item->id}}" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{{-- </tbody>
</table> --}}
    </div>
    </div>
</div>
    {{-- {{ $data->links() }} --}}
</div>
</div>
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<footer class="footer">
  <div class="footer-inner-wraper">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
    </div>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
@endsection
