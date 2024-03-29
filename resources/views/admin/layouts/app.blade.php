 @include('admin.layouts.head')

 <body class="hold-transition sidebar-mini layout-fixed">
     <div class="wrapper">
         @include('admin.layouts.navbar')
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
             <a href="index3.html" class="brand-link text-center">
                 <span class="brand-text font-weight-light">ADMIN PANEL</span>
             </a>


             <div class="sidebar">
                 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                     <div class="image">
                         <img src="{{ url('dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
                     </div>
                     <div class="info">
                         <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                     </div>
                 </div>
                 <div class="form-inline">
                     <div class="input-group" data-widget="sidebar-search">
                         <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                             aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-sidebar">
                                 <i class="fas fa-search fa-fw"></i>
                             </button>
                         </div>
                     </div>
                 </div>
                 @include('admin.layouts.menu')
             </div>
         </aside>

         <div class="content-wrapper">


             @yield('content')
         </div>
         @include('admin.layouts.footer')
