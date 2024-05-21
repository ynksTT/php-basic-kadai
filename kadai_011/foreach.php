<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>



<body>

<p>
         <?php
         $kadais = [
             '名前' => '玉ねぎ',
             '値段' => 500,
             '産地' => '北海道',
         ];
 
         foreach ($kadais as $kadai => $value) {
             echo "{$kadai}：{$value}<br>";
         }
         ?>
     </p>

  </body>
</html>