<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 11-2-2021
 * Time: 12:06
 */
$internClass = (new internClass());

if (isset($_POST['addIntern'])) {
    $internClass->name = $_POST['nameIntern'];
    $internClass->category = $_POST['categoryIntern'];
    $internClass->begin_internship = $_POST['beginInternship'];
    $internClass->end_internship = $_POST['endInternship'];
    $internClass->groupID = $_POST['internGroupID'];
    $internClass->addInterns();
    header("Location: index.php");
}

?>
<div class="tabAddIntern tabs" id="addInternTab">
    <form action="" method="post">
        <div class="form-group">
            <label>Naam stagiair</label>
            <input type="text" class="form-control" name="nameIntern" placeholder="Stagiair naam"required>
        </div>
        <div class="form-group">
            <label>Categorie</label>
            <select name="categoryIntern" class="form-control"required>
                <option selected>Applicatie ontwikkelaar</option>
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
        <button type="submit" class="btnAddIntern btn text-white" name="addIntern">Voeg toe</button>
    </form>
</div>
