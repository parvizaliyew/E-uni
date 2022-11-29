<nav class="sidebar dark_sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
    <a href="{{ route('admin.index') }}"><img src="{{asset('front/')}}/img/BIFS-logo-Header.png" alt=""></a>
    <div class="sidebar_close_icon d-lg-none">
    <i class="ti-close"></i>
    </div>
    </div>
    <ul id="sidebar_menu">
    <li class="mm-active">
    <a  href="{{ route('admin.index') }}" aria-expanded="false">
    <div class="icon_menu">
    <img src="{{asset('manager/')}}/img/menu-icon/dashboard.svg" alt="">
    </div>
    <span>Admin</span>
    </a>
    </li>

    @role('admin')
    <li class="mm-active">
        <a  href="{{ route('admin.profil_add') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-user"></i>
        </div>
        <span>Profil Əlavə et</span>
        </a>
        </li>
    @endrole


    <li class="mm-active">
        <a  href="{{ route('admin.setting') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-settings"></i>
        </div>
        <span>Əlaqə</span>
        </a>
    </li>
    <li class="mm-active">
        <a  href="{{ route('admin.partner') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-star"></i>
        </div>
        <span>Partnyorlar</span>
        </a>
    </li>
        <li class="mm-active">
            <a  href="{{ route('admin.brend') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class="ti-world"></i>
                </div>
                <span>Brendlər</span>
            </a>
        </li>
        <li class="mm-active">
            <a  href="{{ route('admin.counter') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class="ti-stats-up"></i>
                </div>
                <span>Counter</span>
            </a>
        </li>
        <li class="mm-active">
            <a  href="{{ route('admin.project') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class="ti-stats-up"></i>
                </div>
                <span>Layihələr</span>
            </a>
        </li>

        <li class="mm-active">
        <a  href="{{ route('admin.product') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-shopping-cart-full"></i>
        </div>
        <span>Məhsullar</span>
        </a>
        </li>

        <li class="mm-active">
            <a  href="{{ route('admin.message') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class="ti-stats-up"></i>
                </div>
                <span>Mesajlar</span>
            </a>
        </li>
    </ul>
    </nav>
