<?php
session_start();
//-----------------------------------------phpmailer code
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'PHPMailer/vendor/autoload.php';

// function conect_mail($username, $email){
// 	$mail = new PHPMailer(true); //Argument true in constructor enables exceptions
// 	try {
// 	//PHPMailer Object

// 	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
// 	$mail->isSMTP();
// 	$mail->Host = 'smtp.mailtrap.io';
// 	$mail->SMTPAuth   = true;
// 	$mail->SMTPSecure = 'tls';
// 	$mail->Port = 465;
// 	//$mail->CharSet = 'UTF-8';

// 	$mail->Usarname = '3f450c3ce1f549';
// 	$mail->Password = 'ee74e330f06a15';

// 	//Send HTML or Plain Text email
// 	$mail->isHTML(true);

// 	$mail->Subject = "Subject Text";
// 	$mail->setFrom('from@example.com', 'Mailer');

// 	$mail->Body = "<div>name".$username.", email".$email."</div>";
// 	$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient

	// 	$mail->send();
	// 	echo "Message has been sent successfully";
	// }
	// catch (Exception $e) {
	// 	echo "Mailer Error: " . $mail->ErrorInfo;
	// }
// }
//------------------------------------------------------------


function connect_sql(){

	$con = new mysqli('localhost','root','','test1');
	$con->set_charset("utf8");

	if ($con->connect_error)
	{
		die('conect failed :'.$con->connect_error);
	}
		return $con;
}

function categori_serch(){
	$con = connect_sql();
	$sql = "SELECT * from article";

	$result = $con-> query($sql);
	if ($result-> num_rows > 0)
	{
	    while ($row = $result-> fetch_assoc())
	    {
	        echo "<div class='container alert alert-info'><h3>".$row["categoris"]."<br><strong>".$row["title_ka"]."</strong></h3><p>".$row["texts_ka"]."</p></div>";
	    }
	}
	else{
		echo "<div class='alert alert-danger'> <h1><strong> none </strong></h1></div>";
	}

		$con->close();

}

function registracion($username, $email, $password)
{
	$con = connect_sql();
	$password=md5($password);

		$stmt = $con->prepare("select * from registracion where `username` = ? or `email`= ?");
		$stmt->bind_param("ss", $username, $email);
		$stmt->execute();
		$stmt_result = $stmt->get_result();

		if ($stmt_result->num_rows > 0){
			echo "aseti maili arsebobs ukve";
			header("refresh:5; url=registracion.php");
		}
		else{

			$sql = "INSERT INTO registracion(username, email, pass) VALUES(?, ?, ?)";
			$stmt = $con->prepare($sql);
			if( $stmt->bind_param("sss", $username, $email, $password)){

				$stmt->execute();
			}

					echo "რეგისტრაცია წარმატებული";
					// conect_mail($username, $email);
				header("refresh:5; url=avtorizacia.php");
		}
		$con->close();

}


function avtorizacia($username, $password)
{
	$con = connect_sql();
	$password=md5($password);

		$stmt = $con->prepare("select * from registracion where `username` = ? and `pass`= ?");
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$stmt_result = $stmt->get_result();

		if ($stmt_result->num_rows > 0)
		{
			$data = $stmt_result->fetch_assoc();

			if (($data["username"] === $username) && ($data["pass"] === $password))
			{
				$_SESSION['is_logged']=true;
				$_SESSION['name']=$data["username"];

				echo "ავტორიზაცია წარმატებული <br>";
				damaxsovreba_cookie($username,$password);
				echo '
				<div class="spin">
    			<img src="FOTO\spinner.gif" alt="logo" style="
						position: absolute;
						top: 50%;
						left: 50%;
						-moz-transform: translateX(-50%) translateY(-50%);
						-webkit-transform: translateX(-50%) translateY(-50%);
						transform: translateX(-50%) translateY(-50%);">
				</div>';
				header("refresh:3; url=sait.php");

				$con->close();

			}
			else
			{
				echo "ავტორიზაცია შეცდომა";
			}
		}
		else
		{
			echo "შეცდომა";
		}

}

function damaxsovreba_cookie($username,$password){

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("pass",$_POST["pass"],time()+ 3600);

	echo "Cookies დამახსოვრებულია";
} else {
	setcookie("username","");
	setcookie("pass","");

	echo "Cookies არ არის დამახსოვრებულია";
}
}


function statia($categoris, $title_ka, $texts_ka, $title_en, $texts_en, $foto_name)
{
	$con = connect_sql();

		$image = $foto_name["name"];
		$target_dir = "FOTO/";
		$target_file = $target_dir . basename($foto_name["name"]);

		$sql = "INSERT INTO article(categoris, title_ka, texts_ka, title_en, texts_en, foto_name) VALUES(?, ?, ?, ?, ?, ?)";

		$stmt = $con->prepare($sql);
		$stmt->bind_param("ssssss", $categoris, $title_ka, $texts_ka, $title_en, $texts_en, $image);
		$stmt->execute();

		if (move_uploaded_file($foto_name['tmp_name'], $target_dir.$image)) {
  		echo $msg = "სტატია დამატებულია";
  	}
  	else{
			echo $msg = "სტატია არაა დამატებული";
  	}

		header("refresh:1; url=sait.php");

		$con->close();

}


function pagination(){


	$con = connect_sql();

	$results_per_page = 5;

	$sql1 = "SELECT * from article";
  	$resul1 = $con-> query($sql1);
  	$rows1 = $resul1-> num_rows;

	$number_of_page = ceil($rows1/$results_per_page);

	if(!isset($_GET['page'])){
		$page=1;
	}else{
		$page=$_GET['page'];
	}

	$first_page = ($page-1)*$results_per_page;

	$sql2 = 'SELECT  id, categoris, title_'.$_SESSION['lang'].' as title, texts_'.$_SESSION['lang'].' as texts from article ORDER BY title ASC LIMIT '.$first_page. ','.$results_per_page;
 	$result2 = $con-> query($sql2);

	$res = array($result2,$number_of_page);
    return $res;

}


// function table($id, $title, $texts)
// {
// 	$con = connect_sql();

//     $sql = "SELECT * from article";

//     $result = $con-> query($sql);
//     if ($result-> num_rows > 0)
//     {
//         while ($row = $result-> fetch_assoc())
//         {
//             echo "<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["texts"]."</td></tr>";
//         }
//     }

// 		$con->close();

// }


//---------------------------------------------------------------------
	if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass']) )
	{
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['pass'];

			registracion($username, $email, $password);
	}


	if (isset($_POST['username']) && isset($_POST['pass']) && !isset($_POST['email']))
	{

			$username = $_POST['username'];
			$password = $_POST['pass'];

			avtorizacia($username, $password);

	}


	if (isset($_POST['title_ka']) && isset($_POST['texts_ka']) && isset($_POST['texts_en']) && isset($_POST['texts_en']) && (isset($_POST['button'])) && !empty($_FILES["foto_name"]["name"]))
	{
			$categoris = $_POST['categoris'];
			$title_ka = $_POST['title_ka'];
			$texts_ka = $_POST['texts_ka'];
			$title_en = $_POST['title_en'];
			$texts_en = $_POST['texts_en'];
			$foto_name = $_FILES["foto_name"];

			statia($categoris, $title_ka, $texts_ka, $title_en, $texts_en, $_FILES["foto_name"]);
	}


	// if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['texts']))
	// {
	// 		$id = $_POST['id'];
	// 		$title = $_POST['title'];
	// 		$texts = $_POST['texts'];

	// 		table($id, $title, $texts);
	// }
?>