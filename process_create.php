<?php
$conn = mysqli_connect("localhost", "root", "simguejae1010", "SNACK");
if($conn == FALSE){
  echo "오류 1";
}
/*
$selectSql = "SELECT * FROM cookie";
$selectResult = mysqli_query($conn, $selectSql);
$row = mysqli_fetch_array($selectResult);

while($row == false){

}
$lastRow = $row['id'] + 1.".jpg";*/
//$sql = "INSERT INTO cookie (name, price, description, image) VALUES('{$_POST['name']}', {$_POST['price']}, '{$_POST['description']}', '{$lastRow}')";
$sql = "INSERT INTO cookie (name, price, description) VALUES('{$_POST['name']}', {$_POST['price']}, '{$_POST['description']}')";
$result = mysqli_query($conn, $sql);

if($result == FALSE)
{
  echo '저장하는 과정에서 오류가 발생했습니다.';
  error_log(mysqli_error($conn));
}
else
{
  echo '성공했습니다. <a href = "index.php">목록으로</a>';
}

 ?>
