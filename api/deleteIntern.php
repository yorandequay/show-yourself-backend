<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 18-2-2021
 * Time: 11:37
 */
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../src/classes/internClass.php';

$data = json_decode(file_get_contents("php://input"));

$internClass = (new internClass());

$id = $_POST['id'];

$deleteIntern = $internClass->deleteIntern($id);

echo $deleteIntern;