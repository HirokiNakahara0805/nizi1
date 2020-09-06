$(function() {
  setTimeout(function(){
    $('.start p').fadeIn(1600);
  },500); //0.5秒後にロゴをフェードイン!
  setTimeout(function(){
    $('.start').fadeOut(500);
  },1500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
});


$(function(){
$('.your-class').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 100000000000000,
    arrows:true,
  });

     // #で始まるアンカーをクリックした場合に処理
      $('a[href^="#"]').click(function() {
      // スクロールの速度
      var speed = 500; // ミリ秒
      // アンカーの値取得
      var href= jQuery(this).attr("href");
      // 移動先を取得
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
     });


    });

      