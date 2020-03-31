<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (defined('G5_THEME_PATH')) {
  require_once(G5_THEME_PATH . '/index.php');
  return;
}

if (G5_IS_MOBILE) {
  include_once(G5_MOBILE_PATH . '/index.php');
  return;
}

include_once(G5_PATH . '/head.php');
?>
<!-- 1st section -->
<div class="section main">
  <div class="container">
    <div>
      <img class="main-img" src="<?php echo G5_IMG_URL ?>/connect people white.png" alt="text">
    </div>
    <div class="main-text">
      <p class="bold">
        사람들을 연결하고, 소통의 가치를 더합니다.
      </p>
      <p class="light">
        컨플은 사람과 사람을 연결하는 문화를 만들기 위해
      </p>
      <p class="light">
        소통의 가치를 키워나가는 중입니다.
      </p>
    </div>
    <div class="btn-wrapper">
      <button type="button" class="goDown">
        <div class="btn-inner">
          <p class="normal">MISSION</p>
          <i class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
        </div>
      </button>
    </div>
  </div>
</div>
<!-- 2nd section -->
<div class="section mission" style="background-image:url('<?php echo G5_IMG_URL ?>/bg2.jpg');">
  <div class="container">
    <div>
      <img class="mission-img" src="<?php echo G5_IMG_URL ?>/Mission.png" alt="text">
    </div>
    <div class="mission-text">
      <p class="bold">'Start Bravely, Finish Perfectly'</p>
      <p class="light">
        실행은 빠르게, 마무리는 꼼꼼하게.<br />
        맛집으로 알려진 식당만을 찾아가서 먹는 소비문화를 보이는 요즘, <br />
        인지도와 접근성의 문제로 인해 소비문화에서 소외된 가게들이 많습니다.<br />
        컨플은 소상공인 사장님들이 처한 사회적인 문제를 해결하며 새로운 가치를 만들어 보고자 합니다.</p>
    </div>
    <div class="btn-wrapper">
      <button type="button" class="goDown">
        <div class="btn-inner">
          <p class="normal value">VALUE</p>
          <i class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
        </div>
      </button>
    </div>
  </div>
</div>
<!-- 3rd section -->
<div class="section value pp-scrollable" style="background:white">
  <div class="container">
    <div class="left-content">
      <div>
        <img src="<?php echo G5_IMG_URL ?>/value.png" alt="text" style="width:258.15px;">
      </div>
      <div class="value-text">
        <p class="bold">'명작이 되도록 완벽하게'</p>
        <br>
        <p class="light">스타트업은 대기업과 다르게, <br />
          본인 역량에 도움이 될 다양한 <br />
          업무를 해볼 수 있다는 것이 특징입니다.<br />
          컨플은 새로운 도전을 즐거워하며 <br />
          더 가치있는 커리어를 만들어 갑니다.
        </p>
      </div>
      <div class="value-img">
        <img src="<?php echo G5_IMG_URL ?>/bg3(new).jpg" alt="img">
      </div>
    </div>
    <div class="right-content">
      <div class="right-text">
        <p class="normal">믿을 수 있는</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
        모든 사람들 간의 신뢰를 위해 항상 노력합니다.
      </p>
      </div>
      <div class="right-text">
        <p class="normal">소통할 수 있는</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
        </p>
      </div>
      <div class="right-text">
        <p class="normal">용감히 실행하는</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
        </p>
      </div>
      <div class="right-text">
        <p class="normal">성장을 열망하는</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
        </p>
      </div>
      <div class="right-text">
        <p class="normal">자율이 가능한</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
        </p>
      </div>
      <div class="right-text">
        <p class="normal">마무리가 꼼꼼한</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
        </p>
      </div>
      <button type="button" class="goDown black">
        <div class="btn-inner">
          <p class="normal contact">CONTACT</p>
          <i class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
        </div>
      </button>
    </div>
  </div>
</div>
<!-- last section (footer) -->
<div class="section contact">
  <div class="container">
    <div>
      <img class="contact-img" src="<?php echo G5_IMG_URL ?>/contact.png" alt="text" style="width:324px;">
    </div>
    <div class="contact-text" style="padding-top:41px;">
      <p class="bold" style="font-size: 30px; letter-spacing:-0.75px; line-height:50px;">컨플은 언제나 준비되어 있습니다.<br />
        추가로 궁금하신 점이 있으시다면 문의 부탁드립니다.
      </p>
    </div>
    <div class="contact-box">
      <p class="light"><span class="bolder">이메일</span>help@connple.com</p>
      <p class="light"><span class="bolder">연락처</span>010-8688-1512 (10-17시, 평일운영)</p>
      <p class="light"><span class="bolder addr">주&nbsp; &nbsp; 소</span>강원도 춘천시 강원대학길 1, KNU스타트업큐브 B동 214호</p>
    </div>
  </div>
  <!--
<h2 class="sound_only">최신글</h2>

<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    //   echo latest('pic_list', 'free', 4, 23);			// 최소설치시 자동생성되는 자유게시판
    // echo latest('pic_list', 'qa', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
    // echo latest('pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>
<div class="latest_wr">-->
  <!-- 사진 최신글2 { -->
  <?php
  // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
  // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
  // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
  // echo latest('pic_block', 'gallery', 4, 23);		// 최소설치시 자동생성되는 갤러리게시판
  ?>
  <!-- } 사진 최신글2 끝 -->
  <!-- </div>

<div class="latest_wr"> -->
  <!-- 최신글 시작 { -->
  <?php
  //  최신글
  // $sql = " select bo_table
  //             from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
  //             where a.bo_device <> 'mobile' ";
  //   if(!$is_admin)
  // $sql .= " and a.bo_use_cert = '' ";
  //   $sql .= " and a.bo_table not in ('notice', 'gallery') ";     //공지사항과 갤러리 게시판은 제외
  //   $sql .= " order by b.gr_order, a.bo_order ";
  //   $result = sql_query($sql);
  //   for ($i=0; $row=sql_fetch_array($result); $i++) {
  // $lt_style = '';
  // 	if ($i%3 !== 0 ) $lt_style = "margin-left:2%";
  ?>
  <!--<div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        // echo latest('basic', $row['bo_table'], 6, 24);
        ?>
    </div>
    <?php
    // }
    ?>
     } 최신글 끝
</div> -->
  <?php
  include_once(G5_PATH . '/tail.php');
  ?>