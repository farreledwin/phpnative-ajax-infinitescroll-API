<?php
include_once('koneksi.php');

$kata = $_POST['search'];

$test = "SELECT * FROM goboet_employee where employee_name like %$kata%";


$data = mysqli_query($koneksi,"SELECT * FROM goboet_employee where employee_name like '%$kata%'");

echo " <table class='table is-centered'>
<thead>
    <tr class='head-search'>
    <th><abbr title='ID'>ID</abbr></th>
    <th>Employee Name</th>
    <th><abbr title='Played'>Position</abbr></th>
    </tr>
</thead>
<tbody>";
while($row = mysqli_fetch_array($data)) {
   echo ' <tr class="data-search">
   <th>'.$row['id'].'</th>
   <td>'.$row['employee_name'].'</td> 
   <td>'.$row['employee_position'].'</td>
 </tr>';

}