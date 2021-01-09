<!-- 사용자가 회원가입창에서 입력한 정보를 받는 회원가입 창 -->
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
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
</head>
<script type="text/javascript">
function check_input()
  {
    if (!document.member_form.email.value) {
        alert("이메일 주소를 입력하세요!");
        document.member_form.email.focus();
        return;
    }


     if (!document.member_form.pass.value) {
         alert("비밀번호를 입력하세요!");
         document.member_form.pass.focus();
         return;
     }

     if (!document.member_form.pass_confirm.value) {
         alert("비밀번호확인을 입력하세요!");
         document.member_form.pass_confirm.focus();
         return;
     }



     if (document.member_form.pass.value !=
           document.member_form.pass_confirm.value) {
         alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
         document.member_form.pass.focus();
         document.member_form.pass.select();
         return;
     }

     if (!document.member_form.name.value) {
         alert("이름을 입력하세요!");
         document.member_form.name.focus();
         return;
     }

     document.member_form.submit();
  }

    function check_email() {  //이메일 중복확인
            window.open("register_check_email.php?email=" + document.member_form.email.value,
                "IDcheck",
                 "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
          }

</script>


<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <form action="register_insert.php" class="form-default" name ="member_form"  method="POST">

        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.php"><img src="assets/img/logo/loder.png" alt=""></a>
            </div>
            <h2>회원가입</h2>

            <div class="form-input">
                <label for="name">이메일</label>
                <a href="#"><img src="./assets/img/buttonicon/check_id.png" onclick="check_email()"></a>
                <input type="email" name="email" placeholder="이메일을 입력하시오">

            </div>

              <div class="form-input">
                  <label for="name">비밀번호</label>
                  <input type="password" id="pass" name="pass" placeholder="비밀번호를 입력하시오">
              </div>
              <div class="form-input">
                  <label for="name">비밀번호 재확인</label>
                  <input type="password" name="pass_confirm" placeholder="비밀번호를 한번더 입력하시오">
              </div>
              <div class="form-input">
                  <label for="name">이름</label>
                  <input type="text" id="name" name="name" placeholder="이름을 입력하시오">
              </div>

            <button type="button" id="registerbutton" class="btn btn-danger" onclick="check_input()">가입하기</button>
            <span class="loginbutton"><a href="login.php" id="logbutton" class="registration">로그인</a></span>

            <!-- Forget Password -->

        </div>
    </form>
    <!-- form태그를 통한 사용자가 입력한 회원가입정보 입력란 -->
    <!-- /end login form -->
  </main>


    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="./assets/js/jquery.vide.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    </body>
</html>
