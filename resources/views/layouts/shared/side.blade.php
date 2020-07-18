  <!-- Navigation
    ================================================== -->

    <!-- Responsive Navigation Trigger -->
    <a href="{{ route('home') }}" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

    <div class="dashboard-nav">
        <div class="dashboard-nav-inner">

            <ul data-submenu-title="Main">
                <li class="active"><a href="{{ route('home') }}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                <li><a href="#"><i class="sl sl-icon-bell"></i> Notifications <span class="nav-tag messages">2</span></a></li>
                <li><a href="#"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
            </ul>

            <ul data-submenu-title="Listings">
                <li><a href="#"><i class="sl sl-icon-bubbles"></i> Comments</a></li>
            </ul>

            <ul data-submenu-title="Account">
                <li><a href="#"><i class="sl sl-icon-user"></i> My Profile</a></li>
                <li>
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- Navigation / End -->
