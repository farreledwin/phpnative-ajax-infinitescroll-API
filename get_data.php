<?php  
 if(isset($_GET['offset']) && isset($_GET['limit'])) {
  $limit = $_GET['limit'];
  $offset = $_GET['offset'];

  $connection = mysqli_connect('localhost', 'root', '', 'go-boetcompany');

  $data = mysqli_query($connection,"SELECT * FROM goboet_comments LIMIT {$limit} OFFSET {$offset}");

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
   '.$row['goboet_comment'].'<a>@bulmaio</a>.
       <a href="#">#css</a> <a href="#">#responsive</a>
       <br>
       <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
     </div>
   </div>
 </div>';
  }
 }
?> 