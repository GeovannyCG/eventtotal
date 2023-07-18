<?php
require('../models/home-eventtotal-model.php');

if (isset($_SESSION['email'])) {

    try {
        $homeObject = new Home();

        $countEvents = $homeObject->countEvents();
        $coutnSalones = $homeObject->countEventroom();
        $countRecipes = $homeObject->countRecipes();
        $countEmploys = $homeObject->countEmploys();

        $showEvents = $homeObject->showEvents();
        $shoeRecipes = $homeObject->showRecipes();
    } catch (\Throwable $th) {
        require_once('./views/error-internal-eventease-view.html');
        //error_log($th->getMessage());
    }

    require('../views/home-eventtotal-view.php');
} else {
    echo "<script>location.href='../'</script>";
}
