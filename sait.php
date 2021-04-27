<?php

include 'skript_php.php';

if(isset($_GET['lang'])){
  $lang = $_GET['lang'];
  $_SESSION['lang'] = $lang;
}
else{
  $_SESSION['lang'] = 'geo';
  $lang = 'geo';
}

switch ($lang) {
  case 'geo':
    include 'language_geo.php';
    break;
  case 'usa':
    include 'language_usa.php';
    break;
  default:
    include 'language_geo.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>საქსტატი</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="საქსტატი">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="გიორგი მომხმარებლის">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="CSS\sait.css">
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
        <a class="nav-link" href="#"> <?php echo $lang['kontaktebi']; ?> </a>
      </li>
    </ul>

    <ul id="login" class="nav navbar-nav navbar-right text-right pr-5">


      <?php
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true)
        {


          echo '<div style="color:white;">'.$_SESSION["name"].'&nbsp;&nbsp;&nbsp;</div>
          <div class="p-2">
            <a href="logout.php" title="გამოსვლა"><i class="fas fa-sign-out-alt"></i> </a>
          </div>';

        }
        else
            {

              echo '<a href="registracion.php">
                      <li>
                        <span class="glyphicon glyphicon-user"></span>'.$lang['registracia'].'
                      </li>
                    </a>

                    <a href="avtorizacia.php">
                      <li>
                        <span class="glyphicon glyphicon-log-in pr-3"></span>'.$lang['avtorizacia'].'
                      </li>
                    </a>';
            }
      ?>
          <li>
            <a href='sait.php?lang=geo'> <img src='FOTO/geo.png' width='20px'> </a>
          </li>
          <li>
            <a href='sait.php?lang=usa'> <img src='FOTO/usa.png' width='30px'> </a>
          </li>
    </ul>
  </nav>

	<div class="container-fluid">
	  <div class="row">
	    <div class="col-sm-1" style="margin-right:60px;">
	      <nav class="navbar sidenav border border-dark p-2 mt-4">
	        <ul class="navbar-nav">
	          <li class="nav-item">
	            <a class="nav-link disabled" href="#"> <?php echo $lang['zoli'];  ?> </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="https://en.wikipedia.org/wiki/Main_Page">Wikipedia</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link"
	              href="https://www.w3schools.com/bootstrap4/bootstrap_utilities.asp">www.w3schools.com</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link disabled" href="#"> <?php echo $lang['zoli']; ?> </a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="#">Link</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Link</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link disabled" href="#"> <?php echo $lang['zoli'];  ?> </a>
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

    <div class=" col-sm-10 ml-5">
      <div class="jumbotron container-fluid text-left brend mt-2">

        <?php
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true)
        {

          echo '<h2>'.$lang['title1'].'</h2>
                <p>'.$lang['titles_texsti'].'</p>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">'.$lang['titles_gilakis_texsti'].'
                >></button>';

        }
        else
            {

              echo '<h2>'.$lang['title'].'</h2>';
            }
        ?>

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h3 class="modal-title"> <?php echo $lang['titles_gilakis_texsti']; ?> </h3>
                <button type="button" class="close" data-dismiss="modal"> × </button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form action="skript_php.php" method="POST" autocomplete="off" class="needs-validation" enctype="multipart/form-data" novalidate>

                <div class="form-group">
                  <label for="title"> <?php echo $lang['suratis_atvirtva']; ?> </label>

                  <input class="form-control-file border p-1 mb-3" type="file" name="foto_name" accept="image/png, image/jpeg" title="<?php echo $lang['suratis_atvirtva']; ?>" required>

                  <div class="valid-feedback"> <?php echo $lang['swori']; ?>
                  </div>
                  <div class="invalid-feedback"> <?php echo $lang['araswori'];?>
                  </div>

                </div>

                <div class="form-group">
                  <label for="title"> <?php echo $lang['statiis_satauri']; ?> </label>

                  <input class="form-control mb-3" type="text" placeholder="<?php echo $lang['statiis_satauri']; ?>" id="title" name="title" title="<?php echo $lang['statiis_satauri']; ?>" autofocus="title" required>

                  <div class="valid-feedback"> <?php echo $lang['swori']; ?> </div>
                  <div class="invalid-feedback"> <?php echo $lang['araswori']; ?> </div>

                </div>

                <div class="form-group">
                  <label for="texts"> <?php echo $lang['statiis_texsti']; ?> </label>

                  <textarea class="form-control mb-3" type="text" placeholder="<?php echo $lang['statiis_texsti']; ?>" id="texts" name="texts" title="<?php echo $lang['statiis_texsti']; ?>" required></textarea>

                  <div class="valid-feedback"> <?php echo $lang['swori']; ?> </div>
                  <div class="invalid-feedback"> <?php echo $lang['araswori']; ?> </div>

                </div>

                  <input type="hidden" name="lang" value="<?php echo $_SESSION['lang']; ?>">

                  <input class="btn btn-success btn-block" type="submit" name= "button" value="<?php echo $lang['damateba']; ?>">

                </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"> <?php echo $lang['gauqmeba']; ?> </button>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid brend" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
        <div class="row">
          <div class="col-sm-4">
            <h3> <?php echo $lang ['reklamis_satauri']; ?> </h3>
            <p> <?php echo $lang ['reklamis_texsti']; ?>. </p>

            <a href="https://on.ge/story/61805-10-%E1%83%A1%E1%83%A2%E1%83%90%E1%83%A2%E1%83%98%E1%83%90-%E1%83%9B%E1%83%94%E1%83%9C%E1%83%A2%E1%83%90%E1%83%9A%E1%83%A3%E1%83%A0-%E1%83%AF%E1%83%90%E1%83%9C%E1%83%9B%E1%83%A0%E1%83%97%E1%83%94%E1%83%9A%E1%83%9D%E1%83%91%E1%83%90%E1%83%96%E1%83%94-%E1%83%A0%E1%83%9D%E1%83%9B%E1%83%94%E1%83%9A%E1%83%98%E1%83%AA-%E1%83%97%E1%83%90%E1%83%95%E1%83%98%E1%83%A1-%E1%83%A8%E1%83%94%E1%83%AA%E1%83%9C%E1%83%9D%E1%83%91%E1%83%A8%E1%83%98-%E1%83%93%E1%83%90%E1%83%92%E1%83%94%E1%83%AE%E1%83%9B%E1%83%90%E1%83%A0%E1%83%94%E1%83%91%E1%83%90%E1%83%97"

            class="btn btn-secondary  pr-2 mb-3" role="button"> <?php echo $lang['reklamis_gilaki']; ?> >></a>

          </div>

          <!-- -------------------------------------------------------------------------------- -->
          <?php
                  if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true)
                  {
                    echo '<div class="col-sm-8 p-2 container-fluid border border-dark">
                          <div class="row p-1">

                          <div class="col-sm-12">
                            <input  type="text" class="form-control border border-dark" id="myInput" onkeyup="myFunction()"
                            placeholder="'.$lang['dzebna'].'" title="'.$lang['dzebna'].'">
                          </div>

                          <nav class="col-sm-2 p-2" id="myScrollspy">
                          <ul class="border border-dark p-2 ml-1 nav-pills">';

                    $con = connect_sql();

                    if (!$con)
                    {
                        die('conect failed');
                    }
                    else
                    {
            						$result3 = pagination();
                        while ($row = $result3[0]-> fetch_assoc())
                            {

                         echo "<ul>
                                 <li>
                                  <a class=nav-link active href=#".$row["title"].">".$row['title']."</a>
                                 </li>
                               </ul>";

                            }

                    }
                    echo '</ul>
                    </nav>';


						  echo '<div class="container-fluid col-sm-10 p-2">
								  <table class="table table-dark table-hover table-striped table-bordered table-sm">
								  <thead>
									<tr>
									  <th class="th-sm">ID</th>
									  <th class="th-sm">'.$lang ['statiis_satauri'].'</th>
									  <th class="th-sm">'.$lang ['statiis_texsti'].'</th>
									</tr>
								  </thead>
								  <tbody id="myTable">';

                    $result4 = pagination();
									  while ($row = $result4[0]->fetch_assoc())
									  {
										echo '<tr id='.$row["title"].'><td>'.$row["id"].'</td><td><a href=single.php?id='.$row["id"].'&lang='.$_SESSION['lang'].'>'.$row['title'].'</td><td>'.$row['texts'].'</td></tr>';

									  }

								echo '</tbody>
									  </table>

									  <ul class="pagination justify-content-center">';

										for($page=1; $page <= $result4[1]; $page++){

											echo '<li class="page-item">
                      <a href="sait.php?page='.$page.'">'.$page.'</a>
                      </li>';
										}

    								echo '<div class="p-2">';
    								$rok = "SELECT count(id) as counts from article";
    								$resul = $con-> query($rok);
    								$rows = $resul-> fetch_assoc();
    								echo ''.$lang ['raodenoba'].': &nbsp;'.$rows["counts"];
    								echo '</div>';

                   echo '</ul>
          						  </div>
          					   </div>
          					  </div>
                     </div>
                    </div>';
                  }
                  else
                      {
                        echo '<div class="container-fluid col-sm-8 pl-5">

                              <video width="600" controls>';
                                // echo id_connects();
                               echo ' <source src="VIDEO/skillet.mp4" type="video/mp4">
                              </video>
                              </div>';
                      }
                ?>
          <!-- ------------------------------------------------------------------------------->

        </div>
      </div>
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