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
  <link rel="stylesheet" href="./assets/css/sub.css">
  <!-- 폰트어썸 css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
</head>

<body>
  <!-- header -->
  <?php include('./assets/inc/header.php');?>

  <!-- main -->
  <main id="join">
    <section class="join-con">
      <div class="inner">
        <h2 class="main-title">회원가입</h2>
        <form action="./assets/php/join_insert.php" name="join_form" method="post">
          <div class="input-box input-box-id">
            <label for="mb-id">아이디</label>
            <input type="text" name="mb_id" id="mb-id" placeholder="아이디" maxlength="20" required>
            <button class="btn2 btn-id">중복 확인</button>
          </div>
          <div class="input-box">
            <label for="mb-pw">비밀번호</label>
            <input type="password" name="mb_pw" id="mb-pw" placeholder="비밀번호" maxlength="20" required>
          </div>
          <div class="input-box">
            <label for="mb-pw2">비밀번호 확인</label>
            <input type="password" name="mb_pw" id="mb-pw" placeholder="비밀번호 확인" maxlength="20" required>
          </div>
          <div class="input-box">
            <label for="mb-name">이름</label>
            <input type="text" name="mb_name" id="mb-name" placeholder="홍길동" maxlength="20" required>
          </div>
          <div class="input-box">
            <label for="mb-birth">생년월일</label>
            <input type="text" name="mb_birth" id="mb-birth" placeholder="20000101" maxlength="8" required>
          </div>
          <div class="input-box">
            <label for="mb-phone">전화번호</label>
            <input type="text" name="mb_phone" id="mb-phone" placeholder="01012345678" maxlength="11" required>
          </div>
          <ul class="ck-box">
            <li>
              <input type="checkbox" name="mb_ck1" id="mb-ck1" required>
              <label for="mb-ck1">서비스 이용약관 <span class="red">(필수)</span></label>
            </li>
            <li>
              <input type="checkbox" name="mb_ck2" id="mb-ck2" required>
              <label for="mb-ck2">개인정보 수집 및 이용 동의 <span class="red">(필수)</span></label>
            </li>
            <li>
              <input type="checkbox" name="mb_ck3" id="mb-ck3" required>
              <label for="mb-ck3">개인정보의 제 3자 제공 <span class="red">(필수)</span></label>
            </li>
            <li>
              <input type="checkbox" name="mb_ck4" id="mb-ck4" required>
              <label for="mb-ck4">이벤트 및 정보수신 선택 <span class="gray">(선택)</span></label>
            </li>
          </ul>
          <input type="submit" value="회원가입" class="btn2 btn-join">
        </form>
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
  <script src="./assets/js/sub.js"></script>
</body>

</html>