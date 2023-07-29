<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventTotal | Inicio</title>
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
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bxs-file-plus' style='color:#5395e7'></i> <span>Agendar
                                evento</span></a></li>
                    <li><a class="dropdown-item" href="../Profile/"><i class='bx bxs-user-rectangle' style='color:#718ae9'></i>
                            <span>Mi perfil</span></a></li>
                    <li><a class="dropdown-item" href="../Logout/"> <i class='bx bxs-log-in' style='color:#ff0000'></i> <span> <b>Cerrar sesion</b></span></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li><a class="dropdown-item" href="../assets/documents/Políticas de Privacidad EventTotal.pdf" target="_blank">
                            <span class="opciones-documentacion">Politica de Privacidad</span></a></li>

                    <li><a class="dropdown-item" href="../assets/documents/Condiciones de Servicio EventTotal.pdf" target="_blank">
                            <span class="opciones-documentacion">Condiciones del Servicio</span></a></li>

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
                <a href="../Salones/">
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

    <!-- Contenedor para el contenido prinicipal del apartado en cuestion ################-->
    <div class="wrapper" id="contenedor-main">
        <h1>¡Hola!, Bienvenido de nuevo...</h1>
        <center>
            <div class="resume-activity">
                <div class="target" id="target-eventos"><i class='bx bxs-calendar-alt' style='color:#ffffff'><span> Eventos: <?php print $countEvents  ?></span></i></div>
                <div class="target" id="target-salones"><i class='bx bx-building-house' style='color:#ffffff'><span> Salones: <?php print $coutnSalones ?> </span></i></div>
                <div class="target" id="target-empleados"><i class='bx bx-user' style='color:#ffffff'><span> Empleados: <?php print $countEmploys ?></span></i></div>
                <div class="target" id="target-recetas"><i class='bx bx-book' style='color:#ffffff'><span> Recetas: <?php print $countRecipes ?></span></i></div>
            </div>
        </center>
        <div class="contenedor-cards">
            <div class="contenedor-principal" style="margin-top: 20px;">
                <h3>Proximos eventos</h3>
                <?php if ($countEvents == 0) { ?>
                    <div class="content-empty">
                        <p class="message-advertenci">¡Vaya, no hay ningun evento proximamente!</p>
                        <center>
                            <svg class="bi pe-none" width="80" height="80" role="img" aria-label="Home" style="fill: grey;">
                                <use xlink:href="#calendar" />
                            </svg>
                        </center>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <?php foreach ($showEvents as $events) : ?>
                            <div class="col-sm-6 mb-3 mb-sm-0" id="target" style="margin-top: 20px;">
                                <div class="card">
                                    <div class="card-header">
                                        <h6>Evento: <?php echo $events['tipo_e'] ?>.</h6>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nombre del cliente: <?php echo $events['cliente_e'] ?>.</h5>
                                        <h6 style="color: #718ae9;">Informacion acerca del evento:</h6>
                                        <p class="card-text">
                                            <li>fecha y hora agendada: <u><?php echo $events['fecha_hora_e'] ?></u>. </li>
                                        </p>
                                        <p class="card-text">
                                            <li>Numero de invitados: <u><?php echo $events['invitados_e'] ?></u>. </li>
                                        </p>
                                        <a class="btn" style="background-color: #718ae9; color: white;" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $events['id_e'] ?>">Mas detalles</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop<?php echo $events['id_e'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Evento: "<?php echo $events['tipo_e'] ?>".</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 style="color: #718ae9; margin-bottom: 20px;"><u>Detalles del evento:</u></h6>
                                            <ul>
                                                <li>
                                                    <p class="details-modal"><b>Nombre del cliente: </b><?php echo $events['cliente_e'] ?>.</p>
                                                </li>
                                                <li>
                                                    <p class="details-modal"><b>Fecha y hora agendada: </b><?php echo $events['fecha_hora_e'] ?>.</p>
                                                </li>
                                                <li>
                                                    <p class="details-modal"><b>Tematica elegida: </b><?php echo $events['tema_e'] ?>.</p>
                                                </li>
                                                <li>
                                                    <p class="details-modal"><b>Numero de invitados: </b><?php echo $events['invitados_e'] ?>.</p>
                                                </li>
                                            </ul>
                                            <h6 style="color: #718ae9; margin-bottom: 20px;"><u>Datos administrativos:</u></h6>
                                            <ul>
                                                <li>
                                                    <p class="details-modal"><b>ID Empleado a cargo: </b><?php echo $events['id_u'] ?>.</p>
                                                </li>
                                                <li>
                                                    <p class="details-modal"><b>ID Salon asignado: </b><?php echo $events['id_s'] ?>.</p>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" style="background-color: #718ae9; color: white;" data-bs-dismiss="modal">Listo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php } ?>
            </div>

            <div class="contenedor-principal" style="margin-top: 40px;">
                <h3>Resetas <span class="badge bg-success">Nuevas</span></h3>

                <!-- Tarjetas dinamicas sobre las recretas recien agregadas -->

                <?php if ($countRecipes == 0) { ?>
                    <div class="content-empty">
                        <p class="message-advertenci">¡Mamamia, no hay recetas agregadas recientemente!</p>
                        <center>
                            <svg class="bi pe-none" width="80" height="80" role="img" aria-label="Home" style="fill: grey;">
                                <use xlink:href="#book" />
                            </svg>
                        </center>
                    </div>
                <?php } else { ?>
                    <?php foreach ($shoeRecipes as $recipes) : ?>

                        <div class="card mb-3" id="target" style="width: 90%; margin-top: 20px; margin-left: 5%; background-color: rgb(252, 252, 150);">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $recipes['titulo_r'] ?></h3>
                                <h6 style="color: #718ae9; margin-bottom: 20px;">Acerca de la receta:</h6>
                                <p class="card-text">
                                    <li><i>Tiempo de preparacion:</i> <u><?php echo $recipes['tiempo_preparacion_r'] ?>.</u> </li>
                                </p>
                                <p class="card-text">
                                    <li><i>Porciones con este platillo:</i> <u>para <?php echo $recipes['porciones_r'] ?> personas.</u></li>
                                </p>
                                <p class="card-text">
                                    <li><i>Dificultad de preparacion:</i> <u><?php echo $recipes['nivel_dificultad_r'] ?>.</u></li>
                                </p>
                                <p class="card-text">
                                    <li><i>Tipo de platillo:</i> <u><?php echo $recipes['clasificacion_r'] ?>.</u></li>
                                </p>

                                <a class="btn" style="background-color: #718ae9; color: white;" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $recipes['id_r'] ?>">Receta completa</a>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop<?php echo $recipes['id_r'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content" style="background-color: rgb(252, 252, 150);">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Detalles de la receta "<?php echo $recipes['titulo_r'] ?>".</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>
                                                <p class="details-modal"><b>Ingredientes: </b></p>
                                                <p><i><?php echo $recipes['ingredientes_r'] ?></i></p>
                                            </li>
                                            <li>
                                                <p class="details-modal"><b>Instrucciones: </b></p>
                                                <p><i><?php echo $recipes['instrucciones_r'] ?></i></p>
                                            </li>
                                            <li>
                                                <p class="details-modal"><b>Tiempo de preparacion: </b></p>
                                                <p><i><?php echo $recipes['tiempo_preparacion_r'] ?></i></p>
                                            </li>
                                            <li>
                                                <p class="details-modal"><b>Porciones: </b></p>
                                                <p><i><?php echo $recipes['porciones_r'] ?></i></p>
                                            </li>
                                            <li>
                                                <p class="details-modal"><b>Nivel de dificultad: </b></p>
                                                <p><i><?php echo $recipes['nivel_dificultad_r'] ?></i></p>
                                            </li>
                                            <li>
                                                <p class="details-modal"><b>Consejos adicionales: </b></p>
                                                <p><i><?php echo $recipes['consejos_adicionales_r'] ?></i></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="background-color: #718ae9; color: white;" data-bs-dismiss="modal">Cerrar receta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Modal para crear un nuevo evento-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="../New-Event/" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agendar nuevo evento</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-event-information">
                            <div>
                                <label for="name_client" class="form-label">Nombre del cliente:</label>
                                <input type="text" name="name_client" id="name_client" class="form-control">
                            </div>

                            <div>
                                <label for="tematic_party" class="form-label">Tematica:</label>
                                <select name="tematic_party" id="tematic_party" class="form-control">
                                    <option value="cumpleaños">Cumpleaños</option>
                                    <option value="graduacion">Graduacion</option>
                                    <option value="aniversario">Aniversario</option>
                                    <option value="navidad">Navidad</option>
                                    <option value="año nuevo">Año nuevo</option>
                                    <option value="tematica">Tematica</option>
                                    <option value="disfrases">Disfrases</option>
                                    <option value="bienvenida">Bienvenida</option>
                                    <option value="sorpresa">Sorpresa</option>
                                    <option value="compromiso">Compromiso</option>
                                </select>
                            </div>

                            <div>
                                <label for="num_invitades" class="form-label">Numero de invitados:</label>
                                <input type="number" name="num_invitades" id="num_invitades" class="form-control">
                            </div>

                            <div>
                                <label for="date-event" class="form-label">Fecha y hora del evento:</label>
                                <input type="datetime-local" name="date-event" id="date-event" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="submit" value="Crear" class="btn" style="background-color: #718ae9; color: white;">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Script de JS Boostrap  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!--Script para funcion de boton-->
    <script src="../assets/js/general-items-function-min.js"></script>
</body>

</html>
