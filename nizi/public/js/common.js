
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

     // 入力できる行数の最大値
  let MAX_LINE_NUM = 10;
 
  // テキストエリアの取得
  let textarea = document.getElementById("message");
 
  // 入力ごとに呼び出されるイベントを設定
  textarea.addEventListener("input", function() {
 
    // 各行を配列の要素に分ける
    let lines = textarea.value.split("\n");
 
    // 入力行数が制限を超えた場合
    if (lines.length > MAX_LINE_NUM) {
 
      var result = "";
 
      for (var i = 0; i < MAX_LINE_NUM; i++) {
        result += lines[i] + "\n";
      }
 
      textarea.value = result;
    }
  }, false);
});


