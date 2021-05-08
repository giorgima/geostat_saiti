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
  <title>single page</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="single">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="გიორგი მომხმარებლის">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="CSS\single.css">
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

      <ul id="navbar_right" class="nav navbar-nav navbar-right text-right">
        <li class="nav-item">
          <a href="#" title="facebook"><i class="fab fa-facebook-square fa-lg"></i></a>
        </li class="nav-item">
        <li>
          <a href="#" title="twitter"><i class="fab fa-twitter fa-lg"></i></a>
        </li class="nav-item">
        <li>
          <a href="#" title="rss"><i class="fas fa-rss fa-lg"></i></a>
        </li>

        <li>
          <a href='single.php?id= <?php echo $_SESSION['id']; ?> &lang=ka'> <img src='FOTO/ka.png' width='20px'> </a>
        </li>
        <li>
          <a href='single.php?id= <?php echo $_SESSION['id']; ?> &lang=en'> <img src='FOTO/en.png' width='30px'> </a>
        </li>

      </ul>
  </nav>
</div>

<div class="container-fluid">
  <div class="row">

<?php

$con = connect_sql();

 if(isset($_GET['id'])){

    $id = $_GET['id'];
    $_SESSION['id'] = $id;

}

$stmt = $con->prepare("select `categoris`, `foto_name`, `title_".$_SESSION['lang']."` as title, `texts_".$_SESSION['lang']."` as texts from article where `id` = ? ");
$stmt->bind_param("s", $id);
$stmt->execute();
$stmt_result = $stmt->get_result();

if ($stmt_result->num_rows > 0)
{
  $data = $stmt_result->fetch_assoc();

  ?>
    <div class="col-9 pl-5 pt-3">
      <h3> <?php echo $lang['kategoria']; ?> : &nbsp;<?php echo $data["categoris"]; ?> </h3>

      <h1> <?php echo $lang['satauri']; ?> : &nbsp;<?php echo $data["title"]; ?> </h1>

      <p id="demo" class="pt-2 pb-2" style="color: #A6AAB5"></p>
      <script>
      var date = new Date();
      var Month = date.getMonth() + 1;
      document.getElementById("demo").innerHTML = "<?php echo $lang['gamoqveynebis_tarigi']; ?> : &nbsp;" + date.getDate() + "/" + Month + "/" + date.getFullYear() ;
      </script>

      <p> <?php echo $lang['texsti']; ?> : &nbsp;<?php echo $data["texts"]; ?> </p>

      <img src='<?php echo "FOTO/".$data["foto_name"] ?>'style="width: 500px;" ><br>

    </div>

<?php
}
?>


    <div class="col-3">
        <nav class="navbar">


        <ul id="navb" class="nav flex-column pt-2">
          <h5><b><?php echo $lang['kategoriebi']; ?></b></h5>

          <li class="nav-item">
            <a class="nav-link" href="category.php?name=axali_ambebi"> <?php echo $lang['axali_ambebi']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?name=kodi"> <?php echo $lang['kodi']; ?></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="category.php?name=dizaini"> <?php echo $lang['dizaini']; ?></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="category.php?name=mxiaruli"> <?php echo $lang['mxiaruli']; ?></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="category.php?name=yelsaxvevebis"> <?php echo $lang['yelsaxvevebis']; ?></a>
          </li>
        </ul>

        <div class="card mt-3">
          <div class="card-header"><b> <?php echo $lang['card_header']; ?> </b>
            <i class="far fa-file fa-lg" style="margin-left: 70px;"></i>
          </div>
          <div class="card-body"><b> <?php echo $lang['card_satauri']; ?> </b>
          <p class="pt-2"> <?php echo $lang['card_texsti']; ?> </p>
          </div>
        </div>

         <div class="card mt-3">
          <div class="card-header"><b> <?php echo $lang['card_header']; ?> </b>
            <i class="far fa-file fa-lg" style="margin-left: 70px;"></i>
          </div>
          <div class="card-body"><b> <?php echo $lang['card_satauri']; ?> </b>
          <p class="pt-2"> <?php echo $lang['card_texsti']; ?> </p>
          </div>
        </div>

        
      </nav>

    </div>
  </div>
</div>

<footer>
  <div class="container-fluid bg-dark mt-4 pl-5 pt-4">
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
