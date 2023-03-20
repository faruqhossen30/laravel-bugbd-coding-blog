     <!--Navbar Start-->
     <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar" style="margin-top: 0">
         <div class="container-fluid custom-container">
             <a class="navbar-brand text-dark fw-bold me-auto" href="{{ route('homepage') }}">
                 {{-- <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" height="22" alt=""
                     class="logo-dark" />
                 <img src="{{ asset('frontend/assets/images/logo-light.png') }}" height="22" alt=""
                     class="logo-light" /> --}}
                 Bug BD
             </a>
             <div>
                 <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                     <i class="mdi mdi-menu"></i>
                 </button>
             </div>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <ul class="navbar-nav mx-auto navbar-center">
                     <li class="nav-item">
                         <a href="{{ route('homepage') }}" class="nav-link">Home</a>
                     </li>
                     <!--end dropdown-->
                     <li class="nav-item dropdown dropdown-hover">
                         <a class="nav-link" href="javascript:void(0)" id="productdropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Category
                             <div class="arrow-down"></div>
                         </a>

                         <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="productdropdown">
                             @foreach ($categories as $category)
                             <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
                             @endforeach
                         </ul>
                     </li>
                     <!--end dropdown-->

                     <!--end dropdown-->
                     <li class="nav-item">
                         <a href="#" class="nav-link">Contact</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">About Us</a>
                     </li>
                 </ul>
                 <!--end navbar-nav-->
             </div>
             <!--end navabar-collapse-->
             <ul class="header-menu list-inline d-flex align-items-center mb-0">
                 @guest
                     <li>
                         <a href="{{ url('login') }}">Sign In</a>
                     </li>
                 @endguest
                 @auth
                     <li class="list-inline-item dropdown">
                         <a href="javascript:void(0)" class="header-item" id="userdropdown" data-bs-toggle="dropdown"
                             aria-expanded="false">

                             @if (auth()->user()->image)
                                 <img src="{{ asset('storage/profile-picture/' . Auth::user()->image) }}" alt="mdo"
                                     width="35" height="35" class="rounded-circle me-1">
                             @else
                                 <img src="{{ asset('frontend/assets/images/defultuser.jpg') }}" alt="mdo"
                                     width="35" height="35" class="rounded-circle me-1">
                             @endif

                             <span class="d-none d-md-inline-block fw-medium">
                                 {{ auth()->user()->name }}
                             </span>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                             <li><a class="dropdown-item" href="manage-jobs.html">Manage Jobs</a></li>
                             <li><a class="dropdown-item" href="bookmark-jobs.html">Bookmarks Jobs</a></li>
                             <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                             {{-- <li><a class="dropdown-item" href="sign-out.html">Logout</a></li> --}}
                             <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                     Logout
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                             </li>
                         </ul>
                     </li>
                 @endauth


             </ul>
             <!--end header-menu-->
         </div>
         <!--end container-->
     </nav>
     <!-- Navbar End -->
