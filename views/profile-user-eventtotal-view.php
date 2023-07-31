<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventTotal | Mi perfil</title>
    <!-- link de favicon -->
    <link rel="shortcut icon" href="../assets/images/logotipo-main-curt.ico" type="image/x-icon">
    <!-- link css de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--CSS para los icons de Boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link de css propio -->
    <link rel="stylesheet" href="../assets/css/style-general-min.css">
    <link rel="stylesheet" href="../assets/css/style-profile-min.css">
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

        <symbol id="edit" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
        </symbol>

        <symbol id="confirm" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
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
                    <li><a class="dropdown-item"><i class='bx bxs-user-rectangle' style='color:grey'></i>
                            <span class="link-disable">Mi perfil</span></a></li>
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
        <h1>Mi perfil</h1>
        <div class="information-profile-content">
            <form action="../Update-Profile/" method="post">
                <div id="editar-boton">
                    <button class="btnEdit" id="btnEditar">
                        <svg class="bi pe-none edit" width="30" height="30" role="img" aria-label="Home">
                            <use xlink:href="#edit" />
                        </svg>
                    </button>
                </div>

                <fieldset disabled="" id="deshabilitar">
                    <div class="section-infotmation-profile-header">
                        <img src="../assets/images/user_icon.png" alt="photo-profile">
                        <h2><?php echo $Dates['nombres_u'] ?> <?php echo $Dates['apellidos_u'] ?></h2>
                    </div>

                    <div class="section-information-profile-dates">
                        <div class="section-infotmation-profile">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Nombre(s):</label>
                                <input type="text" class="form-control" value="<?php echo $Dates['nombres_u'] ?>" name="nombress" id="nombress">
                            </div>

                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Apellidos:</label>
                                <input type="text" class="form-control" value="<?php echo $Dates['apellidos_u'] ?>" name="apellidoss" id="apellidoss">
                            </div>
                        </div>

                        <div class="section-infotmation-profile">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Correo:</label>
                                <input type="text" class="form-control" value="<?php echo $Dates['correo_u'] ?>" name="correoss" id="correoss">
                            </div>

                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Constraseña:</label>
                                <input type="text" class="form-control" value="<?php echo $Dates['contrasenia_u'] ?>" name="contraseniaa" id="contraseniaa">
                            </div>
                        </div>

                        <div class="section-infotmation-profile">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Fecha de cumpleaños:</label>
                                <input type="date" class="form-control" value="<?php echo $Dates['cumpleainos_u'] ?>" name="cumpleanioss" id="cumpleanioss">
                            </div>
                        </div>

                    </div>

                </fieldset>
            </form>

        </div>
    </div>

    <!-- Script de JS Boostrap  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!--Script para funcion de boton-->
    <script src="../assets/js/general-items-function-min.js"></script>
    <script src="../assets/js/profile-edit-funtion-min.js"></script>

</body>

</html>
