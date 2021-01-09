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
    function check_input()
      {
         if (!document.editboard.title.value) {
             alert("제목을 입력하세요");
             document.editboard.title.value.focus();
             return;
         }

         if (!document.editboard.channel.value) {
             alert("채널명을 입력해주세요!");
             document.register_form.channel.focus();
             return;
         }

         document.editboard.submit();
      }
    </script>
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
        <!-- 여기서부터 게시판 입력폼 코드입니다. -->
        <br><br><br><br>
        <div class="container">
  <div class="row">
    <div class="col-md-4">     <!-- 3개의 열중 왼쪽 -->
      <h2>편집자모집 > 글쓰기</h2>

    </div>
    <div class="col-md-8">  <!-- 3개의 열중 가운데 -->

    </div>
    <div class="col-md-1">  <!-- 3개의 열중 오른쪽 -->
    </div>
  </div>

    <!-- 게시판 form -->
  <div class="row">
    <div class="col-md-1">
    </div>
      <div class="col-md-11">
    <br><br><br>

    <form name="editboard" action="editboard_insert.php" method="post" id="myForm" enctype="multipart/form-data">

      제목<input class="form-control form-control-lg" type="text" name="title" placeholder="제목을 입력해주세요">
      <br>
      채널명<input class="form-control form-control-lg" type="text" name="channel" placeholder="채널명을 입력해주세요">
      <br>편집 희망툴<br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="chk[]" type="checkbox" id="inlineCheckbox1" value="포토샵">
          <label class="form-check-label" for="inlineCheckbox1">포토샵</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="chk[]" type="checkbox" id="inlineCheckbox2" value="프리미어 프로">
          <label class="form-check-label" for="inlineCheckbox2">프리미어프로</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="chk[]" type="checkbox" id="inlineCheckbox3" value="에프터이펙트">
          <label class="form-check-label" for="inlineCheckbox3">에프터이펙트</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="chk[]" type="checkbox" id="inlineCheckbox3" value="파이널 컷">
          <label class="form-check-label" for="inlineCheckbox3">파이널 컷</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="chk[]" type="checkbox" id="inlineCheckbox3" value="일러스트">
          <label class="form-check-label" for="inlineCheckbox3">일러스트</label>
        </div>
      <br><br>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">상세 모집 내용</label>
        <textarea class="form-control" name="content"  id="exampleFormControlTextarea1" rows="15"></textarea>
      </div>
      <br>
      <div class="form-group">
    <label for="exampleFormControlFile1">이미지 첨부</label>
    <input type="file" name="upfile">
  </div>
  <button id="boardbutton" class="btn btn-primary" type="submit" onclick="check_input()">제출</button>
</div>
</form>



  </body>
</html>
