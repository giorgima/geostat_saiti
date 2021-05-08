<?php
include 'skript_php.php';

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
    			<div class="card">
			  		<h5 class="card-header">'.$row10['categoris'].'</h5>
		  			<div class="card-body">
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

    <script src="JS\skript_Js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>