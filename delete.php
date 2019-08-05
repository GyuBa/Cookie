<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>삭제</title>
  </head>
  <body>
    <h3>정말로 삭제하시겠습니까?</h3>
    <p>
      <?='<a href="process_delete.php?id='.$_GET['id'].'">예</a>'?>;
      <a href="index.php">아니요</a>
    </p>
  </body>
</html>
