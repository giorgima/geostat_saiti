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
      <a class="navbar-brand mr-5 ml-2" title="Websaite Name" href="sait.php">
        <h4>Websaite Name</h4>
      </a>

      <!-- Links -->
      <ul id="navbar_left" class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" title="Home" href="#"><i class="fas fa-home fa-lg pr-1"></i>
            <?php echo $lang['mtavari']; ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Blog" href="#"><i class="fas fa-feather-alt fa-lg pr-1"></i>
            <?php echo $lang['blogi']; ?> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" title="Contact" href="#"><i class="far fa-envelope fa-lg pr-1"></i>
            <?php echo $lang['kontaktebi']; ?> </a>
        </li>
      </ul>

      <ul id="navbar_right" class="nav navbar-nav navbar-right text-right pr-5">

        <?php
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true)
        {


          echo '<div style="color:white;" class="mt-2"><a class="usernik" href="profile.php?id='.$_SESSION['id'].'&lang='.$_SESSION['lang'].'">'.$_SESSION['name'].'</a>&nbsp;&nbsp;&nbsp;</div>
          <div class="p-2">
            <a href="logout.php" title="გამოსვლა"><i class="fas fa-sign-out-alt"></i> </a>
          </div>';


        }
        else
            {

              echo '<a href=registracion.php?lang='.$_SESSION['lang'].'>
                      <li>
                        <span class="glyphicon glyphicon-user"></span>'.$lang['registracia'].'
                      </li>
                    </a>

                    <a href=avtorizacia.php?lang='.$_SESSION['lang'].'>
                      <li>
                        <span class="glyphicon glyphicon-log-in pr-3"></span>'.$lang['avtorizacia'].'
                      </li>
                    </a>';
            }
      ?>


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
        document.getElementById("demo").innerHTML = "<?php echo $lang['gamoqveynebis_tarigi']; ?> : &nbsp;" + date
          .getDate() + "/" + Month + "/" + date.getFullYear();
        </script>

        <p> <?php echo $lang['texsti']; ?> : &nbsp;<?php echo $data["texts"]; ?> </p>

        <img src='<?php echo "FOTO/".$data["foto_name"] ?>' style="width: 500px;"><br>

        <div id="com"></div>

        <textarea name="coment" id="coment" class="form-control mt-4"></textarea>
        <input type="submit" value="coment" id="click" class="mt-2">

      </div>

      <?php
}
?>


      <div class="col-3">
        <nav class="navbar">


          <ul id="navb" class="nav flex-column pt-2">
            <h5><b><?php echo $lang['kategoriebi']; ?></b></h5>
            <?php
         echo '<li class="nav-item">
            <a class="nav-link" href="category.php?name=axali_ambebi&lang='.$_SESSION['lang'].'">'.$lang['axali_ambebi'].'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php?name=kodi&lang='.$_SESSION['lang'].'">'.$lang['kodi'].'</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="category.php?name=dizaini&lang='.$_SESSION['lang'].'" >'.$lang['dizaini'].'</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="category.php?name=mxiaruli&lang='.$_SESSION['lang'].'">'.$lang['mxiaruli'].'</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="category.php?name=yelsaxvevebis&lang='.$_SESSION['lang'].'">'.$lang['yelsaxvevebis'].'</a>
          </li>
        </ul>';
?>
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

  <?php
    $output = $_GET['id'];
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  const selectData = (id) => {
    $.ajax({
        url: "skript_php.php",
        type: "POST",
        data: {
          id: id,
        }
      })
      .done(function(data, textStatus, jqXHR) {
        document.getElementById("com").innerHTML = data;
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        // alert("Error");
      });

  }
  window.onload = function exampleFunction() {
    var btn = document.getElementById("click");
    var id = '<?php echo $output; ?>';

    selectData(id);
    btn.onclick = function() {
      const coment = document.getElementById('coment').value;
      var output = '<?php echo $output; ?>';

      $.ajax({
          url: "skript_php.php",
          type: "POST",
          data: {
            get_id: output,
            coment: coment
          }
        })
        .done(function(data, textStatus, jqXHR) {
          console.log("inserted");
          selectData(id);
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
          // alert("Error");
        });
    }
  }
  </script>
  <script src="JS\skript_Js.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>