<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <a class="navbar-item">
          Home
        </a>
  
        <a href="searchpaginate.php" class="navbar-item">
          Search Data & Paginate
        </a>
  
        <a href="jsontest.php" class="navbar-item">
          JSON
        </a>
        <a href="jsonatest.php" class="navbar-item">
          About
        </a>
      </div>
  

    </div>
  </nav>
  <section class="hero">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title is-centered">
          Welcome Guest!
        </h1>
        <h2 class="subtitle">
          Bluejack Amazing Blog
        </h2>
      </div>
    </div>
  </section>
  <body>
    <div class="body">

</div>
      </body>
      <footer class="footer">
        <div class="content has-text-centered">
        <p>
          Built with Bulma CSS Framework
        </p>
          <p>
            <strong>Copyright</strong> © 2020 Edwin Farrel Juniawan (FR19-1). Bluejackets 19-1.
          </p>
        </div>
      </footer>
      <script type="text/javascript">
    $(document).ready(function(){
    var flag = 0;

    $.ajax({
        type: "GET",
        url: "get_data.php",
        data: {
        'offset':0,
        'limit':3
        },
        success: function(data) {
        $('.body').append(data);
        flag +=3;
        }
    });

    $(window).scroll(function(){
        console.log($(window).scrollTop());
        if($(window).scrollTop() >= $(document).height() - $(window).height()) {
        $.ajax({
        type: "GET",
        url: "get_data.php",
        data: {
        'offset':flag,
        'limit':3
        },
        success: function(data) {
        $('.body').append(data);
        flag +=3;
        }
        });
        }
    });
    });
    </script>


</html>