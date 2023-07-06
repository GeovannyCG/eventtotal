<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventTotal | Log-out</title>
    <!-- link de favicon -->
    <link rel="shortcut icon" href="./assets/images/logotipo-main-curt.ico" type="image/x-icon">
    <!-- link css de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- link de css propio -->
    <link rel="stylesheet" href="./assets/css/style-logout-min.css">
</head>

<body>

    <!-- SVG's Icons -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="Log-out" viewbox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
            <path fill-rule="evenodd"
                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
        </symbol>
    </svg>

    <div class="main-container">

        <div class="form-container">
            <div id="form-header">
                <img src="./assets/images/logotipo-main-curt.png" alt="Logotipo">
                <h1>EventTotal</h1>
            </div>
            <h2>Log-out</h2>


            <div class="elementos-form">
                <svg class="bi">
                    <use xlink:href="#Log-out" />
                </svg>

                <h6>Sesion cerrada correctamente, gracias por usar <b>EventTotal</b>.<h6>
                
                <a href="" id="btnRegresar">Iniciar sesion</a>

            </div>

        </div>

        <div class="footer-login">
            <p>&copy; 2023 SOFTMXCG. Todos los derechos reservados.</p>
        </div>

    </div>

    <!-- Scripts de Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>