document.addEventListener('DOMContentLoaded', function () {
  mainInit();
})

function mainInit() {
  introduceFn();
  eventFn();
  activityFn();
  theaterImgFn();
  reservationFn();
}

function introduceFn() {
  const btn = document.querySelector('.main-introduce .btn');
  const video = document.querySelector('.main-introduce video');
  const source = document.querySelector('.main-introduce source');

  // 기본값
  source.src = './assets/videos/main-introduce_comedy-domestic-all.mp4';
  video.load();

  // 버튼 클릭시 비디오 변경
  btn.addEventListener('click', function () {
    const radioCheck = document.querySelectorAll("input[type='radio']:checked");
    let radioArray = [];

    for (let i = 0; i < radioCheck.length; i++) {
      radioArray.push(radioCheck[i].value);
    }

    switch (radioArray.join(",")) {
      case "comedy,domestic,all":
        source.src = './assets/videos/main-introduce_comedy-domestic-all.mp4';
        break;
      case "comedy,domestic,12":
        source.src = './assets/videos/main-introduce_comedy-domestic-12.mp4';
        break;
      case "comedy,domestic,15":
        source.src = './assets/videos/main-introduce_comedy-domestic-15.mp4';
        break;
      case "comedy,foreign,all":
        source.src = './assets/videos/main-introduce_comedy-foreign-all.mp4';
        break;
      case "comedy,foreign,12":
        source.src = './assets/videos/main-introduce_comedy-foreign-12.mp4';
        break;
      case "comedy,foreign,15":
        source.src = './assets/videos/main-introduce_comedy-foreign-15.mp4';
        break;
      case "comedy,japan,all":
        source.src = './assets/videos/main-introduce_comedy-japan-all.mp4';
        break;
      case "comedy,japan,12":
        source.src = './assets/videos/main-introduce_comedy-japan-12.mp4';
        break;
      case "comedy,japan,15":
        source.src = './assets/videos/main-introduce_comedy-japan-15.mp4';
        break;
      case "thriller,domestic,all":
        source.src = './assets/videos/main-introduce_thriller-domestic-all.mp4';
        break;
      case "thriller,domestic,12":
        source.src = './assets/videos/main-introduce_thriller-domestic-12.mp4';
        break;
      case "thriller,domestic,15":
        source.src = './assets/videos/main-introduce_thriller-domestic-15.mp4';
        break;
      case "thriller,foreign,all":
        source.src = './assets/videos/main-introduce_thriller-foreign-all.mp4';
        break;
      case "thriller,foreign,12":
        source.src = './assets/videos/main-introduce_thriller-foreign-12.mp4';
        break;
      case "thriller,foreign,15":
        source.src = './assets/videos/main-introduce_thriller-foreign-15.mp4';
        break;
      case "thriller,japan,all":
        source.src = './assets/videos/main-introduce_thriller-japan-all.mp4';
        break;
      case "thriller,japan,12":
        source.src = './assets/videos/main-introduce_thriller-japan-12.mp4';
        break;
      case "thriller,japan,15":
        source.src = './assets/videos/main-introduce_thriller-japan-15.mp4';
        break;
      case "fantasy,domestic,all":
        source.src = './assets/videos/main-introduce_fantasy-domestic-all.mp4';
        break;
      case "fantasy,domestic,12":
        source.src = './assets/videos/main-introduce_fantasy-domestic-12.mp4';
        break;
      case "fantasy,domestic,15":
        source.src = './assets/videos/main-introduce_fantasy-domestic-15.mp4';
        break;
      case "fantasy,foreign,all":
        source.src = './assets/videos/main-introduce_fantasy-foreign-all.mp4';
        break;
      case "fantasy,foreign,12":
        source.src = './assets/videos/main-introduce_fantasy-foreign-12.mp4';
        break;
      case "fantasy,foreign,15":
        source.src = './assets/videos/main-introduce_fantasy-foreign-15.mp4';
        break;
      case "fantasy,japan,all":
        source.src = './assets/videos/main-introduce_fantasy-japan-all.mp4';
        break;
      case "fantasy,japan,12":
        source.src = './assets/videos/main-introduce_fantasy-japan-12.mp4';
        break;
      case "fantasy,japan,15":
        source.src = './assets/videos/main-introduce_fantasy-japan-15.mp4';
        break;
      default:
        console.log("매칭되는 케이스 없음");
        return;
    }

    video.load();
  });
}

