<?php
include('koneksi.php');

class Search {

    function __construct() {

    }

    function search($connection,$keyword) {

        $data = mysqli_query($connection,"SELECT * FROM goboet_employee WHERE employee_name = '%$keyword%'");


        echo '<table class="table is-centered">
        <thead>
            <tr>
            <th><abbr title="ID">ID</abbr></th>
            <th>Employee Name</th>
            <th><abbr title="Played">Position</abbr></th>
            </tr>
        </thead>
        <tbody>';
        while($row = mysqli_fetch_assoc($data)) {
            echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['employee_name'].'</td>
            <td>'.$row['employee_position'].'</td>
          </tr>
          </table>';
        }
    }
}

$searchObj = new Search();
$searchObj->search($connection,$_POST['search']);