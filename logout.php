<?php
session_start();
unset($_SESSION['mail']);
unset($_SESSION['role']);
header('Location: index.php');