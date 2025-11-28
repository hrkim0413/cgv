<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGV | 관리자 | 영화 리스트</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/css/font.css">
  <link rel="stylesheet" href="../assets/css/common.css">
  <link rel="stylesheet" href="../assets/css/sub.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <!-- 폰트어썸 css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
</head>

<body>
  <!-- header -->
  <?php include("../assets/inc/admin-header.php");?>

  <!-- main -->
  <div class="container">
    <div class="inner">
      <!-- aside -->
      <?php include("../assets/inc/admin-aside.php");?>

      <main id="movie-list">
        <section class="ml-con">
          <div class="title-box">
            <h2 class="main-title">영화</h2>
            <a href="./movie-detail.php" class="btn2 btn-new">신규 등록</a>
          </div>
          <form action="../assets/php/aaa.php" name="movie-list" method="post">
            <div class="top">
              <span>1/10</span>
              <p>
                <label for="sc"><span class="blind">영화 검색</span></label>
                <input type="search" name="sc" id="sc" placeholder="영화를 검색하세요.">
              </p>
            </div>
            <ul class="bottom">
              <li>
                <a href="#" title="상세보기">
                  <div class="img-box">
                    <img src="../assets/images/sub/ml-movie01.png" alt="안나 카레니나">
                  </div>
                  <div class="txt-box">
                    <h3>안나 카레니나</h3>
                    <p>아름다운 외모와 교양을 갖춘 사교계의 꽃 안나 카레니나(키이라 나이틀리).</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="상세보기">
                  <div class="img-box">
                    <img src="../assets/images/sub/ml-movie01.png" alt="안나 카레니나">
                  </div>
                  <div class="txt-box">
                    <h3>안나 카레니나</h3>
                    <p>아름다운 외모와 교양을 갖춘 사교계의 꽃 안나 카레니나(키이라 나이틀리).</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="상세보기">
                  <div class="img-box">
                    <img src="../assets/images/sub/ml-movie01.png" alt="안나 카레니나">
                  </div>
                  <div class="txt-box">
                    <h3>안나 카레니나</h3>
                    <p>아름다운 외모와 교양을 갖춘 사교계의 꽃 안나 카레니나(키이라 나이틀리).</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="상세보기">
                  <div class="img-box">
                    <img src="../assets/images/sub/ml-movie01.png" alt="안나 카레니나">
                  </div>
                  <div class="txt-box">
                    <h3>안나 카레니나</h3>
                    <p>아름다운 외모와 교양을 갖춘 사교계의 꽃 안나 카레니나(키이라 나이틀리).</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="상세보기">
                  <div class="img-box">
                    <img src="../assets/images/sub/ml-movie01.png" alt="안나 카레니나">
                  </div>
                  <div class="txt-box">
                    <h3>안나 카레니나</h3>
                    <p>아름다운 외모와 교양을 갖춘 사교계의 꽃 안나 카레니나(키이라 나이틀리).</p>
                  </div>
                </a>
              </li>
            </ul>
          </form>
        </section>
      </main>
    </div>
  </div>

  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <!-- 제이쿼리 js -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/common.js"></script>
  <script src="../assets/js/admin.js"></script>
</body>

</html>