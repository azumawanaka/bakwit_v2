<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @auth()
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @endauth
                <a class="nav-link {{ request()->routeIs('barangays.index*') ? 'active' : '' }}" href="{{ route('barangays.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
                    Barangays
                </a>
                <a class="nav-link {{ request()->routeIs('calamity.index*') ? 'active' : '' }}" href="{{ route('calamity.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-cloud"></i></div>
                    Calamity
                </a>
                <a class="nav-link {{ request()->routeIs('gsis.index*') ? 'active' : '' }}" href="{{ route('gsis.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-map-marker"></i></div>
                    GIS
                </a>
                <a class="nav-link {{ request()->routeIs('mdrrmo.centers*') ? 'active' : '' }}" href="{{ route('mdrrmo.centers') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                    {{ auth()->user()->type === 1 ? 'MDRRMO' : 'BDRRMO' }}
                </a>

                @if(auth()->user()->type === 1)
                    <a class="nav-link {{ request()->routeIs('bdrrmo.index*') ? '' : 'collapsed' }}"
                       href="#"
                       data-bs-toggle="collapse"
                       data-bs-target="#collapseBdrrmo"
                       aria-expanded="{{ request()->routeIs('bdrrmo.index*') ? true : false }}"
                       aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-city"></i></div>
                        BDRRMO
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse {{ request()->routeIs('bdrrmo.index*') ? 'show' : '' }}"
                     id="collapseBdrrmo"
                     aria-labelledby="headingOne"
                     data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ request()->routeIs('bdrrmo.index*') ? 'active' : '' }}" href="{{ route('bdrrmo.index') }}">Evacuation Centers</a>
                    </nav>
                </div>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>