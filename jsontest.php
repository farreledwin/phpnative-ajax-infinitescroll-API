<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello!</title>
    <link rel="stylesheet" href="bulma.min.css">
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="jquery.min.js"></script>

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
  

    </div>
  </nav>
  <body>
        <center><p class="is-size-1">JSON </p></center>
        <div class="control">
        <form action="api.php" method="POST">
        <input class="input" type="text" name="employeeid" placeholder="Employee ID">
        <input type="submit" class="button is-primary" class="searchbtn" name="searchbtn" id="searchbtn" value="Search">
        </form>
        </div>
    </body>

    <footer class="footer">
        <div class="content has-text-centered">
        <p class="is-size-4">
          Build with Bulma CSS Framework
        </p>
          <p class="is-size-5">
            <strong>Copyright</strong> © 2021 Edwin Farrel Juniawan (FR19-1). Bluejackets 19-1.
          </p>
        </div>
      </footer>


</html>