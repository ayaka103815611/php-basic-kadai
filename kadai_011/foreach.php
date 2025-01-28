<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
      <?php
      $vegetable=['name'=>'玉ねぎ','price'=>200, 'place'=>'北海道'];
      foreach($vegetable as $keys =>$value){
      echo "{$keys}:{$value}<br>";
      }
      ?>
  </p>