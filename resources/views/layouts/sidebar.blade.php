
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('asset/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Veri Gustaf</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url('anggota')}}">
                    <i class="fa fa-users"></i>
                    <span>Anggota</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin::kk::index') }}">
                    <i class="fa fa-user-times"></i> <span>Kk</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hand-paper-o"></i>
                    <span>Attendances</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-hand-paper-o"></i> Attendances</a></li>
                    <li><a href="#"><i class="fa fa-clock-o"></i> Cut Offs</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-trophy"></i>
                    <span>Awards</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bank"></i> <span>Bank Accounts</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i> <span>Departments</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-briefcase"></i> Departments</a></li>
                    <li><a href="#"><i class="fa fa-gavel"></i> Designation Items</a></li>
                    <li><a href="#"><i class="fa fa-gavel"></i> Designation/Promotions</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Documents</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-file"></i> Documents</a></li>
                    <li><a href="#"><i class="fa fa-file-text"></i> Documents Type</a></li>

                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Event</span>
                </a>
            </li>
            <li >
                <a href="#">
                    <i class="fa fa-money"></i> <span>Expenses</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-tree"></i> <span>Holidays</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rocket"></i> <span>Leaves</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-rocket"></i> Leaves</a></li>

                    <li><a href="#"><i class="fa fa-sun-o"></i> Leaves Types</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-sticky-note"></i> <span>Notice</span></a></li>
            <li><a href="#"><i class="fa fa-list-alt"></i> <span>Roles</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i> <span>Recruitment</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Candidates</a></li>

                    <li><a href="#"><i class="fa fa-circle-o"></i> Vacancies</a></li>
                </ul>
            </li>
            <li class="treeview">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i> <span>Trainings</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Trainings</a></li>

                    <li><a href="#"><i class="fa fa-circle-o"></i> Trainings Programs</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
