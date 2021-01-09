<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>기말고사 웹사이트</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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

<!-- 부트스트랩 css 정의 -->
  </head>
  <script type="text/javascript">
  function board_check(){
    alert("글쓰기 기능은 로그인후 이용가능합니다!");
    history.back();
    }


  </script>
  <style>
   a{color: black;}
  </style>
  <body>
    <header>
        <?php include "header.php";?>
    </header>
    <!-- 헤더파일 불러오기 -->
    <div class="slider-area slider-bg ">
        <!-- Single Slider -->
        <div class="single-slider d-flex align-items-center slider-height3">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-12 ">
                        <div class="hero__caption hero__caption3 text-center">
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">편집자 모집</h1>
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
    <!-- Slider Area End -->






    <!-- 여기서부터 게시판 목록 코드입니다. -->
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
          <h2 style="float:left; font-size:20px;">편집자 모집 게시판</h2>
          <br><br><br>
        <!-- 게시글 테이블 제목 -->
      <table class="table">
        <thead>
          <tr>

            <th scope="col"></th>
            <th scope="col">채널명</th>
            <th scope="col">제목</th>
            <th scope="col">글쓴이</th>
            <th scope="col">필수사용 편집 툴</th>
            <th scope="col">첨부</th>
            <th scope="col">등록일</th>
          </tr>
        </thead>


        <?php
          // GET방식으로 페이지 번호 전달받기
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;

          // DB에서 전체 게시글 가져오기
          $con = mysqli_connect("localhost", "user1", "12345", "project");
          $sql = "select * from editboard order by num desc";



                    // 검색기능 코드
                    //$_REQUEST 는 GET , POST 를 둘다 받아 처리할수있음.

                    if(isset($_POST['search_select'])){
                      $search_select = $_POST['search_select'];
                      $search =$_REQUEST["search"];
                      switch($search_select){
                        case 'search1':
                        $sql = "SELECT * FROM editboard where title LIKE '%$search%' ";

                        break;
                        case 'search2' :
                        $sql = "SELECT * FROM editboard where content LIKE '%$search%' ";

                        break;
                        default:
                            break;
                      }
                    }
                    else{
                          $sql    = "select * from editboard order by num desc";
                    }

          $result = mysqli_query($con, $sql);
          $total_record = mysqli_num_rows($result); // 전체 글 수




          $scale = 4; //한 페이지에 표시되는 행의개수

          // 전체 페이지 수($total_page) 계산 ;
          if ($total_record % $scale == 0)
            $total_page = floor($total_record/$scale);
          else
            $total_page = floor($total_record/$scale) + 1;

          // 표시할 페이지($page)에 따라 $start 계산
          $start = ($page - 1) * $scale;

          $number = $total_record - $start;

          //DB에서 데이터를 가져오기위해 반복문 설정
          for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
          {
             mysqli_data_seek($result, $i);
             // 가져올 레코드로 위치(포인터) 이동
             $row = mysqli_fetch_array($result);
             // 하나의 레코드 가져오기
             $num         = $row["num"];
             $channel          = $row["channel"];
             $title        = $row["title"];
             $regist_day  = $row["regist_day"];
             $chk         = $row["chk"];
             $name = $row["name"];

             if ($row["file_name"])
               $file_image = "<img src='./assets/img/logo/file.gif'>";
             else
               $file_image = " ";
          ?>

          <!-- 게시글 테이블 내용에 들어갈 데이터 -->

          <tbody>
              <tr>
                <th scope="row"><?=$number?></th>
                <td><?=$channel?></td>

                <td><a href="editboard_view.php?num=<?=$num?>&list=list&board_num=<?=$num?>"><?=$title?></a></td>
                <td><?=$name?></td>
                <td><?=$chk?></td>
                <td><?=	$file_image?></td>
                <td><?=$regist_day?></td>
              </tr>
            </tbody>
                  <!-- 페이지 번호출력 -->
            <?php
                   $number--;
               }
               // mysqli_close($con);

            ?>
          </table>
                    </ul>
                  <ul id="page_num">
                <center>
            <?php
              if ($total_page>=2 && $page >= 2)
              {
                $new_page = $page-1;
                echo "<a href='editboard_list.php?page=$new_page'>◀ 이전</a> ";
              }
              else
                echo "<li>&nbsp;</li>";

                // 게시판 목록 하단에 페이지 링크 번호 출력
                for ($i=1; $i<=$total_page; $i++)
                {
                if ($page == $i)     // 현재 페이지 번호 링크 안함
                {
                  echo "<b> $i </b>";
                }
                else
                {
                  echo "<a href='editboard_list.php?page=$i'> $i </a>";
                }
                }
                if ($total_page>=2 && $page != $total_page)
                {
                $new_page = $page+1;
                echo "<a href='editboard_list.php?page=$new_page'>다음 ▶</a>";
              }
              else
                echo "<li>&nbsp;</li>";
            ?>

          </center>

        <button id="boardbutton" class="btn btn-primary" type="submit"
        onclick="location.href='editboard_list.php'">목록</button>
        <?php
            if($username) {
        ?>
        <button id="boardbutton" class="btn btn-primary" type="submit"
        onclick="location.href='editboard_form.php'">글쓰기</button>
      <?php } else { ?>
        <button id="boardbutton" class="btn btn-primary" type="submit"
        onclick="board_check()">글쓰기</button>
          <?php
      }?>
      </div>
      <br><br><br>
      <div class="col-md-1">
      </div>
    </div>





  <div class="row">
    <div class="col-md-1">


    </div>
      <div class="col-md-10">
        <!-- 검색기능 form -->
              <form class="navbar-form" method="post" action=""> <!-- action 을 비워놔야 자신을 가리킨다 action 속성을 비워놓으면 자기 page에 post가 먹는다 .-->
                <select name="search_select">
                  <option value = "search1">제목</option>
                  <option value = "search2">내용</option>
                </select>

                <br>
                  <input type="text" name="search" class="form-control" placeholder="검색할 내용을 입력해주세요" autofocus>

                  <input type="submit" value="확인" style="float:right;">
              </form>

      </div>
      <div class="col-md-1">

        <br><br><br><br>
  </div>
  </div>

    <div class="row">
      <div class="col-md-12">
        <hr style="border:1px double black">
      </div>
    </div>
        <!-- 정렬기능 form -->

        <form method="post" action="">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;


                          <select name="sel" style="float">
                            <option value = "new">최신 순으로 보기</option>
                            <option value = "pay">급여 순으로 보기</option>
                          </select>
                          &nbsp;
                          <input type="submit" value="확인"></h5>
        </form>





    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <br>
  <h2 style="float:left; font-size:20px;">추천 에디터프로필</h2>
      <br>
      <?php
               //(최신순,급여순) 정렬기능 코드
          if(isset($_POST['sel'])){
            $sel = $_POST['sel'];
            switch ($sel) {

              case 'new':
              $sql  = "select * from profile order by num desc";

              break;
              case 'pay' :
              $sql = "select * from profile order by pay desc";

              break;
              default:
                  break;
          }
          }
          else{
              $sql    = "select * from profile order by num desc";
          }




          $result = mysqli_query($con, $sql);
          $total_rows = mysqli_num_rows($result); //행의 총개수인 3이 저장된다.


