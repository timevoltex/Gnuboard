<?php
include_once('./_common.php');
include_once('./_head.php');
if (G5_IS_MOBILE) {
  include_once(G5_MOBILE_PATH . '/weat.php');
  return;
}
?>

<div class="section w-main" style="background-image:url('<?php echo G5_IMG_URL ?>/weat/wbg1.png');">
  <div class="container">
    <div id="desc">
      <p class="normal">내 입맛에 맞는 식당이 있는줄 모르고 지나치는 것은 참 안타까운 일입니다.</p>
      <br />
      <br />
      <p class="bolder">모든 식당을 가볼 수는 없으니까, 위트가 알려드릴게요.</p>
    </div>
    <div id="downButton">
      <p class="bold">알아보기</p>
      <img src="<?php echo G5_IMG_URL ?>/weat/weat_logo_only.png" alt="logo" />
    </div>
  </div>
</div>
<div class="section w-content">
  <div class="container">
    <div class="app">
      <div id="leftContent">
        <img src="<?php echo G5_IMG_URL ?>/weat/hashtag_01.png" alt="icon">
        <div class="app-desc">
          <p class="bolder">식사에 집중할 수 있도록 정확하고 편리하게</p>
          <p class="normal">해쉬태그 기반으로 정확하게 추천해드립니다.</p>
        </div>
      </div>
      <div id="leftContent">
        <img src="<?php echo G5_IMG_URL ?>/weat/creat_01.png" alt="icon">
        <div class="app-desc">
          <p class="bolder">빠르고 편리하게 리뷰를 남기세요.</p>
          <p class="normal">모인 리뷰는 당신에게 더 맛있는 식당을 추천할 수 있게 해줍니다.</p>
        </div>
      </div>
      <div id="leftContent">
        <img src="<?php echo G5_IMG_URL ?>/weat/search_01.png" alt="icon">
        <div class="app-desc" style="margin: auto 0">
          <p class="bolder">친구와 음식 취향을 분석해보세요</p>
          <p class="normal">모두가 만족할 수 있는 식당을 추천해드립니다.</p>
        </div>
      </div>
      <div id="leftContent">
        <img src="<?php echo G5_IMG_URL ?>/weat/win_01.png" alt="icon">
        <div class="app-desc">
          <p class="bolder">우리 동네 골목대장이 되어보세요!</p>
          <p class="normal">식당들을 방문해 뱃지를 받아보세요.</p>
        </div>
      </div>
      <div id="leftContent">
        <img src="<?php echo G5_IMG_URL ?>/weat/feed_01.png" alt="icon">
        <div class="app-desc">
          <p class="bolder">혼자 먹기 아까운 맛이라면</p>
          <p class="normal">식당의 단골이 되어 다른 유저들에게 추천해주세요.</p>
        </div>
      </div>
    </div>
    <div class="preview">
      <div class="content-box outer">
        <img src="<?php echo G5_IMG_URL ?>/weat/iphone.png" alt="phone">
      </div>
      <div class="content-box inner" style="display:block">
        <img class="app-content" src="<?php echo G5_IMG_URL ?>/weat/content (1).png" alt="cont" />
      </div>
      <div class="content-box inner">
        <img class="app-content" src="<?php echo G5_IMG_URL ?>/weat/content (2).png" alt="cont" />
      </div>
      <div class="content-box inner">

        <img class="app-content" src="<?php echo G5_IMG_URL ?>/weat/content (3).png" alt="cont" />
      </div>
      <div class="content-box inner">

        <img class="app-content" src="<?php echo G5_IMG_URL ?>/weat/content (4).png" alt="cont" />
      </div>
      <div class="content-box inner">

        <img class="app-content" src="<?php echo G5_IMG_URL ?>/weat/content (5).png" alt="cont" />
      </div>
      <div class="content-box inner">

        <img class="app-content" src="<?php echo G5_IMG_URL ?>/weat/content (6).png" alt="cont" />
      </div>
    </div>
    <script>
      //왼쪽 컨텐츠를 누를때
      $(".app #leftContent").click(function() {
        var text = $(this);
        // index를 구하고
        var index = text.index('.app #leftContent') + 3;
        var img = $('.preview .inner');
        // index에 해당하는 이미지가 none일때만 fade 효과가 발생하도록 한다
        // 이렇지 않으면 block일때도 효과가 발생하기 때문
        if ($(img).filter(':nth-child(' + index + ')').css('display') == 'none') {
          $(img).fadeOut(400);
          $(img).filter(':nth-child(' + index + ')').fadeIn(400);
        }
      });
    </script>
    <div id="downButton">
      <p class="bold">다운로드</p>
      <img src="<?php echo G5_IMG_URL ?>/weat/download.png" alt="download">
    </div>
  </div>
</div>
<div class="section dload" style="background-image:url('<?php echo G5_IMG_URL ?>/weat/wbg2.png');">
  <div class="container">
    <img src="<?php echo G5_IMG_URL ?>/weat/weat_icon_15.png" alt="logo">
    <br />
    <img src="<?php echo G5_IMG_URL ?>/weat/weat_white.png" alt="logo">
    <div class="info">
      <p class="bolder">요즘 우리가 다니는 식당, 위트</p>
      <p class="normal">내가 좋아하는 식당이 오늘 문을 열었나?</p>
      <p class="normal">오늘 뭐 먹지? 어디가 맛있을까?</p>
      <p class="normal">고민될 땐 위트를 열어보세요</p>
      <p class="normal">위트엔 당신이 원하는 식당정보가 모두 있으니까!</p>
    </div>

    <div class="downloadBox">
      <img src="<?php echo G5_IMG_URL ?>/weat/googlePlay.png" alt="download">
      <img src="<?php echo G5_IMG_URL ?>/weat/Appstore.png" alt="download">
    </div>
  </div>
</div>
<script>

</script>
<?php
include_once('./tail.php');
?>