function eventFn() {
  let eventSwiper = new Swiper(".event-swiper", {
    slidesPerView: "auto",
    spaceBetween: 50,
    breakpoints: {
      769: {
        slidesPerView: 2,
        spaceBetween: 60,
      },
    }
  });
}

function activityFn() {
  const itemdata = [
    { bigImg: './assets/images/main/activity-b01.png', imgAlt: '클라이밍', subTitle: 'PEAKERS', title: '층고 높은 피커스에서 클라이밍하기 좋은 날이죠!', desc: 'PEAKERS는 peak (정상) + ers (~하는 사람들)의 합성어로 "정상을 오르는 사람들"을 의미하는 클라이밍짐 브랜드입니다. <br><br>누구에게나 처음은 있죠. 첫 순간의 설레임을 기억한다면 PEAKERS로 나와 자신을 소개해주세요. <br>클라이밍을 통해 만난 사람들과 함께 클라이밍을 배우고 즐기다 보면 목표를 함께하는 크루들이 옆에 있을거예요. <br>지금, 시작하세요!' },
    { bigImg: './assets/images/main/activity-b02.png', imgAlt: '볼링펍', subTitle: 'BOWLING PUB', title: '볼링도하고, 즐거움도 한잔. 남녀노소 즐기는 볼링펍', desc: '젊은 감각의 세련되고 쾌적한 볼링장과 차별화된 펍의 만남. <br><br>스트라이크 시 구현되는 화려한 조명사운드를 사일로랩 특수 조명팀과 구성하였습니다. <br>또한 자녀와 함게 방문하는 가족 고객들을 위해 아동용 볼링화거터에 공이 빠지지 않게 하는 거터범퍼, 아동 및 초보자를 위한 미끄럼틀 모양의 볼 가이드 등 다양한 보조 장비도 준비되어 있습니다.' },
    { bigImg: './assets/images/main/activity-b03.png', imgAlt: '두뇌게임', subTitle: '미션브레이크', title: '짜릿한 두뇌게임, 긴장감 넘치는 모험의 시작', desc: '영화관 X 방탈출 테마체험 공간 MISSION BREAK. 주어진 시간 단 60분, 당신은 탈출할 수 있는가...? <br><br>- 시그널 1989 (추리 | 난이도 4)<br>- 시그널 2018 (추리 | 난이도 3) <br>- 봉인의 탑 : 마법사의 길 (추리 | 난이도 2) <br>- 신서유기 : 신묘한 실종사건 (추리 | 난이도 2) <br>- 신서유기 : 용볼 회수 대작전 (추리 | 난이도 3)<br>' },
    { bigImg: './assets/images/main/activity-b04.png', imgAlt: '만화천국', subTitle: 'LOLOL', title: '보고, 먹고, 뒹굴고 만화천국 롤롤', desc: '다양한 만화, 다양한 좌석, 다양한 먹거리와 함께하는 힐링 휴식공간. <br><br>- 탁트인 대형 유리창으로 개방감 있는 공간 구성에 레트로 빈티지 디자인으로 고급스러움을 더하였습니다. 리버스탭 생맥주, 간편식, 음료를 함께 즐기실 수 있습니다. <br>- 마블, DC코믹스 등 각종 영화 원작과 16,000권의 다양한 장르 및 신간 <br>- 폭신하고 아늑하게 즐기는 토굴 <br>- 평상, 토굴, 테이블석, 빈백 등 편안하고 트렌디한 좌석' }
  ]
  const bigImg = document.querySelector('.main-activity .big-box img');
  const subTitle = document.querySelector('.main-activity .small-box strong');
  const title = document.querySelector('.main-activity .small-box h3');
  const desc = document.querySelector('.main-activity .small-box p');
  const items = document.querySelectorAll('.main-activity .img-list li');

  // 초기값
  items[0].classList.add('act');
  bigImg.src = itemdata[0].bigImg;
  bigImg.alt = itemdata[0].imgAlt;
  subTitle.innerHTML = itemdata[0].subTitle;
  title.innerHTML = itemdata[0].title;
  desc.innerHTML = itemdata[0].desc;

  // 마우스오버시 값 변경
  items.forEach((item, idx) => {
    item.addEventListener('mouseenter', function () {
      items.forEach((it) => {
        it.classList.remove('act');
      })
      this.classList.add('act');
      bigImg.src = itemdata[idx].bigImg;
      bigImg.alt = itemdata[idx].imgAlt;
      subTitle.innerHTML = itemdata[idx].subTitle;
      title.innerHTML = itemdata[idx].title;
      desc.innerHTML = itemdata[idx].desc;
    })
  })
}

