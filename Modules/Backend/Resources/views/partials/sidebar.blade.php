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
        <li class="{{request()->is($urlPrefix) ? 'active' :' '}}">
            <a href="{{route($routePrefix.'.')}}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
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
        <li class="treeview {{request()->is($urlPrefix.'/news-category',
                    $urlPrefix.'/news-category/create') ? 'active':''}}">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Contacts</span>
                <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
            </a>

            <ul class="treeview-menu">
                @foreach($contactTypes as $type)
                    @if($loop->index >0)
                        <li class="{{request()->is($urlPrefix.'/'.$type,
                                $urlPrefix.'/'.$type .'/*') ? 'active': ''}}">
                            <a href="{{route($routePrefix.'.'.$type.'.index')}}">
                                {{ucwords($type)}}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>

        <li class="{{request()->is($urlPrefix.'/advertisements',$urlPrefix.'/advertisements/*') ? 'active' :''}}">
            <a href="{{route($routePrefix.'.advertisements.index')}}">
                <i class="fa  fa-sliders"></i> <span>Advertisement</span>
            </a>
        </li>
        <li class="header">SETTINGS</li>
        <li class="treeview {{request()->is($urlPrefix.'/news-category',
                    $urlPrefix.'/news-category/create') ? 'active':''}}">
            <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Settings</span>
                <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
            </a>
            @php($settings =['site-settings','email-setting','images-setting'])
            <ul class="treeview-menu">
                @foreach($settings as $setting)
                    <li class="{{request()->is($urlPrefix.'/settings/*') ? 'active': ''}}">
                        <a href="{{route($routePrefix.'.settings.index',$setting)}}">
                            {{ucwords(str_replace('-', ' ' ,$setting))}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</section>
<!-- /.sidebar -->
