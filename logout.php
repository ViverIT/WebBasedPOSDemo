<?php
session_start();

session_destroy();

header('Location: Homepage.html');
exit();
?>