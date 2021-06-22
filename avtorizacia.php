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

    <title><?php echo $lang['avtorizacia']; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="საქსტატი ავტორიზაცია">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="გიორგი მომხმარებლის">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="CSS\avtorizacia.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="container">
        <h1 id="satauri" class="text-center p-3"><?php echo $lang['avtorizacia']; ?></h1>

        <div id="borders" class="container p-4" style="width:40%">
            <form action="skript_php.php" method="POST" autocomplete="off" class="needs-validation" novalidate>

                <div class="input-group mb-3">
                    <label class="texts" for="usernam"></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>

                    <input class="form-control" type="text" placeholder="<?php echo $lang['momxmareblis_sazeli']; ?>" id="usernam" name="username" title="<?php echo $lang['momxmareblis_sazeli_title']; ?>" autofocus="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>

                    <div class="valid-feedback"><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['swori']; ?></div>
                    <div class="invalid-feedback"><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['araswori']; ?></div>
                </div>

                <div class="input-group mb-3">
                    <label class="texts" for="passwd"></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                    </div>

                    <input class="form-control" type="password" placeholder="<?php echo $lang['paroli']; ?>"  id="passwd" name="pass" title="<?php echo $lang['momxmareblis_paroli_title']; ?>"
                    value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" required>
                    
                    <!-- <i class="fa fa-eye showpwd" onClick="showPwd('passwd', this)"></i> -->

                    <div class="valid-feedback"><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['swori']; ?></div>
                    <div class="invalid-feedback"><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$lang['araswori']; ?></div><br>

                </div>

                <!-- tvali -->
                <div>
                <i class="fa fa-eye showpwd" onClick="showPwd('passwd', this)"></i>
                </div>

                <div class="checkbox pb-5">
                    <label><input type="checkbox" checked="checked" name="remember"><b> <?php echo $lang['damaxsovreba']; ?></b></label>
                </div>

                <input class="btn btn-primary btn-block" type="submit" name="login" id="button" value="<?php echo $lang['avtorizacia']; ?>">

            </form>
        </div>
    </div>

    <script src="JS\skript_Js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>