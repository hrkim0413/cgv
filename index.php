<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGV</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/reset.css">
  <link rel="stylesheet" href="./assets/css/font.css">
  <link rel="stylesheet" href="./assets/css/common.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <!-- 폰트어썸 css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
  <style>

  </style>
</head>

<body>
  <!-- header -->
  <?php include('./assets/inc/header.php');?>

  <!-- main -->
  <main id="main">
    <!-- 영화 예매 -->
    <section class="main-reservation" id="main-reservation">
      <div class="inner">
        <div class="slider-section">
          <div class="section-header">
            <div class="tab-buttons">
              <button class="tab-btn active" id="currentBtn">현재 상영작</button>
              <button class="tab-btn" id="upcomingBtn">개봉 예정작</button>
            </div>
          </div>

          <div class="slider-container">
            <div class="slider-wrapper" id="sliderWrapper">
            </div>
          </div>

          <div class="slider-dots">
            <div class="control-buttons">
              <button class="control-btn" id="bottomPrevBtn">❮</button>
              <button class="control-btn" id="pauseBtn">⏸</button> <!-- JS에서 1/8 등으로 변경 -->
              <button class="control-btn" id="bottomNextBtn">❯</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 극장 -->
    <section class="main-theater" id="main-theater">
      <div class="inner">
        <h2 class="main-title">DEEP DIVE SPACE</h2>
        <div class="box">
          <img src="./assets/images/main/ticket01.png" alt="티켓이미지" class="ticket1">
          <div class="swiper theater-txt">
            <div class="swiper-wrapper">
              <div class="swiper-slide">SCREENX</div>
              <div class="swiper-slide">4DX</div>
              <div class="swiper-slide">ULTRA 4DX</div>
              <div class="swiper-slide">IMAX</div>
              <div class="swiper-slide">DOLBY ATMOS</div>
              <div class="swiper-slide">SOUNDX</div>
              <div class="swiper-slide">SUITE CINEMA</div>
              <div class="swiper-slide">CINE de CHEF</div>
              <div class="swiper-slide">TEMPUR CINEMA</div>
              <div class="swiper-slide">GOLD CLASS</div>
              <div class="swiper-slide">THE PRIVATE CINEMA </div>
              <div class="swiper-slide">PREMIUM</div>
              <div class="swiper-slide">CINE & LIVING ROOM</div>
            </div>
          </div>
          <img src="./assets/images/main/ticket02.png" alt="티켓이미지2" class="ticket2">
          <div class="swiper theater-images">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_1.jpg" alt="SCREENX"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_2.jpg" alt="4DX"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_3.jpg" alt="ULTRA 4DX"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_4.jpg" alt="IMAX"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_5.jpg" alt="DOLBY ATMOS"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_6.jpg" alt="SOUNDX"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_7.jpg" alt="SUITE CINEMA"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_8.jpg" alt="CINE de CHEF"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_9.jpg" alt="TEMPUR CINEMA"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_10.jpg" alt="GOLD CLASS"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_11.jpg" alt="THE PRIVATE CINEMA ">
              </div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_12.jpg" alt="PREMIUM"></div>
              <div class="swiper-slide"><img src="./assets/images/main/theaterImage_13.jpg" alt="CINE & LIVING ROOM">
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
          <img src="./assets/images/main/ticket01.png" alt="티켓이미지" class="ticket3">
        </div>
      </div>
      </div>
    </section>

    <!-- 영화 소개 -->
    <section class="main-introduce" id="main-introduce">
      <video autoplay muted loop>
        <source src="./assets/videos/main-introduce_comedy-domestic-all.mp4" type="video/mp4">
      </video>
      <div class="inner">
        <div class="box">
          <h2 class="main-title">오늘 뭐 볼까?</h2>
          <p class="main-desc">어떤 영화를 볼지 고민된다면 <br class="mo-show">하나하나 체크해보세요.</p>
          <ul class="list">
            <li>
              <h3>장르</h3>
              <p>
                <input type="radio" name="genre" id="genre1" value="comedy" checked>
                <label for="genre1">코미디</label>
                <input type="radio" name="genre" id="genre2" value="thriller">
                <label for="genre2">스릴러</label>
                <input type="radio" name="genre" id="genre3" value="fantasy">
                <label for="genre3">판타지</label>
              </p>
            </li>
            <li>
              <h3>국가</h3>
              <p>
                <input type="radio" name="country" id="country1" value="domestic" checked>
                <label for="country1">국내</label>
                <input type="radio" name="country" id="country2" value="foreign">
                <label for="country2">외국</label>
                <input type="radio" name="country" id="country3" value="japan">
                <label for="country3">일본</label>
              </p>
            </li>
            <li>
              <h3>연령</h3>
              <p>
                <input type="radio" name="age" id="age1" value="all" checked>
                <label for="age1">ALL</label>
                <input type="radio" name="age" id="age2" value="12">
                <label for="age2">12세</label>
                <input type="radio" name="age" id="age3" value="15">
                <label for="age3">15세</label>
              </p>
            </li>
          </ul>
          <button class="btn btn-round10">선택 완료</button>
        </div>
      </div>
    </section>

    <!-- 이벤트/혜택 -->
    <section class="main-event" id="main-event">
      <div class="inner">
        <h2 class="main-title">이벤트/혜택</h2>
        <div class="swiper event-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="javascript:alert('준비중인 페이지입니다.')" title="iM뱅크가 쏜다! 이벤트 페이지로 바로가기">
                <div class="img-box">
                  <img src="./assets/images/main/event-img01.jpg" alt="iM뱅크 앱 로그인만 해도? iM뱅크가 쏜다!">
                </div>
                <div class="txt-box">
                  <h3>iM뱅크 앱 로그인만 해도? iM뱅크가 쏜다!</h3>
                  <p>2025.11.24</p>
                </div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="javascript:alert('준비중인 페이지입니다.')" title="N pay로 CGV 영화 예매하자! 이벤트 페이지로 바로가기">
                <div class="img-box">
                  <img src="./assets/images/main/event-img02.jpg" alt="N pay로 CGV 영화 예매하자!">
                </div>
                <div class="txt-box">
                  <h3>N pay로 CGV 영화 예매하자!</h3>
                  <p>2025.11.24</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 액티비티 -->
    <section class="main-activity" id="main-activity">
      <div class="inner">
        <h2 class="main-title">액티비티</h2>
        <div class="big-box">
          <div class="img-box">
            <img src="./assets/images/main/activity-b01.png" alt="클라이밍">
          </div>
          <div class="btns">
            <a href="javascript:alert('준비중인 페이지입니다.');" title="더보기" class="btn btn-more">더보기</a>
            <a href="./reservation/index.php" title="예매하기" class="btn btn-reservation">예매하기</a>
          </div>
        </div>
        <div class="small-box">
          <div class="txt-box">
            <strong></strong>
            <h3></h3>
            <p></p>
          </div>
          <ul class="img-list">
            <li>
              <img src="./assets/images/main/activity-s01.png" alt="클라이밍">
              <p>클라이밍</p>
            </li>
            <li>
              <img src="./assets/images/main/activity-s02.png" alt="볼링펍">
              <p>볼링펍</p>
            </li>
            <li>
              <img src="./assets/images/main/activity-s03.png" alt="두뇌게임">
              <p>두뇌게임</p>
            </li>
            <li>
              <img src="./assets/images/main/activity-s04.png" alt="만화천국">
              <p>만화천국</p>
              <!-- 테스트 -->
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>

  <!-- footer -->
  <?php include('./assets/inc/footer.php');?>

  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <!-- 제이쿼리 js -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="./assets/js/common.js"></script>
  <script src="./assets/js/main.js"></script>
</body>

</html>