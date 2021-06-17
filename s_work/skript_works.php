<?php
session_start();

function connect_sql(){

	$con = new mysqli('localhost','root','','serch_work1');
	$con->set_charset("utf8");

	if ($con->connect_error)
	{
		die('conect failed :'.$con->connect_error);
	}
		return $con;
}

function outl($mwar, $mode){

  $con = connect_sql();
  $sql = "SELECT * from serch1 WHERE mwarmoebeli = '".$mwar."' AND modeli = '".$mode."'";

  $result = $con-> query($sql);
  if ($result->num_rows > 0)
  {
      while ($row = $result-> fetch_assoc())
      {
          echo '<h4>'.$row['mwarmoebeli'].'</h4>
                <p>'.$row['modeli'].'</p>';
          
      }
  }
  else{
    echo "<div class='alert alert-danger'> <h1><strong> none </strong></h1></div>";
  }
    $con->close();
  }

  if (isset($_POST['subject']) && isset($_POST['topic']))
  {   
        $mwar = $_POST['subject'];
        $mode = $_POST['topic'];

      outl($mwar, $mode);
  }

?>