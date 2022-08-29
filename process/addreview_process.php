<?php
$conn = mysqli_connect('comet.cioafewefkse.us-east-1.rds.amazonaws.com','root','123$567*','mall');
$query = "insert into review_note(id, title, writedate, textveiw)
            values(
                '{$_POST['name']}',
                '{$_POST['title']}',
                DATE_FORMAT(NOW(), '%Y-%m-%d'),
                '{$_POST['textveiw']}'
            );";
$result = mysqli_query($conn, $query);
if($result){
    ?>
        <script>
            alert('리뷰를 등록했습니다.');
            location.href='/mall/book_review.php'
        </script>
    <?php
} else {
    echo $query;
}
?>