<?php
$conn = mysqli_connect("localhost", "root", "simguejae1010", "snack");
$sql = "SELECT * FROM cookie WHERE id=".$_GET['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result)
 ?>
<style>

  table{
    border:1px dashed #444444;
  }
  tr {
    border:1px dashed #444444;
  }
  .text {
    
  }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All of Snack</title>
  </head>
  <body>
    <h2 align="center">과자 설명</h2>
    <p style="border-top:1px solid #444444">
      <h4 align = "center">
      <?php
      if($row['image'] != NULL){
        echo '<img src = "'.$row['image'].'"/><br>';
      }
      echo $row['description'];
       ?>
     </h4>
      <!--간략 소개-->
      <table align = "right">
        <thead>
          <tr>
            <td width = "150" align = "center">
              <h4>과자이름</h4>
            </td>
            <td width = "100" align = "center">
              <h4>가격</h4>
            </td>
          </tr>
        </thead>

        <tbody>
          <tr>
      <?php
      if(isset($_GET['id']))
      {
        if($row != FALSE)
        {
          echo '<td align = "center">'.$row[1].'</td>';
          echo '<td align = "center">'.$row[2].'</td>';
        }
      }
       ?>
     </tr>
     </tbody>
     </table>
   </p>
    <a href="index.php">목록</a>
    <?='<a class = "text" href="update.php?id='.$row['0'].'">수정</a>'?>
    <?='<a class = "text" href="delete.php?id='.$row['0'].'">삭제  </a>'?>
  </body>
</html>
