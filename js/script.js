const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


jQuery('.drawer__icon').on('click', function (e) {
    e.preventDefault(); //aタグなどの機能を無効化する

    jQuery('.drawer__icon').toggleClass('is-active');
    jQuery('.drawer__content').toggleClass('is-active');
    jQuery('.drawer__background').toggleClass('is-active');

    return false; //なくてもよい
});

const topSwiper = new Swiper('.swiper', {
    loop: true,
    effect: "fade", // フェード切り替え
    // 自動再生
    autoplay: {
        delay: 4000, // 4秒後に次のスライド
        disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
    },
    speed: 2000, // 2秒かけてフェード
    // ページネーション
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

