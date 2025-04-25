<?php

$info = 'default';
$data = 'default';

if (isset($_POST)) {
    $info = 'data is fetched successfully ';
    $data = $_POST;
} else {
    $info = 'Data is not fetched successfully';
    $data = 'No Data found';
}

$result->data = $data;
$reslut->info = $info;

echo json_encode([$result]);
