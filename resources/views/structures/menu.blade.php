<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Painel do Admin</li>
            <li class="treeview">
                <li>
                    <a href="{{ route('admin::playlist') }}">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        <span>Gerenciar Playlists</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin::forum') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Gerenciar Forum</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin::users') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Gerenciar Usuários</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin::user_adm') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Gerenciar Administradores</span>
                    </a>
                </li>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>