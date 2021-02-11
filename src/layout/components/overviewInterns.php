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
</div>
