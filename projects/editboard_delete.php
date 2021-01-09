<meta charset='utf-8'>
<?php
      $edit_num = $_GET["edit_num"];

?>

<script type="text/javascript">
function delete_confirm() {
   answer = confirm("정말 삭제 하시겠습니까?");
   if (answer) {
      location.href = 'editboard_delete02.php?num=<?=$edit_num?>';
   }
   else {
      history.back();
   }
}
</script>
<body onload="delete_confirm()"></body>
