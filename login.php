<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGV | 로그인</title>
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
  <main id="login">
    <section class="login-con">
      <div class="inner">
        <h2 class="main-title">로그인</h2>
        <form action="./assets/php/login_insert.php" name="login_form" method="post">
          <div class="input-box">
            <label for="mb-id">아이디</label>
            <input type="text" name="mb_id" id="mb-id" placeholder="아이디" maxlength="20" required>
          </div>
          <div class="input-box">
            <label for="mb-pw">비밀번호</label>
            <input type="password" name="mb_pw" id="mb-pw" placeholder="비밀번호" maxlength="20" required>
          </div>
          <ul class="ck-box">
            <li>
              <input type="checkbox" name="mb_id_save" id="mb-id-save" required>
              <label for="mb-id-save">아이디 저장</label>
            </li>
          </ul>
          <div class="input-box">
            <input type="submit" value="로그인" class="btn2 btn-login">
          </div>
          <div class="join-box">
            <a href="./join.php" title="회원가입">회원가입</a>
            <a href="javascript:alert('준비중인 페이지입니다.')" title=" 아이디·비밀번호찾기"> 아이디·비밀번호찾기</a>
          </div>
        </form>
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