//값이 있다면은 행의 개수가 1개이상일것이고 값이있다면 다음 if문 안에 구문을 실행시켜라
          if($total_rows > 0){
              for($i = 1 ; $i <= $total_rows; $i++){
                  $row = mysqli_fetch_array($result);
                  mysqli_data_seek($result, $i);

                  $title = $row["title"];
                  $pay = $row["pay"];
                  $myear = $row["myear"];
                  $sex = $row["sex"];
                  $salary = $row["salary"];
                  $file_name    = $row["file_name"];
                  $file_type    = $row["file_type"];
                  $file_copied  = $row["file_copied"];
                  $nickname = $row["nickname"];


                  if($file_name) {
                    $real_name = $file_copied;
                    $file_path = "./data/".$real_name;
                }

                ?>



                <?php
if($i%5 == 1){
echo "<td align='left' class='pecial_person_td_test' width='228' >";
echo "<table cellpadding='15' cellspacing='0' border='0'>";
echo "<tbody>";
echo "<tr>";
}
 ?>



<!-- 다음 코드 반복시 가로로 한칸씩 생성된다.  -->


                <td>
                  <div style="width:220px;box-shadow:2px 2px 3px 0px #bbbbbb;">
                    <a href="profile_view.php?nickname=<?=$nickname?>"><img src="<?=$file_path?>" width="220" height="170"></a>

                    <div class="main_resume_list_con">

                      <a href="profile_view.php?nickname=<?=$nickname?>" class="ls_1" style="font-size:12px;font-weight:bold;color:#000;letter-spacing:-0.05em"><?=$title?></a><br>
                      <div style="height:25px;font-size:12px;color:#333333;line-height:18px;letter-spacing:-0.05em;line-height:25px;"> <a href="/work/resume_detail.html?no=1984" class=""
                          style="line-height:25px;"><?=$nickname?>&nbsp;&nbsp;&nbsp;(<?=$sex?>/<?=$myear?>)</a></div>
                    </div>
                      -------------희망 급여--------------
                    <div class="main_resume_list_con2">
                      <div class="icon_month"><span></span></div>
                      <?php
if($salary == "월"){
  echo "<span class='badge badge-danger'>$salary</span>&nbsp;&nbsp;$pay&nbsp;원";
}
else if($salary == "건"){
    echo "<span class='badge badge-warning'>$salary</span>&nbsp;&nbsp;$pay&nbsp;원";
  }
else
  echo "<span class='badge badge-primary'>$salary</span>&nbsp;&nbsp;$pay&nbsp;원";
?>
                    </div>
                  </div>
                </td>


                          <?php
                          if($i%5 == 0) {
                            echo "</tr>";
                            echo "</tbody>";
                            echo "</table>";
                            echo "</td>";
                            }
                          ?>


                <?php
                        }
          }
          ?>




    </div>
    <div class="col-md-1">
    </div>
  </div>
  </body>
</html>
