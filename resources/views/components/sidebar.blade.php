<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="home">MYWARUNG</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="home">MW</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown">
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class='{{ Request::is('home') ? 'active' : '' }}'>
                        <a href="#"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                    </li>
                </ul>
            </li>

            {{-- untuk admin --}}
                <li class="nav-item dropdown">
                    <ul class="sidebar-menu">
                        <li class="menu-header">Master</li>
                        <li class='{{ Request::is('products') ? 'active' : '' }}'>
                            <a href="3"><i class="fas fa-box"></i><span>Data
                                    Barang</span></a>
                        </li>
                        <li class='{{ Request::is('categories') ? 'active' : '' }}'>
                            <a href="3"><i class="fas fa-bars"></i><span>Data
                                    Category</span></a>
                        </li>
                        <li class="menu-header">Transaksi</li>
                        <li class='{{ Request::is('') ? 'active' : '' }}'>
                            <a href="#"><i class="fas fa-file"></i><span>Data Transaksi</span></a>
                        </li>
                        <li class='{{ Request::is('') ? 'active' : '' }}'>
                            <a href="#"><i class="fas fa-users"></i><span>Setting Diskon</span></a>
                        </li>
                        <li class="menu-header">Report</li>
                        <li class='{{ Request::is('') ? 'active' : '' }}'>
                            <a href="#"><i class="fas fa-newspaper"></i><span>Laporan
                                </span></a>
                        </li>
                        <li class="menu-header">SYSTEM</li>
                        <li class='{{ Request::is('users') ? 'active' : '' }}'>
                            <a href="#"><i class="fas fa-users"></i><span>Users</span></a>
                        </li>
                        <li class='{{ Request::is('') ? 'active' : '' }}'>
                            <a href="#"><i class="fas fa-cogs"></i><span>Settings</span></a>
                        </li>
                    </ul>
                </li>

            {{-- untuk user dan staff --}}
                <li class="menu-header">Transaksi</li>
                <li class='{{ Request::is('') ? 'active' : '' }}'>
                    <a href="#"><i class="fas fa-file"></i><span>Data Transaksi</span></a>
                </li>
        </ul>
    </aside>
</div>


{{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>All Products</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('products.index') }}">Product Item</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('categories.index') }}">Category Product</a>
                </li>
            </ul>
        </li> --}}
