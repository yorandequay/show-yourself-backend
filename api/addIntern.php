<?php
/**
 * Created by PhpStorm.
 * User: yoran
 * Date: 10-2-2021
 * Time: 12:08
 */
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../src/classes/internClass.php';

$data = json_decode(file_get_contents("php://input"));

$internClass = (new internClass());

$internClass->name = $data->name;
$internClass->category = $data->category;
$internClass->begin_internship = $data->begin_internship;
$internClass->end_internship = $data->end_internship;
$internClass->groupID = $data->groupID;

$createIntern = $internClass->addInterns();

echo $createIntern;