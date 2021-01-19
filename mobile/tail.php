<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (defined('G5_THEME_PATH')) {
  require_once(G5_THEME_PATH . '/tail.php');
  return;
}
?>

<div id="ft">
  <div id="ft_wr">
    <div class="ft_cnt">
      <p class="normal">
        강원도 춘천시 강원대학길1, 보듬관 703호<br>
        사업자 등록 번호: 151-20-00854 &nbsp;&nbsp;대표자: 최원준<br>
      </p>
      <p class="light">
        Copyright &copy; 2020 CONNPLE. All rights reserved.<br>
      </p>
    </div>
    <!-- <div class="right-content">
      <img src="<?php echo G5_IMG_URL ?>/index/connple logo.png" alt="logo">
      <p class="bold">
        자주 묻는 질문 <br>
        공지사항
      </p>
    </div> -->
    <?php
    if (G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
      <!-- <a href="<?php //echo get_device_change_url(); 
                    ?>" id="device_change">PC 버전으로 보기</a> -->
    <?php
    }

    // if ($config['cf_analytics']) {
    //   echo $config['cf_analytics'];
    // }
    ?>
  </div>
</div>
</div>
<script>
  jQuery(function($) {

    $(document).ready(function() {

      // 폰트 리사이즈 쿠키있으면 실행
      font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

      //상단고정
      if ($(".top").length) {
        var jbOffset = $(".top").offset();
        $(window).scroll(function() {
          if ($(document).scrollTop() > jbOffset.top) {
            $('.top').addClass('fixed');
          } else {
            $('.top').removeClass('fixed');
          }
        });
      }

      //상단으로
      $("#top_btn").on("click", function() {
        $("html, body").animate({
          scrollTop: 0
        }, '500');
        return false;
      });

    });
  });
</script>

<?php
include_once(G5_PATH . "/tail.sub.php");
?>