<?php
include_once('./_common.php');
include_once('./_head.php');
if (G5_IS_MOBILE) {
  include_once(G5_MOBILE_PATH . '/weat.php');
  return;
}
?>
<div class="section">
  <form class="send_mail" method="post" action="send_mail_option.php">

    <table style="width: 30vmax; margin: 0 auto">
      <tr style="height:3vmax">
        <th style="font-size: 1rem; text-align:left; width: 25%!important">
          <label for="name">보내는 사람</label>
        </th>
        <td style="width: 75%">
          <input required style="width: 100%; padding: 8px;" type="text" id="name" name="name" placeholder="이름을 입력해주세요">
        </td>
      </tr>
      <tr style="height:3vmax">
        <th style="font-size: 1rem; text-align:left; width: 25%!important">
          <label for="mail_add">메일주소</label>
        </th>
        <td style="width: 75%">
          <input required style="width: 100%; padding: 8px;" type="email" id="mail_add" name="mail_add" placeholder="연락받으실 메일 주소를 입력해주세요">
        </td>
      </tr>
      <tr style="height:3vmax">
        <th style="font-size: 1rem; text-align:left; width: 25%!important">
          <label for="header">제목</label>
        </th>
        <td style="width: 75%">
          <input required required style="width: 100%; padding: 8px;" type="text" id="Mheader" name="Mheader" placeholder="메일 제목을 입력해주세요">
        </td>
      </tr>
      <tr style="height:3vmax">
        <th style="font-size: 1rem; text-align:left; width: 25%!important">
          <label for="message">내용</label>
        </th>
        <td style="width: 75%">
          <textarea required style="width: 100%; padding: 8px;" id="message" name="message" placeholder="메일 내용을 입력해주세요"></textarea>
        </td>
      </tr>
      <tr style="height:3vmax">
        <td colspan="2" style="text-align:center">
          <input style="width: 50%; background-color: black; height: 3vmin; color:white" type="submit" value="문의하기" name="submit">
        </td>
      </tr>
    </table>
  </form>
  <?php
  include_once(G5_PATH . '/tail.php');
  ?>