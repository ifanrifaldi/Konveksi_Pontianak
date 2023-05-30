@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

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


                <li class="nav-item">
                    <a href="{{ url('admin') }}" class="nav-link {{checkRouteActive('admin')}}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/profil') }}" class="nav-link {{checkRouteActive('admin/profil')}}">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                    
                </li>
                
                <li class="nav-item">
                    <a href="{{ url('admin/jenis-produk') }}" class="nav-link {{checkRouteActive('admin/jenis-produk')}}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Data Jenis Produk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/produk') }}" class="nav-link {{checkRouteActive('admin/produk')}}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/berita') }}" class="nav-link {{checkRouteActive('admin/berita')}}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Data Blog
                        </p>
                    </a>
                </li>

               

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Prosedur
                        </p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/prosedur/order') }}" class="nav-link {{checkRouteActive('admin/prosedur/order')}}">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Prosedur Order
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/prosedur/desain') }}" class="nav-link {{checkRouteActive('admin/prosedur/desain')}}">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Prosedur Desain
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/prosedur/produksi') }}" class="nav-link {{checkRouteActive('admin/prosedur/produksi')}}">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Prosedur Produksi
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/galeri') }}" class="nav-link {{checkRouteActive('admin/galeri')}}">
                        <i class="nav-icon fas fa-camera"></i>
                        <p>
                            Data Galeri
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/mitra') }}" class="nav-link {{checkRouteActive('admin/mitra')}}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Mitra
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/admin') }}" class="nav-link {{checkRouteActive('admin/admin')}}">
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
