<?php
$conn = mysqli_connect("localhost", "root", "simguejae1010", "snack");
$sql = "SELECT * FROM cookie WHERE id = ". $_GET['id'];
$result = mysqli_query($conn, $sql);

if($result == FALSE)
{
  echo "문제가 발생했습니다.";
  error_log(mysqli_error($onn));
}
else
{
  $row = mysqli_fetch_array($result);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All of Snack</title>
  </head>
  <body>
    <form action="process_update.php?id=<?=$_GET['id']?>" method="post">
      <p>

        <label for="name">과자 이름</label>
        <br>
        <input id = "name" type="text" name="name" placeholder="과자 이름" value = "<?=$row['name']?>">
      </p>

      <p>
        <label for="description">설명</label>
        <br>
        <textarea id="description" name="description" placeholder="ㅇㅇ과자는 타 과자에 비해..."><?=$row['description']?></textarea>
      </p>

      <p>
        <label for="price">가격</label>
        <input id = "price" type="price" name="price" placeholder="2000" value = "<?=$row['price']?>">
      </p>

      <input type="submit" value="등록">
    </form>

    <a href="index.php">목록</a>
  </body>
</html>
