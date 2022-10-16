<aside class="sidebar-left">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="index.html">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Category</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.category.create') }}"><i class="fa fa-angle-right"></i> Category Add Form</a></li>
                <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-angle-right"></i> List of Categories</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i>
              <span>Products</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.product.form') }}"><i class="fa fa-angle-right"></i> Product Add Form</a></li>
                <li><a href="{{ route('admin.product.index') }}"><i class="fa fa-angle-right"></i> List of Products</a></li>
              </ul>
            </li>

            {{-- color --}}
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i>
              <span>Color</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.color.create') }}"><i class="fa fa-angle-right"></i> Product Add Form</a></li>
                <li><a href="{{ route('admin.color.index') }}"><i class="fa fa-angle-right"></i> List of Products</a></li>
              </ul>
            </li>
            
            {{-- color --}}
            {{-- brand --}}
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i>
              <span>Brands</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('brands.create') }}"><i class="fa fa-angle-right"></i> Create Brand</a></li>
                <li><a href="{{ route('brands.index') }}"><i class="fa fa-angle-right"></i> List of Brands</a></li>
              </ul>
            </li>
            {{-- Brand --}}
            <li class="treeview">
              <a href="charts.html">
              <i class="fa fa-pie-chart"></i>
              <span>Charts</span>
              <span class="label label-primary pull-right">new</span>
              </a>
            </li>
            <li class="treeview">
            <li class="treeview">
              <a href="#">
              <i class="fa fa-laptop"></i>
              <span>UI Elements</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="general.html"><i class="fa fa-angle-right"></i> General</a></li>
                <li><a href="icons.html"><i class="fa fa-angle-right"></i> Icons</a></li>
                <li><a href="buttons.html"><i class="fa fa-angle-right"></i> Buttons</a></li>
                <li><a href="typography.html"><i class="fa fa-angle-right"></i> Typography</a></li>
              </ul>
            </li>
            <li>
              <a href="widgets.html">
              <i class="fa fa-th"></i> <span>Widgets</span>
              <small class="label pull-right label-info">08</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-edit"></i> <span>Forms</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
                <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-table"></i> <span>Tables</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="tables.html"><i class="fa fa-angle-right"></i> Simple tables</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-envelope"></i> <span>Mailbox </span>
              <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
              <ul class="treeview-menu">
                <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
              <i class="fa fa-folder"></i> <span>Examples</span>
              <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
                <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
  </aside>