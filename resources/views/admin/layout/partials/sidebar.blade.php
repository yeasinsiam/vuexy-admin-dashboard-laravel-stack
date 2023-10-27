<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <x-admin.layout.logo href="/admin" />

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <x-admin.layout.sidebar.menu-item title="Dashboard" iconClass="ti-smart-home" link="/admin" :active="true"
            hasSubMenu>
            <x-admin.layout.sidebar.menu-item title="Analysis" active />
            <x-admin.layout.sidebar.menu-item title="Reports" hasSubMenu>
                <x-admin.layout.sidebar.menu-item title="Sales Report" />
            </x-admin.layout.sidebar.menu-item>
        </x-admin.layout.sidebar.menu-item>

        <x-admin.layout.sidebar.menu-item title="Tables" iconClass="ti-table" link="/admin/tables" :active="false" />
        <x-admin.layout.sidebar.menu-item title="Forms" iconClass="ti-layout-navbar" link="/admin/forms" />
        <x-admin.layout.sidebar.menu-item title="Buttons" iconClass="ti-xbox-b" link="/admin/buttons" />


        <x-admin.layout.sidebar.menu-item title="Auth" iconClass="ti-smart-home" :active="true" hasSubMenu>
            <x-admin.layout.sidebar.menu-item title="Login" link="/admin/auth/login" />

        </x-admin.layout.sidebar.menu-item>

        <x-admin.layout.sidebar.menu-item title="Settings" iconClass="ti-settings" link="/admin/settings" />



        {{-- <x-admin.layout.sidebar.menu-item title="Dashboard" iconClass="ti-smart-home" link="/admin" :active="request()->routeIs('admin.dashboard') || request()->routeIs('admin.dashboard.*')"
            hasSubMenu>

            <x-admin.layout.sidebar.menu-item title="Analysis" active />
            <x-admin.layout.sidebar.menu-item title="Reports" hasSubMenu>
                <x-admin.layout.sidebar.menu-item title="Sales Report" />
            </x-admin.layout.sidebar.menu-item>

        </x-admin.layout.sidebar.menu-item>
        <x-admin.layout.sidebar.menu-item title="Tables" iconClass="ti-table" :link="route('admin.tables')" :active="request()->routeIs('admin.tables')" />
        <x-admin.layout.sidebar.menu-item title="Forms" iconClass="ti-layout-navbar" :link="route('admin.forms')"
            :active="request()->routeIs('admin.forms')" />
        <x-admin.layout.sidebar.menu-item title="Buttons" iconClass="ti-xbox-b" :link="route('admin.buttons')" :active="request()->routeIs('admin.buttons')" />
        <x-admin.layout.sidebar.menu-item title="Settings" iconClass="ti-settings" :link="route('admin.settings')"
            :active="request()->routeIs('admin.settings')" /> --}}


    </ul>
</aside>
