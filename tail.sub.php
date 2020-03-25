<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH . '/tail.sub.php')) {
  require_once(G5_THEME_PATH . '/tail.sub.php');
  return;
}
?>

<?php if ($is_admin == 'super') {  ?>
  <!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime() - $begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>
<script>
  $(document).ready(function() {
    $('#fullpage').fullpage({
      scrollingSpeed: 600,
      controlArrows: false,
      // scrollOverflow:true,
      <?php
      if (G5_IS_MOBILE) {
      ?>
        onLeave: function(origin, destination, direction) {
          console.log(origin.index);
          console.log(direction);
          console.log(destination);
          if (origin.index == 1 && direction == 'down') {
            $('#hd').css('background', 'transparent');
            $('#gnb_open').css('color', 'black');
            $('#logo img').attr('src', '<?php echo G5_IMG_URL ?>/connple logo.png')
          }
          if (origin.index == 2 && direction == 'up') {
            $('#hd').css('background', 'black');
            $('#gnb_open').css('color', 'white');
            $('#logo img').attr('src', '<?php echo G5_IMG_URL ?>/Connple-white.png')
          }
        },
      <?php } ?>
    });

  });
  $(document).on('click', '.goDown, .goDown', function() {
    fullpage_api.moveSectionDown();
  });
</script>
<script>
  <?php if (!G5_IS_MOBILE) { ?>
    $(document).ready(function() {
      $('#pagepiling').pagepiling({
        easing: 'linear',
        navigation: false,

      })
    })
    $(document).on('click', '.goDown, .goDown', function() {
      $.fn.pagepiling.moveSectionDown();
    });
  <?php } ?>
</script>
</div>
<!--fullpage-->
</body>

</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. 
?>