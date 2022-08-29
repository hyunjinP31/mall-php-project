<?php
    $bookno = $_POST['no'];
    var_dump($bookno);
    $count = count($bookno);
    $conn = mysqli_connect("localhost","wiseblue31","blueviolet31*","wiseblue31");
    for($i = 0 ; $i < $count ; $i++){
        $query = "delete from basket where no={$bookno[$i]};";
        $result = mysqli_query($conn, $query);
    };
    
    header ('Location:/mall/basket.php');
?>

