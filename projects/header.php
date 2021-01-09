
  <?php
  session_start();
    if (isset($_SESSION["useremail"])) $useremail = $_SESSION["useremail"];
    else $useremail = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
  ?>

  <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->



                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php"><img src="./assets/img/buttonicon/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="editboard_list.php">편집자모집</a></li>
                                            <li><a href="profile.php">에디터프로필</a></li>
                                            <li><a href="help.html">자유게시판(미완성)</a></li>
                                            <!-- <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li> -->
                                            <!-- Button -->
                                            <?php
        if(!$useremail) {
    ?>
                                              <li class="button-header margin-left" ><a href="register.php" class="btn3">회원가입</a></li>
                                            <li class="button-header"><a href="login.php" class="btn3">로그인</a></li>
                                        </ul>
                                        <?php
        } else {
                    $logged = $username."님[Level:".$userlevel."]";
    ?>
    <span class="badge badge-light"><?=$logged?> </span>
    <li class="button-header margin-left "><a href="logout.php" class="btn3">로그아웃</a></li>
    <li class="button-header"><a href="register_modify_form.php" class="btn3">정보수정</a></li>

  <?php
      }
  ?>

   <?php
   if(isset($_GET['type'])) { //type변수안에 값이있다면 스위치문을 실행시켜라
     switch ($_GET['type']) {  //쿼리스트링방식으로 받아온 type변수안에 값이있는상태에서
       case 'register_alert': //type변수안의 값이 reigster_alert 라면 밑에 알림창을 출력하여라
       ?>
       <div class="alert alert-primary" role="alert">
          회원가입이 완료되었습니다!
       </div>
       <?php
         break;
      case 'modify_alert': //type변수안의 값이 modify_alert 라면 밑에 알림창을 출력하여라
        ?>
        <div class="alert alert-primary" role="alert">
            정보 수정이 완료되었습니다!
        </div>
        <?php
        break;

       default:
         // code...
         break;
     }
   }
    ?>



                                  </nav>
                              </div>
                          </div>
                      </div>
                      <!-- Mobile Menu -->
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Header End -->
      </header>
