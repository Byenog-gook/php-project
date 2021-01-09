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
<!-- 부트스트랩 css 정의 -->
  </head>
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
                            <h2 style="color:white;">업로드한 에디터프로필은 편집자 모집 게시판 하단에 업로드됩니다</h2>
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
  <h2>에디터프로필 > 글쓰기</h2>

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

<form name="profile" action="profile_insert.php" method="post" id="myForm" enctype="multipart/form-data">

  제목<input class="form-control form-control-lg" type="text" name="title" placeholder="제목을 입력해주세요">
  <br>
  성별
  <br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="man">
  <label class="form-check-label" for="inlineRadio1">남</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="girl">
  <label class="form-check-label" for="inlineRadio2">여</label>
</div>
<br><br>
나이
<br>
<select name="myear" style="border:none">
          <option value='' selected>연도</option>
          <?php
          for($i = 1950; $i < 2010; $i++){
            echo "<option value='$i'>$i</option>";
          }
           ?>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="months" style="border:none">
                      <option value='' selected>월</option>
                      <?php
                      for($i = 1; $i < 13; $i++){
                        echo "<option value='$i'>$i</option>";
                      }
                       ?>
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="day" style="border:none">
                      <option value='' selected>일</option>
                      <?php
                      for($i = 1; $i < 32; $i++){
                        echo "<option value='$i'>$i</option>";
                      }
                       ?>
                    </select>

        <br><br>
        <div class="form-input">
            <label for="name">이메일</label>
            <input class="form-control form-control-lg" type="text" name="email1" placeholder="편집자와 소통할 이메일을 입력해주세요">
            <br>
        </div>

        <br>
        급여 방식선택
        <br>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="salary" id="inlineRadio1" value="gun">
        <label class="form-check-label" for="inlineRadio1">건</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="salary" id="inlineRadio2" value="mon">
        <label class="form-check-label" for="inlineRadio2">월</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="salary" id="inlineRadio2" value="year">
        <label class="form-check-label" for="inlineRadio2">연</label>
      </div>
      <input type="text" name="pay" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="희망 급여를 입력하세요">
      <label class="form-check-label" for="inlineRadio2">원</label>
      <br><br>
      <div class="form-group">
    <label for="exampleFormControlFile1">프로필 사진</label><br>
    <input type="file" name="upfile">
    </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">포트폴리오</label>
        <textarea class="form-control" name="content"  id="exampleFormControlTextarea1" rows="15"></textarea>
      </div>

<button id="boardbutton" class="btn btn-primary" type="submit" onclick="check_input()">제출</button>
</div>
</form>
