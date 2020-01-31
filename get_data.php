<?php  

  include_once('koneksi.php');

 if(isset($_GET['offset']) && isset($_GET['limit'])) {
  $limit = $_GET['limit'];
  $offset = $_GET['offset'];

  $data = mysqli_query($koneksi,"SELECT * FROM goboet_comments LIMIT {$limit} OFFSET {$offset}");

  while($row=mysqli_fetch_array($data)) {
   echo ' <div class="card">
   <div class="card-content">
     <div class="media">
       <div class="media-left">
         <figure class="image is-128x128">
           <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
         </figure>
       </div>
       <div class="media-content">
         <p class="title is-4">'.$row['id'].'</p>
         <p class="subtitle is-6">'.$row['goboet_judul'].'</p>
       </div>
     </div>
 
     <div class="content">
   '.$row['goboet_comment'].'.
       <br>
     </div>
   </div>
 </div>';
  }
 }
?> 