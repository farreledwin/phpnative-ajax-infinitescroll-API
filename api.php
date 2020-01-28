<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:application/json charset=UTF-8");

include("koneksi.php");

$employeeid = $_GET['employeeid'];

$result = mysqli_query($koneksi, "SELECT * FROM goboet_employee WHERE id=$employeeid");

$data = mysqli_fetch_assoc($result);


$employeename = $data['employee_name'];

$employeeposition = $data['employee_position'];


response($employeename,$employeeposition);

mysqli_close($koneksi);


function response($employeename,$employeeposition) {
    $response['employee_name'] = $employeename;
    $response['employee_position'] = $employeeposition;

    $json_response = json_encode($response);

    echo $json_response;

}

?>
