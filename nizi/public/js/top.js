$(function() {
  setTimeout(function(){
    $('.start p').fadeIn(1600);
  },500); //0.5秒後にロゴをフェードイン!
  setTimeout(function(){
    $('.start').fadeOut(500);
  },1500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
});


//スライダー設定
$(function(){
$('.your-class').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 100000000000000,
    arrows:true,
    responsive: [{
      breakpoint: 1200,　//width:640px以下になったら
      settings: {
        slidesToShow: 3,//１つのスクロールになる
      }
    },{
      breakpoint: 1000,
      settings: {
        slidesToShow: 2
      }
    },{
      breakpoint: 640,
      settings: {
        slidesToShow: 1
      }
    }]
  });  });

