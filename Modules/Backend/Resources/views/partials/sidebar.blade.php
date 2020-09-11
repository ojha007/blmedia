<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="#" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview {{request()->is($urlPrefix) ? 'active' :' '}}">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>

        </li>
        <li class="treeview {{
            request()->is([$urlPrefix.'/news',
                          $urlPrefix.'/news/*'])
           ? 'active' : ''}} ">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>News Management</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{request()->is($urlPrefix.'/news') ? 'active':''}}">
                    <a href="{{route($routePrefix.'.news.index')}}">All News</a>
                </li>
                <li class="{{request()->is($urlPrefix.'/news/create') ? 'active':''}}">
                    <a href="{{route($routePrefix.'.news.create')}}">Add News</a>
                </li>
                {{--                <li><a href="flot.html">Breaking News</a></li>--}}
                {{--                <li><a href="inline.html">Special News</a></li>--}}
            </ul>
        </li>
        <li class="treeview {{request()->is($urlPrefix.'/news-category',
                    $urlPrefix.'/news-category/create') ? 'active':''}}">

            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>News Category</span>
                <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{request()->is($urlPrefix.'/news-category') ? 'active': ''}}">
                    <a href="{{route($routePrefix.'.news-category.index')}}">
                        All Category
                    </a></li>
                <li class="{{request()->is($urlPrefix.'/news-category/create') ?'active':'' }}">
                    <a href="{{route($routePrefix.'.news-category.create')}}">
                        Add Category
                    </a></li>
            </ul>
        </li>
        {{--        <li class="treeview ">--}}
        {{--            <a href="#">--}}
        {{--                <i class="fa fa-files-o"></i>--}}
        {{--                <span>Pages Management</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <i class="fa fa-angle-left pull-right"></i>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li class="active"><a href="morris.html">All Pages</a></li>--}}
        {{--                <li><a href="chartjs.html">Add Page</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        <li class="treeview">--}}
        {{--            <a href="#">--}}
        {{--                <i class="fa fa-laptop"></i>--}}
        {{--                <span>UI Elements</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <i class="fa fa-angle-left pull-right"></i>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>--}}
        {{--                <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>--}}
        {{--                <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>--}}
        {{--                <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>--}}
        {{--                <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>--}}
        {{--                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        <li class="treeview">--}}
        {{--            <a href="#">--}}
        {{--                <i class="fa fa-edit"></i> <span>Forms</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <i class="fa fa-angle-left pull-right"></i>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>--}}
        {{--                <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>--}}
        {{--                <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        <li class="treeview">--}}
        {{--            <a href="#">--}}
        {{--                <i class="fa fa-table"></i> <span>Tables</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <i class="fa fa-angle-left pull-right"></i>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
        {{--                <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <a href="../calendar.html">--}}
        {{--                <i class="fa fa-calendar"></i> <span>Calendar</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <small class="label pull-right bg-red">3</small>--}}
        {{--              <small class="label pull-right bg-blue">17</small>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        {{--        <li>--}}
        {{--            <a href="../mailbox/mailbox.html">--}}
        {{--                <i class="fa fa-envelope"></i> <span>Mailbox</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <small class="label pull-right bg-yellow">12</small>--}}
        {{--              <small class="label pull-right bg-green">16</small>--}}
        {{--              <small class="label pull-right bg-red">5</small>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        {{--        <li class="header">Users And Role</li>--}}
        {{--        <li class="treeview">--}}
        {{--            <a href="#">--}}
        {{--                <i class="fa fa-folder"></i> <span>Examples</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <i class="fa fa-angle-left pull-right"></i>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>--}}
        {{--                <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>--}}
        {{--                <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>--}}
        {{--                <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>--}}
        {{--                <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>--}}
        {{--                <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>--}}
        {{--                <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>--}}
        {{--                <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>--}}
        {{--                <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        <li class="treeview">--}}
        {{--            <a href="#">--}}
        {{--                <i class="fa fa-share"></i> <span>Multilevel</span>--}}
        {{--                <span class="pull-right-container">--}}
        {{--              <i class="fa fa-angle-left pull-right"></i>--}}
        {{--            </span>--}}
        {{--            </a>--}}
        {{--            <ul class="treeview-menu">--}}
        {{--                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>--}}
        {{--                <li class="treeview">--}}
        {{--                    <a href="#"><i class="fa fa-circle-o"></i> Level One--}}
        {{--                        <span class="pull-right-container">--}}
        {{--                  <i class="fa fa-angle-left pull-right"></i>--}}
        {{--                </span>--}}
        {{--                    </a>--}}
        {{--                    <ul class="treeview-menu">--}}
        {{--                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>--}}
        {{--                        <li class="treeview">--}}
        {{--                            <a href="#"><i class="fa fa-circle-o"></i> Level Two--}}
        {{--                                <span class="pull-right-container">--}}
        {{--                      <i class="fa fa-angle-left pull-right"></i>--}}
        {{--                    </span>--}}
        {{--                            </a>--}}
        {{--                            <ul class="treeview-menu">--}}
        {{--                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>--}}
        {{--                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>--}}
        {{--                            </ul>--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </li>--}}
        {{--                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>--}}
        {{--            </ul>--}}
        {{--        </li>--}}
        {{--        <li class="header">Setting</li>--}}
    </ul>
</section>
<!-- /.sidebar -->
