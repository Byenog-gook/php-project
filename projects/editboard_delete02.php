<?php

    $edit_num   = $_GET["num"];


    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "select * from editboard where num = $edit_num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path);
    }

    $sql = "delete from editboard where num = $edit_num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'editboard_list.php?num=$edit_num';
	     </script>
	   ";
?>
