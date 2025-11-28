<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGV | 장바구니</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/reset.css">
  <link rel="stylesheet" href="./assets/css/font.css">
  <link rel="stylesheet" href="./assets/css/common.css">
  <link rel="stylesheet" href="./assets/css/sub.css">
  <!-- 폰트어썸 css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
</head>

<body>
  <!-- header -->
  <?php include("./assets/inc/header.php");?>

  <!-- main -->
  <main id="cart">
    <section class="cart-con">
      <div class="inner">
        <h2 class="main-title">장바구니</h2>
        <div class="con">
          <ul class="movies">
            <li>
              <div class="img-box">
                <img src="./assets/images/sub/cart-movie01.jpg" alt="주토피아">
              </div>
              <div class="txt-box">
                <strong class="m-tit">주토피아</strong>
                <dl>
                  <dt>극장</dt>
                  <dd>CGV강남</dd>
                  <dt>상영관</dt>
                  <dd>4DX 1관</dd>
                  <dt>날짜</dt>
                  <dd>2025.12.12 금</dd>
                  <dt>상영시간</dt>
                  <dd>오전 10:25</dd>
                  <dt>인원</dt>
                  <dd>일반 2인</dd>
                </dl>
                <span class="m-price">30,000₩</span>
              </div>
            </li>
          </ul>
          <div class="amount">
            <div class="price">
              <h3 class="a-tit">금액</h3>
              <dl>
                <dt>영화금액</dt>
                <dd>30,000₩</dd>
                <dt>할인금액</dt>
                <dd>-4,000₩</dd>
                <dt>총합계</dt>
                <dd>26,000₩</dd>
              </dl>
            </div>
            <a href="#" class="btn2 btn-payment">결제하기</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- footer -->
  <?php include("./assets/inc/footer.php");?>

  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <!-- 제이쿼리 js -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="./assets/js/common.js"></script>
  <script src="./assets/js/sub.js"></script>
</body>

</html>