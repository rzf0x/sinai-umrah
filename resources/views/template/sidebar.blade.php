<div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="">
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i
                        class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Dashboard</li>

            <li class="sidebar-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-title">Master Data</li>

            <li class="sidebar-item {{ Route::is('list-pendaftar') ? 'active' : '' }}">
                <a href="{{ route('list-pendaftar') }}" class='sidebar-link'>
                    <i class="bi bi-person-add"></i>
                    <span>List Pendaftar</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('list-testimoni') ? 'active' : '' }}">
                <a href="{{ route('list-testimoni') }}" class='sidebar-link'>
                    <i class="bi bi-chat-dots"></i>
                    <span>List Testimoni</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('list-contact') ? 'active' : '' }}">
                <a href="{{ route('list-contact') }}" class='sidebar-link'>
                    <i class="bi bi-telephone-fill"></i>
                    <span>List Kontak</span>
                </a>
            </li>

            <hr>

            <form action="{{ route('logout') }}" method="POST" class="w-100">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    Sign Out
                </button>
            </form>

        </ul>
    </div>
</div>
