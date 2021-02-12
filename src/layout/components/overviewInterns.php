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
                <th id="backID" scope="col">ID</th>
                <th id="backName" scope="col">Name</th>
                <th id="backCategory" scope="col">
                    Category
                    <div class="nextTable" id="nextTable">
                        Meer info
                        <i class="fas fa-arrow-right"></i>
                    </div>
               </th>
                <th class="respTableHead" id="respBegin" scope="col">
                    <div class="backTableBtn" id="backTableBtn">
                        <i class="fas fa-arrow-left"></i>
                        terug
                    </div>
                    <br>
                    Begin internship
                </th>
                <th class="respTableHead" id="respEnd" scope="col">End internship</th>
                <th class="respTableHead" id="respGroup" scope="col">Group ID</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($internResult as $intern) {
                $id = $intern['id'];
                echo "<tr>";
                echo "<th data-index='id$id' class='backTable' id='id$id'>";
                echo $intern['id'];
                echo "</th>";
                echo "<td data-index='name$id' class='backTable' id='name$id'>";
                echo $intern['name'];
                echo "</td>";
                echo "<td data-index='category$id' class='backTable' id='category$id'>";
                echo $intern['category'];
                echo "</td>";
                echo "<td data-index='begin$id' class='hideTable respTable' id='begin$id'>";
                echo $intern['begin_internship'];
                echo "</td>";
                echo "<td data-index='end$id' class='hideTable respTable' id='end$id'>";
                echo $intern['end_internship'];
                echo "</td>";
                echo "<td data-index='group$id' class='hideTable respTable' id='group$id'>";
                echo $intern['groupID'];
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
