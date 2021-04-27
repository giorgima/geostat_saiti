<?php

include 'skript_php.php';

?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>

    <title>რეგისტრაცია</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="საქსტატი რეგისტრაცია">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="გიორგი მომხმარებლის">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="CSS\registracion.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1 id="satauri" class="text-center p-3">რეგისტრაცია</h1>

        <div id="borders" class="container p-4" style="width:40%">
            <form action="skript_php.php" method="POST" autocomplete="off" class="needs-validation" novalidate>

                <div class="form-group">
                    <label class="texts" for="username">მომხმარებლის სახელი</label>
                    <input class="form-control" type="text" placeholder="მომხმარებლის სახელი" id="username" name="username" title="შეიყვანეთ თქვენი ნიკი" autofocus="username" required>
                    <div class="valid-feedback">სწორი.</div>
                    <div class="invalid-feedback">არასწორი.</div>
                </div>

                <div class="form-group">
                    <label class="texts" for="elfosta">ელ-ფოსტა</label>
                    <input class="form-control" type="email" placeholder="ელ-ფოსტა" id="email" name="email" title="შეიყვანეთ თქვენი ელ-ფოსტა" required>
                    <div class="valid-feedback">სწორი.</div>
                    <div class="invalid-feedback">არასწორი.</div>
                </div>

                <div class="form-group">
                    <label class="texts" for="password">პაროლი</label>
                    <input class="form-control" type="password" placeholder="პაროლი" id="password" name="pass" title="შეიყვანეთ თქვენი პაროლი" required>
                    <div class="valid-feedback">სწორი.</div>
                    <div class="invalid-feedback">არასწორი.</div>
                </div>

                <!-- <div class="form-group">
                    <label class="texts" for="passwordagain">პაროლის განმეორება</label>
                    <input class="form-control" type="password" placeholder="პაროლის განმეორება" id="passwordagain" name="passwordagain" title="გაიმეორეთ თქვენი პაროლი" required>
                    <div class="valid-feedback">სწორი.</div>
                    <div class="invalid-feedback">არასწორი.</div>
                </div>  -->

                <input class="btn btn-primary btn-block" type="submit" id="button" value="რეგისტრაცია">

            </form>
        </div>
    </div>

    <script src="JS\skript_Js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>