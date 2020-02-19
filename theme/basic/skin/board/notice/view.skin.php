<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- CONTENTS -->
<div id="board_contents">

    <!-- <ul class="path pc">
        <li><a href="<?php echo G5_URL ?>">홈 ></a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">게시판 ></a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=library">자료실</a></li>
    </ul> -->

    <aside class="board_side_nav_wrap pc">
        <div class="leftside_nav">

            <ul class="side_nav">

            <li class="side_nav_title"><span>게시판</span></li>
            <li class="active"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">알림</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=library">자료실</a></li>

            </ul>

        </div>
    </aside>

    <div class="qmenu pc"><a href="http://www.gabjil119.com/" target="_blank"><img src="<?php echo G5_URL ?>/images/common/quick.png" alt="상담하기 119"></a></div>

    <!-- 게시물 읽기 시작 { -->
    <div class="notice_detail_board">
        <div class="notice_board_title">
            <h2>
                <?php if ($category_name) { ?>
                <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 ?></span> 
                <?php } ?>
                <span class="bo_v_tit">
                <?php
                echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                ?></span>
            </h2>
            <ul>
                <li>작성일</li>
                <li><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></li>
                <li>조회</li>
                <li><?php echo number_format($view['wr_hit']) ?></li>
            </ul>
        </div>

        <div class="notice_board_contents">

            <?php
            // 파일 출력
            $v_img_count = count($view['file']);
            if($v_img_count) {
                echo "<div id=\"bo_v_img\">\n";

                for ($i=0; $i<=count($view['file']); $i++) {
                    echo get_file_thumbnail($view['file'][$i]);
                }

                echo "</div>\n";
            }
            ?>

            <!-- 본문 내용 시작 { -->
            <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
            <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
            <!-- } 본문 내용 끝 -->

            <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>

            <?php
            $cnt = 0;
            if ($view['file']['count']) {
                for ($i=0; $i<count($view['file']); $i++) {
                    if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                        $cnt++;
                }
            }
            ?>

            <?php if($cnt) { ?>
            <!-- 첨부파일 시작 { -->
            <section id="bo_v_file">
                <h2>첨부파일</h2>
                <ul>
                <?php
                // 가변 파일
                for ($i=0; $i<count($view['file']); $i++) {
                    if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
                ?>
                    <li>
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                        <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                            <strong><?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                        </a>
                        <br>
                        <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
                    </li>
                <?php
                    }
                }
                ?>
                </ul>
            </section>
            <!-- } 첨부파일 끝 -->
            <?php } ?>
        </div>

        <div class="notice_detail_board_footer">
            <div class="notice_board_footer_line"></div>
            <div class="notice_board_footer_btn">
                <?php if ($update_href) { ?><input type="button" name="" value="수정" onclick="location.href='<?php echo $update_href ?>'"><?php } ?>
                <?php if ($delete_href) { ?><input type="button" name="" value="삭제" onclick="location.href='<?php echo $delete_href ?>';del(this.href); return false;"><?php } ?>
            </div>
            <div class="notice_board_footer_list_btn">
                <input type="button" name="" value="목록으로" onclick="location.href='<?php echo $list_href ?>'">
            </div>
        </div>
    </div>
</div>

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->