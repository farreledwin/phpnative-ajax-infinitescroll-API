<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello!</title>
    <link rel="stylesheet" href="bulma.min.css">
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="jquery.min.js"></script>
    <?php
    include('koneksi.php');
    ?>
  </head>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
  
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a href="index.php" class="navbar-item">
          Home
        </a>
  
        <a href="searchpaginate.php" class="navbar-item">
          Search Data & Paginate
        </a>
  
        <a href="jsontest.php" class="navbar-item">
          JSON
        </a>
        <a href="infinite-page.php" class="navbar-item">
          Infinite Scrolling
        </a>
      </div>
  </nav>
  <body>

  <table class="table is-centered">
    <thead>
        <tr>
        <th><abbr title="ID">ID</abbr></th>
        <th>Employee Name</th>
        <th><abbr title="Played">Position</abbr></th>
        </tr>
    </thead>
    <tbody>
<?php
    $itemPerPage = 5;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $allData = mysqli_query($connection, "SELECT * FROM goboet_employee");
    $startData = ($page * $itemPerPage) - $itemPerPage;
    $loadDataPerPage = mysqli_query($connection, "SELECT * FROM goboet_employee LIMIT $startData,$itemPerPage");
    $totalAllData = mysqli_num_rows($allData);
    $totalPage = ceil($totalAllData / $itemPerPage);

    while($row = mysqli_fetch_assoc($loadDataPerPage)) {
      ?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['employee_name'] ?></td>
      <td><?php echo $row['employee_position'] ?></td>
    </tr>
    <?php
      }
    ?>
    </table>
    <nav class="pagination" role="navigation" aria-label="pagination">
    <ul class="pagination-list">
    <li>
    <?php
    for($i=1;$i<=$totalPage;$i++) {
      ?>
      <a href="?page=<?php echo $i ?>" class="pagination-link"><?php echo $i ?></a>
    <?php
    }    
    ?>  
    </li>
    </ul>
    </nav>
    <div class="control has-icons-left has-icons-right">
        <input class="input is-success" type="text" id="datasearch" name="datasearch" placeholder="Search Employee Name">
            <span class="icon is-small is-left">
            <i class="fas fa-search"></i>

            </span>
    </div>
    <div class="buttons">
    <input type="button" class="button is-primary" class="searchbtn" name="searchbtn" id="searchbtn" value="Search">
    <input type="button" class="button is-primary" class="clearbtn" name="clearbtn" id="clearbtn" value="Clear Search">
    </div>
    <div class="search-div">

    </div>
    </body>

    <footer class="footer">
        <div class="content has-text-centered">
        <p class="is-size-4">
          Build with Bulma CSS Framework
        </p>
          <p class="is-size-5">
            <strong>Copyright</strong> © 2020 Edwin Farrel Juniawan (FR19-1). Bluejackets 19-1.
          </p>
        </div>
      </footer>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#searchbtn').click(function () {
          $.ajax({
          type: "POST",
          url: "search.php",
          data: {
            search: $('#datasearch').val()
          },
          success: function(data) {
                $('.search-div').append(data);
          }
        });
      });

      $('#clearbtn').click(function () {
        $('.search-div').empty();
      })
    });
    </script>


</html>