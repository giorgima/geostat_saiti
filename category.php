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

$cate = $_GET['name'];
  // = $_SESSION['name'];

?>

<!DOCTYPE html>
<html>
<head>

  <title>categoris10</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="საქსტატი">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="გიორგი მომხმარებლის">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="CSS\category.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

<div>
  <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand mr-5 ml-2" title="Websaite Name" href="sait.php"><h4>Websaite Name</h4></a>

      <!-- Links -->
      <ul id="navbar_left" class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" title="Home" href="#"><i class="fas fa-home fa-lg pr-1"></i> <?php echo $lang['mtavari']; ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Blog" href="#"><i class="fas fa-feather-alt fa-lg pr-1"></i> <?php echo $lang['blogi']; ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Contact" href="#"><i class="far fa-envelope fa-lg pr-1"></i> <?php echo $lang['kontaktebi']; ?> </a>
        </li>
      </ul>
  </nav>
</div>

<!-- ////////////////////////////////////// -->
<?php

$con10 = connect_sql();

switch ($cate) {
  case "axali_ambebi":
    $sql10 = "SELECT * from article WHERE categoris = 'axali_ambebi'";
    break;
  case "kodi":
    $sql10 = "SELECT * from article WHERE categoris = 'kodi'";
    break;
  case "dizaini":
    $sql10 = "SELECT * from article WHERE categoris = 'dizaini'";
    break;
  case "mxiaruli":
    $sql10 = "SELECT * from article WHERE categoris = 'mxiaruli'";
    break;
  case "yelsaxvevebis":
    $sql10 = "SELECT * from article WHERE categoris = 'yelsaxvevebis'";
    break;
  default:
	$sql10 = "SELECT * from article";
}

$result10 = $con10-> query($sql10);
if ($result10-> num_rows > 0)
{
    while ($row10 = $result10-> fetch_assoc())
    {
        echo '<div class="container-fluid"><br>
    			<div class="card alert alert-info">
			  		<h5 class="card-header ">'.$row10['categoris'].'</h5>
		  			<div class="card-body ">
		    		<h5 class="card-title">'.$row10['title_ka'].'</h5>
		    		<p class="card-text">'.$row10['texts_ka'].'</p>
		  			</div>
				</div>
			  </div>';
    }
}
else{
	echo "<div class='alert alert-danger'> <h1><strong> none </strong></h1></div>";
}

	$con10->close();

?>
<!-- ///////////////////////////////////////////////////// -->

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