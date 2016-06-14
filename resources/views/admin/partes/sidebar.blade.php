
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll" id="side-la">
                <ul id="side-menu" class="nav">
                    <div class="clearfix"></div>
                    <li id="li1" ><a data-toggle="tooltip" data-placement="right" title="Visualizar los Registros de Usuario" href="{{ route('admin.usuarios.index') }}">
                        <i class="fa fa-users fa-fw">
                            <div class="icon-bg bg-orange"></div>
                        </i>
                        <span class="menu-title">Usuarios</span></a>
                    </li>
                    <li id="li2">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los registros de paises, provincias y localidades" href="{{ route('admin.paises.index') }}">
                           <i class="fa fa-street-view">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Lugares</span>
                        </a>
                    </li>
                    <li id="li3">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los registros de rubros de proveedores" href="{{ route('admin.rubros.index') }}">
                            <i class="fa fa-cutlery">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Rubros de Proveedores</span>
                        </a>
                    </li>
                    <li id="li4">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los registros de proveedores" href="{{ route('admin.proveedores.index') }}">
                            <i class="fa fa-truck">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Proveedores</span>
                        </a>
                    </li>
                    <li id="li5">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los registros de caja" href="{{ route('admin.cajas.registrosCajas') }}">
                            <i class="fa fa-money">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Registros de Cajas</span>
                        </a>
                    </li>
                    <li id="li6">
                        <a data-toggle="tooltip" data-placement="right" title="Abrir Caja" href="{{ route('admin.cajas.index') }}">
                            <i class="fa fa-calculator">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Caja</span>
                        </a>
                    </li>


                    <li id="li7">
                        <a data-toggle="tooltip" data-placement="right" title="Editar parámetros de la gráfica" href="{{ route('admin.materiales.index') }}">
                            <i class="fa fa-dropbox">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Parámetros generales</span>
                        </a>
                    </li>

                    <li id="li8">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los registros de artículos" href="{{ route('admin.articulos.index') }}">
                            <i class="fa fa-tags">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Artículos</span>
                        </a>
                    </li>
                    <li id="li9">
                        <a data-toggle="tooltip" data-placement="right" title="Ir a los registros de nuestros clientes" href="{{ route('admin.clientes.index') }}">
                            <i class="fa fa-child">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Clientes</span>
                        </a>
                    </li>
                    <li id="li10">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los registros de pedidos" href="{{ route('admin.pedidos.index') }}">
                            <i class="fa fa-pencil-square-o">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Pedidos</span>
                        </a>
                    </li>
                    <li id="li11">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los registros de ventas" href="{{ route('admin.cajas.index') }}">
                            <i class="fa fa-archive">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Historial de ventas</span>
                        </a>
                    </li>





                </ul>
            </div>
        </nav>
