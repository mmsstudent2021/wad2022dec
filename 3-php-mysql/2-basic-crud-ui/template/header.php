
<?php
session_start();
require_once "core/connection.php";
require_once "core/functions.php";

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Builder</title>
    <link rel="stylesheet" href="<?= url('node_modules/bootstrap-icons/font/bootstrap-icons.css'); ?>">
    <link rel="stylesheet" href="<?= url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= url('css/app.css'); ?>">
</head>

<body>

    <?php require_once "nav-bar.php"; ?>