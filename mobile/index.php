<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (defined('G5_THEME_PATH')) {
  require_once(G5_THEME_PATH . '/index.php');
  return;
}

include_once(G5_MOBILE_PATH . '/head.php');
?>
<div id="fullpage">
  <div class="section main" style="background:black; color:#e6e6e6">
    <div class="container">
      <img src="<?php echo G5_IMG_URL ?>/connect people white.png" alt="text" style="width:334px">
      <div style="padding-top:30px;">

        <p class="bold" style="letter-spacing:-0.45px; font:bold 18px/25px NanumSquare">사람들을 연결하고, 소통의 가치를 더합니다.</p>
        <p class="light" style="letter-spacing:-0.35px; line-height:25px; font-size:14px;">컨플은 사람과 사람을 연결하는 문화를 만들기 위해 <br>
          소통의 가치를 키워나가는 중 입니다.
        </p>
      </div>
      <button type="button" class="goDown" style="position:absolute; bottom:0; right:20px;
        background:white; border:none; width:76px; height:97px;">
        <div style="transform:translateY(-40%); text-align:left; font-size:12px; padding:0 13px">
          <p class="normal">MISSION</p>
          <i style="font-size:1.5em" class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
        </div>
      </button>
    </div>
  </div>
  <div class="section mission" style="color:#e6e6e6;text-align:center;background-image:url('<?php echo G5_IMG_URL ?>/bg2.jpg');
  box-shadow:rgba(0, 0, 0, 0.85) 0px 0px 0px 2000px inset;">
    <div class="container">
      <img src="<?php echo G5_IMG_URL ?>/Mission.png" alt="text" style="width:253px">
      <div style="padding-top:34px">
        <p class="bold" style="font-size:18px; line-height:26px; letter-spacing:-0.45px;">'Start Bravely, Finish Perfectly'</p>
        <p class="light" style="letter-spacing:-0.35px; line-height:25px; font-size:14px;">
          실행은 빠르게, 마무리는 꼼꼼하게.<br>
          맛집으로 알려진 식당만을 찾아가서 먹는<br>
          소비문화를 보이는 요즘, 인지도와 접근성의 문제로 인해<br>
          소비문화에서 소외되는 가게들이 많습니다.<br>
          컨플은 소상공인 사장님들이 처한 사회적인 문제를<br>
          해결하며 새로운 가치를 만들어 보고자 합니다.<br>

        </p>
      </div>
      <button type="button" class="goDown" style="position:absolute; bottom:0; right:20px;
        background:white; border:none; width:76px; height:97px;">
        <div style="transform:translateY(-40%); text-align:left; font-size:12px; padding: 0 19px">
          <p class="normal">VALUE</p>
          <i style="font-size:1.5em" class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
        </div>
      </button>
    </div>
  </div>
  <div class="section" style="background-color:#fff;background-image:url('<?php echo G5_IMG_URL ?>/bg3.jpg');background-size:contain; background-position:center 447px; background-repeat:no-repeat; ">
    <div class="slide value">
      <div class="container">
        <img src="<?php echo G5_IMG_URL ?>/value.png" alt="text" style="width:191.5px">
        <div style="padding-top:36px;">
          <p class="bold" style="font-size:18px; line-height:28px; letter-spacing:-0.45px;">
            '명작이 되도록 완벽하게'
          </p>
          <p class="light" style="font-size:14px; line-height:28px; letter-spacing:-0.35px">
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
    <button type="button" class="goDown" style="position:absolute; bottom:0; right:20px;
        background:black; border:none; width:76px; height:97px;">
      <div style="color:white;transform:translateY(-40%); text-align:left; font-size:12px; padding: 0 19px">
        <p class="normal">VALUE</p>
        <i style="font-size:1.5em" class="fa fa-caret-down" aria-hidden="true"></i><span class="sound_only">상단으로</span>
      </div>
    </button>
  </div>
  <div class="section contact">
    <div class="container">
      <img src="<?php echo G5_IMG_URL ?>/contact.png" alt="text" style="width:162px;">
      <div style="padding-top:18px;">
        <p class="bold" style="line-height:20px; letter-spacing:-0.35px; font-size:14px">컨플은 언제나 준비되어 있습니다.<br>
          추가로 궁금하신 점이 있으시다면 문의 부탁드립니다.
        </p>
      </div>
      <div class="contact-box" style="margin-top: 45px; max-width:100%; width:100%; color:white; background-color:black;
      padding:33px 52px 33px 58px; text-align:left">
        <table>
          <tr>
            <th class="bolder" style="width:46px; font-size:14px; line-height:33px; letter-spacing:-0.35px">이메일</th>
            <td class="light" style="letter-spacing:-0.35px; font-size:14px; line-height:33px;">help@connple.com</td>
          </tr>
          <tr>
            <th class="bolder" style="width:46px; font-size:14px; line-height:33px; letter-spacing:-0.35px">연락처</th>
            <td class="light" style="letter-spacing:-0.35px; font-size:14px; line-height:33px;">010-8688-1512(09-18시, 평일운영)</td>
          </tr>
          <tr>
            <th class="bolder" style="width:46px; font-size:14px; line-height:22px; letter-spacing:-0.35px; vertical-align:top;">주 &nbsp; &nbsp;소</th>
            <td class="light" style="letter-spacing:-0.35px; font-size:14px; line-height:20px;">강원도 춘천시 강원대학길1,<br>KNU스타트업큐브 B동 214호</td>
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