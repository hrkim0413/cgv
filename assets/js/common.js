document.addEventListener('DOMContentLoaded', function () {
  commonInit();

  // 화면 가로 길이가 바뀔 때마다 실행
  window.addEventListener('resize', function () {
    headerFn();
  });
})

function commonInit() {
  headerFn();
}

function isMobile() {
  return window.innerWidth <= 768;
}

function headerFn() {
  isMobile();

  const header = document.querySelector('header');
  const nav = document.querySelector('nav');
  const body = document.querySelector('body')
  const menuBtn = document.querySelector('header .mo-menu-btn');
  const closeBtn = document.querySelector('nav .btn-close');
  const gnbLi = document.querySelectorAll('.gnb > li');

  if (isMobile()) {
    // mo
    menuBtn.addEventListener('click', function () {
      nav.classList.add('act');
      body.style.overflow = 'hidden';
    })
    closeBtn.addEventListener('click', function () {
      nav.classList.remove('act');
      body.style.overflow = 'auto';
    })

    gnbLi.forEach((item) => {
      item.addEventListener('click', function (e) {
        e.preventDefault();

        gnbLi.forEach((it) => {
          it.classList.remove('act');
        })

        this.classList.add('act');
      })
    })
  } else {
    // pc
    header.addEventListener('mouseenter', function () {
      header.classList.add('act');
    })
    header.addEventListener('mouseleave', function () {
      header.classList.remove('act');
    })
  }
}
