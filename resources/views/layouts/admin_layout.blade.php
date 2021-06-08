<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Portfolio | Admin | Noman Abdullah</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
    @yield('style')

    <style>
        .right_col{
            min-height: 110vh !important;
        }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('admin.dashboard') }}" class="site_title"><i class="fa fa-paw"></i> <span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('storage/img/image.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Noman Abdullah</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <ul class="nav side-menu">
                    <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-user"></i> User </a></li>
                    <li><a href="{{ route('admin.about.index') }}"><i class="fa fa-user"></i> About </a></li>
                    <li><a href="{{ route('admin.fact.index') }}"><i class="fa fa-info"></i> Facts </a></li>
                    <li><a href="{{ route('admin.skill.index') }}"><i class="fa fa-cogs"></i> Skills </a></li>
                    <li><a href="{{ route('admin.education.index') }}"><i class="fa fa-book"></i> Education </a></li>
                    <li><a href="{{ route('admin.experience.index') }}"><i class="fa fa-briefcase"></i> Experience </a></li>
                    <li><a href="{{ route('admin.service.index') }}"><i class="fa fa-sitemap"></i> Service </a></li>
                    <li><a><i class="fa fa-product-hunt"></i> Portfolio <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{ route('admin.category.index') }}">Category</a></li>
                        <li><a href="{{ route('admin.project.index') }}">Project</a></li>
                        <li><a href="{{ route('admin.image.index') }}">Project Image</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('admin.testimonial.index') }}"><i class="fa fa-quote-left"></i> Testimonial </a></li>
                    <li><a href="{{ route('admin.contact.index') }}"><i class="fa fa-envelope-o"></i> Contact </a></li>
                    <li><a href="{{ route('admin.social.index') }}"><i class="fa fa-github-square"></i> Socail Icon </a></li>
                    </ul>
                </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="{{ route('admin.logout') }}"><i class="fa fa-power-off"></i> Log Out</a>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin/build/js/custom.min.js') }}"></script>
    @yield('script')

  </body>
</html>
