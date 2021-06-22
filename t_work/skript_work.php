<?php
session_start();

  if (isset($_POST['buton'])) {
      $con = new mysqli('localhost','root','','table_work1');
      $con->set_charset("utf8");

  if ($con->connect_error)
  {
    die('conect failed :'.$con->connect_error);
  }
  else
  {
  for ($x = 0; $x <= 14; $x++) {

    $saxeoba = $_POST['saxeoba'][$x];
    $raodenoba = $_POST['raodenoba'][$x];
    $produqtis_dasaxeleba_zomis_erteuli = $_POST['produqtis_dasaxeleba_zomis_erteuli'][$x];
    $maragi_gasuli_kvartlis_dsawyissh = $_POST['maragi_gasuli_kvartlis_dsawyissh'][$x];
    $warmoeba = $_POST['warmoeba'][$x];
    $gayidva = $_POST['gayidva'][$x];
    $gachuqeba = $_POST['gachuqeba'][$x];
    $naturit_gadaxda = $_POST['naturit_gadaxda'][$x];
    $gadamushaveba = $_POST['gadamushaveba'][$x];
    $sakvebad = $_POST['sakvebad'][$x];
    $pirutyvis_sakvebad = $_POST['pirutyvis_sakvebad'][$x];
    $danakargebi = $_POST['danakargebi'][$x];
    $maragi_gasuli_kvartlis_bolostvis = $_POST['maragi_gasuli_kvartlis_bolostvis'][$x];
    $gayidul_produqciashi_agebuli_tanxa = $_POST['gayidul_produqciashi_agebuli_tanxa'][$x];


    $sql = "INSERT INTO table1(saxeoba, raodenoba, produqtis_dasaxeleba_zomis_erteuli, maragi_gasuli_kvartlis_dsawyissh, warmoeba, gayidva, gachuqeba, naturit_gadaxda, gadamushaveba, sakvebad, pirutyvis_sakvebad, danakargebi, maragi_gasuli_kvartlis_bolostvis, gayidul_produqciashi_agebuli_tanxa) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssssssssssss", $saxeoba, $raodenoba, $produqtis_dasaxeleba_zomis_erteuli, $maragi_gasuli_kvartlis_dsawyissh, $warmoeba, $gayidva, $gachuqeba, $naturit_gadaxda, $gadamushaveba, $sakvebad, $pirutyvis_sakvebad, $danakargebi, $maragi_gasuli_kvartlis_bolostvis, $gayidul_produqciashi_agebuli_tanxa);
    $stmt->execute();


    echo "sworia SUccessfully...";
    // header("refresh:5; url=table_work.php");
   
    }
   $con->close();
    exit();
  } 
   
}
 
?>