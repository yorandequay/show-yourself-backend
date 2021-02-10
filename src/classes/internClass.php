<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 8-2-2021
 * Time: 10:51
 */

require_once("dbClass.php");

class internClass
{
    public function getInterns() {
        try {
            $connection = (new dbClass())->connect();
            $stmt = $connection->prepare('SELECT * FROM intern');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return json_encode([
                'type' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
    }

    public function addInterns() {
        try {
            $connection = (new dbClass())->connect();
            $stmt = $connection->prepare('INSERT INTO `intern` SET name = :name, category = :category, begin_internship = :begin_internship, 
            end_internship = :end_internship, groupID = :groupID');
            $this->name = htmlspecialchars($this->name);
            $this->category = htmlspecialchars($this->category);
            $this->begin_internship = htmlspecialchars($this->begin_internship);
            $this->end_internship = htmlspecialchars($this->end_internship);
            $this->groupID = htmlspecialchars($this->groupID);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':category', $this->category);
            $stmt->bindParam(':begin_internship', $this->begin_internship);
            $stmt->bindParam(':end_internship', $this->end_internship);
            $stmt->bindParam(':groupID', $this->groupID);
            $stmt->execute();
            return json_encode([
                'type' => 'success',
                'msg' => 'Stagiaire is succesvol toegevoegd'
            ]);
        } catch (PDOException $e) {
            return json_encode([
                'type' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
    }
}