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


<?php
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true)
        {


          echo '<div style="color:white;">'.$_SESSION['name'].'&nbsp;&nbsp;&nbsp;</div>
          <div class="p-2">
            <a href="logout.php" title="გამოსვლა"><i class="fas fa-sign-out-alt"></i> </a>
          </div>';

        }
        else
            {
              echo '';
            }
?>


      <li>
        <a href='profile.php?lang=ka'> <img src='FOTO/ka.png' width='20px'> </a>
      </li>
      <li>
        <a href='profile.php?lang=en'> <img src='FOTO/en.png' width='30px'> </a>
      </li>

    </ul>
  </nav>

<?php
if(isset($_SESSION['is_logged']) && $_SESSION['is_logged']==true)
{

echo '<div class="container">
		<h1 id="satauri" class="text-center">'.$lang['profili'].'</h1>
			<div class="row">
				<div class="col-6">
					<div class="card bg-info m-3">

						<div class="card-header">
						<!-- foto -->
						<img src="https://static-cse.canva.com/blob/195615/paul-skorupskas-7KLa-xLbSXA-unsplash-2.jpg" class="rounded-circle" alt="Cinque Terre" width="60%" height="60%" style="margin-left: 100px;">   
			    		</div>

			    		<div class="card-body">
			    		<!-- username -->
						<h1 class="text-center">'.$_SESSION['name'].'</h1>
						</div>

			    		<div class="card-footer">
						<!-- logout -->
						<a class="btn btn-primary container-fluid" role="button" href="logout.php" title="'.$lang['gamosvla'].'"> '.$lang['gamosvla'].' &nbsp;&nbsp; <i class="fas fa-sign-out-alt"></i> </a>
						</div>

					</div>
				</div>
				

	<div class="col-6">
		<div class="card bg-info m-3">

			<form action="skript_php.php" method="POST" autocomplete="off" class="needs-validation" novalidate>
				<div class="card-header p-4">
					<label for="old_Password"> ძველი პაროლი </label>
  					<input type="password" id="old_Password" name="old_Password" placeholder="შეიყვანეთ არსებული პაროლი" title="შეიყვანეთ არსებული პაროლი" minlength="3" maxlength="8" style="width:60%;" required>

  					<div class="valid-feedback">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['swori'].'</div>
                    <div class="invalid-feedback">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['araswori'].'</div>

				</div>
				<div class="card-body p-4">
					<label for="new_password"> ახალი პაროლი </label>
  					<input type="password" id="new_password" name="new_password" placeholder="შეიყვანეთ ახალი პაროლი" title="შეიყვანეთ ახალი პაროლი" minlength="3" maxlength="8" style="width:60%;" required>

  					<div class="valid-feedback">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['swori'].'</div>
                    <div class="invalid-feedback">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['araswori'].'</div>

				</div>
				<div class="card-footer">
					<input class="btn btn-primary btn-block" type="submit" name="changes_Password" id="button" value="პაროლის შეცვლა">
				</div>
			</form>

		</div>
	</div>';


		$con = connect_sql();

		$sql = "SELECT * from registracion";
		$result = $con-> query($sql);	
	   	$row = $result-> fetch_assoc();
	    
		echo '<div class="col-6 mb-5">
			<div class="card bg-info m-3">
				<div class="card-header">
					<p class="text-center">'.$lang['dabadebis_tarigi'].' : &nbsp;&nbsp;'.$row['date_of_birth'].'</p>
				</div>
				<div class="card-body">
					<p class="text-center">'.$lang['sqesi'].' : &nbsp;&nbsp;'.$row['gender'].'</p>
				</div>
				<div class="card-footer">
					<p class="text-center">'.$lang['email'].' : &nbsp;&nbsp;'.$row['email'].'</p>
				</div>
			</div>
		</div>


	</div>
</div>';
}
else
    {
      echo '<div class"container-fluid">
      <h1 class="text-center m-5 p-5">'.$lang['gaiaret_avtorizacia'].'</h1>
      </div>';
    }

?>


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