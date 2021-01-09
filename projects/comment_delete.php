<?php
    session_start();
    $comment_num = $_GET["comment_num"];

    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "delete from comment where comment_num = $comment_num";
    echo("
    <script>
    alert('댓글 삭제가 완료되었습니다');
    history.go(-1)
    </script>
    ");
    mysqli_query($con, $sql);
    mysqli_close($con);
?>
