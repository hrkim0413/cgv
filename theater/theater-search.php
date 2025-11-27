<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGV | 극장 | 전체극장</title>
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
  <main id="theater-search">
    <section class="ts-con">
      <div class="bg">
        <img src="../assets/images/sub/ts-map01.jpg" alt="">
      </div>
      <form action="../assets/php/theater-search-select.php" class="search-wrap">
        <div class="title-box">
          <h2 class="main-title">전체극장</h2>
          <p>
            <label for="ts-sel"><span class="blind">지역 선택</span></label>
            <select name="ts-sel" id="ts-sel" required>
              <option value="">지역을 선택하세요.</option>
              <option value="ts_op01">서울</option>
              <option value="ts_op02">경기</option>
              <option value="ts_op03">인천</option>
              <option value="ts_op04">강원</option>
              <option value="ts_op05">대전/충청</option>
              <option value="ts_op06">대구</option>
              <option value="ts_op07">부산/울산</option>
              <option value="ts_op08">경상</option>
              <option value="ts_op09">광주/전라/제주</option>
            </select>
          </p>
          <p>
            <label for="ts-sc"><span class="blind">지점명</span></label>
            <input type="search" name="ts-sc" id="ts-sc" placeholder="지점명을 입력하세요. ex) 강남" required>
            <input type="submit" value="검색" class="btn">
          </p>
        </div>
        <div class="list-box">
          <h3 class="list-title">극장찾기</h3>
          <ul class="list">
            <li>
              <h4>CGV 강남점</h4>
              <p>서울특별시 강남구 강남대로 438 스타플렉스 4,11층 (역삼동)</p>
              <ul class="item">
                <li>
                  <a href="tel:02-000-0000">
                    <img src="../assets/images/sub/ts-icon01.png" alt="전화">
                    전화
                  </a>
                </li>
                <li>
                  <a href="https://maps.app.goo.gl/wxMD5K7wzQQh2J8f8" target="_blank">
                    <img src="../assets/images/sub/ts-icon02.png" alt="길찾기">
                    길찾기
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <h4>CGV 강남점</h4>
              <p>서울특별시 강남구 강남대로 438 스타플렉스 4,11층 (역삼동)</p>
              <ul class="item">
                <li>
                  <a href="tel:02-000-0000">
                    <img src="../assets/images/sub/ts-icon01.png" alt="전화">
                    전화
                  </a>
                </li>
                <li>
                  <a href="https://maps.app.goo.gl/wxMD5K7wzQQh2J8f8" target="_blank">
                    <img src="../assets/images/sub/ts-icon02.png" alt="길찾기">
                    길찾기
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <h4>CGV 강남점</h4>
              <p>서울특별시 강남구 강남대로 438 스타플렉스 4,11층 (역삼동)</p>
              <ul class="item">
                <li>
                  <a href="tel:02-000-0000">
                    <img src="../assets/images/sub/ts-icon01.png" alt="전화">
                    전화
                  </a>
                </li>
                <li>
                  <a href="https://maps.app.goo.gl/wxMD5K7wzQQh2J8f8" target="_blank">
                    <img src="../assets/images/sub/ts-icon02.png" alt="길찾기">
                    길찾기
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <h4>CGV 강남점</h4>
              <p>서울특별시 강남구 강남대로 438 스타플렉스 4,11층 (역삼동)</p>
              <ul class="item">
                <li>
                  <a href="tel:02-000-0000">
                    <img src="../assets/images/sub/ts-icon01.png" alt="전화">
                    전화
                  </a>
                </li>
                <li>
                  <a href="https://maps.app.goo.gl/wxMD5K7wzQQh2J8f8" target="_blank">
                    <img src="../assets/images/sub/ts-icon02.png" alt="길찾기">
                    길찾기
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </form>
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