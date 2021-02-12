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
    $internClass->birthdate = $_POST['birthdateIntern'];
    $internClass->city = $_POST['city'];
    $internClass->adress = $_POST['adress'];
    $internClass->category = $_POST['categoryIntern'];
    $internClass->begin_internship = $_POST['beginInternship'];
    $internClass->end_internship = $_POST['endInternship'];
    $internClass->groupID = $_POST['internGroupID'];
    $internClass->addInterns();
}

?>
<div class="tabAddIntern tabs" id="addInternTab">
    <div class="smallNavTab text-white" id="navAddSmall">
        <i class="fas fa-arrow-right"></i>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <div class="iconInput">
                        <label>Naam stagiair</label>
                        <input type="text" class="form-control" name="nameIntern" placeholder="Stagiair naam"required>
                        <i class="fas fa-signature"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>Geboortedatum</label>
                    <input type="date" class="form-control" name="birthdateIntern"required>
                </div>
                <div class="form-group">
                    <div class="iconInput">
                        <label>Woonplaats</label>
                        <input type="text" class="form-control" name="city" placeholder="Woonplaats" required>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="iconInput">
                        <label>Adres</label>
                        <input type="text" class="form-control" name="adress" placeholder="Adres" required>
                        <i class="fas fa-house-user"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
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
            </div>
        </div>
    </form>
</div>
