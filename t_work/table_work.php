
<?php include 'skript_work.php';?>

<!DOCTYPE html>
<html lang="ka">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style type="text/css">
    th,td{
    text-align: center;
    }
    p{
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      text-align: center;
    }
    table{
      font-size: 9px;
    }
    #stl{
      padding-right: 100px;
      padding-left: 100px;
    }

</style>

</head>
<body>

<div class="container-fluid">
<form action="skript_work.php" method="POST" autocomplete="off">   
  <table class="table table-bordered mt-2">

    <thead>
      <tr>
        <th colspan="3">პროდუქციის მომცემი პირუტყვი ან ფრინველი</th>
        <th rowspan="3"><p>პროდუქტის დასახელება და ზომის ერთეული</p></th>
        <th rowspan="3"><p>მარაგი გასული კვარტლის დასაწყისში</p></th>
        <th colspan="8">პროდუქცია და მისი გამოყენება</th>
        <th rowspan="3" style="padding-bottom: 50px;">მარაგი გასული კვარტლის ბოლოსათვის</th>
        <th rowspan="3" style="padding-bottom: 40px;">გაყიდული პროდუქციაში აღებული თანხა</th>
      </tr>
      <tr>
        <th rowspan="2" id="stl"><p>სახეობა</p></th>
        <th rowspan="2"></th>
        <th rowspan="2"><p>რაოდენობა</p></th>
  
        <th rowspan="2"><p>წარმოება</p></th>
        <th rowspan="2"><p>გაყიდვა</p></th>
        <th rowspan="2"><p>გაუქმება</p></th>
        <th rowspan="2"><p>ნატურით გადახდა</p></th>
        <th colspan="3">მეურნეობაში მოხმარება</th>
        <th rowspan="2"><p>დანაკარგები</p></th>
      </tr>
        <tr>
          <th>გადამუშავება</th>
          <th>საკვებად</th>
          <th>პირუტყვის საკვებად/საინკუბაციოდ</th>
        </tr>
    </thead>
    <tbody>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული მსხვილფეხა რქოვანი პირუტყვი" disabled style="border:none;"></td>
        <td>1</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული კამეჩი" disabled style="border:none;"></td>
        <td>2</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული ღორი" disabled style="border:none;"></td>
        <td>3</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული ცხვარი" disabled style="border:none;"></td>
        <td>4</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული თხა" disabled style="border:none;"></td>
        <td>5</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული ბოცვერი" disabled style="border:none;"></td>
        <td>6</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული ქათამი" disabled style="border:none;"></td>
        <td>7</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული ინდაური" disabled style="border:none;"></td>
        <td>8</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული იხვი და ბატი" disabled style="border:none;"></td>
        <td>9</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="დაკლული სხვა ფრინველი" disabled style="border:none;"></td>
        <td>10</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td><input type="text" name="produqtis_dasaxeleba_zomis_erteuli[]" value="ხორცი (კგ)" disabled style="border:none;"></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="მეწველი ძროხა" disabled style="border:none;"></td>
        <td>11</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">რძე (ლ)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value=""></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="მეწველი კამეჩი" disabled style="border:none;"></td>
        <td>12</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">რძე (ლ)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value=""></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="ეწველი ცხვარი" disabled style="border:none;"></td>
        <td>13</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">რძე (ლ)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value=""></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="გაპარსული ცხვარი" disabled style="border:none;"></td>
        <td>14</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">მატყლი (კგ)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value="" disabled></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="მეწველი თხა" disabled style="border:none;"></td>
        <td>15</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">რძე (ლ)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value=""></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="კვეცხისმდებელი ქათამი" disabled style="border:none;"></td>
        <td>16</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">კვერცხი (ცალი)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="lname" value="" disabled></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value=""></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="სკა" disabled style="border:none;"></td>
        <td>17</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">თაფლი (კგ)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="lname" value="" disabled></td>
          <td><input type="text" name="sakvebad[]" value=""></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value=""></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>

      <tr>
        <td><input type="text" name="saxeoba[]" value="აბრეშუმის ჭია" disabled style="border:none;"></td>
        <td>18</td>
          <td><input type="text" name="raodenoba[]" value=""></td>
        <td name="produqtis_dasaxeleba_zomis_erteuli[]">პარკი (კგ)</td>
          <td><input type="text" name="maragi_gasuli_kvartlis_dsawyissh[]" value=""></td>
          <td><input type="text" name="warmoeba[]" value=""></td>
          <td><input type="text" name="gayidva[]" value=""></td>
          <td><input type="text" name="gachuqeba[]" value=""></td>
          <td><input type="text" name="naturit_gadaxda[]" value=""></td>
          <td><input type="text" name="gadamushaveba[]" value=""></td>
          <td><input type="text" name="sakvebad[]" value="" disabled></td>
          <td><input type="text" name="pirutyvis_sakvebad[]" value="" disabled></td>
          <td><input type="text" name="danakargebi[]" value=""></td>
          <td><input type="text" name="maragi_gasuli_kvartlis_bolostvis[]" value=""></td>
          <td><input type="text" name="gayidul_produqciashi_agebuli_tanxa[]" value=""></td>
      </tr>
    </tbody>
    
  </table>
   <input class="btn btn-primary btn-block" type="submit" id="buton" name="buton" value="buton">
</form>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
