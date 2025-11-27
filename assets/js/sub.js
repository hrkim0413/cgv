document.addEventListener('DOMContentLoaded', function () {
  subInit();
});

function subInit() {
  previewSwitchFn(); // 시사회/무대인사
}

// 서브 페이지의 시사회/무대인사 탭 전환 기능
function previewSwitchFn() {
  const previewBtn = document.querySelector('#preview_btn');
  const greetBtn = document.querySelector('#greet_btn');

  const previewTab = document.querySelector('.previewTab');
  const greetTab = document.querySelector('.greetTab');

  // 시사회 탭을 보이게
  previewTab.style.display = 'block';
  greetTab.style.display = 'none';

  // 버튼에 따라 탭 전환
  previewBtn.addEventListener('change', function () {
    if (previewBtn.checked) {
      previewTab.style.display = 'block';
      greetTab.style.display = 'none';
    }
  });

  greetBtn.addEventListener('change', function () {
    if (greetBtn.checked) {
      greetTab.style.display = 'block';
      previewTab.style.display = 'none';
    }
  });
}