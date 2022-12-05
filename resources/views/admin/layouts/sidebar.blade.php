<nav class="sidebar dark_sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
    <a href="{{ route('admin.index') }}"><img src="{{asset('manager/')}}/img/logo_white.png" alt=""></a>
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

    <li class="mm-active">
        <a  href="{{ route('news-event.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-calendar"></i>
        </div>
        <span>News&Events</span>
        </a>
    </li>
    <li class="mm-active">
        <a  href="{{ route('slider.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-gallery"></i>
        </div>
        <span>Slider</span>
        </a>
    </li>
    <li class="mm-active">
        <a  href="{{ route('leadership.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-medall"></i>
        </div>
        <span>Leadership</span>
        </a>
    </li>
    <li class="mm-active">
        <a  href="{{ route('leadership.index') }}" aria-expanded="false">
        <div class="icon_menu">
            <i class="ti-medall"></i>
        </div>
        <span>Proqram's Degree</span>
        </a>
    </li>
    </ul>
    </nav>
