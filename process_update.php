<?php
$conn = mysqli_connect("localhost", "root", "simguejae1010", "snack");
$sql = 'UPDATE cookie SET name = "'.$_POST['name'].'", description = "'. $_POST['description'].'", price = '.$_POST['price'].' WHERE id='.$_GET['id'];
echo $sql;

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
