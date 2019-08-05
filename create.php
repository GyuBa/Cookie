

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All of Snack</title>
  </head>
  <body>
    <h2>과자등록</h2>
    <form action="process_create.php" method="post">
      <p>

        <label for="name">과자 이름</label>
        <br>
        <input id = "name" type="text" name="name" placeholder="과자 이름">
      </p>

      <p>
        <label for="description">설명</label>
        <br>
        <textarea id="description" name="description" placeholder="ㅇㅇ과자는 타 과자에 비해..."></textarea>
      </p>

      <p>
        <label for="price">가격</label>
        <input id = "price" type="price" name="price" placeholder="2000">
      </p>

      <input type="submit" value="등록">
    </form>

    <a href="index.php">목록</a>
  </body>
</html>
