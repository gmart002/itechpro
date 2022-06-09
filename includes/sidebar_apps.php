<link href="../../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="..\icofont\css\icofont.css">
<!-- Perfil Común -->
<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/appsvp/web/includes/config.php";
$mysqli = new mysqli(host,user,pass,base);
mysqli_set_charset($mysqli,'utf8');

if($_SESSION['per_session'] == 1){
?>
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
    <div class="menu_section">
      <center><h4 style="color:white">MENU</h4></center>
      <ul class="nav side-menu">
        <li><a href="../neoindex/neoindex.php"><i class="icofont icofont-home"></i><br> Inicio</a></li>

          <!-- Para mostrar en el menu Encuesta de Ruido -->
          <?php
          $query="select * from usu_encuesta_ruido where rut_usu='".$_SESSION['rut_session']."'";
          $resultado=$mysqli->query($query);
          if(mysqli_num_rows($resultado)!=0){
            $query="select * from tbl_expo_ruido where rut_usu='".$_SESSION['rut_session']."'";
            $resultado=$mysqli->query($query);
            if(mysqli_num_rows($resultado)==0){
              ?>
              <!-- <li><a href="../exposicion_ruido/index.php"><i class="icofont icofont-ui-volume"></i><br> Encuesta Ruido </a></li>-->
              <?php
            }
          }
          ?>
          <!-- Fin menu Encuesta de Ruido -->
        <li><a href="../CPHS/comentarios.php"><i class="icofont icofont-checked"></i><br> CPHS</a></li>

          <!-- 
          <li><a><i class="icofont icofont-prescription"></i><br> TMERT <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="../evaluacion_tmert/evaluacion.php">Evaluación TMERT</a></li>
              <li><a href="../evaluacion_tmert/.php">Resultados TMERT</a></li>
            </ul>
          </li> -->


        <li><a href="../admin_archivos/admin_archivos.php"><i class="icofont icofont-library"></i><br> Repositorio Consorcio</a></li>
        <li><a><i class="icofont icofont-home"></i><br> Consorcio <span class="icofont icofont-chevron-down"></span></a>
          <ul class="nav child_menu">
            <!-- PERSONAL -->
            <li><a>Personal <span class="icofont icofont-chevron-down"></span></a>
              <ul class="nav child_menu"> 
                <li><a href="../consorcio/index.php"> Distribución de Personal</a></li>      
                <li><a href="../consorcio/lista_trabajadores.php"> Listado de Personal</a></li>                           
              </ul>
            </li>
            <!-- INFORME DE ACTIVIDADES -->
            <li><a>Informe de Actividades <span class="icofont icofont-chevron-down"></span></a>
              <ul class="nav child_menu"> 
                <li><a href="../inf_con/index.php"> Ingreso Información</a></li>      
                <li><a href="../inf_con/reporte.php"> Reporte Semanal</a></li>                           
              </ul>
            </li>
            <!-- CAMIONETA -->
            <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='19.849.586-7' || $_SESSION['rut_session']=='8.863.012-2'|| $_SESSION['rut_session']=='17.165.844-6'|| $_SESSION['rut_session']=='7.838.606-1'|| $_SESSION['rut_session']=='9.688.201-7'|| $_SESSION['rut_session']=='10.207.418-1' || $_SESSION['rut_session']=='17.107.717-6'){?>
              <li><a>Camionetas<span class="icofont icofont-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="../camionetas/index.php">Agregar Camioneta</a></li>
                  <li><a href="../camionetas/asignar_camioneta.php">Asignar Camioneta</a></li>
                </ul>
              </li>
            <?php }?>
            <!-- PROCEDIMIENTOS -->
            <li><a href="../proced/procedimientos.php"> Procedimientos</a></li>
            <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='8.863.012-2' || $_SESSION['rut_session']=='7.838.606-1'|| $_SESSION['rut_session']=='9.688.201-7'|| $_SESSION['rut_session']=='10.207.418-1'){?>
              <li><a>Jefes de Servicio <span class="icofont icofont-chevron-down"></span></a>
                <ul class="nav child_menu"> 
                    <li><a href="../inf_con/reporte_informe.php"> Reporte Jefes de Servicio</a></li>
                    <li><a href="../inf_con/reporte_asistencia.php"> Reporte Asistencia</a></li>
                    <li><a href="../adh_enc/consorcio.php"> Adherencia Encuesta</a></li>
                    <li><a href="../adh_enc/mes.php"> Adh. Ultimos 30 días</a></li>
                    <li><a href="../status"> Status Trabajador</a></li>

                    <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='7.838.606-1'){
                      ?><li><a href="../inf_con/index2.php"> Ingreso Tranfugo</a></li><?php
                    }?>
                </ul>
              </li>
              <?php }?>
              <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='8.863.012-2' || $_SESSION['rut_session']=='7.838.606-1'|| $_SESSION['rut_session']=='9.688.201-7'|| $_SESSION['rut_session']=='10.207.418-1'|| $_SESSION['rut_session']=='16.966.406-4'|| $_SESSION['rut_session']=='18.799.109-9'|| $_SESSION['rut_session']=='19.849.586-7'|| $_SESSION['rut_session']=='14.326.784-9'){?>
              <!-- GESTION DOCUMENTAL CONSORCIO -->
              <li><a>Gestión Documentos <span class="icofont icofont-chevron-down"></span></a>
                <ul class="nav child_menu"> 
                  <li><a href="../base_consorcio/index.php"> Carga Documentos</a></li>      
                  <li><a href="../base_consorcio/listados.php"> Listado Documentos</a></li>                          
                </ul>
              </li>
              <?php } ?>
          </ul>
        </li>
        <!-- REPORTE ADHERENCIA COVID -->
        <?php if($_SESSION['rut_session']=='14.376.992-5'||$_SESSION['rut_session']=='18.645.974-1'||$_SESSION['rut_session']=='16.970.162-8'||$_SESSION['rut_session']=='17.087.234-7'||$_SESSION['rut_session']=='9.140.081-2'||$_SESSION['rut_session']=='13.568.554-2' ||$_SESSION['rut_session']=='19.589.073-0'){ ?>
          <li><a><i class="icofont icofont-shield-alt"></i><br> COVID <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu"> 
              <li><a href="../adh_enc/index2.php"> Adherencia Encuesta (Total)</a></li>    
              <li><a href="../adh_enc/index3.php"> Adherencia Encuesta (Presenciales)</a></li>
            </ul>
          </li>
        <?php }?>
           <!-- REPORTE ADHERENCIA QRBUS -->
           <?php if($_SESSION['rut_session']=='14.376.992-5'||$_SESSION['rut_session']=='18.645.974-1'||$_SESSION['rut_session']=='16.970.162-8'||$_SESSION['rut_session']=='17.087.234-7'||$_SESSION['rut_session']=='9.140.081-2'||$_SESSION['rut_session']=='13.568.554-2' ||$_SESSION['rut_session']=='19.589.073-0'){ ?>
          <li><a><i class="icofont icofont-qr-code"></i><br> QR BUS <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu"> 
              <li><a href="../qrBus/index.php"> Adherencia Qr Bus/Asiento</a></li>
            </ul>
          </li>
        <?php }?>
          

        <?php if($_SESSION['car_session']=='1'){ ?>
          <li><a><i class="icofont icofont-user"></i><br> Admin <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="../user/user.php">Gestionar Usuarios</a></li>
              <li><a href="../cargo/cargo.php">Gestionar Cargos</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
<!-- Perfin 14 Codelco y administradores -->
<?php }elseif($_SESSION['per_session'] == 14){?>
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
    <div class="menu_section">
      <center><h4 style="color:white">MENU</h4></center>
      <ul class="nav side-menu">
        <li><a href="../neoindex/neoindex.php"><i class="icofont icofont-home"></i><br> Inicio</a></li>
        <li><a href="../CPHS/comentarios.php"><i class="icofont icofont-checked"></i><br> CPHS</a></li>

<!--
          <li><a><i class="icofont icofont-prescription"></i><br> TMERT <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="../evaluacion_tmert/evaluacion.php">Evaluación TMERT</a></li>
              <li><a href="../evaluacion_tmert/informe_notas.php">Resultados TMERT</a></li>
            </ul>
          </li>
-->




        <li><a href="../admin_archivos/admin_archivos.php"><i class="icofont icofont-library"></i><br> Repositorio Consorcio</a></li>
        <li><a href="../admin_archivos/informes_consorcio.php"><i class="icofont icofont-document-folder"></i><br> Informes Consorcio</a></li>
        <li><a><i class="icofont icofont-home"></i><br> Consorcio <span class="icofont icofont-chevron-down"></span></a>
          <ul class="nav child_menu">
            <!-- PERSONAL -->
            <li><a>Personal <span class="icofont icofont-chevron-down"></span></a>
              <ul class="nav child_menu"> 
                <li><a href="../consorcio/index.php"> Distribución de Personal</a></li>      
                <li><a href="../consorcio/lista_trabajadores.php"> Listado de Personal</a></li>  
                <li><a href="../adh_enc/fatiga.php"> Fatiga y Somnolencia</a></li>
                <li><a href="../consorcio/rooster.php"> Rooster vs EEPP</a></li>                        
              </ul>
            </li>
            <!-- INFORME DE ACTIVIDADES -->
            <li><a>Informe de Actividades <span class="icofont icofont-chevron-down"></span></a>
              <ul class="nav child_menu">   
                <li><a href="../inf_con/reporte.php"> Reporte Semanal</a></li>                           
              </ul>
            </li>
            <!-- CAMIONETA -->
            <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='19.849.586-7' || $_SESSION['rut_session']=='8.863.012-2'|| $_SESSION['rut_session']=='17.165.844-6'|| $_SESSION['rut_session']=='7.838.606-1'|| $_SESSION['rut_session']=='9.688.201-7'|| $_SESSION['rut_session']=='10.207.418-1' || $_SESSION['rut_session']=='17.107.717-6'){?>
              <li><a>Camionetas<span class="icofont icofont-chevron-down"></span></a>
                <ul class="nav child_menu">

                  <li><a href="../camionetas/index.php">Agregar Camioneta</a></li>
                  <li><a href="../camionetas/asignar_camioneta.php">Asignar Camioneta</a></li>
                  <li><a href="../adh_enc/km_cami">KM Mantención Camionetas</a></li>
                </ul>
              </li>
            <?php }?>
            <!-- PROCEDIMIENTOS -->
            <li><a href="../proced/procedimientos.php"> Procedimientos</a></li>
            <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='8.863.012-2' || $_SESSION['rut_session']=='7.838.606-1'|| $_SESSION['rut_session']=='9.688.201-7'|| $_SESSION['rut_session']=='10.207.418-1'){?>
            <!-- JEFES DE SERVICIOS -->
            <li><a>Jefes de Servicio <span class="icofont icofont-chevron-down"></span></a>
              <ul class="nav child_menu"> 
                  <li><a href="../inf_con/reporte_informe.php"> Reporte Jefes de Servicio</a></li>
                  <li><a href="../inf_con/reporte_asistencia.php"> Reporte Asistencia</a></li>
                  <li><a href="../adh_enc/consorcio.php"> Adherencia Encuesta</a></li>
                  <li><a href="../adh_enc/mes.php"> Adh. Ultimos 30 días</a></li>
                  <li><a href="../status"> Status Trabajador</a></li>
                  <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='7.838.606-1'){
                    ?><li><a href="../inf_con/index2.php"> Ingreso Tranfugo</a></li><?php
                  }?>
              </ul>
            </li>
              <?php }?>
            <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='8.863.012-2' || $_SESSION['rut_session']=='7.838.606-1'|| $_SESSION['rut_session']=='9.688.201-7'|| $_SESSION['rut_session']=='10.207.418-1'|| $_SESSION['rut_session']=='16.966.406-4'|| $_SESSION['rut_session']=='18.799.109-9'|| $_SESSION['rut_session']=='19.849.586-7'|| $_SESSION['rut_session']=='14.326.784-9'){?>
            <!-- GESTION DOCUMENTAL CONSORCIO -->
            <li><a>Gestión Documentos <span class="icofont icofont-chevron-down"></span></a>
              <ul class="nav child_menu"> 
                <li><a href="../base_consorcio/index.php"> Carga Documentos</a></li>      
                <li><a href="../base_consorcio/listados.php"> Listado Documentos</a></li>                          
              </ul>
            </li>
            <?php } ?>
          </ul>
        </li>
        <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='17.165.844-6' || $_SESSION['rut_session']=='8.989.119-1' || $_SESSION['rut_session']=='8.863.012-2' || $_SESSION['rut_session']=='7.838.606-1' || $_SESSION['rut_session']=='17.107.717-6'){ ?>
          <li><a href="../adh_enc/finde.php"><i class="icofont icofont-list"></i><br> Adherencia<br> Fin de semana</a></li>
        <?php }?>
        <?php if($_SESSION['rut_session']=='14.376.992-5'){ ?>
          <li><a><i class="icofont icofont-shield-alt"></i><br> COVID <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu"> 
            <li><a href="../adh_enc/index2.php"> Adherencia Encuesta (Total)</a></li>    
              <li><a href="../adh_enc/index3.php"> Adherencia Encuesta (Presenciales)</a></li> 
            </ul>
          </li>
        <?php }?>
        <!-- REPORTE ADHERENCIA QRBUS -->
        <?php if($_SESSION['rut_session']=='14.376.992-5'||$_SESSION['rut_session']=='18.645.974-1'||$_SESSION['rut_session']=='16.970.162-8'||$_SESSION['rut_session']=='17.087.234-7'||$_SESSION['rut_session']=='9.140.081-2'||$_SESSION['rut_session']=='13.568.554-2' ||$_SESSION['rut_session']=='19.589.073-0'){ ?>
          <li><a><i class="icofont icofont-qr-code"></i><br> QR BUS <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu"> 
              <li><a href="../qrBus/index.php"> Adherencia Qr Bus/Asiento</a></li>
            </ul>
          </li>
        <?php }?>
        <?php if($_SESSION['car_session']=='1'){ ?>
          <li><a><i class="icofont icofont-user"></i><br> Admin <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="../user/user.php">Gestionar Usuarios</a></li>
              <li><a href="../cargo/cargo.php">Gestionar Cargos</a></li>
              <!--<li><a href="../area/area.php">Gestionar Áreas</a></li>
              <li><a href="../ctto/ctto.php">Gestionar Contratos</a></li>
              <li><a href="../empre/empre.php">Gestionar Empresas</a></li>
              <li><a href="../nivel/nivel.php">Gestionar Niveles</a></li>
              <li><a href="../unidad/unidad.php">Gestionar Unidades</a></li>-->
            </ul>
          </li>
        <?php } ?>

        <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='16.966.406-4'){ ?>
          <li><a><i class="icofont icofont-group"></i><br> RR.HH. <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="../personal/persona.php">Gestión Persona</a></li>
              <li><a href="../personal/proceso.php">Gestión Proceso</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
<!--     PERFIL PARA QUE VEA JEJ-->
<?php } elseif($_SESSION['per_session'] == 88){?>

  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
    <div class="menu_section">
      <center><h4 style="color:white">MENU</h4></center>
      <ul class="nav side-menu">
        <li><a href="../neoindex/neoindex.php"><i class="icofont icofont-home"></i><br> Inicio</a></li>
          <?php
          $query="select * from usu_encuesta_ruido where rut_usu='".$_SESSION['rut_session']."'";
          $resultado=$mysqli->query($query);
          if(mysqli_num_rows($resultado)!=0){
            $query="select * from tbl_expo_ruido where rut_usu='".$_SESSION['rut_session']."'";
            $resultado=$mysqli->query($query);
            if(mysqli_num_rows($resultado)==0){
              ?>
              <li><a href="../exposicion_ruido/index.php"><i class="icofont icofont-ui-volume"></i><br> Encuesta Ruido </a></li>
              <?php
            }
          }
          ?>
          
        <li><a href="../CPHS/comentarios.php"><i class="icofont icofont-checked"></i><br> CPHS</a></li>
        <li><a href="../admin_archivos/admin_archivos.php"><i class="icofont icofont-library"></i><br> Repositorio Consorcio</a></li>
        <li><a><i class="icofont icofont-home"></i><br> Consorcio <span class="icofont icofont-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../consorcio/index.php"> Distribución de Personal</a></li>
            <li><a href="../consorcio/lista_trabajadores.php"> Listado de Personal</a></li>
            <li><a href="../consorcio/rooster.php"> Rooster vs EEPP</a></li>
            <li><a href="../adh_enc/consorcio.php"> Adherencia Encuesta</a></li>
            <li><a href="../status"> Status Trabajador</a></li>           
            <li><a href="../proced/procedimientos.php"> Procedimientos</a></li>
            <?php if($_SESSION['rut_session']=='14.376.992-5' || $_SESSION['rut_session']=='19.849.586-7' || $_SESSION['rut_session']=='8.863.012-2'|| $_SESSION['rut_session']=='17.165.844-6'|| $_SESSION['rut_session']=='7.838.606-1'|| $_SESSION['rut_session']=='9.688.201-7'|| $_SESSION['rut_session']=='10.207.418-1'|| $_SESSION['rut_session']=='16.402.949-2' || $_SESSION['rut_session']=='17.107.717-6'){?>
              <li><a>Camionetas<span class="icofont icofont-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="../camionetas/index.php">Agregar Camioneta</a></li>
                  <li><a href="../camionetas/asignar_camioneta.php">Asignar Camioneta</a></li>
                </ul>
              </li>
            <?php }?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- Perfil Codelco VP no Administrador -->

<?php }elseif($_SESSION['per_session'] == 79){?>
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
    <div class="menu_section">
      <center><h4 style="color:white">MENU</h4></center>
      <ul class="nav side-menu">
        <li><a href="../neoindex/neoindex.php"><i class="icofont icofont-home"></i><br> Inicio</a></li>  
        <li><a href="../CPHS/comentarios.php"><i class="icofont icofont-checked"></i><br> CPHS</a></li>
        <li><a href="../admin_archivos/admin_archivos.php"><i class="icofont icofont-library"></i><br> Repositorio Consorcio</a></li>
        <li><a><i class="icofont icofont-home"></i><br> Consorcio <span class="icofont icofont-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="../consorcio/index.php"> Distribución de Personal</a></li> 
            <li><a href="../consorcio/lista_trabajadores.php"> Listado de Personal</a></li>
            <li><a href="../status"> Status Trabajador</a></li>           
          </ul>
        </li>
        <?php if($_SESSION['rut_session']=='14.376.992-5'||$_SESSION['rut_session']=='18.645.974-1'||$_SESSION['rut_session']=='16.970.162-8'||$_SESSION['rut_session']=='17.087.234-7'||$_SESSION['rut_session']=='9.140.081-2'||$_SESSION['rut_session']=='13.568.554-2'||$_SESSION['rut_session']=='19.589.073-0'||$_SESSION['rut_session']=='99.999.999-9' ){ ?>
          <li><a><i class="icofont icofont-shield-alt"></i><br> COVID <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu"> 
            <li><a href="../adh_enc/index2.php"> Adherencia Encuesta (Total)</a></li>    
              <li><a href="../adh_enc/index3.php"> Adherencia Encuesta (Presenciales)</a></li>
            </ul>
            </li>
        <?php }?>

        <!-- REPORTE ADHERENCIA QRBUS -->
        <?php if($_SESSION['rut_session']=='14.376.992-5'||$_SESSION['rut_session']=='18.645.974-1'||$_SESSION['rut_session']=='16.970.162-8'||$_SESSION['rut_session']=='17.087.234-7'||$_SESSION['rut_session']=='9.140.081-2'||$_SESSION['rut_session']=='13.568.554-2' ||$_SESSION['rut_session']=='19.589.073-0'||$_SESSION['rut_session']=='99.999.999-9'){ ?>
          <li><a><i class="icofont icofont-qr-code"></i><br> QR BUS <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu"> 
              <li><a href="../qrBus/index.php"> Adherencia Qr Bus/Asiento</a></li>
            </ul>
          </li>
        <?php }?>

      </ul>
    </div>
  </div>
<!-- SOLO PERFIL COVID NADA MAS -->
<?php }elseif($_SESSION['per_session'] == 77){?>
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
    <div class="menu_section">
      <center><h4 style="color:white">MENU</h4></center>
      <ul class="nav side-menu">
        <li><a href="../neoindex/neoindex.php"><i class="icofont icofont-home"></i><br> Inicio</a></li> 
          <li><a><i class="icofont icofont-shield-alt"></i><br> COVID <span class="icofont icofont-chevron-down"></span></a>
            <ul class="nav child_menu"> 
            <li><a href="../adh_enc/index2.php"> Adherencia Encuesta (Total)</a></li>    
              <li><a href="../adh_enc/index3.php"> Adherencia Encuesta (Presenciales)</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
<?php }?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> <!-- Anuel bbsita -->