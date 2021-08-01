<?php

    session_start();

    $number = ($_SESSION['number']);


   $question = $_POST['question'];
   $answer = $_POST["answer"];


 
if ($question == $answer) {
    $result = "正解!";
    $number = $number + 1;
    }else{
    $result = "不正解 <br><br>
                答え　$answer";
}

   $_SESSION['number'] = $number;



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="main.js"></script>
<title>水樹奈々クイズ</title>
</head>
<body>
<h2>結果</h2>
<?php echo $result?>

    <input type="hidden" name="answer" value="<?php echo $answer?>">
    <br>
    <br>
    <a href="last.php"><input type="submit" value="次の問題へ"></a>


</body>
</html>