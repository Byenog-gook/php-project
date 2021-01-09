 <?php
 if (isset($_SESSION["username"])) $username = $_SESSION["username"];
 else $username = "";

$board_num  = $_GET["board_num"];

$con = mysqli_connect("localhost", "user1", "12345", "project");
$sql = "select * from comment where board_num=$board_num";
$result = mysqli_query($con, $sql);


 while ($row = mysqli_fetch_array($result))
 {
   $comment_num = $row["comment_num"];
   $id      = $row["id"];
 $datcontent   = $row["datcontent"];
 $regist_day = $row["regist_day"];


echo"<hr style='border:1px double black'>";
echo"작성자 : $id&nbsp;&nbsp;/&nbsp;&nbsp;작성일자 : $regist_day<br><br>";
echo"댓글내용 : $datcontent";
echo"<br>";
echo"<hr style='border:1px double black'>";


}
 ?>