function theaterImgFn() {
  let txtSwiper = new Swiper(".theater-txt", {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    slidesPerView: 13,
    direction: "vertical",
  });

  let imgSwiper = new Swiper(".theater-images", {

    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".theater-images .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".theater-images .swiper-button-next",
      prevEl: ".theater-images .swiper-button-prev",
    },
    thumbs: {
      swiper: txtSwiper,
    },
  });
}

//main1
function reservationFn() {
  // 설정
  const cfg = { time: 2300, w: 360, gap: 20, res: './reservation.html', info: './movieInfo.html' };

  // 데이터
  const data = {
    current: [
      { title: '안나 카레니나', meta: '2025 · 드라마', rating: '★ 8.17', img: './assets/images/main/s1.png', btn: '예매하기' },
      { title: '오만과 편견', meta: '2025 · 드라마', rating: '★ 8.97', img: './assets/images/main/s2.png', btn: '예매하기' },
      { title: '피아니스트의 전설', meta: '2025 · 드라마', rating: '★ 9.06', img: './assets/images/main/s3.png', btn: '예매하기' },
      { title: '듄: 파트2', meta: '2025 · 액션', rating: '★ 8.96', img: './assets/images/main/s4.png', btn: '예매하기' },
      { title: '찰리와 초콜릿 공장', meta: '2025 · 코미디', rating: '★ 8.69', img: './assets/images/main/s5.png', btn: '예매하기' },
      { title: '그랜드 부다페스트 호텔', meta: '2025 · 미스터리', rating: '★ 8.71', img: './assets/images/main/s6.png', btn: '예매하기' },
      { title: '프렌치 디스패치', meta: '2025 · 코미디', rating: '★ 7.89', img: './assets/images/main/s7.png', btn: '예매하기' },
      { title: '인터스텔라', meta: '2025 · SF', rating: '★ 9.13', img: './assets/images/main/s8.png', btn: '예매하기' }
    ],
    upcoming: [
      { title: '어톤먼트', meta: '2025.11 · 드라마', rating: '개봉예정', img: './assets/images/main/s9.png', btn: '알림신청' },
      { title: '작은 아씨들', meta: '2025.11 · 드라마', rating: '개봉예정', img: './assets/images/main/s10.png', btn: '알림신청' },
      { title: '쉰들러 리스트', meta: '2025.12 · 드라마', rating: '개봉예정', img: './assets/images/main/s11.png', btn: '알림신청' },
      { title: '우주 전쟁', meta: '2025.12 · SF', rating: '개봉예정', img: './assets/images/main/s12.png', btn: '알림신청' },
      { title: '진주만', meta: '2025.12 · 전쟁', rating: '개봉예정', img: './assets/images/main/s13.png', btn: '알림신청' },
      { title: '프레스티지', meta: '2025.12 · 스릴러', rating: '개봉예정', img: './assets/images/main/s14.png', btn: '알림신청' },
      { title: '다크 나이트', meta: '2025.12 · 액션', rating: '개봉예정', img: './assets/images/main/s15.png', btn: '알림신청' },
      { title: '레옹', meta: '2025.12 · 범죄', rating: '개봉예정', img: './assets/images/main/s16.png', btn: '알림신청' }
    ]
  };

  // DOM
  const w = document.getElementById('sliderWrapper');
  const cb = document.getElementById('currentBtn');
  const ub = document.getElementById('upcomingBtn');
  const pb = document.getElementById('bottomPrevBtn');
  const nb = document.getElementById('bottomNextBtn');
  const ab = document.getElementById('pauseBtn');
  const c = document.querySelector('.slider-container');

  // 상태
  let t = 'current', p = 0, i = 1, s = false, tm, st = cfg.w + cfg.gap;

  // HTML 생성
  const h = m => `<div class="movie-card"><img src="${m.img}" alt="${m.title}"><div class="movie-info"><div class="movie-title">${m.title}</div><div class="movie-meta">${m.meta}</div><div class="movie-rating">${m.rating}</div><div class="movie-actions"><button class="info-btn" data-title="${m.title}">ⓘ 영화정보</button><button class="book-btn" data-title="${m.title}">${m.btn} <span class="arrow-icon">→</span></button></div></div></div>`;

  // 렌더
  const r = () => {
    const d = data[t];
    w.innerHTML = [...d, ...d, ...d].map(h).join('');
    p = d.length * st;
    i = 1;
    w.style.transition = 'none';
    w.style.transform = `translateX(-${p}px)`;
    setTimeout(() => w.style.transition = 'transform 0.5s ease-in-out', 50);
    u();
  };

  // 버튼 업데이트
  const u = () => ab.innerHTML = innerWidth <= 767 ? `${i} / ${data[t].length}` : (s ? '▶' : '⏸');

  // 이동
  const m = d => {
    const dt = data[t];
    p += st * d;
    w.style.transform = `translateX(-${p}px)`;

    // index 업데이트
    i += d;
    if (i > dt.length) i = 1;
    if (i < 1) i = dt.length;
    u();

    setTimeout(() => {
      if (p >= dt.length * 2 * st || p <= 0) {
        w.style.transition = 'none';
        p = dt.length * st;
        w.style.transform = `translateX(-${p}px)`;
        // 위치 리셋 시 index는 유지 (이미 순환 처리됨)
        setTimeout(() => w.style.transition = 'transform 0.5s ease-in-out', 50);
      }
    }, 500);
  };

  // 자동
  const go = () => tm = setInterval(() => m(1), cfg.time);
  const x = () => clearInterval(tm);
  const re = () => { x(); go(); };

  // 탭
  const sw = n => {
    t = n;
    cb.classList.toggle('active', n === 'current');
    ub.classList.toggle('active', n === 'upcoming');
    x();
    r();
    go();
  };

  // 이벤트
  nb.onclick = () => { m(1); !s && re(); };
  pb.onclick = () => { m(-1); !s && re(); };
  ab.onclick = () => {
    if (innerWidth > 767) {
      s = !s;
      s ? x() : go();
      u();
    }
  };
  cb.onclick = () => sw('current');
  ub.onclick = () => sw('upcoming');
  c.onmouseenter = () => !s && x();
  c.onmouseleave = () => !s && go();
  onresize = u;
  w.onclick = e => {
    const b = e.target.closest('.book-btn');
    const f = e.target.closest('.info-btn');
    if (b) location.href = `${cfg.res}?movie=${encodeURIComponent(b.dataset.title)}`;
    if (f) location.href = `${cfg.info}?movie=${encodeURIComponent(f.dataset.title)}`;
  };

  // 시작
  r();
  go();
}