<!DOCTYPE html>
<html lang="en">
    @include('front_end_include/head')


    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{{ url('front_end/home') }}"><span>Address Book</span></a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i> {{ Auth::user()->email }}
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="{{ route('front_end/changePassword') }}"><i class="halflings-icon user"></i> Change Password</a></li>
                                    <li><a href="{{ route('front_end/logout') }}"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="{{ url('front_end/home') }}"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>	

                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Report</span><span class="label label-important"> 3 </span></a>
                                <ul>
                                    <li><a class="submenu" href="submenu.html"><i class="icon-print"></i><span class="hidden-tablet"> Print Label Page</span></a></li>
                                    <li><a class="submenu" href="submenu2.html"><i class="icon-book"></i><span class="hidden-tablet"> Adb Track Report</span></a></li>
                                </ul>	
                            </li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-cog"></i><span class="hidden-tablet"> Setup</span><span class="label label-important"> 3 </span></a>
                                <ul>
                                    <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Department</span></a></li>
                                    <li><a class="submenu" href="submenu2.html"><i class="icon-adress-book"></i><span class="hidden-tablet"> Designation</span></a></li>
                                    <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Company Type</span></a></li>
                                    <li><a class="submenu" href="submenu3.html"><i class="icon-cog"></i><span class="hidden-tablet"> Label Setup</span></a></li>
                                    <li><a class="submenu" href="submenu3.html"><i class="icon-user"></i><span class="hidden-tablet"> Users</span></a></li>
                                </ul>	
                            </li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-edit"></i><span class="hidden-tablet"> Input</span><span class="label label-important"> 3 </span></a>
                                <ul>
                                    <li><a class="submenu" href="submenu.html"><i class="icon-book"></i><span class="hidden-tablet"> Address Book</span></a></li>
                                    <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Data Backup</span></a></li>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">

                     @yield('content')

                    <!--/.fluid-container-->

                    <!-- end: Content -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <div class="modal hide fade" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
                </div>
            </div>

            <div class="clearfix"></div>

            <footer>

                <p>
                    <span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>

                </p>

            </footer>

            <!-- start: JavaScript-->

            @include('front_end_include/java_script_include')

            <!-- end: JavaScript-->

    </body>
</html>
