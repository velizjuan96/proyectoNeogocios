<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
header("location: login.php");
exit;
}
?>
<?php include('vistas/layouts/htmlheader.php'); ?>
<body class="skin-blue sidebar-mini sidebar-collapse">
  <div class="wrapper">
    <?php include('vistas/layouts/mainheader.php'); ?>
    <?php include('vistas/layouts/sidebar.php'); ?>
    <div class="content-wrapper" >
      <section class="content" id="contenido">

          <section class="content-header">
              <h1>
                  Michoacanas-SB
                  <small>Tu mejor opcion</small>
              </h1>
              <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                  <li class="active">Here</li>
              </ol>
          </section>

                  <!-- Main content -->
          <img src="img/helados.png" width="400" height="500" align="left">
          <!-- Main content -->
          <section class="content container-fluid">
              <div class="col-md-offset-9">
                  <!-- Info Boxes Style 2 -->
                  <div class="info-box bg-yellow">
                      <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">Inventory</span>
                          <span class="info-box-number">200</span>

                          <div class="progress">
                              <div class="progress-bar" style="width: 50%"></div>
                          </div>
                          <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->

                  <!-- /.info-box -->
                  <div class="info-box bg-red">
                      <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">Clientes</span>
                          <span class="info-box-number">114,381</span>

                          <div class="progress">
                              <div class="progress-bar" style="width: 70%"></div>
                          </div>
                          <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                  <div class="info-box bg-aqua">
                      <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">Direct Messages</span>
                          <span class="info-box-number">163,921</span>

                          <div class="progress">
                              <div class="progress-bar" style="width: 40%"></div>
                          </div>
                          <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>

                  <!--------------------------
                    | Your Page Content Here |
                    -------------------------->

          </section>

      </section>
    </div>
    <?php include('vistas/layouts/footer.php'); ?>
  </div>
  <?php include('vistas/layouts/scripts.php'); ?>
</body>
</html>
