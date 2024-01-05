 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="index3.html" class="nav-link">Home</a>
         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <li class="nav-item dropdown">
             <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                 class="nav-link dropdown-toggle">Aksi</a>
             <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                 <li><p class="dropdown-item">Nama: {{ auth()->user()->name }}</p></li>
                 <li><p class="dropdown-item">Email: {{ auth()->user()->email }}</p></li>

                 <li class="dropdown-divider"></li>

                 <!-- Level two dropdown-->
                 <a class="dropdown-item" href="{{route('actionlogout')}}">
                     Logout
                 </a>
                 <!-- End Level two -->
             </ul>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->
