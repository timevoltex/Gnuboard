<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (defined('G5_THEME_PATH')) {
  require_once(G5_THEME_PATH . '/index.php');
  return;
}

include_once(G5_MOBILE_PATH . '/head.php');
?>
<div id="fullpage">
  <!-- 1st section -->
  <div class="section main">
    <div class="container">
      <img src="<?php echo G5_IMG_URL ?>/index/connect people white.png" alt="text">
      <div class="main-text">
        <p class="bold">사람들을 연결하고, 소통의 가치를 더합니다.</p>
        <p class="light">컨플은 사람과 사람을 연결하는 문화를 만들기 위해 <br>
          소통의 가치를 키워나가는 중 입니다.
        </p>
      </div>
      <div class="main-bg">
        <img src="<?php echo G5_IMG_URL?>/index/firstpage.png" alt="img" >
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
  <div class="section mission" style="background-image:url('<?php echo G5_IMG_URL ?>/index/bg2.jpg');">
    <div class="container">
      <img src="<?php echo G5_IMG_URL ?>/index/Mission.png" alt="text">
      <div class="mission-text">
        <p class="bold">'Start Bravely, Finish Perfectly'</p>
        <p class="light">
          실행은 빠르게, 마무리는 꼼꼼하게.<br>
          맛집으로 알려진 식당만을 찾아가서 먹는<br>
          소비문화를 보이는 요즘, 인지도와 접근성의 문제로 인해<br>
          소비문화에서 소외되는 가게들이 많습니다.<br>
          컨플은 소상공인 사장님들이 처한 사회적인 문제를<br>
          해결하며 새로운 가치를 만들어 보고자 합니다.<br>
        </p>
      </div>
      <div class="btn-wrapper">
        <button type="button" class="goDown">
          <div class="btn-inner">
            <p class="normal">VALUE</p>
            <i class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
          </div>
        </button>
      </div>
    </div>
  </div>
  <!-- 3rd section -->
  <div class="section Value" style="background-image:url('<?php echo G5_IMG_URL ?>/index/bg3.jpg');">
    <div class="slide value">
      <div class="container">
        <img src="<?php echo G5_IMG_URL ?>/index/value.png" alt="text">
        <div class="value-text">
          <p class="bold">
            '명작이 되도록 완벽하게'
          </p>
          <p class="light">
            스타트업은 대기업과 다르게,<br>
            본인 역량에 도움이 될 다양한<br>
            업무를 해볼 수 있다는 것이 특징입니다.<br>
            컨플은 새로운 도전을 즐거워하며<br>
            더 가치 있는 커리어를 만들어갑니다.<br>
          </p>
        </div>
      </div>
    </div>
    <div class="slide">
      <div class="container">
        <p class="normal">믿을 수 있는</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
      </div>
    </div>
    <div class="slide">
      <div class="container">
        <p class="normal">용감히 실행하는</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
      </div>
    </div>
    <div class="slide">
      <div class="container">
        <p class="normal">성장을 열망하는</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
      </div>
    </div>
    <div class="slide">
      <div class="container">
        <p class="normal">자율이 가능한</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
      </div>
    </div>
    <div class="slide">
      <div class="container">
        <p class="normal">마무리가 꼼꼼한</p>
        <p class="light">소비자와 사장님들간의 신뢰, 우리 회사를 거치는<br />
          모든 사람들 간의 신뢰를 위해 항상 노력합니다.
      </div>
    </div>
    <div class="container">
      <div class="btn-wrapper">
        <button type="button" class="goDown black">
          <div class="btn-inner">
            <p class="normal">CONTACT</p>
            <i style="font-size:1.5em" class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
          </div>
        </button>
      </div>
    </div>
  </div>
  <!-- last section(footer) -->
  <div class="section contact">
    <div class="container">
      <img src="<?php echo G5_IMG_URL ?>/index/contact.png" alt="text" style="width:162px;">
      <div class="contact-text" style="padding-top:18px;">
        <p class="bold">컨플은 언제나 준비되어 있습니다.<br>
          추가로 궁금하신 점이 있으시다면 문의 부탁드립니다.
        </p>
      </div>
      <div class="contact-box">
        <table>
          <tr>
            <th class="bolder">이메일</th>
            <td class="light">help@connple.com</td>
          </tr>
          <tr>
            <th class="bolder">연락처</th>
            <td class="light">010-8688-1512(09-18시, 평일운영)</td>
          </tr>
          <tr>
            <th class="bolder addr">주 &nbsp; &nbsp;소</th>
            <td class="light addr">강원도 춘천시 강원대학길1,<br>KNU스타트업큐브 B동 214호</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- 메인화면 최신글 시작 -->
    <?php
    //  최신글
    // $sql = " select bo_table
    //             from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
    //             where a.bo_device <> 'pc' ";
    // if(!$is_admin) {
    //     $sql .= " and a.bo_use_cert = '' ";
    // }
    // $sql .= " order by b.gr_order, a.bo_order ";
    // $result = sql_query($sql);
    // for ($i=0; $row=sql_fetch_array($result); $i++) {
    //     // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    //     // 스킨은 입력하지 않을 경우 관리자 > 환경설정의 최신글 스킨경로를 기본 스킨으로 합니다.

    //     // 사용방법
    //     // latest(스킨, 게시판아이디, 출력라인, 글자수);
    //     echo latest('basic', $row['bo_table'], 12, 25);
    //}
    ?>
    <!-- 메인화면 최신글 끝 -->

    <?php
    include_once(G5_MOBILE_PATH . '/tail.php');
    ?>