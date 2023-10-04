<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <img  width="40px" height="40px" src="{{ asset('backend/assets/img/fmk.webp') }}" alt="logo" class="img-fluid w-10">
        {{-- <a href="index.html"><h5>Fm<span style="color:red;font-weight:bold;">K</span>ongo</h5></a> --}}
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">fmk</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown active">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class=active><a class="nav-link" href="index-0.html">Dashboard</a></li>
            <li><a class="nav-link" href="index.html">Gérer les évènements</a></li>
          </ul>
        </li>
        {{-- <li class="menu-header">Starter</li> --}}
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Gérer le site</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('admin.slider.index')}}">Slider</a></li>
            {{-- <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> --}}
          </ul>
        </li>

        {{-- <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
              <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
              <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
          </li> --}}

        {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}


      </ul>

      </div>
    </aside>
  </div>
