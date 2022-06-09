<?php //session_start();
//include '../compromisos/func_compromisos.php';
?>
<div class="top_nav">
          <div><?php //include '../includes/noti.php'; ?></div>
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!-- <img src="../images/users/<?php echo $_SESSION['rut_session']?>.jpg" alt="Foto"><?php echo $_SESSION['nom_session']?>&nbsp;<?php echo $_SESSION['ape_session'] ?> -->
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="../includes/cerrar.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown" > 
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green" id="cuenta_elementos"> </span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      <?php 
/*
                      $noti = new compromiso();
                      $noti->cargarNotificaciones($_SESSION['rut_session']); 
                      $noti->cargarNotificacionesVencidas($_SESSION['rut_session']);
                      $noti->cargarNotificacionesSolCie($_SESSION['rut_session']);
                      $noti->cargarNotificacionesPendientesAccp($_SESSION['rut_session']);*/
                      ?>
                  </ul>
                </li> 
              </ul>
            </nav>
          </div>
        </div>