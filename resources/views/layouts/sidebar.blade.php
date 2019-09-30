            <nav class="sidebar-nav ps ps--active-y">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="main.html">
                            <i class="nav-icon icon-speedometer"></i> Tablero
                        </a>
                    </li>

                    <li class="nav-title">Estructura</li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="{{ url('/comite')}}">
                            <i class="icon-people"></i> Comité</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="nav-icon icon-user"></i> Activos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="nav-icon icon-user"></i> Jubilados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="nav-icon icon-user"></i> C. T.</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="icon-location-pin"></i> Regiones </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/region')}}">
                                    <i class="nav-icon icon-flag"></i> Mostrar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="icon-notebook"></i> Delegaciones</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/delegacion')}}">
                                    <i class="nav-icon icon-eye"></i> Mostrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="nav-icon icon-doc"></i> Membretado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('delegacion.create')}}">
                                    <i class="nav-icon icon-note"></i> Nueva</a>
                            </li>                                                        
                        </ul>
                    </li>

<!--                     <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="icon-doc"></i> Secretarías</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="base/breadcrumb.html">
                                    <i class="nav-icon icon-puzzle"></i> Mostrar</a>
                            </li>
                        </ul>
                    </li>    -->                 

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="icon-user-following"></i> Profesores</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="base/breadcrumb.html">
                                    <i class="nav-icon icon-puzzle"></i> Mostrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/breadcrumb.html">
                                    <i class="nav-icon icon-puzzle"></i> Nuevo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/breadcrumb.html">
                                    <i class="nav-icon icon-puzzle"></i> Genero</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="base/breadcrumb.html">
                                    <i class="nav-icon icon-puzzle"></i> Cargo</a>
                            </li>                                                                                    
                        </ul>
                    </li>


                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: -386px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 386px; height: 1002px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 279px; height: 723px;"></div>
                </div>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>