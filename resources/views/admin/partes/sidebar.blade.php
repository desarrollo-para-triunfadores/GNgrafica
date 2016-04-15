
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
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los Registros de Paises, Provincias y Localidades" href="{{ route('admin.paises.index') }}">
                           <i class="fa fa-street-view">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Lugares</span>
                        </a>
                    </li>
                    <li id="li3">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los Registros de Rubros de Empresa" href="{{ route('admin.rubros.index') }}">
                            <i class="fa fa-cutlery">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Rubros de Empresa</span>
                        </a>
                    </li>
                    <li id="li4">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los Registros de Empresas/Proveedores" href="{{ route('admin.empresas.index') }}">
                            <i class="fa fa-building-o">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Empresas</span>
                        </a>
                    </li>
                    <li id="li5">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los Registros de Marcas" href="{{ route('admin.marcas.index') }}">
                            <i class="fa fa-registered">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Marcas</span>
                        </a>
                    </li>
                    <li id="li6">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los Registros de Tipos de Producto" href="{{ route('admin.tipoproducto.index') }}">
                            <i class="fa fa-dropbox">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Tipos de Producto</span>
                        </a>
                    </li>
                    <li id="li7">
                        <a data-toggle="tooltip" data-placement="right" title="Visualizar los Registros de Productos" href="{{ route('admin.productos.index') }}">
                           <i class="fa fa-beer">
                                <div class="icon-bg bg-orange"></div>
                            </i>
                            <span class="menu-title">Productos</span>
                        </a>
                    </li>                 
                </ul>
            </div>
        </nav>
