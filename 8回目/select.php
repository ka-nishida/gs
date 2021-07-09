<?php
session_start();
if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()
){
  echo "LOGIN Error!";
  exit();
}
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  
$view .= '<table class="table">';
$view .= '<thead>';
$view .= '<tr>';
$view .= '<th scope="col">ID</th>';
$view .= '<th scope="col">NAME</th>';
$view .= '<th scope="col">EMAIL</th>';
$view .= '<th scope="col">PHOTO</th>';
$view .= '<th scope="col">DELETE</th>';
$view .= '</tr>';
$view .= '</thead>';
$view .= '<tbody>';

  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>';
    $view .= '<th scope="row">'.$result["id"].'</th>';
    $view .= '<td>'.$result["name"].'</td>';
    $view .= '<td>'.$result["email"].'</td>';
    $view .= '<td><p class="cart-thumb"><img src="img/'.$result["fname"].'" width="200px"></p></td>';
    $view .= '<td><a href="detail.php?id='.$result["id"].'">詳細';
    $view .= '</a><a href="delete.php?id='.$result["id"].'"> 削除</a>';
  }
  $view .= '</tbody>';
  $view .= '</table>';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>スタッフ一覧</title>

<style>div{padding: 10px;font-size:16px;}</style>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="style.css">
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>

</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar">
        <div class="item"><a href="registration.php">スタッフ登録</a></div>
        <div class="item"><a href="logout.php">ログアウト</a></div>
  </nav>
</header>
    <div class="container jumbotron"><?=$view?></div>
</body>
</html>