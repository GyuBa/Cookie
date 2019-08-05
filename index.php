<?php
$conn = mysqli_connect("localhost", "root", "simguejae1010", "snack");
$sql = "SELECT * FROM cookie";
$result = mysqli_query($conn, $sql);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All of Snack</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <style>
          table{
                  border-top: 1px solid #444444;
                  border-collapse: collapse;
          }
          tr{
                  border-bottom: 1px solid #444444;
                  padding: 10px;
          }
          td{
                  border-bottom: 1px solid #efefef;
                  padding: 10px;
          }
          table .even{
                  background: #efefef;
          }
          .text{
                  text-align:center;
                  padding-top:20px;
                  color:#000000
          }
          .text:hover{
                  text-decoration: underline;
          }
          a:link {color : #57A0EE; text-decoration:none;}
          a:hover { text-decoration : underline;}
  </style>

  <body>
    <h2 align = "center">과자 설명</h2>
    <table align = "center">
      <thead>
        <tr>
          <td width = "50" align = "center">
            <h4>순번</h4>
          </td>
          <td width = "500" align = "center">
            <h4>과자이름</h4>
          </td>
          <td width = "50" align = "center">
            <h4>가격</h4>
          </td>
        </tr>
      </thead>

      <tbody>
        <?php
        $rowNum = 1;
        while($row = mysqli_fetch_array($result))
        {
          $i = 0;

          if($rowNum % 2 == 0){
            echo '<tr class = "even">';
          }
          else {
            echo '<tr>';
          }
          echo '<td align = "center"><a class = "text" href = detail.php?id='.$row[0].'>'.$rowNum.'</a></td>';
          while($i<2)
          {
            echo '<td align = "center"><a class = "text" href = detail.php?id='.$row[0].'>'.$row[$i+1].'</a></td>';
            $i = $i + 1;
          }
          echo '</tr>';
          $rowNum = $rowNum + 1;
        }
         ?>
      </tbody>
      <tfoot>
        <tr>
          <td align = "right" colspan = "3"><a href="create.php">추가</a></td>
        </tr>
      </tfoot>
    </table>
  </body>
</html>
