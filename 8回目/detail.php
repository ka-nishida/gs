<?php
//GETで送られてきたidを取得
    $id = $_GET["id"];
    
    //insert.phpからDBに接続する
    try {
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', 'root');
    } catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }
    //IDを元にsqlを準備する
    //３．SELECT * FROM xxx WHERE id=:id
    $sql = "SELECT * FROM gs_an_table WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT); //idは数値なのでINT
    $status = $stmt->execute();//step４．データ出力
    $view=""; //受け取るための変数を事前に作ります。
    if ($status==false) {
        //execute（SQL実行時にエラーがある場合）
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    } else {
        //１データのみ抽出の場合はwhileループで取り出さない(一個しかデータが返ってこないので一レコード取得する)
        $row = $stmt->fetch();
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<!-- ここからupdate.phpにデータを送ります -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>Email：<input type="text" name="email" value="<?=$row["email"]?>"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"><?=$row["naiyou"]?></textArea></label><br>
     <input type='hidden' name="id" value="<?=$row["id"]?>">
     <input type="submit" value="送信">
  </fieldset>
  </div>
</form>
<!-- Main[End] -->
</body>