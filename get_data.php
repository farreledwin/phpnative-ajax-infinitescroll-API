<?php

include('koneksi.php');

class InfiniteScroll {

  function __construct() {


  }

  function infinite($connection,$offset,$limit) {
    $allData = mysqli_query($connection, "SELECT * FROM goboet_comments");
    $countAllData = mysqli_num_rows($allData);

      $data = mysqli_query($connection, "SELECT * FROM goboet_comments LIMIT $limit OFFSET $offset");
      $countData = mysqli_num_rows($data);
      while($row = mysqli_fetch_assoc($data)) {
        
        echo '<div class="card">
        '.$countData.'
        '.$offset.'
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-128x128">
                <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">'.$row['goboet_judul'].'</p>
              <p class="subtitle is-6">'.$row['goboet_comment'].'</p>
            </div>
          </div>
      
          <div class="content">
        test
            <br>
          </div>
        </div>
      </div>';
      }
    }
    
  }

$infiniteObj = new InfiniteScroll();

$infiniteObj->infinite($connection,$_POST['offset'],$_POST['limit']);