<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--POSTはブラウザの裏でデータをもって裏で送信される。人の目に触れない-->
    <form method="post" action="omikuji.php">
        <p>お名前:<input type="text" name="name" size="20"></p>
        <p>年齢:<input type="text" name="age" size="20"></p>
        <p><input type="submit" value="送信"></p>
    </form>
</body>
</html>