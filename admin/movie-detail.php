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

      <main id="movie-detail">
        <section class="md-con">
          <div class="title-box">
            <h2 class="main-title">영화 등록</h2>
            <a href="./movie-detail.php" class="btn2 btn-new">신규 등록</a>
          </div>
          <form action="../assets/php/aaa.php" name="movie-detail" method="post">
            <div>
              <label for="m_img" class="tit">영화 포스터</label>
              <input type="file" name="m_img" id="m_img" required>
            </div>

            <div>
              <label for="m_name" class="tit">영화 제목</label>
              <input type="text" name="m_name" id="m_name" required>
            </div>

            <div>
              <label for="m_story" class="tit">줄거리</label>
              <textarea name="m_story" id="m_story" rows="10" required></textarea>
            </div>

            <div>
              <label for="m_open-date" class="tit">개봉일</label>
              <input type="date" name="m_open_date" id="m_open-date" required>
            </div>

            <div>
              <label for="m_rank" class="tit">상영등급</label>
              <select name="m_rank" id="m_rank" required>
                <option value="">등급을 선택하세요</option>
                <option value="all">전체관람가</option>
                <option value="12">12세관람가</option>
                <option value="15">15세관람가</option>
              </select>
            </div>

            <div>
              <strong class="tit">상영극장</strong>
              <ul>
                <li>
                  <input type="checkbox" name="m_t01" id="m_t01">
                  <label for="m_t01">강남점</label>
                </li>
                <li>
                  <input type="checkbox" name="m_t02" id="m_t02">
                  <label for="m_t02">용산아이파크몰</label>
                </li>
                <li>
                  <input type="checkbox" name="m_t03" id="m_t03">
                  <label for="m_t03">명동점</label>
                </li>
              </ul>
            </div>

            <div>
              <strong class="tit">상영날짜</strong>
              <ul>
                <li>
                  <input type="checkbox" name="m_d01" id="m_d01">
                  <label for="m_d01">12/10</label>
                </li>
                <li>
                  <input type="checkbox" name="m_d02" id="m_d02">
                  <label for="m_d02">12/11</label>
                </li>
                <li>
                  <input type="checkbox" name="m_d03" id="m_d03">
                  <label for="m_d03">12/12</label>
                </li>
              </ul>
            </div>

            <div>
              <strong class="tit">상영시간</strong>
              <ul>
                <li>
                  <input type="checkbox" name="m_h01" id="m_h01">
                  <label for="m_h01">10:25~12:20</label>
                </li>
                <li>
                  <input type="checkbox" name="m_h02" id="m_h02">
                  <label for="m_h02">13:25~15:20</label>
                </li>
                <li>
                  <input type="checkbox" name="m_h03" id="m_h03">
                  <label for="m_h03">16:25~18:20</label>
                </li>
              </ul>
            </div>

            <div>
              <input type="submit" value="등록 완료" class="btn btn-submit">
            </div>
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