<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

    <!-- CONTENTS -->
    <div id="job119_contents">

      <!-- <ul class="path pc">
        <li><a href="<?php echo G5_URL ?>">홈 ></a></li>
        <li><a href="<?php echo G5_URL ?>/intro01.php">직장갑질119 ></a></li>
        <li><a href="<?php echo G5_URL ?>/faq.php">직장갑질 FAQ</a></li>
      </ul> -->

      <aside class="side_nav_wrap pc">
        <div class="leftside_nav">

          <ul class="side_nav">

            <li class="side_nav_title"><span>직장갑질119</span></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/" class="side_nav_sub_menu_btn"><span>소개</span><img src="images/common/down_arrow.png"></a>
              <ul>
                <li><a href="<?php echo G5_URL ?>/intro01.php">직장갑질119 소개</a></li>
                <li><a href="<?php echo G5_URL ?>/intro02.php">활동소개</a></li>
                <li><a href="<?php echo G5_URL ?>/intro03.php">연혁</a></li>
              </ul>
            </li>
            <li><a href="<?php echo G5_URL ?>/group.php">함께하는 사람들</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=report">사단법인 알림</a></li>
            <li class="side_nav_sub_menu">
              <a href="<?php echo G5_URL ?>/support01.php" class="side_nav_sub_menu_btn"><span>후원참여</span><img src="images/common/down_arrow.png"></a>
              <ul>
                <li><a href="<?php echo G5_URL ?>/support01.php">후원안내</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=support02">후원해주시는 분들</a></li>
                <li><a href="<?php echo G5_URL ?>/support03.php">후원참여</a></li>
              </ul>
            </li>
            <li><a href="<?php echo G5_URL ?>/faq.php">직장갑질 FAQ</a></li>

          </ul>

        </div>
      </aside>

      <div class="qmenu pc"><a href="http://www.gabjil119.com/" target="_blank"><img src="images/common/quick.png" alt="상담하기 119"></a></div>

      <div class="faq_main">
        <!-- <p>
          직장갑질119를 더욱 쉽게<br>
          이용하기 위한 사용설명서 입니다.
        </p> -->
        <div class="faq_main_img">
          <img src="images/intro/quotes.png" alt="quotation mark" class="pc">
          <img src="images/faq/faq_main.png" alt="직장갑질119와 함께해주세요." class="pc">
          <img src="images/faq/m_faq_main.png" alt="직장갑질119와 함께해주세요." class="mb">
        </div>
      </div>
<script>
  var faq_show = function(num) {
    $("#faq" + num).find(".faq_content").show();
    $("#faq" + num).find(".faq_item_btn_close").show();
    $("#faq" + num).find(".faq_item_btn").hide();
  }
  
  var faq_hide = function(num) {
    $("#faq" + num).find(".faq_content").hide();
    $("#faq" + num).find(".faq_item_btn_close").hide();
    $("#faq" + num).find(".faq_item_btn").show();
  }
  
  var faq_swap = function(num) {
    if ($("#faq" + num).find(".faq_content").css("display") == "none"){
      $("#faq" + num).find(".faq_content").show();
      $("#faq" + num).find(".faq_item_btn_close").show();
      $("#faq" + num).find(".faq_item_btn").hide();
    } else {
      $("#faq" + num).find(".faq_content").hide();
      $("#faq" + num).find(".faq_item_btn_close").hide();
      $("#faq" + num).find(".faq_item_btn").show();
    }
  }
