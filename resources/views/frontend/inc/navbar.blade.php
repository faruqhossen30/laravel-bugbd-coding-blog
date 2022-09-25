     <!--Navbar Start-->
     <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar" style="margin-top: 0">
         <div class="container-fluid custom-container">
             <a class="navbar-brand text-dark fw-bold me-auto" href="{{route('homepage')}}">
                 <img src="{{ asset('frontend/assets/images/logo-dark.png') }}" height="22" alt=""
                     class="logo-dark" />
                 <img src="{{ asset('frontend/assets/images/logo-light.png') }}" height="22" alt=""
                     class="logo-light" />
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
                    <li class="nav-item">
                        <a href="{{route('company.list')}}" class="nav-link">Companyies</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('blogs')}}" class="nav-link">Blog</a>
                    </li>


                     <!--end dropdown-->
                     <li class="nav-item dropdown dropdown-hover">
                         <a class="nav-link" href="javascript:void(0)" id="productdropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             All Jobs
                             <div class="arrow-down"></div>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="productdropdown">
                             <li><a class="dropdown-item" href="{{route('circular')}}">All Jobs</a></li>
                             <li><a class="dropdown-item" href="#">Govt Job</a></li>
                             <li><a class="dropdown-item" href="#">Company Job</a></li>
                             <li><a class="dropdown-item" href="#">NGO Job</a></li>

                         </ul>
                     </li>
                     <!--end dropdown-->

                     <!--end dropdown-->
                     <li class="nav-item">
                         <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('about') }}" class="nav-link">About Us</a>
                     </li>
                 </ul>
                 <!--end navbar-nav-->
             </div>
             <!--end navabar-collapse-->
             <ul class="header-menu list-inline d-flex align-items-center mb-0">
                @auth
                <li class="list-inline-item dropdown me-4">
                     <a href="javascript:void(0)" class="header-item noti-icon position-relative" id="notification"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="mdi mdi-bell fs-22"></i>
                         @if(auth()->user()->unreadnotifications->count()>0)
                         <div class="count position-absolute">{{auth()->user()->unreadnotifications->count()}}</div>
                         @endif
                     </a>
                     <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end p-0" aria-labelledby="notification">
                         <div class="notification-header border-bottom bg-light">
                             <h6 class="mb-1"> Notification </h6>
                             <p class="text-muted fs-13 mb-0">You have 4 unread Notification</p>
                         </div>
                         <div class="notification-wrapper dropdown-scroll">
                            @foreach (auth()->user()->unreadnotifications as $notification)
                            <a href="{{route('readnotification', $notification->id)}}" class="text-dark notification-item d-block active">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs bg-primary text-white rounded-circle text-center">
                                            <i class="uil uil-user-check"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mt-0 mb-1 fs-14">{{$notification->data['title']}}</h6>
                                        <p class="mb-0 fs-12 text-muted"><i class="mdi mdi-clock-outline"></i>
                                            <span>{{$notification->created_at->diffForHumans()}}</span></p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                             <!--end notification-item-->
                             {{-- <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                 <div class="d-flex align-items-center">
                                     <div class="flex-shrink-0 me-3">
                                         <img src="{{ asset('frontend/assets/images/user/img-02.jpg') }}"
                                             class="rounded-circle avatar-xs" alt="user-pic">
                                     </div>
                                     <div class="flex-grow-1">
                                         <h6 class="mt-0 mb-1 fs-14">James Lemire</h6>
                                         <p class="text-muted fs-12 mb-0"><i class="mdi mdi-clock-outline"></i>
                                             <span>15 min
                                                 ago</span></p>
                                     </div>
                                 </div>
                             </a>
                             <!--end notification-item-->
                             <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                 <div class="d-flex align-items-center">
                                     <div class="flex-shrink-0 me-3">
                                         <img src="{{ asset('frontend/assets/images/featured-job/img-04.png') }}"
                                             class="rounded-circle avatar-xs" alt="user-pic">
                                     </div>
                                     <div class="flex-grow-1">
                                         <h6 class="mt-0 mb-1 fs-14">Applications has been approved</h6>
                                         <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                             <span>45 min
                                                 ago</span></p>
                                     </div>
                                 </div>
                             </a>
                             <!--end notification-item-->
                             <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                 <div class="d-flex align-items-center">
                                     <div class="flex-shrink-0 me-3">
                                         <img src="{{ asset('frontend/assets/images/user/img-01.jpg') }}"
                                             class="rounded-circle avatar-xs" alt="user-pic">
                                     </div>
                                     <div class="flex-grow-1">
                                         <h6 class="mt-0 mb-1 fs-14">Kevin Stewart</h6>
                                         <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                             <span>1 hour
                                                 ago</span></p>
                                     </div>
                                 </div>
                             </a>
                             <!--end notification-item-->
                             <a href="javascript:void(0)" class="text-dark notification-item d-block">
                                 <div class="d-flex align-items-center">
                                     <div class="flex-shrink-0 me-3">
                                         <img src="{{ asset('frontend/assets/images/featured-job/img-01.png') }}"
                                             class="rounded-circle avatar-xs" alt="user-pic">
                                     </div>
                                     <div class="flex-grow-1">
                                         <h6 class="mt-0 mb-1 fs-15">Creative Agency</h6>
                                         <p class="text-muted mb-0 fs-12"><i class="mdi mdi-clock-outline"></i>
                                             <span>2 hour
                                                 ago</span></p>
                                     </div>
                                 </div>
                             </a> --}}
                             <!--end notification-item-->
                         </div>
                         <!--end notification-wrapper-->
                         <div class="notification-footer border-top text-center">
                             <a class="primary-link fs-13" href="javascript:void(0)">
                                 <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                             </a>
                         </div>
                     </div>
                 </li>
                @endauth
                 @guest
                     <li>
                         <a href="{{url('login')}}">Sign In</a>
                     </li>
                 @endguest
                 @auth
                     <li class="list-inline-item dropdown">
                         <a href="javascript:void(0)" class="header-item" id="userdropdown" data-bs-toggle="dropdown"
                             aria-expanded="false">

                            @if (auth()->user()->image)
                            <img src="{{asset('storage/profile-picture/'.Auth::user()->image)}}" alt="mdo" width="35"
                            height="35" class="rounded-circle me-1">
                            @else
                            <img src="{{asset('frontend/assets/images/defultuser.jpg')}}" alt="mdo" width="35"
                            height="35" class="rounded-circle me-1">
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
                             <li>  <a class="dropdown-item" href="{{ route('logout') }}"
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
