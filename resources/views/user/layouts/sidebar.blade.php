<nav class="sidebar-nav">
    <ul id="sidebarnav" class="mb-4 pb-2">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
        <span class="hide-menu"></span>
      </li>
      <li class="sidebar-item">
        <a
          class="sidebar-link sidebar-link primary-hover-bg"
          href="/diagnose"
          aria-expanded="false"
        >
          <span class="aside-icon p-2 bg-light-primary rounded-3">
            <i class="ti ti-layout-dashboard fs-7 text-primary"></i>
          </span>
          <span class="hide-menu ms-2 ps-1">Diagnosa</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a
          class="sidebar-link sidebar-link warning-hover-bg"
          href="{{ route('diagnosa.riwayat') }}"
          aria-expanded="false"
        >
          <span class="aside-icon p-2 bg-light-warning rounded-3">
            <i class="ti ti-article fs-7 text-warning"></i>
          </span>
          <span class="hide-menu ms-2 ps-1">Riwayat Diagnosa</span>
        </a>
      </li>           
    </ul>
    <div class="pb-3 options text-nowrap">
    </div>
  </nav>