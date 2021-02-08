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
}