<!--사용자가 로그아웃 버튼을눌렀을때 세션을 초기화한후 다시 메인페이지로 이동합니다.-->
<?php
  session_start();
  unset($_SESSION["useremail"]);
  unset($_SESSION["username"]);
  unset($_SESSION["userlevel"]);

  echo("
       <script>
          location.href = 'index.php';
         </script>
       ");
?>
