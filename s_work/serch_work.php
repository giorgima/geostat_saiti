<?php

include 'skript_works.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="საქსტატი">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="გიორგი მომხმარებლის">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style type="text/css">
  select{
    width: 20%;
  }
</style>

</head>
<body>

<div class="container">
  <form name="form1" method="POST" id="form1" action="skript_works.php" class="p-5 m-5">

    <select name="subject" id="subject">
      <option value="" selected="selected">მწარმოებელი</option>
    </select>
    <br><br>

    <select name="topic" id="topic">
      <option value="" selected="selected">მოდელი</option>
    </select>
    <br><br>

 <!--  Chapters: <select name="chapter" id="chapter">
              <option value="" selected="selected">Please select topic first</option>
            </select>
            <br><br> -->

    <input type="submit" value="Submit"> 

  </form>

</div>
  <script src="skript_Js_works.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
