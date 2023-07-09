<?php
require('../models/home-eventtotal-model.php');

if (isset($_SESSION['email'])) {
    require('../views/home-eventtotal-view.php');
} else {
    echo "<script>location.href='../'</script>";
}
