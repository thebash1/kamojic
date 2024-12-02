<?php

// verificar si hay sesion iniciada y destruirla
session_start();
session_destroy();
echo "<script>window.location ='../../index.php';</script>";
exit();