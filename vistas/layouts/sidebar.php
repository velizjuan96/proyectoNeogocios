<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="./img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
      </div>
      <div class="pull-left info">
        <p>Administrador</p>

      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">Menu Principal</li>
      <li class="active"><a href="index.php"><i class='fa fa-home'></i> <span>Inicio</span></a></li>

        <li class="treeview">
            <a href="#"><i class="fa fa-paw" aria-hidden="true"></i> <span>Ventas</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="../inventario/ventas/ventas.php" class="ajax-request">Ventas</a></li>
                <li><a href="/vendedor/vendedor.php" class="ajax-request">Vendedor</a></li>
                <li><a href="/vendedor/vendedor.php" class="ajax-request">Detalle_Ventas</a></li>
            </ul>
        </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-group'></i> <span>Clientes</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="/cliente/cliente/cliente.php" class="ajax-request">Clientes</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-book'></i> <span>Inventario</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="/inventario/producto/producto.php" class="ajax-request">Productos</a></li>
                <li><a href="/inventario/impuesto/impuesto.php" class="ajax-request">Impuestos</a></li>
                <li><a href="/inventario/descuento/descuento.php" class="ajax-request">Descuento</a></li>


            </ul>
      </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-group'></i> <span>Proveedores</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="/proveedores/proveedor/proveedor.php" class="ajax-request">Proveedores</a></li>
            </ul>
      </li>
      <li class="treeview">
          <a href="#"><i class='fa fa-credit-card'></i> <span>Punto de Ventas</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li class="treeview">
                  <a href="#"><i class='fa fa-group'></i> <span>Cotizacion</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/inventario/producto/productocotizacion.php" class="ajax-request">Productos</a></li>
                    </ul>
              </li>
              <!--  <li><a href="#">Pedidos</a></li>
                <li><a href="#">Facturas</a></li>-->
            </ul>
      </li>
      <li class="treeview">
                  <li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i></a></li>

      </li>


    </ul>
  </section>
</aside>
