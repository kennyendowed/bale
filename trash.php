
 
 <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            {{-- <img src="{{asset('images/logo.png')}}" alt="home" class="dark-logo" /> --}}
                            <!--This is light logo icon-->
                            <img src="http://softad.ng/images/logo.png" alt="home" class="light-logo" width="65px" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="{{asset('images/logo.png')}}" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            {{-- <img src="{{asset('images/logo.png')}}" alt="home" class="light-logo" /> --}}
                        </span> 
                    </a>
                </div>
             
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                    </li>
                    <li>
                     
                        @if(checkPermission(['superAdmin']))
                        <a class="profile-pic" href="#"> <img src="{{asset('images/user.png')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">superAdmin</b></a>
                        @elseif(checkPermission(['admin']))
                        <a class="profile-pic" href="#"> <img src="{{asset('images/user.png')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">admin</b></a>
                        @elseif(checkPermission(['staff']))
                        <a class="profile-pic" href="#"> <img src="{{asset('images/user.png')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">staff</b></a>
                        @else
                        I don't have any records!
                      @endif
                    
                    </li>
                    <li>
                        <a href="{{url('logout')}}">Log out</a>
                    </li>
                </ul>
             
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>

        
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow" style="background: #a52f23">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="col-xs-12 col-md-2 col-lg-2" id="header_logo">
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
             <img class="logo logo-newtagline img-responsive" src="/welcomeASSETS/img/logo/chiomaLogo-removebg-preview.png" alt="Fashionomics Africa">
      <img id="fa_white_logo" class="logo logo-newtagline img-responsive" src="/welcomeASSETS/img/logo/chiomaLogo-removebg-preview.png" alt="Fashionomics Africa">
            </a>
          </div>
{{-- 
        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            Zay
        </a> --}}

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learn</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <li class="dropdown-item"><a href="about.html">About Us</a></li>
                            <li class="dropdown-item"><a href="team.html">Our People</a></li>
                            <li class="dropdown-item"><a href="testimonials.html">Testimonials</a></li>
                            <li class="dropdown-item"><a href="faq.html">Faq</a></li>
                            <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <li class="dropdown-item"><a href="about.html">About Us</a></li>
                            <li class="dropdown-item"><a href="team.html">Our People</a></li>
                            <li class="dropdown-item"><a href="testimonials.html">Testimonials</a></li>
                            <li class="dropdown-item"><a href="faq.html">Faq</a></li>
                            <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
              
                    {{-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item"><a href="about.html">About Us</a></li>
                            <li class="dropdown-item"><a href="team.html">Our People</a></li>
                            <li class="dropdown-item"><a href="testimonials.html">Testimonials</a></li>
                            <li class="dropdown-item"><a href="faq.html">Faq</a></li>
                            <li class="dropdown-item"><a href="pricing.html">Pricing</a></li>
                            <li class="dropdown-item" href="https://www.discoverhongkong.com/tc/greater-bay-area.html">國外旅遊</li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                
                <button class="btn btn-outline-success btn-lg">Give </button>

                {{-- <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div> --}}
                {{-- <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                </a> --}}
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->