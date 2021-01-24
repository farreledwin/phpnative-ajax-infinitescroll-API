<?php
include('koneksi.php');
header("Content-Type: application/json");

$employeeID = $_POST['employeeid'];

$data = mysqli_query($connection, "SELECT * FROM goboet_employee WHERE id='$employeeID'");

$data = mysqli_fetch_assoc($data);

function response($data) {
    $response['employee_name'] = $data['employee_name'];
    $response['employee_position'] = $data['employee_position'];

    echo json_encode($response);
}

response($data);