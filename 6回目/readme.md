①課題内容（どんな作品か）
データベースで個人情報を入力して一覧で表示する

②工夫した点・こだわった点
授業で習った範囲を元に表示を変えて、多くの情報を視認できるようにした。


③質問・疑問（あれば）
今回は画像をデータベースに登録しようとしましたが、エラーが出て断念してしまいました。
その他にコードを載せているので、アドバイスいただけると嬉しいです。


④その他（感想、シェアしたいことなんでも）

■エラー内容
QueryError:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 2

//index.php
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Tel：<input type="text" name="tel"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label>address：<input type="text" name="address"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>



//insert.php
<?php
//1. POSTデータ取得
//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$name = $_POST["name"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$address = $_POST["address"];
$image_name = $_FILES['image']['name'];
$image_type = $_FILES['image']['type'];
$image_content = file_get_contents($_FILES['image']['tmp_name']);
$image_size = $_FILES['image']['size'];
//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
// mamppの方は
// $pdo = new PDO('mysql:dbname=xxx;charset=utf8;host=localhost', 'root', 'root');
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}
//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO osekkai(id, name, tel, email, address, date, image_name, image_type, image_content, image_size)
VALUES(NULL, :name, :tel, :email, :address, sysdate(), :image_name, :image_type, :image_content, :image_size,)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tel', $tel, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':address', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':image_name', $image_name, PDO::PARAM_STR);
$stmt->bindValue(':image_type', $image_type, PDO::PARAM_STR);
$stmt->bindValue(':image_content', $image_content, PDO::PARAM_STR);
$stmt->bindValue(':image_size', $image_size, PDO::PARAM_INT);
$status = $stmt->execute();
//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
    header("Location: select.php");
    exit;
}