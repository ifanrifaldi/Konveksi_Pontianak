<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/admin') }}/kpk.png" class="img" style="width: 80%">
            </div>
           
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">


                <li class="nav-item menu-open">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/jenis-produk') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Data Jenis Produk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/produk') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/berita') }}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Data Berita
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/jenis-produk') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Data Profil
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/prosedur') }}" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Data Prosedur
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/galeri') }}" class="nav-link">
                        <i class="nav-icon fas fa-camera"></i>
                        <p>
                            Data Galeri
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/fatner') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Fatner
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Admin
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>
