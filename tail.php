<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (defined('G5_THEME_PATH')) {
  require_once(G5_THEME_PATH . '/tail.php');
  return;
}

if (G5_IS_MOBILE) {
  include_once(G5_MOBILE_PATH . '/tail.php');
  return;
}
?>
<!-- <div id="aside">
        <?php //echo outlogin(); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 
        ?>
        <?php //echo poll(); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 
        ?>
    </div>
</div> -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
  <div id="ft">

    <div id="ft_wr">
      <div class="ft_cnt">
        <p class="normal">
          강원도 춘천시 강원대학길 1, KNU스타트업 큐브 B동 214호<br>
          사업자 등록 번호: 151-20-00854<br>
          대표: 최원준<br>
        </p>
        <p class="light">
          Copyright &copy; 2020 CONNPLE. All rights reserved.<br>
        </p>
      </div>
      <div class="right-content">
        <img src="<?php echo G5_IMG_URL?>/index/connple logo.png" alt="logo">
        <p class="bold">
          자주 묻는 질문 <br>
            공지사항      
      </p>
      </div>
      <?php
      //공지사항
      // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
      // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
      // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
      // echo latest('notice', 'notice', 4, 13);
      ?>

      <?php //echo visit(); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 
      ?>
    </div>
    <!-- <div id="ft_catch"><img src="<?php //echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php //echo G5_VERSION ?>"></div> -->
  </div>
</div>



<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
  echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
  $(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
  });
</script>

<?php
include_once(G5_PATH . "/tail.sub.php");
?>