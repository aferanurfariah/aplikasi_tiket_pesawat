<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(206, 78, 78)">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('template/dist/img/pesawat.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ticketing</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar mt-2">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Pesawat Terbang</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: white;">
          <div class="input-group-append">
            <button class="btn btn-sidebar" style="background-color: white; color:grey;">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               @can('isAdmin')
               <li class="nav-item">
                   <a href="/dashboard" class="nav-link @if (Request::segment(1) == 'dashboard') active "style="background-color: white; color:grey;" @endif">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                       <p>
                           Dashboard
                       </p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                   <p>
                       Buat Data
                       <i class="fas fa-angle-left right"></i>
                   </p>
                   </a>
                   <ul class="nav nav-treeview">
                       <li class="nav-item">
                           <a href="/pesawat" class="nav-link @if (Request::segment(1) == 'pesawat') active @endif">
                               &ensp;&ensp;
                               <i class="fas fa-plane nav-icon"></i>
                               <p>
                                   Pesawat
                               </p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/penumpang" class="nav-link @if (Request::segment(1) == 'penumpang') active @endif">
                               &ensp;&ensp;
                               <i class="fas fa-users nav-icon"></i>
                               <p>penumpang</p>
                           </a>
                       </li>
                   </ul>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                   <p>
                       Data Pemesanan
                       <i class="fas fa-angle-left right"></i>
                   </p>
                   </a>
                   <ul class="nav nav-treeview">
                       <li class="nav-item">
                           <a href="/pemesanan" class="nav-link @if (Request::segment(1) == 'pemesanan') active @endif">
                               &ensp;&ensp;
                               <i class="fas fa-print nav-icon"></i>
                               <p>Pemesanan</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/rute" class="nav-link @if (Request::segment(1) == 'rute') active @endif">
                               &ensp;&ensp;
                               <i class="far fa-clone nav-icon"></i>
                               <p>Rute</p>
                           </a>
                       </li>
                   </ul>
               </li>

               @elsecan('isPetugas')
               <li class="nav-item">
                   <a href="/dashboard" class="nav-link @if (Request::segment(1) == 'dashboard') active @endif">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                       <p>
                           Dashboard
                       </p>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="/pemesanan" class="nav-link @if (Request::segment(1) == 'pemesanan') active @endif">
                       <i class="fas fa-print nav-icon"></i>
                       <p>Pemesanan</p>
                   </a>
               </li>

               @else
               <li class="nav-item">
                   <a href="/home" class="nav-link @if (Request::segment(1) == 'home') active @endif">
                       <i class="nav-icon fas fa-home"></i>
                       <p>
                           home
                       </p>
                   </a>
               </li>
               {{-- <li class="nav-item">
                   <a href="/home/book" class="nav-link @if (Request::segment(1) == 'book') active @endif">
                       <i class="nav-icon fas fa-book"></i>
                       <p>
                           Buku
                       </p>
                   </a>
               </li> --}}
               <li class="nav-item">
                   <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                   <p>
                       Tikecting
                       <i class="fas fa-angle-left right"></i>
                   </p>
                   </a>
                   <ul class="nav nav-treeview">
                       <li class="nav-item">
                           <a href="/pemesanan" class="nav-link @if (Request::segment(1) == 'pemesanan') active @endif">
                               &ensp;&ensp;
                               <i class="nav-icon fas fa-print"></i>
                               <p>
                                   pemesanan
                               </p>
                           </a>
                       </li>
                       <li class="nav-item">
                        <a href="/penumpang/create" class="nav-link @if (Request::segment(1) == 'penumpang') active @endif">
                            &ensp;&ensp;
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                data diri
                            </p>
                        </a>
                    </li>
                   </ul>
               </li>
               @endcan
        </ul>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
