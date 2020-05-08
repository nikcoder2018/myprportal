
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{ route('dashboard') }}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            
            <li class=" nav-item"><a href="{{route('users.tenant')}}"><i class="feather icon-user"></i><span class="menu-title">Tenants</span></a></li>
            
            <li class=" nav-item"><a href="{{route('users.landlord')}}"><i class="feather icon-user-plus"></i><span class="menu-title">Landloards</span></a></li>

            <li class=" nav-item"><a href="{{route('properties.index')}}"><i class="feather icon-layers"></i><span class="menu-title">Properties</span></a></li>

            <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Starter kit">Payments</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="">Pending Invoices</a></li>
                    <li><a class="menu-item" href="">Pending Receipts</a></li>
                    <li><a class="menu-item" href="">Delayed Payments</a></li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Starter kit">R & M</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="" data-i18n="1 column">1 column</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-message-square"></i><span class="menu-title">Chats</span></a></li>

            <li class=" nav-item"><a href="#"><i class="feather icon-settings"></i><span class="menu-title">Settings</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="">General</a></li>
                    <li><a class="menu-item" href="">Profile</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->