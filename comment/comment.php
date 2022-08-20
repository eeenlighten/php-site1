<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix : 댓글 페이지</title>

    <?php include "../include/link.php"; ?>

</head>
<body>
    <div id="skip">
        <a href="#main">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <?php include "../include/header.php"; ?>
    <!-- //header -->

    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <section id="bannerType" class="banner__wrap nexon">
                <h2 class="ir_so">슬라이드 영역</h2>
                <div class="banner__inner">
                    <div class="banner">
                        <div class="banner__img vlv">
                            <div class="desc">
                                <h3>영화와 시리즈를<br>무제한으로.</h3>
                                <p>다양한 디바이스에서 시청하세요. 언제든 해지하실 수 있습니다.</p>
                            </div>
                            <div class="concord-img-gradient"></div>                            
                        </div>
                    </div>
                </div>
            </section>            

            <article class="content-article">
                <h3>넷플릭스에서 꼭 봐야하는 콘텐츠</h3>
                <p>더 짜릿하게, 더 감동적으로</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/img1.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>아파트 이웃들이 수상해</strong>
                                <span>뉴욕의 한 아파트에서 벌어진 의문의 살인 사건의 범인을 쫓는 비공식 탐정 3인방 찰스, 올리버, 메이블의 못 말리는 코믹 수사극</span>
                                <span class="keyword">
                                    <span>#웹드라마</span><span>#코믹</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img2.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>심슨 가족</strong>
                                <span>미국의 스프링필드라는 도시에 사는 호머 가족과 그 주변인들과의 일상을 그린 가족 시트콤</span>
                                <span class="keyword">
                                    <span>#애니메이션</span><span>#가족</span><span>#코미디</span><span>#시트콤</span><span>#일상</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img3.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>모던 패밀리</strong>
                                <span>현대 미국 가족들의 여러 가지 일상을 보여주는 드라마</span>
                                <span class="keyword">
                                    <span>#미국드라마</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img4.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>드롭아웃</strong>
                                <span>실리콘밸리 역사상 가장 큰 스캔들로 꼽히는 기업 ‘테라노스’ CEO ‘엘리자베스 홈즈’의 실화를 바탕으로 한 드라마</span>
                                <span class="keyword">
                                    <span>#웹드라마</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img5.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>나일 강의 죽음</strong>
                                <span>행복한 신혼부부를 태운 나일 강의 초호화 여객선 그곳에서 끔찍한 살인 사건이 벌어진다.</span>
                                <span class="keyword">
                                    <span>#영화</span><span>#범죄</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img6.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>그리드</strong>
                                <span>태양풍으로부터 인류를 구원한 방어막 '그리드'를 탄생시킨 채 사라진 미지의 존재 '유령'</span>
                                <span class="keyword">
                                    <span>#웹드라마</span><span>#스릴러</span>
                                </span>
                            </div>
                        </li>                                                                        
                    </ul>
                </section>
            </article>
            
            <article id="comment" class="flow-article content-sub">
                <h3>피드백</h3>
                <p>불편한 점을 댓글로 남겨주세요</p>
                <section class="section-comment">
                    <h4 class="ir_so">댓글 콘텐츠</h4>
                    <div class="comment-form">
                        <form name="comment" method="post" action="commentSave.php">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input-text" placeholder="이름" autocomplete="off" required>
                                    </div>
                                    <div class="text">
                                        <label for="youText" class="ir_so">한마디</label>
                                        <input type="text" name="youText" id="youText" class="input-text" placeholder="피드백을 적어주세요" autocomplete="off" required>
                                    </div>
                                    <button class="login-btn" type="submit" value="한마디 하기">go</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <!-- <div>
                            <p>재미져요 ㅠㅠㅠㅠ!!!!!!!!!</p>
                            <div class="icon">
                                <img src="../assets/img/stu01.png" alt="이정아">
                                <span>#이정아</span>
                                <span>2021.09.09</span>
                            </div>
                        </div> -->
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment2 LIMIT 10"; 

                            $result = $connect -> query($sql);

                            //echo "<pre>";
                            //var_dump(mysqli_fetch_array($result)); 
                            //echo "</pre>" 

                            while($info = mysqli_fetch_array($result)){   ?>
                                <div>
                                    <p><?=$info['youText']?></p>
                                    <div class="icon">
                                        <img src="../assets/img/stu01.png" alt="이정아">
                                        <span><?=$info['youName']?></span>
                                        <span><?=date('Y-m-d H:i',  $info['regTime'])?></span>
                                    </div>                
                                </div>                
                          <?php 
                           } 
                       ?>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"; ?>
    <!-- //footer -->
</body>
</html>    
</body>
</html>