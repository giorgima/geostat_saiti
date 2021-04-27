<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
  <title>Bootstrap Example</title>

  <link rel="stylesheet" href="CSS\saitis1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="https://i.pinimg.com/originals/33/b8/69/33b869f90619e81763dbf1fccc896d8d.jpg" alt="logo"
        style="width:40px;">
    </a>

    <!-- Links -->
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">მთავარი</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ჩვენს შესახებ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">კონტაკტები</a>
      </li>
    </ul>

    <ul id="login" class="nav navbar-nav navbar-right text-right pr-5">
      <?php 
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true)
        {

          echo '<a href="logout.php" tite="Logout">Logout</a>';

        }
        else
            {
              
              echo '<a href="registracion.html">
                      <li>
                        <span class="glyphicon glyphicon-user"></span> რეგისტრაცია
                      </li>
                    </a>

                    <a href="avtorizacia.html">
                      <li>
                        <span class="glyphicon glyphicon-log-in pr-3"></span> ავტორიზაცია
                      </li>
                    </a>';
            }
      ?>
    </ul>

  </nav>

  <div class="row">
    <div class="col-sm-2">

      <nav class="navbar sidenav border border-dark p-2 mt-5">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link disabled" href="#">SIDEBAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://en.wikipedia.org/wiki/Main_Page">Wikipedia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"
              href="https://www.w3schools.com/bootstrap4/bootstrap_utilities.asp">www.w3schools.com</a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="#">SIDEBAR</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="#">SIDEBAR</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="col-sm-10">
      <div class="jumbotron container text-left brend mt-2">
        <h1>hello world</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the
          hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
        </p>

        <a href="https://blog.lysender.com/2014/09/css-elements-covered-by-a-container-div-not-clickable/"
          class="btn btn-primary" role="button"> Learn more >> </a>

      </div>

      <div class="container brend">
        <div class="row">
          <div class="col-sm-4">
            <h3>Heading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio
              dui.</p>

            <a href="https://www.wix.com/html5en/hiker-blog?utm_source=google&utm_medium=cpc&utm_campaign=11953019511^114603846606&experiment_id=blog%20web^e^301305191995^&cq_src=google_ads&cq_cmp=11953019511&cq_con=114603846606&cq_term=blog%20web&cq_med=&cq_plac=&cq_net=g&cq_pos=&cq_plt=gp&gclid=CjwKCAjwgZuDBhBTEiwAXNofRC5dE_u5JKYzGgtIo5Qqb165VNZHUZv6GHuaECCdwEeQi1qKGuPgFhoCuh4QAvD_BwE"
              class="btn btn-secondary  p-1 mb-3" role="button"> View detalis >> </a>

          </div>
          <div class="col-sm-4">
            <h3>Heading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio
              dui.</p>

            <a href="#" class="btn btn-secondary  p-1 mb-3" role="button"> View detalis >> </a>

          </div>
          <div class="col-sm-4">
            <h3>Heading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio
              dui.</p>

            <a href="#" class="btn btn-secondary  p-1 mb-3" role="button"> View detalis >> </a>

          </div>
          <div class="col-sm-4">
            <h3>Heading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio
              dui.</p>

            <a href="#" class="btn btn-secondary  p-1 mb-3" role="button"> View detalis >> </a>

          </div>
          <div class="col-sm-4">
            <h3>Heading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio
              dui.</p>

            <a href="#" class="btn btn-secondary  p-1 mb-3" role="button"> View detalis >> </a>

          </div>
          <div class="col-sm-4">
            <h3>Heading</h3>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
              condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
              Donec sed odio
              dui.</p>

            <a href="#" class="btn btn-secondary  p-1 mb-3" role="button"> View detalis >> </a>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>