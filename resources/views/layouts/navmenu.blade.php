<nav class="fl-mega-menu nav-menu">
  <ul id="menu-main-menu" class="menu">
      <li id="menu-item-18768" class="nav-item menu-item-depth-0 {{ Request::is('/') ? 'current-menu-item' : '' }}">
          <a href="{{ url('/') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>Home
          </a>
      </li>
      <li id="menu-item-7" class="nav-item menu-item-depth-0 {{ Request::is('about') ? 'current-menu-item' : '' }}">
          <a href="{{ url('about') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>About us
          </a>
      </li>
      <li id="menu-item-18072" class="nav-item menu-item-depth-0 {{ Request::is('services') ? 'current-menu-item' : '' }}">
          <a href="{{ url('services') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>Services
          </a>
      </li>
      <li id="menu-item-18489" class="nav-item menu-item-depth-0 {{ Request::is('projects') ? 'current-menu-item' : '' }}">
          <a href="{{ url('projects') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>Projects
          </a>
      </li>
      <li id="menu-item-18489" class="nav-item menu-item-depth-0 {{ Request::is('clients') ? 'current-menu-item' : '' }}">
          <a href="{{ url('clients') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>Clients
          </a>
      </li>
      <li id="menu-item-18490" class="nav-item menu-item-depth-0 {{ Request::is('values') ? 'current-menu-item' : '' }}">
          <a href="{{ url('values') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>Core Values
          </a>
      </li>
      <li id="menu-item-18489" class="nav-item menu-item-depth-0 {{ Request::is('team') ? 'current-menu-item' : '' }}">
          <a href="{{ url('team') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>Our Team
          </a>
      </li>
      <li id="menu-item-18489" class="nav-item menu-item-depth-0 {{ Request::is('contact') ? 'current-menu-item' : '' }}">
          <a href="{{ url('contact') }}" class="menu-link main-menu-link item-title">
              <i class="disable"></i>Contact Us
          </a>
      </li>
  </ul>
</nav>
