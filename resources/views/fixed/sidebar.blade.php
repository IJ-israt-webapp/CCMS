<aside class="main-sidebar sidebar-dark-primary elevation-4">

  




<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
  <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
       style="opacity: .8">
  <span class="brand-text font-weight-light">CCMS</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{auth('member')?->user()?->name ?? auth('web')?->user()?->name}}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="{{route('dashboard')}}" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Enrollment
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
      <a href="{{route('admin.register')}}" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Registration
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>
        </a>
        
      <li class="nav-item has-treeview">
        <a href="{{route('login')}}" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Login
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        
      <li class="nav-item has-treeview">
      <a href="{{route('child.create')}}" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p>
            Child
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        
      <li class="nav-item has-treeview">
        <a href="{{route('guardian.create')}}" class="nav-link">
        
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Guardians
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Attendance
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        
        <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Calendar
            <span class="badge badge-info right">2</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/gallery.html" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Communication
          </p>
        </a>
      </li>
      

      <li class="nav-item">
        <a href="pages/gallery.html" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Report
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="pages/gallery.html" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Payment
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('logout')}}" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Logout
          </p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>