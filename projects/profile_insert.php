<meta charset="utf-8">
<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";


    $title  = $_POST["title"];
    $sex = $_POST["sex"];
    if ($sex == "man")
    {
      $sex = "남";
    }
    else {
      $sex = "여";
    }

    $myear = $_POST["myear"];
    $months = $_POST["months"];
    $day = $_POST["day"];
    $email1 = $_POST["email1"];
    $salary = $_POST["salary"];
    if ($salary == "gun")
    {
      $salary = "건";
    }
    else if ($salary == "mon")
    {
      $salary = "월";
    }
    else
    {
      $salary = "연";
    }
    $pay = $_POST["pay"];
    $content = $_POST["content"];

    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
    $title = htmlspecialchars($title, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);


    // 파일 업로드코드
    $upload_dir = './data/';

    $upfile_name	 = $_FILES["upfile"]["name"];
    $upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
    $upfile_type     = $_FILES["upfile"]["type"];
    $upfile_size     = $_FILES["upfile"]["size"];
    $upfile_error    = $_FILES["upfile"]["error"];

    if ($upfile_name && !$upfile_error)
    {
      $file = explode(".", $upfile_name);
      $file_name = $file[0];
      $file_ext  = $file[1];

      $new_file_name = date("Y_m_d_H_i_s");
      $new_file_name = $new_file_name;
      $copied_file_name = $new_file_name.".".$file_ext;
      $uploaded_file = $upload_dir.$copied_file_name;

      if( $upfile_size  > 1000000 ) {
          echo("
          <script>
          alert('업로드 파일 크기가 지정된 용량(1MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
          history.go(-1)
          </script>
          ");
          exit;
      }

      if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
      {
          echo("
            <script>
            alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
            history.go(-1)
            </script>
          ");
          exit;
      }
    }
    else
    {
      $upfile_name      = "";
      $upfile_type      = "";
      $copied_file_name = "";
    }
    	// num	title	sex	myear	months	day	email1	salary	pay	content	regist_day	file_name	file_type	file_copied
    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "insert into profile (title, sex, myear, months, day, email1, salary, pay, content, regist_day, file_name, file_type, file_copied,nickname) ";
    $sql .= "values('$title','$sex', '$myear','$months','$day','$email1','$salary','$pay','$content','$regist_day','$upfile_name','$upfile_type','$copied_file_name','$username')";
    mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);

    ?>

    <?php

      // echo "데이터베이스 저장완료";

        echo "
        <script>
        location.href = 'editboard_list.php';
       </script>
    	  ";

    ?>
