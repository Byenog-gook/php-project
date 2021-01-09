<!--사용자가 회원가입시 입력한 이메일이 중복된 이메일인지 아닌지 DB를 통해 확인 -->
!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
</style>
</head>
<body>
<h3>이메일 중복체크</h3>
<p>
<?php
   $email = $_GET["email"];

   if(!$email)
   {
      echo("<li>이메일을 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "user1", "12345", "project");


      $sql = "select * from members where email='$email'";
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>".$email." 이메일은 중복됩니다.</li>";
         echo "<li>다른 이메일을 사용해 주세요!</li>";
      }
      else
      {
         echo "<li>".$email." 이메일은 사용 가능합니다.</li>";
      }

      mysqli_close($con);
   }
?>
</p>
<div id="close">
   <img src="./assets/img/buttonicon/close.png" onclick="javascript:self.close()">
</div>
</body>
</html>
