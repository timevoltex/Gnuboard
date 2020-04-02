<?php
include_once('./_common.php');
include_once('./_head.php');
if (G5_IS_MOBILE) {
  include_once(G5_MOBILE_PATH . '/weat.php');
  return;
}
?>

<div class="section" style="background-image:url('<?php echo G5_IMG_URL ?>/weat/wbg1.png'); background-size:contain; background-repeat:no-repeat; background-position:center">
  <div class="container">
    <div id="desc">
      <p>내 입맛에 맞는 식당이 있는줄 모르고 지나치는 것은 참 안타까운 일입니다.</p>
      <p>모든 식당을 가볼 수는 없으니까, 위트가 알려드릴게요.</p>
    </div>
    <div id="downButton">
      <p>알아보기</p>
      <img src="<?php echo G5_IMG_URL ?>/weat/weat_icon_15.png" alt="logo" />
    </div>
  </div>
</div>
<div class="section" style="background:#fff">
  <div class="container">
    <div id="float:left" style="float:left; width:50%">
      <div id="leftContent" style="display:flex">
        <img src="<?php echo G5_IMG_URL ?>/weat/hashtag_01.png" alt="icon">
        <div>
          <p>식사에 집중할 수 있도록 정확하고 편리하게</p>
          <p>해쉬태그 기반으로 정확하게 추천해드립니다.</p>
        </div>
      </div>
      <div id="leftContent" style="display:flex">
        <img src="<?php echo G5_IMG_URL ?>/weat/creat_01.png" alt="icon">
        <div>
          <p>빠르고 편리하게 리뷰를 남기세요.</p>
          <p>모인 리뷰는 당신에게 더 맛있는 식당을 추천할 수 있게 해줍니다.</p>
        </div>
      </div>
      <div id="leftContent" style="display:flex">
        <img src="<?php echo G5_IMG_URL ?>/weat/search_01.png" alt="icon">
        <div>
          <p>친구와 음식 취향을 분석해보세요</p>
          <p>모두가 만족할 수 있는 식당을 추천해드립ㄴ디ㅏ.</p>
        </div>
      </div>
      <div id="leftContent" style="display:flex">
        <img src="<?php echo G5_IMG_URL ?>/weat/win_01.png" alt="icon">
        <div>
          <p>우리 동네 골목대장이 되어보세요!</p>
          <p>식당들을 방문해 뱃지를 받아보세요.</p>
        </div>
      </div>
      <div id="leftContent" style="display:flex">
        <img src="<?php echo G5_IMG_URL ?>/weat/feed_01.png" alt="icon">
        <div>
          <p>혼자 먹기 아까운 맛이라면</p>
          <p>식당의 단골이 되어 다른 유저들에게 추천해주세요.</p>
        </div>
      </div>
    </div>
    <div style="float:right; position:absolute; transform:translate(50%, -13%)" >
      <img src="<?php echo G5_IMG_URL ?>/weat/iphone.png" alt="phone">
    </div>
    <div id="downButton">
      <p>다운로드</p>
      <i class="fa fa-download"></i>
    </div>
  </div>
</div>
<div class="section" style="background-image:url('<?php echo G5_IMG_URL ?>/weat/wbg2.png'); background-size:contain; background-repeat:no-repeat; background-position:center">
  <div class="container">
    <img src="<?php echo G5_IMG_URL ?>/weat/weat_icon_15.png" alt="logo">
    <img src="<?php echo G5_IMG_URL ?>/weat/weat_white.png" alt="logo">
    <div>
      <p>요즘 우리가 다니는 식당, 위트</p>
      <p>내가 좋아하는 식당이 오늘 문을 열었나?</p>
      <p>오늘 뭐 먹지? 어디가 맛있을까?</p>
      <p>고민될 땐 위트를 열어보세요</p>
      <p>위트엔 당신이 원하는 식당정보가 모두 있으니까!</p>
    </div>
    <div>
      <img src="<?php echo G5_IMG_URL ?>/weat/googlePlay.png" alt="download">
      <img src="<?php echo G5_IMG_URL ?>/weat/Appstore.png" alt="download">
    </div>
  </div>
</div>
<?php
include_once('./tail.php');
?>