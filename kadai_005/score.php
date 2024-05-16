<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>phpkadai_005</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $score1 = '80';
         $score2 = '60';
         $score3 = '55';
         $score4 = '40';
         $score5 = '100';
         $score6 = '25';
         $score7 = '80';
         $score8 = '95';
         $score9 = '30';
         $score10 = '60';
 
         // 変数の合計値を出力する
         $total_score =  $score1 + $score2 +$score3 +$score4+$score5+$score6+$score7+$score8+$score9+$score10;

         echo '<br>';

        // 変数の合計値から平均値を出力する
        echo '平均値は' .$total_score / 10 . 'です';
         ?>
     </p>
 </body>
 
 </html>