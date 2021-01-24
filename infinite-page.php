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
    <!-- <div class="card">
   <div class="card-content">
     <div class="media">
       <div class="media-left">
         <figure class="image is-128x128">
           <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
         </figure>
       </div>
       <div class="media-content">
         <p class="title is-4">test</p>
         <p class="subtitle is-6">test</p>
       </div>
     </div>
 
     <div class="content">
   test
       <br>
     </div>
   </div>
 </div> -->
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
          $('.card').empty();
          var flag = 0;
          $.ajax({
            type: "POST",
            url: "get_data.php",
            data: {
              offset: 0,
              limit: 3
            },
            success: function(data) {
              $('.body').append(data);
              flag+=3;
            }
          })

          $(window).scroll(function() {
            if ($(window).scrollTop() > $(document).height() - $(window).height()) {
              $.ajax({
                type: "POST",
                url: "get_data.php",
                data: {
                  offset: flag,
                  limit: 3
                },
                beforeSend: function() {
                  console.log("ha");
                },
                success: function(data) {
                  console.log("data segini "+data.length)
                  $('.body').append(data);
                  console.log("ini offset" +flag)
                  flag+=3;
                }
              })
            }
          })
        })
    </script>


</html>



