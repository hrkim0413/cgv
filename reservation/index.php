<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGV | 영화 예매</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/css/font.css">
  <link rel="stylesheet" href="../assets/css/common.css">
  <link rel="stylesheet" href="../assets/css/sub.css">
  <!-- 폰트어썸 css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
</head>

<body>
  <!-- header -->
  <?php include("../assets/inc/header.php");?>

  <!-- main -->
  <main id="reservation">
    <section class="rv-con">
      <div class="inner">
        <h2 class="main-title">영화 예매</h2>
        <form action="../cart.php" name="reservation" method="post">
          <div class="rv-area">
            <ul class="movie-box">
              <li>
                <input type="radio" name="rd1" id="m01">
                <label for="m01">
                  <img src="../assets/images/sub/rv-movie01.png" alt="주토피아">
                  <p>주토피아</p>
                </label>
              </li>

              <li>
                <input type="radio" name="rd1" id="m02">
                <label for="m02">
                  <img src="../assets/images/sub/rv-movie01.png" alt="위키드 포굿">
                  <p>위키드 포굿</p>
                </label>
              </li>

              <li>
                <input type="radio" name="rd1" id="m03">
                <label for="m03">
                  <img src="../assets/images/sub/rv-movie01.png" alt="나우 유 씨 미3">
                  <p>나우 유 씨 미3</p>
                </label>
              </li>

              <li>
                <input type="radio" name="rd1" id="m04">
                <label for="m04">
                  <img src="../assets/images/sub/rv-movie01.png" alt="정보원">
                  <p>정보원</p>
                </label>
              </li>

              <li>
                <input type="radio" name="rd1" id="m05">
                <label for="m05">
                  <img src="../assets/images/sub/rv-movie01.png" alt="국보">
                  <p>국보</p>
                </label>
              </li>
            </ul>

            <div class="date-box">
              <strong class="rv-title">날짜</strong>
              <ul class="date">
                <li>
                  <input type="radio" name="rd2" id="d01">
                  <label for="d01">
                    <span>수</span>
                    12/10
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d02">
                  <label for="d02">
                    <span>목</span>
                    12/11
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d03">
                  <label for="d03">
                    <span>금</span>
                    12/12
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d04">
                  <label for="d04">
                    <span class="blue">토</span>
                    12/13
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d05">
                  <label for="d05">
                    <span class="red">일</span>
                    12/14
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d06">
                  <label for="d06">
                    <span>월</span>
                    12/15
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d07">
                  <label for="d07">
                    <span>화</span>
                    12/16
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d08">
                  <label for="d08">
                    <span>수</span>
                    12/17
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd2" id="d09">
                  <label for="d09">
                    <span>목</span>
                    12/18
                  </label>
                </li>
              </ul>
            </div>

            <div class="theater-box">
              <strong class="rv-title">극장</strong>
              <ul class="theater">
                <li>
                  <input type="radio" name="rd3" id="t01">
                  <label for="t01">강남점</label>
                </li>
                <li>
                  <input type="radio" name="rd3" id="t02">
                  <label for="t02">용산아이파크몰</label>
                </li>
                <li>
                  <input type="radio" name="rd3" id="t03">
                  <label for="t03">명동점</label>
                </li>
              </ul>
            </div>

            <div class="hall-box">
              <strong class="rv-title2">4DX관</strong>
              <ul class="hall">
                <li>
                  <input type="radio" name="rd4" id="h01">
                  <label for="h01">
                    10:25~12:20
                    <span>84/122석</span>
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd4" id="h02">
                  <label for="h02">
                    13:25~15:20
                    <span>92/122석</span>
                  </label>
                </li>
                <li>
                  <input type="radio" name="rd4" id="h03">
                  <label for="h03">
                    16:25~18:20
                    <span>75/122석</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="info-area">
            <strong class="rv-title">예매정보</strong>
            <div class="info-box">
              <div class="img">
                <img src="../assets/images/sub/rv-movie01.png" alt="주토피아">
              </div>
              <div class="txt">
                <span>주토피아</span>
                <dl>
                  <dt>극장</dt>
                  <dd>CGV강남</dd>
                  <dt>상영관</dt>
                  <dd>4DX 1관</dd>
                  <dt>날짜</dt>
                  <dd>2025.12.12 금</dd>
                  <dt>상영시간</dt>
                  <dd>오전 10:25</dd>
                  <dt>상영등급</dt>
                  <dd>전체관람가</dd>
                </dl>
              </div>
              <input type="submit" value="예매하기" class="btn2">
            </div>
          </div>
        </form>
      </div>
    </section>
  </main>

  <!-- footer -->
  <?php include("../assets/inc/footer.php");?>

  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <!-- 제이쿼리 js -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/common.js"></script>
  <script src="../assets/js/sub.js"></script>
</body>

</html>