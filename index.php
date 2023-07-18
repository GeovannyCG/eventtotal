<?php
session_start();

if (isset($_SESSION['email'])) {
    echo "<script>location.href='./Home/'</script>";
} else {
    require('./views/login-eventtotal-view.php');
}