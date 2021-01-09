<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";


$datcontent = $_POST["datcontent"];
$datcontent = htmlspecialchars($datcontent, ENT_QUOTES);
$board_num = $_GET["num"];

if($username){
$con = mysqli_connect("localhost", "user1", "12345", "project");

$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

$sql = "insert into comment(board_num, id, datcontent, regist_day) ";
$sql .= "values($board_num, '$username', '$datcontent', '$regist_day')";

  mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
  mysqli_close($con);

  echo "
      <script>
          alert('정상적으로 댓글을 달았습니다.');
          location.href = 'editboard_view.php?board_num=$board_num&dat=ok&num=$board_num';
      </script>
  ";
}
else{
  echo "<script>
  alert('로그인후 댓글을 달아주세요. ');
  history.back();
  </script>";
}
?>
