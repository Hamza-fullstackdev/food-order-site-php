
<?php session_start() ?>
<?php include("../Connection/connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin panel</title>
    <link rel="stylesheet" href="../Css/dashboard.css">
</head>
<body>
    <div class="leftnav">
        <div class="logo">
            <a href="../Php/website.html"><h2>Food Online</h2></a>
        </div>
        <nav>
            <ul>
                <li><a href="../Control panel/dashboard.php">Dashboard</a></li>
                <li><a href="../Control panel/addfood.php">Add Food</a></li>
                <li><a href="../Control panel/managefood.php">Manage Foods</a></li>
                <li><a href="../Control panel/register.php">Registered People</a></li>
            </ul>
        </nav>
    </div>
    <div class="rightmaindata">
        <header>
            
            <nav>
                <ul class="flex">
                <li><a href="../Control panel/dashboard.php">Dashboard</a></li>
                <li><a href="../Control panel/addfood.php">Add Food</a></li>
                <li><a href="../Control panel/managefood.php">Manage Foods</a></li>
                <li><a href="../Control panel/register.php">Registered People</a></li>
                </ul>
            </nav>
        </header>