</script>
      <div class="faq_wrap">
        <ul class="faq_list">
          <li class="faq_item" id="faq01">
            <h1>1</h1>
            <a href="javascript:faq_swap('01');" class="faq_trigger"><img src="images/faq/question.png" alt="question mark"><span>직장갑질119 에서 상담 받는 법을 모르겠어요</span></a>
            <div class="faq_item_btn_close"><a href="javascript:faq_hide('01');">닫기</a></div>
            <div class="faq_item_btn"><a href="javascript:faq_show('01');">답변확인</a></div>
            <div class="faq_content">
              <img src="images/faq/answer.png" alt="answer">
              <div class="faq_text_component">
                <!-- <video src="#" width="247" height="139" autoplay="no" poster=images/intro/video.png>
                  <source src="https://" type="video/mp4">
                </video> -->
                <iframe style="width:100%;max-width:560px;height:100%;min-height:315px;margin-top:10px;" src="https://www.youtube.com/embed/cboySQtb0o4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>➊ 카카오톡 오픈채팅 직장갑질119</p>
                <p>
                  &nbsp;&nbsp;&nbsp;&nbsp;- 카카오톡에서 ‘직장갑질119’ 검색 or 인터넷 주소창 gabjil119.com 입력<br class="pc">
                  &nbsp;&nbsp;&nbsp;&nbsp;- 상담운영 : 월 - 금 ㅣ 10:30 - 21시<br class="pc">
                  <span>토 ㅣ 10:30 -13시</span><br class="pc">
                  <span>일∙공휴일 ㅣ 휴무</span>
                </p>
                <p>➋ 이메일 : gabjil119@gmail.com, 4일 이내 답변</p>
              </div>
            </div>
          </li>
          <li class="faq_item" id="faq02">
            <h1>2</h1>
            <a href="javascript:faq_swap('02');" class="faq_trigger"><img src="images/faq/question.png" alt="question mark"><span>전화상담이나 방문상담은 안되나요?</span></a>
            <div class="faq_item_btn_close"><a href="javascript:faq_hide('02');">닫기</a></div>
            <div class="faq_item_btn"><a href="javascript:faq_show('02');">>답변확인</a></div>
            <div class="faq_content">
              <img src="images/faq/answer.png" alt="answer">
              <div class="faq_text_component">
                <p>
                  직장갑질119는 각자 생업에 종사하는 스탭들의 자원 활동으로 운영되고 있습니다.<br class="pc">
                  별도의 전화 상담이나 방문상담은 어렵습니다.
                </p>
              </div>
            </div>
          </li>
          <li class="faq_item" id="faq03">
            <h1>3</h1>
            <a href="javascript:faq_swap('03');" class="faq_trigger"><img src="images/faq/question.png" alt="question mark"><span>직장갑질 지표는 무엇인가요?</span></a>
            <div class="faq_item_btn_close"><a href="javascript:faq_hide('03');">닫기</a></div>
            <div class="faq_item_btn"><a href="javascript:faq_show('03');">>답변확인</a></div>
            <div class="faq_content">
              <img src="images/faq/answer.png" alt="answer">
              <div class="faq_text_component">
                <p>
                  우리 회사는 얼마나 갑질 없이 평등한 회사일까요?<br class="pc">
                  우리 회사에서 가장 심각한 갑질은 어떤 것일까요?<br class="pc">
                  신고・처벌 못지 않게 중요한 것은 우리 회사의 갑질 수준을 확인하고, 비교해보는 일입니다.<br class="pc">
                  직장갑질119는 지금까지 받았던 제보사례들을 토대로 내가 다니는 회사의 갑질 정도를<br class="pc">
                  측정할 수 있는 갑질 지수를 만들었습니다. 정말로 그럴지 한번 확인해보러 가요!
                </p>
                <div class="faq_content_btn"><a href="#">확인하러가기 ></a></div>
              </div>
            </div>
          </li>
          <li class="faq_item" id="faq04">
            <h1>4</h1>
            <a href="javascript:faq_swap('04');" class="faq_trigger"><img src="images/faq/question.png" alt="question mark"><span>직장갑질 감수성지표는 무엇인가요?</span></a>
            <div class="faq_item_btn_close"><a href="javascript:faq_hide('04');">닫기</a></div>
            <div class="faq_item_btn"><a href="javascript:faq_show('04');">>답변확인</a></div>
            <div class="faq_content">
              <img src="images/faq/answer.png" alt="answer">
              <div class="faq_text_component">
                <p>
                  성별도, 세대도, 직급도 다른 사람들이 모인 우리 회사<br class="pc">
                  서로 감수성이 달라 발생하는 갑질은 없을까요?<br class="pc">
                  서로를 배려하는 조직문화를 만들기 위해 어디서부터 시작해야 할까요?<br class="pc">
                  직장갑질 감수성 지표는 내가 특정 유형의 문항이 갑질 이라고 인식 하는지를 확인할 수 있는 지표입니다.<br class="pc">
                  직장갑질119가 지금까지 받았던 제보사례를 토대로 만들었습니다.<br class="pc">
                  감수성 지표를 활용한 ‘직장 갑질 감수성 지수 조사’를 통해 나의 감수성이 어떤지를 알 수 있습니다.<br class="pc">
                  또한 회사(팀) 내부조사 등을 통해 조직 내에서 성별・세대별・직책별로 갑질을 인식하는<br class="pc">
                  문화적 차이를 확인할 수 있습니다.
                </p>
                <div class="faq_content_btn"><a href="<?php echo G5_URL ?>/test01.php">확인하러가기 ></a></div>
              </div>
            </div>
          </li>
          <li class="faq_item" id="faq05">
            <h1>5</h1>
            <a href="javascript:faq_swap('05');" class="faq_trigger"><img src="images/faq/question.png" alt="question mark"><span>상담을 받기 전, 참고할만한 정보는 없을까요?</span></a>
            <div class="faq_item_btn_close"><a href="javascript:faq_hide('05');">닫기</a></div>
            <div class="faq_item_btn"><a href="javascript:faq_show('05');">>답변확인</a></div>
            <div class="faq_content">
              <img src="images/faq/answer.png" alt="answer">
              <div class="faq_text_component">
                <p>
                  직장 갑질 신고하려면 어떤 것들을 준비해야 할까요?<br class="pc">
                  실업급여, 체불임금, 직장내 괴롭힘, 부당해고, 연차휴가, 성희롱과 모성보호 등…<br class="pc">
                  직장갑질119가 갑질 유형별 대응법 노하우를 공개합니다!
                </p>
                <p>
                  ➊ 사무실을 바꾸는 삼분 상담소!<br class="pc">
                  사바삼(사무실을 바꾸는 3분영상)은 사례에 따른 대응 매뉴얼을 카톡영상으로 만들었습니다.<br class="pc">
                  ① 실제 상담 사례를 재구성하여 지루하지 않는,<br class="pc">
                  ② 카카오톡 대화 창을 그대로 살려 생생한,<br class="pc">
                  ③ 3분 만에 핵심만 설명하여 쉽고 빠르게.<br class="pc">
                </p>
                <!-- <video src="#" width="247" height="139" autoplay="no" poster=images/intro/video.png>
                  <source src="https://" type="video/mp4">
                </video> -->
                <div class="faq_content_btn"><a href="<?php echo G5_URL ?>/counsel01.php">사바삼 바로가기 ></a></div>
                <p>
                  ➋ 갑질위키<br class="pc">
                  온갖 백과사전(위키)가 다 있는데 직장 갑질 백과사전은 왜 없나요?<br class="pc">
                  그래서 직장갑질119가 만들었습니다.<br class="pc">
                  서울지방변호사회의 ‘직장갑질 사건 매뉴얼’과 서울노동권익센터의 ‘상담자를 위한 매뉴얼’을<br class="pc">
                  바탕으로 만든 대한민국 최초 직장 갑질 백과사전, 갑질위키.<br class="pc">
                  신고 전, 상담 전 ‘갑질위키’를 통해 갑질 대응법을 배워요!
                </p>
                <!-- <video src="#" width="247" height="139" autoplay="no" poster=images/intro/video.png>
                  <source src="https://" type="video/mp4">
                </video> -->
                <div class="faq_content_btn"><a href="http://gabjilwiki.com/" target="_blank">갑질위키 ></a></div>
              </div>
            </div>
          </li>
          <li class="faq_item" id="faq06">
            <h1>6</h1>
            <a href="javascript:faq_swap('06');" class="faq_trigger"><img src="images/faq/question.png" alt="question mark"><span>정말 직장 갑질에 맞서 이긴 사례들이 있나요?</span></a>
            <div class="faq_item_btn_close"><a href="javascript:faq_hide('06');">닫기</a></div>
            <div class="faq_item_btn"><a href="javascript:faq_show('06');">>답변확인</a></div>
            <div class="faq_content">
              <img src="images/faq/answer.png" alt="answer">
              <div class="faq_text_component">
                <p>
                  ➊ 승리사례 모음집<br class="pc">
                  직장 갑질과 괴롭힘에 맞선 을들의 고군분투기!<br class="pc">
                  1년에 한 번씩 열리는 &lt;직장갑질 뿌!수기&gt; 공모전에서 응모한 작품을 모았습니다.<br class="pc">
                  싸우는 과정이 생생하게 눈으로 읽히고, 그 과정 속에서 어떻게 대응 했는지도 엿볼 수 있는<br class="pc">
                  우리가 쏘아올린 작은 공!<br class="pc">
                  괴롭힘에 대한 침묵을 깨고, 두렵고 막막한 싸움의 길을 걸었던 직장인들의 갑질 뿌!수기 함께 보아요!
                </p>
                <!-- <video src="#" width="247" height="139" autoplay="no" poster=images/intro/video.png>
                  <source src="https://" type="video/mp4">
                </video> -->
                <div class="faq_content_btn"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=case">승리사례 모음집 ></a></div>
                <p>
                  ➋ 노하우
                  갑질에 맞서 싸워본 자만이 아는 진짜 노하우!<br class="pc">
                  “녹음기는 어떻게 사용해야하나요?”<br class="pc">
                  “기록은 어떻게 해야 실효가 있나요?”<br class="pc">
                  “이런 상황에서는 어떻게 해야할까요?”<br class="pc">
                  싸움을 준비하기 전에 꼭 읽어야 하는 갑질에 맞선 자들의 노하우 보기
                </p>
                <!-- <video src="#" width="247" height="139" autoplay="no" poster=images/intro/video.png>
                  <source src="https://" type="video/mp4">
                </video> -->
                <div class="faq_content_btn"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=knowhow">노하우 바로가기 ></a></div>
              </div>
            </div>
          </li>
          <li class="faq_item" id="faq07">
            <h1>7</h1>
            <a href="javascript:faq_swap('07');" class="faq_trigger"><img src="images/faq/question.png" alt="question mark"><span>교육신청은 어떻게 하나요?</span></a>
            <div class="faq_item_btn_close"><a href="javascript:faq_hide('07');">닫기</a></div>
            <div class="faq_item_btn"><a href="javascript:faq_show('07');">>답변확인</a></div>
            <div class="faq_content">
              <img src="images/faq/answer.png" alt="answer">
              <div class="faq_text_component">
                <p>
                  직장갑질119 공식 메일  gabjil119@gmail.com 으로 신청해주시면 됩니다.<br class="pc">
                  기업 ‘직장 내 괴롭힘 금지법’ 강의, 공공기관 인권교육의 일환인 ‘직장 갑질 교육’,<br class="pc">
                  지역공동체・센터가 주최하는 ‘노동법 강의 내 직장 내 괴롭힘 금지법 파트<br class="pc">
                  등의 교육을 수행하고 있습니다. 다양한 상담사례, 실태조사, 해결노하우를 통해<br class="pc">
                  생생한 강의를 들으실 수 있습니다.
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </div>
<?php
include_once(G5_PATH.'/tail.php');
?>