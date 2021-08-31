<li class="menu-section">
  <h4 class="menu-text"> Configuration </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item {{ (request()->is('dashboard/configuration/generals*')) ? 'menu-item-active' : '' }}">
  <a href="/dashboard/configuration/generals" class="menu-link">
    <i class="menu-icon fas fa-bars"></i>
    <span class="menu-text"> General </span>
  </a>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/configuration/section*')) ? 'menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <i class="menu-icon fas fa-shield-alt"></i>
    <span class="menu-text"> Section Editor </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/configuration/section/home*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/management/roles" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Home </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/configuration/section/features*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/configuration/section/features" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Features </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/management/users*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/management/users" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> About </span>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('dashboard/management/users*')) ? 'menu-item-active' : '' }}">
      <a href="/dashboard/management/users" class="menu-link">
        <i class="menu-bullet menu-bullet-line"><span></span></i>
        <span class="menu-text"> Services </span>
      </a>
    </li>
    <li class="menu-item {{ (request()->is('dashboard/management/users*')) ? 'menu-item-active' : '' }}">
    <a href="/dashboard/management/users" class="menu-link">
      <i class="menu-bullet menu-bullet-line"><span></span></i>
      <span class="menu-text"> Portfolio </span>
    </a>
  </li>
    </ul>
  </div>
</li>
