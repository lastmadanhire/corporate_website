<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <h4 class="logo-text">{{ config('app.name') }}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('backend.dashboard') }}">
                <div class="parent-icon"><i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Content Management</div>
            </a>
            <ul>
                <li> <a href="{{ route('backend.showcase') }}"><i class="bx bx-right-arrow-alt"></i>Showcase</a>
                </li>
                <li> <a href="{{ route('backend.story') }}"><i class="bx bx-right-arrow-alt"></i>Story</a>
                </li>
                <li> <a href="{{ route('backend.list.service') }}"><i class="bx bx-right-arrow-alt"></i>Services</a>
                </li>
                <li> <a href="{{ route('backend.list.pricing') }}"><i class="bx bx-right-arrow-alt"></i>Pricing</a>
                </li>
                <li> <a href="{{ route('cta') }}"><i class="bx bx-right-arrow-alt"></i>Call to Action</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
