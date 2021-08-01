<?php

        session_start();

        $number = ($_SESSION['number']);
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

<h2>結果発表</h2>
<form method="POST" action="answer0.php">


    <p>あなたは5問中<?php echo "$number";?>問正解しました。<br></p>


</form>

</body>
</html>