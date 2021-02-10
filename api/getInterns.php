<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 8-2-2021
 * Time: 10:57
 */
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../src/classes/internClass.php';

$internClass = (new internClass());
$getInterns = $internClass->getInterns();
echo json_encode($getInterns, JSON_PRETTY_PRINT);