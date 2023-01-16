 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link text-center">
         <span class="brand-text font-weight-light">Re-Union Team</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
             <div class="image">
                 <img class="img-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
             </div>
             <div class="info">
                 <a href="{{route('user-profile')}}" class="d-block"> {{ Auth::user()->name }}</a>
             </div>
             @endif
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             @if(Auth::user()->id == 1)
             <!--  Admin side-menu start-->
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="{{route('dashboard')}}" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>

                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="fas fa-user"></i>
                         <p>
                             Members
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">6</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('user-list')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Members List</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 
                 <li class="nav-item">
                     <a href="{{route('profile.show')}}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Payments</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{route('profile.show')}}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>T-Shirt's</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{route('profile.show')}}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Settings</p>
                     </a>
                 </li>

                 <li class="nav-item mt-4">
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <button class="btn btn-danger form-control">Logout</button>
                     </form>
                 </li>
             </ul>
             @else
             <!--  member side-menu start-->
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="{{route('dashboard')}}" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>

                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="{{route('profile.show')}}" class="nav-link">
                         <i class="fas fa-user"></i>
                         <p>
                             Profile
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{route('profile.show')}}" class="nav-link">
                         <i class="fas fa-cogs"></i>
                         <p>
                             Settings
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{route('profile.show')}}" class="nav-link">
                         <i class="ion ion-bag"></i>
                         <p>
                             Package
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{route('profile.show')}}" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Payments</p>
                     </a>
                 </li>

                 <li class="nav-item mt-4">
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <button class="btn btn-danger form-control">Logout</button>
                     </form>
                 </li>
             </ul>
             @endif
         </nav>
         <!-- /.sidebar-menu -->
     </div>

     <!-- /.sidebar -->
 </aside>