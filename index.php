<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 8-2-2021
 * Time: 10:48
 */
require_once("src/classes/internClass.php");
$internClass = (new internClass());
$getInterns = $internClass->getInterns();
$internResult = $getInterns;

if (isset($_POST['addIntern'])) {
    $internClass->name = $_POST['nameIntern'];
    $internClass->category = $_POST['categoryIntern'];
    $internClass->begin_internship = $_POST['beginInternship'];
    $internClass->end_internship = $_POST['endInternship'];
    $internClass->groupID = $_POST['internGroupID'];
    $internClass->addInterns();
//    header("Location: index.php");
}

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
    <nav class="navbar navbar-light bg-primary">
        <h1 class="navbar-brand text-white">Overzicht van de stagiaires</h1>
    </nav>
    <form action="" method="post">
        <div class="form-group">
            <label>Naam stagiair</label>
            <input type="text" class="form-control" name="nameIntern" placeholder="Stagiair naam"required>
        </div>
        <div class="form-group">
            <label>Categorie</label>
            <select name="categoryIntern" class="form-control"required>
                <option selected>Applicitie ontwikkelaar</option>
                <option>Game developer</option>
                <option>Animatie</option>
                <option>Militair</option>
            </select>
        </div>
        <div class="form-group">
            <label>Begin stage</label>
            <input type="date" class="form-control" name="beginInternship"required>
            <label>Eind stage</label>
            <input type="date" class="form-control" name="endInternship"required>
        </div>
        <div class="form-group">
            <label>Groep ID</label>
            <select name="internGroupID" class="form-control" required>
                <option selected>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="addIntern">Voeg toe</button>
    </form>
    <div class="tableStyle">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Begin internship</th>
                <th scope="col">End internship</th>
                <th scope="col">Group ID</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($internResult as $intern) {
                echo "<tr>";
                    echo "<th>";
                        echo $intern['id'];
                    echo "</th>";
                    echo "<td>";
                        echo $intern['name'];
                    echo "</td>";
                    echo "<td>";
                        echo $intern['category'];
                    echo "</td>";
                    echo "<td>";
                        echo $intern['begin_internship'];
                    echo "</td>";
                    echo "<td>";
                        echo $intern['end_internship'];
                    echo "</td>";
                    echo "<td>";
                        echo $intern['groupID'];
                    echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>