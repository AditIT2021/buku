<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="bg-light">

    <div class="main d-flex flex-column justify-content-between">
            <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                </div>
            </nav>

            <div class="body-content h-100">
                <div class="row g-0 h-100">
                    <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                            @if (Auth::user()->role_id == 1)
                                <a href="/dashboard" @if (request()->route()->uri == 'dashboard')
                                class='active' @endif>Dashboard</a>
                                <a href="/categories" @if (request()->route()->uri == 'categories')
                                    class='active' @endif || @if (request()->route()->uri == 'category-add')
                                    class='active' @endif || @if (request()->route()->uri == 'category-deleted')
                                    class='active' @endif || @if (request()->route()->uri == 'category-edit/{slug}')
                                    class='active' @endif || @if (request()->route()->uri == 'category-delete/{slug}')
                                    class='active' @endif >Categories</a> 

                                <a href="/books" @if (request()->route()->uri == 'books')
                                    class='active' @endif || @if (request()->route()->uri == 'book-add')
                                    class='active' @endif || @if (request()->route()->uri == 'book-deleted')
                                    class='active' @endif || @if (request()->route()->uri == 'book-edit/{slug}')
                                    class='active' @endif || @if (request()->route()->uri == 'book-delete/{slug}')
                                    class='active' @endif>Books</a> 

                                <a href="/users" @if (request()->route()->uri == 'users')
                                    class='active' @endif || @if (request()->route()->uri == 'registered-users')
                                    class='active' @endif || @if (request()->route()->uri == 'user-detail/{slug}')
                                    class='active' @endif || @if (request()->route()->uri == 'user-ban/{slug}')
                                    class='active' @endif || @if (request()->route()->uri == 'user-baned/{slug}')
                                    class='active' @endif>Users</a> 

                                <a href="/rent-logs" @if (request()->route()->uri == 'rent-logs')
                                    class='active' @endif>Rent Log</a>

                                <a href="/book-return" @if (request()->route()->uri == 'book-return')
                                    class='active' @endif>Pengembalian Buku</a>
                                
                                <a href="/book-rent" @if (request()->route()->uri == 'book-rent')
                                    class='active' @endif>Penyewaan Buku</a>

                                <a href="/logout">Logout</a>
                            @else
                                <a href="profile" @if (request()->route()->uri == 'profile')
                                    class='active' @endif>Profile</a>
                                <a href="list-book" @if (request()->route()->uri == 'list-book')
                                    class='active' @endif>Book List</a>
                                <a href="logout">Logout</a>
                            @endif
                       
                       
                    </div>
                    <div class="content p-5 col-lg-10">
                        @yield('content')
                    </div>
                </div>
            </div>
    </div>

    
    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="{{ asset ('temp/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{ asset ('temp/css/style.css')}}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
	
</head>
<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">Rental Buku.</h2>
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inbox </span>
									</a>
									<a href="page-error-404.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                @if (Auth::user()->role_id == 1)
                    <li>
                        <a class="" href="/dashboard" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					<li>
                        <a class="" href="/books" aria-expanded="false">
                        <i class="fas fa-table"></i>
                        <span class="nav-text">Categori</span>
                    </a>
                    </li>
                    <li>
                        <a class="" href="/categories" aria-expanded="false">
                            <i class="fas fa-book"></i>
							<span class="nav-text">Charts</span>
						</a>
                    </li>
                    <li>
                        <a href="/users" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li>
                        <a href="/rent-logs" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">rent-logs</span>
						</a>
					</li>
                    <li>
                        <a href="/book-return" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">book-return</span>
						</a>
					</li>
                    <li>
                        <a href="/book-rent" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">book-rent</span>
						</a>
					</li>
                    <li>
                        <a href="logout" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">book-rent</span>
						</a>
					</li>
                @else
                    <li>
                        <a href="profile" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">rent-logs</span>
						</a>
					</li>
                    <li>
                        <a href="list-book" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">book-return</span>
						</a>
					</li>
                    <li>
                        <a href="logout" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">book-rent</span>
						</a>
					</li>
                @endif    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
			
                    @yield('content')
                
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    @include('sweetalert::alert')

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Required vendors -->
    <script src="{{ asset ('temp/vendor/global/global.min.js')}}"></script>
	<script src=" {{asset ('temp/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src=" {{asset ('temp/js/custom.min.js')}}"></script>
	<script src=" {{asset ('temp/js/dlabnav-init.js')}}"></script>
	<script src=" {{asset ('temp/js/demo.js')}}"></script>
    <script src=" {{asset ('temp/js/styleSwitcher.js')}}"></script>
</body>
</html> --}}