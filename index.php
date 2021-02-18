<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 8-2-2021
 * Time: 10:48
 */
require_once("src/classes/internClass.php");
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Show Yourself</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="src/style.css">
        <link rel="stylesheet" href="src/responsive.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="tab">
            <nav class="navbar border-bottom justify-content-between">
                <img class="bigLogo" class="bigLogoImg" alt="logo" src="src/img/logo.png">
                <img class="smallLogo" class="smallLogoImg" alt="logo" src="src/img/smallLogo.png">
                <div class="navTabBig text-white colorNavOn" id="navAddBig">
                    Toevoegen
                </div>
                <div class="navTabBig text-white" id="navOverviewBig">
                    Overzicht
                </div>
            </nav>
            <?php require_once("src/layout/components/addInterns.php") ?>
            <?php require_once("src/layout/components/overviewInterns.php") ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="src/javascript/changeTabs.js"></script>
        <script src="api/deleteIntern.js"></script>
    </body>
</html>