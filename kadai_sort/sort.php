<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
      <?php

      function sort_2way($arrays,$order){
        $arrays=[15,4,18,23,10];
        if($order){
          echo '昇順にソートします。<br>';
          sort($arrays);
          foreach($arrays as $array){
            echo $array.'<br>';
          }
        }
        else{
          echo '降順にソートします。<br>';
          rsort($arrays);
          foreach($arrays as $array){
            echo $array.'<br>';
          }
        }
      }

      $arrays=[15,4,18,23,10];
      sort_2way($arrays,TRUE);
      sort_2way($arrays,FALSE);
      ?>
  </p>


</body>
</html>