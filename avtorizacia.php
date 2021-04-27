<?php

include 'skript_php.php';

?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>

    <title>ავტორიზაცია</title>

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
        <h1 id="satauri" class="text-center p-3">ავტორიზაცია</h1>

        <div id="borders" class="container p-4" style="width:40%">
            <form action="skript_php.php" method="POST" autocomplete="off" class="needs-validation" novalidate>

                <div class="input-group mb-3">
                    <label class="texts" for="username"></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>

                    <input class="form-control" type="text" placeholder="მომხმარებლის სახელი" id="username" name="username" title="შეიყვანეთ თქვენი ნიკი" autofocus="username"

                    value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>

                    <div class="valid-feedback">სწორი.</div>
                    <div class="invalid-feedback">არასწორი.</div>
                </div>

                <div class="input-group mb-3">
                    <label class="texts" for="paswsord"></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>

                    <input class="form-control" type="password" placeholder="პაროლი"  id="passwd" name="pass" title="შეიყვანეთ თქვენი პაროლი"

                    value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" required><br>

                    <div class="valid-feedback">სწორი.</div>
                    <div class="invalid-feedback">არასწორი.</div><br>

                </div>
                <!-- tvali -->
                <i class="fa fa-eye showpwd" onClick="showPwd('passwd', this)"></i>

                <div class="checkbox">
                    <label><input type="checkbox" checked="checked" name="remember"><b> დამახსოვრება</b></label>
                </div>

                <input class="btn btn-primary btn-block" type="submit" name="login" id="button" value="ავტორიზაცია">

            </form>
        </div>
    </div>

    <script src="JS\skript_Js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>