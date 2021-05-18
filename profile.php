<?php

include 'skript_php.php';

if(isset($_GET['lang'])){
  $lang = $_GET['lang'];
  $_SESSION['lang'] = $lang;
}
else{
  $_SESSION['lang'] = 'ka';
  $lang = 'ka';
}

switch ($lang) {
  case 'ka':
    include 'ka.php';
    break;
  case 'en':
    include 'en.php';
    break;
  default:
    include 'ka.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>profile</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="საქსტატი">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="გიორგი მომხმარებლის">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="CSS\profile.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

  <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="sait.php">
      <img src="FOTO\logo.jpg" alt="logo" style="width:40px;">
    </a>

    <!-- Links -->
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="sait.php"> <?php echo $lang['mtavari']; ?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="single.php"> <?php echo $lang['chvens_shesaxeb']; ?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php"> <?php echo $lang['kontaktebi']; ?> </a>
      </li>
    </ul>

    <ul id="login" class="nav navbar-nav navbar-right text-right pr-5">

      <li>
        <a href='profile.php?lang=ka'> <img src='FOTO/ka.png' width='20px'> </a>
      </li>
      <li>
        <a href='profile.php?lang=en'> <img src='FOTO/en.png' width='30px'> </a>
      </li>

    </ul>
  </nav>

<div class="container">
	<div class="row">
		<div class="col-6">
		<!-- foto -->

		<!-- username -->

		</div>
		<div class="col-6">
			<!-- logout --> <!-- mtavari page -->

			<!-- data -->

			<!-- sqes -->

			<!-- email -->

		</div>
	</div>
</div>

<footer>
  <div class="container-fluid bg-dark mt-4 pl-5 pt-4 pb-2">
    <div class="row">
        <div class="footer-col col-4">
          <h4><?php echo $lang['compania']; ?></h4>
          <ul>
            <li><a href="#"><?php echo $lang['chvens_shesaxeb']; ?></a></li>
            <li><a href="#"><?php echo $lang['chveni_servisebi']; ?></a></li>
            <li><a href="#"><?php echo $lang['konfidencialurobis_politika']; ?></a></li>
          </ul>
        </div>
        <div class="footer-col col-4">
          <h4><?php echo $lang['daxmarebis_migeba']; ?></h4>
          <ul>
            <li><a href="#"><?php echo $lang['faq']; ?></a></li>
            <li><a href="#"><?php echo $lang['transportireba']; ?></a></li>
            <li><a href="#"><?php echo $lang['kontaktebi']; ?></a></li>
          </ul>
        </div>
        <div class="footer-col col-4">
          <h4><?php echo $lang['gaziareba']; ?></h4>

          <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
  </div>
</footer>

    <script src="JS\skript_Js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>