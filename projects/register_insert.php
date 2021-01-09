<?php
    $email  = $_POST["email"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];


    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장


    $con = mysqli_connect("localhost", "user1", "12345", "project");

    mysqli_set_charset($con,'utf8');

	$sql = "insert into members( email, pass, name,regist_day, level) ";
	$sql .= "values( '$email', '$pass', '$name', '$regist_day', 1)";


	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);
?>


<?php

    echo "
	      <script>

	          location.href = 'index.php?type=register_alert';
	      </script>
	  ";

      // 쿼리스트링방식으로 type=register_alert라는 값 index.php를 호출할때 넘겨줍니다.
?>
