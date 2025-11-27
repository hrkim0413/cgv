document.addEventListener('DOMContentLoaded', function () {
  mainInit();
})

function mainInit() {
  introduceFn();
  eventFn();
  activityFn();
  theaterImgFn();
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