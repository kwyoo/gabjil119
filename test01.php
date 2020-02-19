<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
?>

    <!-- CONTENTS -->
    <div id="job119_contents">

      <ul class="path pc">
        <li><a href="<?php echo G5_URL ?>">홈 ></a></li>
        <li><a href="<?php echo G5_URL ?>/test01.php">갑질TEST</a></li>
      </ul>

      <aside class="test_side_nav_wrap pc">
        <div class="leftside_nav">

          <ul class="side_nav">

            <li class="side_nav_title"><span>갑질 TEST</span></li>
            <li class="active">
              <a href="<?php echo G5_URL ?>/test01.php">갑질 TEST</a>
              <span>나의 숨겨진 갑질본능은?</span>
            </li>
            <li>
              <a href="<?php echo G5_URL ?>/counsel01.php">사・바・삼</a>
              <span>사무실을 바꾸는 3분 상담소</span>
            </li>
            <li>
            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=case">승리사례 모음집</a>
              <span>직장갑질 뿌수기 공모전 모음</span>
            </li>
            <li>
              <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=knowhow">노하우</a>
              <span>갑질과 싸운 사람들의 꿀팁모음</span>
            </li>

          </ul>

        </div>
      </aside>

      <div class="qmenu pc"><a href="http://www.gabjil119.com/" target="_blank"><img src="images/common/quick.png" alt="상담하기 119"></a></div>

      <div class="test_main">
        <div class="test_main_bg">
        </div>
        <div class="test_main_txt">
          <p>
            나의 갑질 감수성은?<br class="pc">
            우리회사 갑질지수는?
          </p>
        </div>
        <label class="test_main_switch_btn_wrap">
          <input type="checkbox" name="" value="" class="switch_btn" onclick="javascript:location.href='test02.php';">
          <span class="test_slider round"></span>
        </label>
      </div>
      <div class="test_txt01">
        <!-- <iframe src="http://isurvey.panel.co.kr/?Alias=1968311896" width="100%" height="100%;" frameborder="0"></iframe> -->
        <div class="test_box2" id="box1">
          <h2>직장 갑질 지수</h2>
          <span class="test_stitle">모집채용</span>
          <h4 class="test_scon">다음은 채용 과정에서 경험 하거나 일을 하면서 노동조건과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오.</h4>
          <h3 class="test_text">임금·고용형태 등 취업정보사이트 채용정보가 실제와 다르거나, 면접에서 제시한 약속이 지켜지지 않는다.</h3>
          <div class="test_btn_box">
            <button class="test_btn">전혀 그렇지 않다</button>
            <button class="test_btn">그렇지 않은 편이다</button>
            <button class="test_btn">보통이다</button>
            <button class="test_btn">그런 편이다</button>
            <button class="test_btn">매우 그렇다</button>
          </div>
          <button class="test_prev">&lt; 이전문항</button>
        </div>
        <div class="test_box2" id="box2">
          <p class="concl">귀하가 근무하는 직장의 갑질 지수는 <span id="result">90</span> 점 입니다</p>
          <p class="concltxt">2019 평균 갑질지수는 30.5점으로 나타났습니다.</p>
          <table class="tb tleft">
            <thead>
              <tr>
                <th>영역</th>
                <th>구분</th>
                <th>점수</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="3">사업장<br>구분</td>
                <td>민간 대기업</td>
                <td>30.6</td>
              </tr>
              <tr>
                <td>공공부문</td>
                <td>26.0</td>
              </tr>
              <tr>
                <td>민간중소영세기업</td>
                <td class="tbold">31.4</td>
              </tr>
              <tr>
                <td rowspan="2">성별<br>구분</td>
                <td>남성</td>
                <td class="tbold">31.8</td>
              </tr>
              <tr>
                <td>여성</td>
                <td>28.9</td>
              </tr>
              <tr>
                <td rowspan="2">고용<br>형태</td>
                <td>정규직</td>
                <td class="tbold">31.2</td>
              </tr>
              <tr>
                <td>비정규직</td>
                <td>29.4</td>
              </tr>
            </tbody>
          </table>          
          <table class="tb tright">
            <thead>
              <tr>
                <th>영역</th>
                <th>구분</th>
                <th>점수</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="4">세대별</td>
                <td>20대</td>
                <td>30.2</td>
              </tr>
              <tr>
                <td>30대</td>
                <td class="tbold">32.3</td>
              </tr>
              <tr>
                <td>40대</td>
                <td>29.7</td>
              </tr>
              <tr>
                <td>50-55세</td>
                <td>29.6</td>
              </tr>
              <tr>
                <td rowspan="2">지역구분</td>
                <td>수도권</td>
                <td>30.1</td>
              </tr>
              <tr>
                <td>비수도권</td>
                <td class="tbold">30.9</td>
              </tr>
            </tbody>
          </table>
          <div style="clear: both;margin-top:20px;"></div>
          <div class="test_btn_box">
            <button class="test_btn" onclick="javascript:go_test(1);">다시하기</button>
            <!-- <button class="test_btn" onclick="javascript:go_more();">결과 더보기</button> -->
          </div>
        </div>
      </div>
      <!-- <div class="test_txt01">
        <img src="images/test/test_logo.png" alt="갑질지수 테스트 시작"><br>
        <a href="#">갑질지수 테스트 시작</a>
      </div> -->

    </div>

    <script>
      var idx = 1;
      var score = [];
      var qstns = [];
      var cate = [];
      qstns[1] = {cate : 1, text : "임금·고용형태 등 취업정보사이트 채용정보가 실제와 다르거나, 면접에서 제시한 약속이 지켜지지 않는다", order : "asc"};
      qstns[2] = {cate : 1, text : "근로계약서를 작성·지급하지 않거나 취업규칙을 게시하지 않는다", order : "asc"};
      qstns[3] = {cate : 1, text : "임금이나 노동조건이 직원 동의 없이 불이익하게 변경된다", order : "asc"};
      qstns[4] = {cate : 1, text : "시간 외 수당을 지급 받지 못하거나 일부분만 지급한다", order : "asc"};
      qstns[5] = {cate : 2, text : "상사가 책상을 치는 등 신체적인 위협이나 폭행을 한다", order : "asc"};
      qstns[6] = {cate : 2, text : "상사가 업무를 지시하면서 위협적인 말이나 폭언, 협박을 한다", order : "asc"};
      qstns[7] = {cate : 2, text : "상사가 성희롱이나 성추행을 한다", order : "asc"};
      qstns[8] = {cate : 2, text : "성희롱 괴롭힘 등 피해 사실이 알려졌을 때 회사가 직원을 보호하지 않거나 불이익을 준다", order : "asc"};
      qstns[9] = {cate : 3, text : "외모, 연령, 학력, 지역, 비정규직, 성별 등을 이유로 차별대우를 한다", order : "asc"};
      qstns[10] = {cate : 3, text : "다른 사람들 앞이나 온라인상에서 모욕감을 주는 언행을 한다", order : "asc"};
      qstns[11] = {cate : 3, text : "회사에서 부당한 경위서나 반성문 등을 쓰도록 한다", order : "asc"};
      qstns[12] = {cate : 3, text : "개인사에 대한 뒷담화나 소문을 퍼뜨린다", order : "asc"};
      qstns[13] = {cate : 3, text : "상사나 동료가 특정한 직원을 따돌린다", order : "asc"};
      qstns[14] = {cate : 4, text : "상사가 본인의 일을 직원들에게 반복적으로 전가, 강요한다", order : "asc"};
      qstns[15] = {cate : 4, text : "상사가 업무 외 사적인 일을 직원들에게 강요한다", order : "asc"};
      qstns[16] = {cate : 4, text : "회사가 CCTV나 전자통신기기를 통해 업무를 감시한다", order : "asc"};
      qstns[17] = {cate : 4, text : "업무에 필요한 비품을 제공하지 않거나, 사내 네트워크 접속을 차단한다", order : "asc"};
      qstns[18] = {cate : 4, text : "업무시간 이외에 카카오톡, 문자 등 sns로 업무를 지시한다", order : "asc"};
      qstns[19] = {cate : 4, text : "정해진 근무시간 외에 조기 출근이나 야근을 강요한다", order : "asc"};
      qstns[20] = {cate : 4, text : "연차휴가를 자유롭게 사용할 수 없다", order : "asc"};
      qstns[21] = {cate : 5, text : "인사배치, 교대근무, 발령, 출장 등이 부당하게 이루어진다", order : "asc"};
      qstns[22] = {cate : 5, text : "능력이나 성과보다 친인척 또는 사적인 관계에 의해 인사상 불이익이 있다", order : "asc"};
      qstns[23] = {cate : 5, text : "합리적이고 공정한 기준과 절차로 징계가 진행되지 않는다", order : "asc"};
      qstns[24] = {cate : 6, text : "비업무적인 행사(장기자랑, 체육대회, 단합대회, MT 등)를 강요한다", order : "asc"};
      qstns[25] = {cate : 6, text : "신입이나 직급이 낮은 직원에게 고참들이 업무를 가르치면서 괴롭힌다", order : "asc"};
      qstns[26] = {cate : 6, text : "회사에서 원하지 않는 회식문화(음주, 노래방 등)를 강요한다", order : "asc"};
      qstns[27] = {cate : 6, text : "특정 종교 행사나 특정 단체 활동 또는 후원을 강요한다", order : "asc"};
      qstns[28] = {cate : 7, text : "임신 직원의 법적 보호(단축근무, 배치 등)가 이루어지지 않는다", order : "asc"};
      qstns[29] = {cate : 7, text : "법정 출산휴가(여성 90일, 남성의 경우 2019년 9월까지 3일, 현행 10일)나 법정 육아휴직 등을 사용하지 못한다", order : "asc"};
      qstns[30] = {cate : 7, text : "임신출산 및 육아휴직 사용을 비하하거나 싫어한다", order : "asc"};
      qstns[31] = {cate : 7, text : "출산휴가, 육아휴직 후 원직이 아닌   비희망부서 배치 등 불이익을 준다", order : "asc"};
      qstns[32] = {cate : 8, text : "아파도 불이익 때문에 연차나 병가를 사용하지 못한다", order : "asc"};
      qstns[33] = {cate : 8, text : "의무적으로 시행해야 하는 정기적인 건강검진을 하지 않는다", order : "asc"};
      qstns[34] = {cate : 8, text : "쉴 수 있는 공간이나 시설이 없다", order : "asc"};
      qstns[35] = {cate : 8, text : "일하다 다쳤는데도 산업재해 신청을 하지 못한다", order : "asc"};
      qstns[36] = {cate : 8, text : "위험하거나 유해한 상황에서도 계속 일을 하게 하거나 위험한 정보를 알려주지 않는다", order : "asc"};
      qstns[37] = {cate : 9, text : "직장 내 동호회나 소모임을 만들지 못하게 하거나, 반대로 강제로 가입하게 한다", order : "asc"};
      qstns[38] = {cate : 9, text : "노동조합을 인정하지 않거나 적대시, 불온시한다", order : "asc"};
      qstns[39] = {cate : 9, text : "노동조합 가입을 이유로 불이익을 준다", order : "asc"};
      qstns[40] = {cate : 10, text : "회사에서 권고사직이나 일방적인 계약해지가 빈번하게 이루어진다", order : "asc"};
      qstns[41] = {cate : 10, text : "자발적 퇴사를 강요해 실업급여를 받기 어렵게 만든다", order : "asc"};

      cate[1] = {stitle : "노동조건", scon : "다음은 채용 과정에서 경험 하거나 일을 하면서 노동조건과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[2] = {stitle : "폭력", scon : "다음은 일을 하면서 폭언폭행 및 성희롱과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[3] = {stitle : "차별·괴롭힘", scon : "다음은 일을 하면서 차별 및 괴롭힘과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[4] = {stitle : "노동시간", scon : "다음은 일을 하면서 작업 및 노동시간과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[5] = {stitle : "인사", scon : "다음은 일을 하면서 직장 내에서 승진, 해고 등 인사 문제와 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[6] = {stitle : "조직문화", scon : "다음은 일을 하면서 조직문화와 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[7] = {stitle : "출산·육아", scon : "다음은 일을 하면서 출산, 육아 등과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[8] = {stitle : "건강·안전", scon : "다음은 일을 하면서 건강 및 안전 등과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[9] = {stitle : "노동권리", scon : "다음은 일을 하면서 노동 권리 등과 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};
      cate[10] = {stitle : "퇴직·해고", scon : "다음은 일을 하면서 퇴직/해고와 관련하여 경험할 수 있는 내용입니다. 귀하가 현재 일하고 있는(혹은 최근에 일했던) 직장의 상황에 대해서 다음 항목별로 응답해 주십시오."};

      function btn_desc(){
        var box = $("#box1 .test_btn_box");
        box.empty();
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 5; go_test(idx + 1); }, text: "전혀 그렇지 않다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 4; go_test(idx + 1); }, text: "그렇지 않은 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 3; go_test(idx + 1); }, text: "보통이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 2; go_test(idx + 1); }, text: "그런 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 1; go_test(idx + 1); }, text: "매우 그렇다"}));
      }
      function btn_asc(){
        var box = $("#box1 .test_btn_box");
        box.empty();
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 1; go_test(idx + 1); }, text: "전혀 그렇지 않다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 2; go_test(idx + 1); }, text: "그렇지 않은 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 3; go_test(idx + 1); }, text: "보통이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 4; go_test(idx + 1); }, text: "그런 편이다"}));
        box.append($("<button />", {class: "test_btn", click: function(){ score[idx] = 5; go_test(idx + 1); }, text: "매우 그렇다"}));
      }
      function go_test(num){
        if (num < 42) {
          idx = num;
          $(".test_stitle").html(cate[qstns[idx].cate].stitle);
          $(".test_scon").html(cate[qstns[idx].cate].scon);
          $(".test_text").html(qstns[idx].text);
          if (qstns[idx].order == "desc") {
            btn_desc();
          } else {
            btn_asc();
          }
        } else {
          var result = 0;
          score.forEach(function(val, i){
            result = result + score[i];
          });
          result = Math.round(result * 20 / 41);

          $("#result").html(result);
          $("#box1").hide();
          $("#box2").show();
        }

        if (idx > 1) {
          $(".test_prev").text("< 이전문항");
        } else {
          $(".test_prev").text("");
          $("#box2").hide();
          $("#box1").show();
        }
      }
      $(document).ready(function(){
        $("#box2").hide();
        go_test(1);
        
        $(".test_prev").click(function(){
          if( idx > 1) {
            go_test(idx-1);
          }
        });
      });
    </script>
<?php
include_once(G5_PATH.'/tail.php');
?>