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

    <title><?php echo $lang['registracia']; ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="საქსტატი რეგისტრაცია">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="გიორგი მომხმარებლის">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="CSS\registracion.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>

<body>
    <div class="container">
        <h1 id="satauri" class="text-center p-3"><?php echo $lang['registracia']; ?></h1>

        <div id="borders" class="container p-4" style="width:40%">
            <form action="skript_php.php" method="POST" autocomplete="off" class="needs-validation" novalidate>

                <div class="input-group">
                    <label class="texts" for="username"></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>

                    <input class="form-control" type="text" placeholder="<?php echo $lang['momxmareblis_sazeli']; ?>" id="username" name="username" 
                    title="<?php echo $lang['momxmareblis_sazeli_title']; ?>" autofocus="username" required>
                </div>


                <!-- dabadebis dge -->
                <div class="form-check-inline mt-4">
                    <div class="input-group-prepend mr-1" style="height:38px">
                        <span class="input-group-text"><i class='fas fa-birthday-cake'></i></span>
                    </div>

                    <label for="sel1"></label>
                      <select class="form-control mr-3" id="sel1" name="date_of_birth" style="width:106px" required>
                        <option value =""><?php echo $lang['dge']; ?></option>
                        <option>01/</option>
                        <option>02/</option>
                        <option>03/</option>
                      </select>

                      <select class="form-control mr-3" id="sel1" name="date_of_birth" style="width:107px" required>
                        <option value =""><?php echo $lang['tve']; ?></option>
                        <option>1/</option>
                        <option>2/</option>
                        <option>3/</option>
                      </select>

                      <select class="form-control" id="sel1" name="date_of_birth" style="width:107px" required>
                        <option value =""><?php echo $lang['weli']; ?></option>
                        <option>2000</option>
                        <option>1997</option>
                        <option>1998</option>
                      </select>

                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback"></div>
                </div>


                <!-- sqesi -->
                <div class="form-check-inline mt-4">
                    <div class="input-group-prepend mr-2" style="height:38px">
                        <span class="input-group-text"><i class='fas fa-transgender' style="font-size:20px"></i></span>
                    </div>

                    <label class="form-check-label mr-4" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="მამრობითი" ><?php echo $lang['mamrobiti']; ?>
                    </label>
           
                    <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="დედრობითი"><?php echo $lang['mdedrobit']; ?>
                    </label>

                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback"></div>
                </div>


                <div class="input-group mt-4">
                    <label class="texts" for="email"></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    </div>

                    <input class="form-control" type="email" placeholder="<?php echo $lang['email']; ?>" id="email" name="email" title="<?php echo $lang['email_title']; ?>" required>

                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback"></div>
                </div>


                <div class="input-group mt-4">
                    <label class="texts" for="password"></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                    </div>

                    <input class="form-control" type="password" placeholder="<?php echo $lang['paroli']; ?>" id="password" name="pass" title="<?php echo $lang['momxmareblis_paroli_title']; ?>" required>

                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback"></div>
                </div>

                <!-- <div class="form-group">
                    <label class="texts" for="passwordagain">პაროლის განმეორება</label>
                    <input class="form-control" type="password" placeholder="პაროლის განმეორება" id="passwordagain" name="passwordagain" title="გაიმეორეთ თქვენი პაროლი" required>
                    <div class="valid-feedback">სწორი.</div>
                    <div class="invalid-feedback">არასწორი.</div>
                </div>  -->

                <input class="btn btn-primary btn-block" type="submit" id="button" value="<?php echo $lang['registracia']; ?>">

            </form>
        </div>
    </div>

    <script src="JS\skript_Js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>