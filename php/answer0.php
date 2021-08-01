<?php


$question = $_POST['question'];
$answer = $_POST["answer"];

 if(isset($_POST['$number'])){
   $number = $_POST['$number'];
 }else{
    $number = 0;
 }



if ($question == $answer) {
    $result = "正解!";
    $number = $number + 1;
    }else{
    $result = "不正解 <br><br>
                答え　$answer";
}

session_start();
$_SESSION["number"] = $number;



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>水樹奈々クイズ</title>
</head>
<body>
<h2>結果</h2>
<?php echo $result?>

    <input type="hidden" name="answer" value="<?php echo $answer?>">
    <br>
    <br>
    <a href="index1.php" ><input type="submit" value="次の問題へ"></a>

    <form action = “index1.php” method = “POST”>
    </form>


</body>
</html>