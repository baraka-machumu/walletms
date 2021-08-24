

<aside class="left-sidebar" data-sidebarbg="skin5" >
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">

            <input type="text" id="ul-sidebar-filter" onkeyup="myFunction()" placeholder="Search for names.."
                   class="form-control" style="background-color: #1F262D; color: white; ">

            <ul id="sidebarnav" class="p-t-30">

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>


                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-settings"></i><span class="hide-menu">Management</span></a>

                    <ul aria-expanded="false" class="collapse  first-level">


                        <li class="sidebar-item"><a href="{{url('access/users')}}" class="sidebar-link">

                                <i class="mdi mdi-note-outline"></i><span class="hide-menu">Manage Users</span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{url('access/roles')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Roles</span></a></li>
                        <li class="sidebar-item"><a href="{{url('access/permissions')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Permissions</span></a></li>
                        <li class="sidebar-item"><a href="{{url('access/profiles')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"><a href="{{url('access/user-profiles')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">User Profile</span></a></li>
                        <li class="sidebar-item"><a href="{{url('services')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Services</span></a></li>
                        <li class="sidebar-item"><a href="{{url('gateways')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Gateways</span></a></li>
                        <li class="sidebar-item"><a href="{{url('view-currency-code')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Currrency Codes</span></a></li>
                        <li class="sidebar-item"><a href="{{url('view-currency-code')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Exchange Rates</span></a></li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
