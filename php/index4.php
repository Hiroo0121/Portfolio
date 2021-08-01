<?php


        session_start();

        $number = ($_SESSION['number']);
        $_SESSION['number'] = $number;

        $quiz = [

            ['Q'=>'水樹奈々さんの血液型は？', //問題文
             'A'=>['A型','B型','O型','AB型'], //回答群
             'C'=>2 //正解のエントリー
            ],

            ['Q'=>'水樹奈々さんのデビューシングル「想い」の発売日は？', //問題文
             'A'=>['2001年 12月4日','2001年 12月5日','2001年 12月6日','2001年 12月7日'], //回答群
             'C'=>2 //正解のエントリー
            ],

            ['Q'=>'水樹奈々さんのシングルCDの中で売り上げ枚数が１番多いのは?',//問題文
             'A'=>['BRIGHT STREAM','ETERNAL BLAZE','PHANTOM MINDS','Synchrogazer'], //回答群
             'C'=>0 //正解のエントリー
            ],

            ['Q'=>'SC NANA NETファンクラブイベントⅦ 奈々の部屋 ２日目のゲストは？',//問題文
             'A'=>['森口博子','中村悠一','若本規夫','水木一郎'], //回答群
             'C'=>3 //正解のエントリー
            ],

            ['Q'=>'2016年に開催された NANA MIZUKI LIVE PARK 2016  7曲目に歌われた曲は？ ',//問題文
             'A'=>['STAND UP！','POP MASTER','76th Star','7COLORS'], //回答群
             'C'=>1 //正解のエントリー
            ],

            ['Q'=>'NANA MUSIC LABORATORY 2019 〜ナナラボ〜にて<br>
            早見沙織さんとデュエットした際の水樹さんの衣装の色は？',//問題文
             'A'=>['白','青','赤','緑'], //回答群
             'C'=>3 //正解のエントリー
            ],

            ['Q'=>'水樹奈々さんの結婚記念日は？',//問題文
             'A'=>['７月６日','７月７日','７月８日','７月９日'], //回答群
             'C'=>0 //正解のエントリー
            ],

            ['Q'=>'STORIESはどのシングルのカップリング曲？',//問題文
             'A'=>['Trickster',' 夢幻','MASSIVE WONDERS','STARCAMP EP'], //回答群
             'C'=>1 //正解のエントリー
            ],

            ['Q'=>'still in the grooveのジャケットの水樹さんは何色の服を着ている？',//問題文
             'A'=>['青','黄色','緑','赤'], //回答群
             'C'=>3 //正解のエントリー
            ],

            ['Q'=>'2019年に開催されたNANA MIZUKI LIVE GRACE -OPUSⅢ<br>
                   ステージに設置された時計台が指していた時間は？ ',//問題文
             'A'=>['9時57分','9時58分','9時59分','10時00分'], //回答群
             'C'=>1 //正解のエントリー
            ],


        ];


        $n=4;

        $title = $quiz[$n]['Q'];
        $question = $quiz[$n]['A'];
        $answer = $question[$quiz[$n]['C']];





?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="main.js"></script>
<title>水樹奈々クイズ</title>
</head>


<body>

<h2><?php echo $title?></h2>
<form method="POST" action="answer4.php">

    <?php foreach ($question as $value){ ?>
    <input type="radio" name="question" required="required" value="<?php echo $value; ?>" /><?php echo $value ?> <br>
    <?php } ?>
    <br>


    <input type="hidden" name="answer" value="<?php echo $answer?>">
    <input type="submit" value="回答する">


</form>

</body>
</html>