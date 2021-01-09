<!-- 한줄에 있는 한개한개들 -->
<td align="left" class="pecial_person_td_test" width="228" >
  <table cellpadding="0" cellspacing="0" border="0">
    <tbody>
      <tr>
        <td>
          <div style="width:220px;box-shadow:2px 2px 3px 0px #bbbbbb;">
            <a href="/work/resume_detail.html?no=1984"><img src="<?=$file_path?>" width="220" height="170"></a>
            <div class="main_resume_list_con">
              <a href="/work/resume_detail.html?no=1984" class="ls_1" style="font-size:12px;font-weight:bold;color:#000;letter-spacing:-0.05em"><?=$title?></a><br>
              <div style="height:25px;font-size:12px;color:#333333;line-height:18px;letter-spacing:-0.05em;line-height:25px;"> <a href="/work/resume_detail.html?no=1984" class=""
                  style="line-height:25px;"><?=$username?>&nbsp;&nbsp;&nbsp;"(<?=$sex?>/<?=$myear?>)"</div>
            </div>
            -------------희망 급여--------------
            <div class="main_resume_list_con2">
              <div class="icon_month">
                <span></span>

<?php
if($salary == "월"){
echo "<span class='badge badge-danger'>$salary</span></a>&nbsp;&nbsp;$pay&nbsp;원";
}
else if($salary == "건")
echo "<span class='badge badge-warning'>$salary</span></a>&nbsp;&nbsp;$pay&nbsp;원";
else
echo "<span class='badge badge-primary'>$salary</span></a>&nbsp;&nbsp;$pay&nbsp;원";
?>



                </div>

            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</td>
