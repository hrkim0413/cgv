# cgv
- 팀프로젝트
- Tag03(김혜련, 신진영, 장서현)

# 일정
25.11.11 ~ 25.11.21 기획 및 와이어프레임, 스토리보드 제작(25.11.21 발표)
25.11.24 ~ 25.11.25 디자인
25.11.26 ~ 25.12.03 개발(25.12.03 발표)

# 페이지명
- 메인                          index.php               > 퍼블 O
- 장바구니                      cart.php                > 퍼블 O / php
- 회원가입                      join.php                > 퍼블 O / php
- 로그인                        login.php               > 퍼블 O / php
- 극장 > 전체극장               theater/search.php      > 퍼블 O / php
- 영화 예매                     reservation/index.php   > 퍼블 O / php
- 이벤트/혜택 > 시사회/무대인사  event/preview.php       > 서현
- 영화 소개                     introduce/index.php     > 진영, 혜련(js)
---------------------------------------------------------------------------------------------------------
- 관리자 > 로그인               admin/login.php         > 퍼블 O / php
- 관리자 > 영화 리스트          admin/movie-list.php    > 퍼블 O / php
- 관리자 > 영화 상세보기        admin/movie-detail.php  > 퍼블 O / php

# 개발규칙
- CSS > class, id 규칙은 케밥케이스 (ex) text-box, title-area
- JavaScript > 변수, 함수 규칙은 카멜케이스 (ex) let textBox, const titleArea

# 폴더
- images
  - header, footer 등 공통 영역 이미지는 해당 폴더에 넣기
  - main > 메인 이미지
  - sub > 서브 이미지

- videos
  - 따로 폴더 없이 모든 페이지의 영상 넣을 예정

- inc
  - include 파일(header, footer 등)

- css
  - base.scss > 변수, 믹스인, 함수
  - common.scss > header, footer 등 공통 영역
  - main.scss > 메인

- js
  - common.js > header, footer 등 공통 영역
  - main.js > 메인

- php
  - php 파일

# 추가 참고사항
 -  vs코드 확장 프로그램 추천
    1. Format HTML in PHP
      : html, php를 같이 사용할때 코드 정리
    2. php cs fixer
      : php만 사용할때 코드 정리
    3. PHP Intelepehense
      : php에서 문법적인 오류가 있을 경우 빨간줄로 표시됨
    => 추가로 설치 후 제가 슬랙에 드린 세팅값으로 setting.json 변경해주셔야 적용됩니다.

# 작업내용
- 11/25
  1. 장바구니