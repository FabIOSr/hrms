<aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('adminlte') }}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">
            {{ config('app.name', 'HRMS') }} - Online
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel py-2 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name ?? 'Visitante' }}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">                

                <li class="nav-header">GESTÃO RECURSOS HUMANOS</li>

                <li class="nav-item {{ request()->segment(1) == 'hr' ? 'menu-open': '' }}">
                    <a href="#" class="nav-link {{ request()->segment(1) == 'hr' ? 'active': '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Gestão de Funcionários
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('rh_cargo') }}" class="nav-link {{ request()->routeIs('rh_cargo') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cargo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rh_departamento') }}" class="nav-link {{ request()->routeIs('rh_departamento') ? 'active': '' }}">
                                <i class="{{ request()->routeIs('rh_departamento') ? 'fas': 'far' }} fa-circle nav-icon"></i>
                                <p>Departamento</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rh_ferias') }}" class="nav-link {{ request()->routeIs('rh_ferias') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Férias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rh_funcionario') }}" class="nav-link {{ request()->routeIs('rh_funcionario') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Funcionário</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('rh_turno') }}" class="nav-link {{ request()->routeIs('rh_turno') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Turno</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rh_journey') }}" class="nav-link {{ request()->routeIs('rh_journey') ? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jornada de Trabalho</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Gestão de Benefícios
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Gestão de Ponto e Frequência
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Gestão de Desempenho
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Recrutamento e Seleção
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Treinamento e Desenvolvimento
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>