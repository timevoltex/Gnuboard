<?php
include_once('./_common.php');
include_once('./_head.php');
?>

<div id="fullpage">
  <div class="section" style="background-image:url('<?php echo G5_IMG_URL ?>/weat/wbg1.png')">
    <div class="container">
      <div class="main-desc">
        <p class="normal">내 입맛에 맞는 식당이 있는줄 모르고
          <br>
          지나치는 것은 참 안타까운 일입니다.
        </p>
      </div>
      <div class="main-desc">
        <p class="bolder">모든 식당을 가볼 수는 없으니까, <br />
          위트가 알려드릴게요.
        </p>
      </div>
      <div class="downButton">
        <p class="bold">알아보기</p>
        <img id="more" src="<?php echo G5_IMG_URL ?>/weat/weat_logo_only.png" alt="logo">
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="app">
        <div class="content-box outer">
          <img src="<?php echo G5_IMG_URL ?>/weat/iphone.png" alt="outer">
        </div>
        <div class="content-box inner" style="display:block">
          <img src="<?php echo G5_IMG_URL ?>/weat/content (1).png" alt="outer">
        </div>
        <div class="content-box inner">
          <img src="<?php echo G5_IMG_URL ?>/weat/content (2).png" alt="outer">
        </div>
        <div class="content-box inner">
          <img src="<?php echo G5_IMG_URL ?>/weat/content (3).png" alt="outer">
        </div>
        <div class="content-box inner">
          <img src="<?php echo G5_IMG_URL ?>/weat/content (4).png" alt="outer">
        </div>
        <div class="content-box inner">
          <img src="<?php echo G5_IMG_URL ?>/weat/content (5).png" alt="outer">
        </div>
        <div class="content-box inner">
          <img src="<?php echo G5_IMG_URL ?>/weat/content (6).png" alt="outer">
        </div>
      </div>
      <div class="app-desc">
        <div class="desc-icon">
          <ul>
            <li class="icon">
              <img src="<?php echo G5_IMG_URL ?>/weat/hashtag-gray.png" alt="icon">
            </li>
            <li class="icon">
              <img src="<?php echo G5_IMG_URL ?>/weat/create-gray.png" alt="icon">
            </li>
            <li class="icon">
              <img src="<?php echo G5_IMG_URL ?>/weat/search-gray.png" alt="icon">
            </li>
            <li class="icon">
              <img src="<?php echo G5_IMG_URL ?>/weat/win-gray.png" alt="icon">
            </li>
            <li class="icon">
              <img src="<?php echo G5_IMG_URL ?>/weat/feed-gray.png" alt="icon">
            </li>
          </ul>
        </div>
        <div class="desc">
          <div class="desc-card intro" style="display:block;">
            <p>아이콘을 터치해 위트의 기능을 알아보세요</p>
          </div>
          <div class="desc-card d-main">
            <p>식사에 집중할 수 있도록 정확하고 편리하게.</p>
            <p>해쉬태그 기반으로 정확하게 추천해드립니다.</p>
          </div>
          <div class="desc-card d-main">
            <p>빠르고 편리하게 리뷰를 남기세요.</p>
            <p>모인 리뷰는 당신에게 더 맛있는 식당을 추천할 수 있게 해줍니다.</p>
          </div>
          <div class="desc-card d-main">
            <p>친구와 음식 취향을 분석해보세요.</p>
            <p>모두가 만족할 수 있는 식당을 추천해드립니다.</p>
          </div>
          <div class="desc-card d-main">
            <p>우리동네 골목대장이 되어보세요!</p>
            <p>식당들을 방문해 뱃지를 받아보세요.</p>
          </div>
          <div class="desc-card d-main">
            <p>혼자 먹기 아까운 맛이라면</p>
            <p>식당의 단골이 되어 다른 유저들에게 추천해주세요</p>
          </div>
        </div>
      </div>
      <div class="downButton">
        <p class="bold">다운로드</p>
        <img id="download" src="<?php echo G5_IMG_URL ?>/weat/download.png" alt="logo">
      </div>
    </div>
  </div>
  <script>
    $('.icon').click(function(){
      var choice = $(this);
      var mindex = choice.index('.icon') + 3;
      var iconindex=choice.index('.icon') + 2;
      var monitor = $('.inner:nth-child('+mindex+')');
      var desc = $('.d-main:nth-child('+iconindex+')');
      if(monitor.css("display") != 'block'){
        $('.inner, .desc-card').fadeOut(400);
        monitor.fadeIn(400);
        desc.fadeIn(400);
      }
    })
  </script>
  <div class="section Download" style="background-image:url('<?php echo G5_IMG_URL ?>/weat/wbg2.png')">
    <div class="container">
      <img class="symbol" src="<?php echo G5_IMG_URL ?>/weat/weat_icon_15.png" alt="logo">
      <br />
      <img class="symbol" src="<?php echo G5_IMG_URL ?>/weat/weat_white.png" alt="logo">
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
    <?php
    include_once('./_tail.php');
    ?>