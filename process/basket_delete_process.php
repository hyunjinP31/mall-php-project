<?php
    $bookno = $_POST['no'];
    var_dump($bookno);
    $count = count($bookno);
    $conn = mysqli_connect('comet.cioafewefkse.us-east-1.rds.amazonaws.com','root','123$567*','mall');
    for($i = 0 ; $i < $count ; $i++){
        $query = "delete from basket where no={$bookno[$i]};";
        $result = mysqli_query($conn, $query);
    };
    
    header ('Location:/mall/basket.php');
?>

