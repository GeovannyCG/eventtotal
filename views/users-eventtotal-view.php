<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventTotal | Usuarios</title>
    <!-- link de favicon -->
    <link rel="shortcut icon" href="../assets/images/logotipo-main-curt.ico" type="image/x-icon">
    <!-- link css de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--CSS para los icons de Boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link de css propio -->
    <link rel="stylesheet" href="../assets/css/style-general-min.css">


</head>

<body>

    <!--SVG para el navbar-->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="menu" viewBox="0 0 16 16">
            <path d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </symbol>

        <symbol id="recargar" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
        </symbol>

        <symbol id="ajustes" viewBox="0 0 16 16">
            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
        </symbol>

        <symbol id="cloud" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
        </symbol>

        <symbol id="calendar" viewBox="0 0 16 16">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
        </symbol>

        <symbol id="book" viewBox="0 0 16 16">
            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
        </symbol>

    </svg>

    <!--Navbar prinicipal de la App-->
    <nav class="fixed-top">
        <div id="content-right">
            <button class="btn-menu" id="btnMenu">
                <svg class="bi pe-none" width="30" height="30" role="img" aria-label="Home">
                    <use xlink:href="#menu" />
                </svg>
            </button>

            <img src="../assets/images/logotipo-main-curt.png" alt="logotipo" width="60px" height="auto">
            <h2>EventTotal</h2>
        </div>

        <div id="content-left">

            <button class="btn-recargar" id="btnRecargar" title="Actualizar">
                <svg class="bi pe-none" width="30" height="30" role="img" aria-label="Home">
                    <use xlink:href="#recargar" />
                </svg>
            </button>

            <div class="btn-recargar" id="divConnection" title="Estado de conexion">
                <svg class="bi pe-none" width="30" height="30" role="img" aria-label="Home">
                    <use xlink:href="#cloud" />
                </svg>
            </div>


            <div class="dropdown" style="margin-top: 5px;">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="40" height="40" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li style="color: grey; font-size: 14px; padding: 7px 7px;">
                        <?php echo $_SESSION['email']; ?>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"><i class='bx bxs-file-plus' style='color:grey'></i> <span class="link-disable">Agendar
                                evento</span></a></li>
                    <li><a class="dropdown-item" href="../Profile/"><i class='bx bxs-user-rectangle' style='color:#718ae9'></i>
                            <span>Mi perfil</span></a></li>
                    <li><a class="dropdown-item" href="../Logout/"> <i class='bx bxs-log-in' style='color:#ff0000'></i> <span> <b>Cerrar sesion</b></span></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item" href="./assets/documents/Políticas de Privacidad EventTotal.pdf" target="_blank">
                            <span class="opciones-documentacion">Politica de Privacidad</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="./assets/documents/Condiciones de Servicio EventTotal.pdf" target="_blank">
                            <span class="opciones-documentacion">Condiciones del Servicio</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- Contenedor del menu lateral y de sus opciones  -->
    <div class="sidebar d-flex" id="asidebar-main">
        <ul class="nav d-block">

            <li>
                <a href="../Home/">
                    <i class='bx bxs-home'></i>
                    <span>Inicio</span>
                </a>
            </li>

            <li>
                <a href="../Recetario/">
                    <i class='bx bxs-book'></i>
                    <span>Recetario</span>
                </a>
            </li>

            <li>
                <a href="./events-eventease.html">
                    <i class='bx bxs-party'></i>
                    <span>Eventos</span>
                </a>
            </li>

            <li>
                <a href="./lounge-eventease.html">
                    <i class='bx bxs-arch'></i>
                    <span>Salones</span>
                </a>
            </li>

            <li>
                <a href="../Inventory/">
                    <i class='bx bxs-cube'></i>
                    <span>Inventario</span>
                </a>
            </li>

            <li>
                <a href="../Users/">
                    <i class='bx bx-group'></i>
                    <span>Personal</span>
                </a>
            </li>

            <li>
                <a href="../Insumos/">
                    <i class='bx bxs-baguette'></i>
                    <span>Insumos</span>
                </a>
            </li>

        </ul>
    </div>

    <!-- Contenedor para el contenido prinicipal del apartado Users-->
    <div class="wrapper" id="contenedor-main">
        <!-- Titulo de Apartado -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Usuarios</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- Termina Titulo de Apartado -->

        <!-- Ingresar Nuevos Usuario-->
        <div class="ingresar_usuarios mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <center>
                        <h1 style="font-size: 26px;">INGRESAR NUEVOS USUARIOS</h1>
                    </center>
                    <br>
                    <center>
                        <form class="row g-3 needs-validation" method="POST" action="../Actions-Users/">
                            <div class="col-md-4">
                                <label class="form-label">Nombres</label>
                                <input type="text" class="form-control" placeholder="Ingresa tus nombres" required
                                    name="nombre">
                            </div>
        
                            <div class="col-md-4">
                                <label class="form-label">Apellidos</label>
                                <input type="text" class="form-control" placeholder="Ingresa tus apellidos" required name="apellidos">
                            </div>
        
                            <div class="col-md-4">
                                <label class="form-label">Correo Electronico</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" aria-describedby="inputGroupPrepend"
                                        placeholder="ejemplo@gmail.com" required name="correo">
                                </div>
                            </div>
        
                            <div class="col-md-2">
                                <label class="form-label">Fecha de Cumpleaños</label>
                                <input type="date" class="form-control" required name="cumpleaños">
                            </div>
        
                            <div class="col-md-2">
                                <label class="form-label">Roll</label>
                                <input type="text" class="form-control" list="rolesList" required name="roll">
                                <datalist id="rolesList">
                                    <option value="admin">
                                    <option value="capitan">
                                    <option value="cocinero">
                                    <option value="mesero">
                                </datalist>
                            </div>
        
                            <div class="col-md-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" required autocomplete="current-password"
                                    name="contraseña">
                            </div>
        
                            <div class="col-md-5">
                                <label class="form-label">Foto (Solo Archivos jpeg o png)</label>
                                <input class="form-control" type="file" accept="image/png,image/jpeg" name="img_usuario">
                            </div>
        
                            <div class="col-12">
                                <input class="btn btn-primary" type="submit" name="create" value="Registrar Usuario">
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
        <!-- Termina Ingresar Nuevos Usuario-->

        <!-- Administrar Usuarios-->
        <div class="Administrar_usuario">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <!-- Tabla de Usuarios -->
                        <center>
                            <h1 style="font-size: 26px;">ADMINISTRACIÓN DE USUARIOS</h1>
                        </center>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;">#</th>
                                    <th scope="col" style="text-align: center;">Nombres</th>
                                    <th scope="col" style="text-align: center;">Apellidos</th>
                                    <th scope="col" style="text-align: center;">Cumpleaños</th>
                                    <th scope="col" style="text-align: center;">Correo</th>
                                    <th scope="col" style="text-align: center;">Contraseña</th>
                                    <th scope="col" style="text-align: center;">Roll</th>
                                    <th scope="col" style="text-align: center;">Intentos</th>
                                    <th scope="col" style="text-align: center;">Restricción</th>
                                    <th scope="col" style="text-align: center;">Actualizar</th>
                                    <th scope="col" style="text-align: center;">Borrar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($getUsers as $usuario){?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $usuario['id_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['nombres_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['apellidos_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['cumpleainos_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['correo_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['contrasenia_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['roll_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['intentos_u'];?></td>
                                        <td style="text-align: center;"><?php echo $usuario['restriccion_u'];?></td>
                                        <td>
                                            <center><button class="btn btn-warning btn-sm" id="btn-edit<?php echo $usuario['id_u'];?>" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $usuario['id_u'];?>">Editar</button></center>
                                        </td>
                                        <td>
                                            <form action="../Actions-Users/?id=<?php echo $usuario['id_u'];?>" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                                                <button type="submit" class="btn btn-danger btn-sm" name="delete">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
            
                                    <!-- Formato para actuatlizar usuario -->
                                    <div class="modal fade" id="exampleModal<?php echo $usuario['id_u'];?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5"><?php echo $usuario['correo_u'];?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="row g-3 needs-validation" action="../Actions-Users/?id=<?php echo $usuario['id_u'];?>" method="POST">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="form-label">Nombres</label>
                                                            <input type="text" class="form-control" placeholder="Ingresa tus nombres" required name="nombre" value="<?php echo $usuario['nombres_u'];?>">
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-label">Apellidos</label>
                                                            <input type="text" class="form-control" placeholder="Ingresa tus apellidos" required name="apellido" value="<?php echo $usuario['apellidos_u'];?>">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label class="form-label">Correo Electronico</label>
                                                            <div class="input-group has-validation">
                                                                <span class="input-group-text">@</span>
                                                                <input type="text" class="form-control" placeholder="ejemplo@gmail.com" required name="correo" value="<?php echo $usuario['correo_u'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="form-label">Fecha de Cumpleaños</label>
                                                            <input type="date" class="form-control" required name="cumpleaños" value="<?php echo $usuario['cumpleainos_u'];?>">
                                                        </div>
                                                        <div class="col-2">
                                                            <label class="form-label">Roll</label>
                                                            <input type="text" class="form-control" list="rolesList" required name="roll" value="<?php echo $usuario['roll_u'];?>">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Contraseña</label>
                                                            <input type="password" class="form-control" required autocomplete="current-password" name="contraseña" value="<?php echo $usuario['contrasenia_u'];?>">
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="form-label">Foto (Solo Archivos jpeg o png)</label>
                                                            <input class="form-control" type="file" accept="image/png,image/jpeg" name="img_usuario" value="<?php echo $usuario['foto_u'];?>">
                                                        </div>
                                                        <div class="col-2">
                                                            <label class="form-label">Intentos</label>
                                                            <input type="text" class="form-control" required name="intentos" value="<?php echo $usuario['intentos_u'];?>">
                                                        </div>
                                                        <div class="col-2">
                                                            <label class="form-label">Restricción</label>
                                                            <input type="text" class="form-control" list="restriccionList" required name="restriccion" value="<?php echo $usuario['restriccion_u'];?>">
                                                            <datalist id="restriccionList">
                                                                <option value="none">
                                                                <option value="blocked">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="page-title-right">
                                                        <ol class="breadcrumb m-0">
                                                            <li class="breadcrumb-item active">Nota: En Restricción none = desbloqueado y blocked = bloqueado, además en intentos si hay un numero del 1 en adelante cambielo a 0</li>
                                                        </ol>
                                                    </div>
                                                    <br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button class="btn btn-success" type="submit" name="update">Guardar Cambios</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Termina Formato para actuatlizar usuario -->
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Termina Tabla de Usuarios -->
                </div>
                <!-- Termina Card Body -->
            </div>
            <!-- Termina Card Shadow -->
        </div>
        <!-- Termina Administrar Usuarios-->
    </div>
    <!-- Termina Contenedor Principal-->


    <!-- Script de JS Boostrap  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!--Script para funcion de boton-->
    <script src="../assets/js/general-items-function-min.js"></script>
</body>

</html>
