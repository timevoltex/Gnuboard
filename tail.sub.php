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
  <?php
  if (G5_IS_MOBILE) {
  ?>
    var path = window.location.pathname;
    $(document).ready(function() {

      $('#fullpage').fullpage({
        scrollingSpeed: 700,
        controlArrows: false,
        // scrollOverflow:true,
        onLeave: function(origin, destination, direction) {
          if (path == '/') {
            if ((origin.index == 1 && direction == 'down') || destination.isLast) {
              $('#hd').css('background', 'transparent');
              $('.hd_opener').css('color', 'black');
              $('#logo img').attr('src', '<?php echo G5_IMG_URL ?>/index/cnnpl.png')
            }
            if ((origin.index == 2 && direction == 'up') || destination.isFirst) {
              $('#hd').css('background', 'black');
              $('.hd_opener').css('color', 'white');
              $('#logo img').attr('src', '<?php echo G5_IMG_URL ?>/index/cnnpl white.png')
            }
          }
        }
      });
    });
    $(document).on('click', '.goDown, .goDown, .downButton', function() {
      fullpage_api.moveSectionDown();
    });
  <?php } else {
  ?>
    $(document).ready(function() {
      if (path == '/policy.php') {
        $('#ft').css('position', 'relative')
        $('body, html').css('overflow', 'unset');
      } else {

        $('#pagepiling').pagepiling({
          easing: 'linear',
          navigation: false,
          onLeave: function(index, nextIndex, direction) {
            if (nextIndex == 3 && window.location.pathname == '/weat.php') {
              $("#ft").css("z-index", 1);
            }
          }
        })
      }
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