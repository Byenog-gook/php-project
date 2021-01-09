<?php
    $useremail = $_GET["useremail"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];

    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "update members set pass='$pass', name='$name'";
    $sql .= "where email='$useremail'";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
	      <script>
	          location.href = 'index.php?type=modify_alert';
	      </script>
	  "; 

    // 쿼리스트링방식으로 type=modify_alert라는 값 index.php를 호출할때 넘겨줍니다.
?>
