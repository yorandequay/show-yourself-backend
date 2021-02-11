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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="src/style.css">
    </head>
    <body>
        <div class="tab">
            <nav class="navbar border-bottom justify-content-between">
                <img class="logoImg" alt="logo" src="src/img/logo.png">
                <div class="navTab text-white" id="navOverview">
                    Overzicht
                </div>
                <div class="navTab text-white" id="navAdd">
                    Toevoegen
                </div>
            </nav>
            <?php require_once("src/layout/components/addInterns.php") ?>
            <?php require_once("src/layout/components/overviewInterns.php") ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="src/javascript/changeTabs.js"></script>
    </body>
</html>