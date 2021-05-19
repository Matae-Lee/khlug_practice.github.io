<?php

    if (empty($_GET['sentence1'])){
        $sentence = $_POST['sentence2'];
        $type = "post";
        }
    else{
        $sentence = $_GET['sentence1'];
        $type = "get";
        }
?>

<!doctype html>
<html lang="ko">
<body>
    <p>문구(<?php echo $type ?>): <?php echo $sentence ?></p>
</body>
</html>