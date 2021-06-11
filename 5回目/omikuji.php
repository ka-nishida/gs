<?php
$random = mt_rand(1,5);

if($random === 1){
    $photo = '<img src="img/daikichi.jpg"><br/>';
    $result = '大吉がでました。';
    
}elseif($random === 2){
    $photo = '<img src="img/chukichi.jpg"><br/>';
    $result = "中吉がでました。";
    
}elseif($random === 3){
    $photo = '<img src="img/syokichi.jpg"><br/>';
    $result = "小吉がでました。";
    
}elseif($random === 4){
    $photo = '<img src="img/kichi.jpg"><br/>';
    $result = "吉がでました。";
    
}elseif($random === 5){
    $photo = '<img src="img/kyou.jpg"><br/>';
    $result = "凶がでました。";
}
$name = $_POST["name"];
$age = $_POST["age"];

function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= h($name).さん　ようこそ！; ?></p>
    <p><?= h($age).歳; ?></p>
    <p><?php echo $photo;?></p>
    <p><?php echo $result;?></p>
</body>
</html>