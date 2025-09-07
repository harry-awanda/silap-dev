<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ route('dashboard') }}" class="app-brand-link">
      <span class="app-brand-logo demo"></span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">SILAP</span>
    </a>
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto" aria-label="Toggle sidebar">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  @php
    $role = auth()->user()->role ?? null;
    $is = fn(string $pattern) => Request::is($pattern);
  @endphp

  <ul class="menu-inner py-1">
    {{-- Dashboard --}}
    <li class="menu-item {{ $is('dashboard') ? 'active' : '' }}">
      <a href="{{ route('dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div class="text-truncate">Dashboard</div>
      </a>
    </li>


  </ul>
</aside>