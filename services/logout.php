<?php
session_name("verification");   //pilih session
session_start();        //memulai session
unset($_SESSION["verification"]);    //kosongkan session
session_destroy();       //hapus session
header("location:../index.php");
