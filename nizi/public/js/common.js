
$(function() {


// #で始まるアンカーをクリックした場合に処理
$('a[href^="rolling"]').click(function() {
    // スクロールの速度
    var speed = 500; // ミリ秒
    // アンカーの値取得
    var href= jQuery(this).attr("href");
    // 移動先を取得
    var target = jQuery(href == "rolling" || href == "" ? 'html' : href);
    // 移動先を数値で取得
    var position = target.offset().top;
    // スムーススクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
   });


});


