<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>게시판 글 내용 보기</title>
<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
<link rel="stylesheet" href="assets/css/gijgo.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/animated-headline.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/newstyle.css">
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<style>
 a{color: black;}
</style>
<body>
<header>
    <?php include "header.php";?>
</header>
<div class="slider-area slider-bg ">
    <!-- Single Slider -->
    <div class="single-slider d-flex align-items-center slider-height3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-12 ">
                    <div class="hero__caption hero__caption3 text-center">
                        <h1 data-animation="fadeInLeft" data-delay=".6s ">게시판 > 내용보기</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Shape -->
    <div class="slider-shape d-none d-lg-block">
        <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
    </div>
</div>

<!-- 여기서부터 글내용보기 코드입니다. -->

<section>
<?php


	$num  = $_GET["num"];

	$con = mysqli_connect("localhost", "user1", "12345", "project");
	$sql = "select * from editboard where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$regist_day = $row["regist_day"];
	$title    = $row["title"];
	$content    = $row["content"];
  $channel = $row["channel"];
  $chk         = $row["chk"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);
?>
<!-- 데이터베이스 데이터 불러오기  -->
<section class="blog_area single-post-area section-padding">
  <div class="container">
   <div class="row">
     <div class="col-md-1">
  </div>

  <div class="col-md-11">
     <div class="single-post">
      <div class="feature-img">
        <?php
        if($file_name) {
          $real_name = $file_copied;
          $file_path = "./data/".$real_name;
          $file_size = filesize($file_path);
        echo "<center>";
        echo "<img class='img-fluid' src='$file_path' alt=''>";
        echo "<hr style='border:none; border:3px double black;'>";
        echo "</center>";
      }
       ?>

     </div>

     <div class="blog_details">
       <h2 style="color: #2d2d2d;">제목 : <?=$title?></h2>

         <hr style="border:1px double black">
      <ul class="blog-info-link mt-3 mb-4">
        <li><a href="#"><i class="fa fa-user">&nbsp;<?=$username?>&nbsp;회원님</i></a></li>
          <h3 style="float:left"><?=$regist_day?></h3>
      </ul>
      <p>
        <li>
          <?php
            if($file_name) {
              $real_name = $file_copied;
              $file_path = "./data/".$real_name;
              $file_size = filesize($file_path);
              echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
                  <a href='editboard_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a>";
                    }
          ?>
           <h4 style="font-size:15px float:left;">
                  <hr style="border:1px double black">
              <?=$content?>
              <hr style="border:1px double black">
            </h4>
        </li>


        <button id="boardbutton" class="btn btn-primary" type="submit"
        onclick="location.href='editboard_list.php'">목록</button>
        <button id="boardbutton" class="btn btn-primary" type="submit"
        onclick="location.href='editboard_delete.php?edit_num=<?=$num?>'">삭제</button>
          <br><br><br><br>



          <form action="comment_insert.php?num=<?=$num?>"  method="post" class="probootstrap-form">
            <div class="form-group">
              <label for="message">댓글쓰기</label>
              <textarea cols="20" rows="3" class="form-control" id="message" name="datcontent"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="댓글등록">
            </div>
          </form>
      </p>
</div>

<?php


 ?>
<?php
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";

$board_num  = $_GET["board_num"];

$con = mysqli_connect("localhost", "user1", "12345", "project");
$sql = "select * from comment where board_num=$board_num";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
$id      = $row["id"];
$datcontent   = $row["datcontent"];
$regist_day = $row["regist_day"];
$comment_num = $row["comment_num"];


echo"<hr style='border:1px double black'>";
echo"작성자 : $id&nbsp;&nbsp;/&nbsp;&nbsp;작성일자 : $regist_day<br><br>";
echo"댓글내용 : $datcontent";
if($username == $id){

echo "<button style='float:right;'onclick=location.href='comment_delete.php?comment_num=$comment_num'>댓글삭제</button><br>";

}
echo"<br>";
echo"<hr style='border:1px double black'>";





  }

?>



</div>
</div>
</div>
</div>
</div>
</section>
</body>

</html>
