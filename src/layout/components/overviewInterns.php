<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 11-2-2021
 * Time: 12:06
 */
$internClass = (new internClass());
$getInterns = $internClass->getInterns();
$internResult = $getInterns;
?>
<div class="showIntern hidden tabs" id="showInternTab">
    <div class="smallNavTab text-white" id="navOverviewSmall">
        <i class="fas fa-arrow-left"></i>
    </div>
    <div class="tableStyle">
        <table class="table">
            <thead>
            <tr>
                <th id="backName" scope="col">Naam</th>
                <th id="backResidence" scope="col">Plaats en adres</th>
                <th id="backCategory" scope="col">
                    <div class="nextTable" id="nextTable">
                        Meer info
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    Categorie
               </th>
                <th class="respTableHead" id="respInternship" scope="col">
                    <div class="backTableBtn" id="backTableBtn">
                        <i class="fas fa-arrow-left"></i>
                        Terug
                    </div>
                    <br>
                    Stage-periode
                </th>
                <th class="respTableHead" id="respGroup" scope="col">Groep</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($internResult as $intern) {
                $id = $intern['id'];
                echo "<tr id='del$id'>";
                echo "<th data-index='name$id' class='backTable $id' id='name$id'>";
                echo $intern['name'];
                echo "</th>";
                echo "<td data-index='residence$id' data-del='$id' class='backTable $id' id='residence$id'>";
                echo $intern['city'];
                echo ", ";
                echo $intern['adress'];
                echo "</td>";
                echo "<td data-index='category$id' class='backTable $id' id='category$id'>";
                echo $intern['category'];
                echo "</td>";
                echo "<td data-index='internship$id' class='hideTable respTable $id' id='internship$id'>";
                echo $intern['begin_internship'];
                echo " - ";
                echo $intern['end_internship'];
                echo "</td>";
                echo "<td data-index='group$id' class='hideTable respTable $id' id='group$id'>";
                echo $intern['groupID'];
                echo "<i class='far fa-trash-alt deleteBtn $id' onclick='deleteBtn($id)'></i>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
