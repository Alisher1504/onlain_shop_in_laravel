<div class="sidebar" data-color="purple" data-background-color="white">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        CT
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('category') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('category') }}">
            <i class="material-icons">dashboard</i>
            <p>Category</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('add') ? 'active' : '' }}">
          <a class="nav-link" href="{{ url('add') }}">
            <i class="material-icons">dashboard</i>
            <p>add Category</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
