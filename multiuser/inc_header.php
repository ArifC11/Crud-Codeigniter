<?php
session_start();
include("inc_koneksi.php");
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <nav>
            <ul>
                <li><a href="page_depan.php">Halaman Depan</a></li>
                <?php if (in_array("guru", $_SESSION['admin_akses'])) { ?>
                    <li><a href="admin_page.php">Halaman Admin</a></li>
                <?php } ?>
                <li><a href="logout.php">Logout >></a></>
            </ul>
        </nav>